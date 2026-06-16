<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    /**
     * Display all vendors
     */
    public function index()
    {
        $vendors = Vendor::latest()->paginate(10);
        $totalVendors = Vendor::count();
        $activeVendors = Vendor::where('status', 'active')->count();
        $inactiveVendors = Vendor::where('status', 'inactive')->count();

        return view('admin.vendors.index', compact(
            'vendors',
            'totalVendors',
            'activeVendors',
            'inactiveVendors'
        ));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.vendors.create');
    }

    /**
     * Store vendor
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:vendors,email',
            'phone' => 'required',
            'password' => 'required|min:6',
        ]);

        Vendor::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),

            'status' => $request->status ?? 'active',
            'user_type' => $request->user_type ?? 'consumer',
            'account_type' => $request->account_type ?? 'Personal',

            'business' => $request->business,
            'delivery_capacity' => $request->delivery_capacity,
            'ave_size' => $request->ave_size,
            'item_cat' => $request->item_cat,
            'biz_cat' => $request->biz_cat,
            'address' => $request->address,
            'location' => $request->location,
            'username' => $request->username,
        ]);

        return redirect()
            ->route('admin.vendors.index')
            ->with('success', 'Vendor created successfully');
    }

    /**
     * Show single vendor
     */
    public function show($id)
    {
        $vendor = Vendor::findOrFail($id);

        return view('admin.vendors.show', compact('vendor'));
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $vendor = Vendor::findOrFail($id);

        return view('admin.vendors.edit', compact('vendor'));
    }

    /**
     * Update vendor
     */
    public function update(Request $request, $id)
    {
        $vendor = Vendor::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:vendors,email,'.$vendor->id,
            'phone' => 'required',
        ]);

        $vendor->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,

            'status' => $request->status,
            'user_type' => $request->user_type,
            'account_type' => $request->account_type,

            'business' => $request->business,
            'delivery_capacity' => $request->delivery_capacity,
            'ave_size' => $request->ave_size,
            'item_cat' => $request->item_cat,
            'biz_cat' => $request->biz_cat,
            'address' => $request->address,
            'location' => $request->location,
            'username' => $request->username,
        ]);

        if ($request->filled('password')) {
            $vendor->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()
            ->route('admin.vendors.index')
            ->with('success', 'Vendor updated successfully');
    }

    /**
     * Delete vendor
     */
    public function destroy($id)
    {
        $vendor = Vendor::findOrFail($id);

        $vendor->delete();

        return redirect()
            ->route('admin.vendors.index')
            ->with('success', 'Vendor deleted successfully');
    }
}
