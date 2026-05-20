<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
    /**
     * Display all carriers
     */
    public function index()
    {
        $carriers = Carrier::latest()->paginate(20);

        return view('admin.carriers.index', compact('carriers'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.carriers.create');
    }

    /**
     * Store carrier
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|email|unique:carriers,email',

            'phone' => 'required|string|max:255',

            'address' => 'nullable|string',

            'status' => 'required|in:active,inactive',

            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/carriers'), $imageName);
        }

        Carrier::create([

            'name' => $request->name,

            'email' => $request->email,

            'phone' => $request->phone,

            'address' => $request->address,

            'status' => $request->status,

            'image' => $imageName,
        ]);

        return redirect()
            ->route('admin.carriers.index')
            ->with('success', 'Carrier created successfully');
    }

    /**
     * Show single carrier
     */
    public function show($id)
    {
        $carrier = Carrier::findOrFail($id);

        return view('admin.carriers.show', compact('carrier'));
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $carrier = Carrier::findOrFail($id);

        return view('admin.carriers.edit', compact('carrier'));
    }

    /**
     * Update carrier
     */
    public function update(Request $request, $id)
    {
        $carrier = Carrier::findOrFail($id);

        $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|email|unique:carriers,email,' . $carrier->id,

            'phone' => 'required|string|max:255',

            'address' => 'nullable|string',

            'status' => 'required|in:active,inactive',

            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageName = $carrier->image;

        if ($request->hasFile('image')) {

            if ($carrier->image &&
                file_exists(public_path('uploads/carriers/' . $carrier->image))) {

                unlink(public_path('uploads/carriers/' . $carrier->image));
            }

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/carriers'), $imageName);
        }

        $carrier->update([

            'name' => $request->name,

            'email' => $request->email,

            'phone' => $request->phone,

            'address' => $request->address,

            'status' => $request->status,

            'image' => $imageName,
        ]);

        return redirect()
            ->route('admin.carriers.index')
            ->with('success', 'Carrier updated successfully');
    }

    /**
     * Delete carrier
     */
    public function destroy($id)
    {
        $carrier = Carrier::findOrFail($id);

        if ($carrier->image &&
            file_exists(public_path('uploads/carriers/' . $carrier->image))) {

            unlink(public_path('uploads/carriers/' . $carrier->image));
        }

        $carrier->delete();

        return redirect()
            ->route('admin.carriers.index')
            ->with('success', 'Carrier deleted successfully');
    }
}