<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
      /**
     * Display all warehouses
     */
    public function index()
    {
        $warehouses = Warehouse::latest()->paginate(10);

        return view('admin.warehouses.index', compact('warehouses'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.warehouses.create');
    }

    /**
     * Store warehouse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:warehouses,email',
            'phone' => 'required',
            'password' => 'required|min:6',
        ]);

        Warehouse::create([
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
            ->route('admin.warehouses.index')
            ->with('success', 'Warehouse created successfully');
    }

    /**
     * Show single warehouse
     */
    public function show($id)
    {
        $warehouse = Warehouse::findOrFail($id);

        return view('admin.warehouses.show', compact('warehouse'));
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $warehouse = Warehouse::findOrFail($id);

        return view('admin.warehouses.edit', compact('warehouse'));
    }

    /**
     * Update warehouse
     */
    public function update(Request $request, $id)
    {
        $warehouse = Warehouse::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:warehouses,email,' . $warehouse->id,
            'phone' => 'required',
        ]);

        $warehouse->update([
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
            $warehouse->update([
                'password' => Hash::make($request->password)
            ]);
        }

        return redirect()
            ->route('admin.warehouses.index')
            ->with('success', 'Warehouse updated successfully');
    }

    /**
     * Delete warehouse
     */
    public function destroy($id)
    {
        $warehouse = Warehouse::findOrFail($id);

        $warehouse->delete();

        return redirect()
            ->route('admin.warehouses.index')
            ->with('success', 'Warehouse deleted successfully');
    }


    /**
     * Warehouse order
     */
    public function inventor($id)
    {
        $inventors = Order::where('warehouse_id', $id)->paginate(10);

        return view('admin.warehouses.inventor', compact('inventors'));
    }
}
