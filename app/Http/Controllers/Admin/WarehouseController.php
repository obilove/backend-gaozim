<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display all warehouses
     */
    public function index()
    {
        $warehouses = Warehouse::latest()->paginate(10);
        $totalWarehouses = Warehouse::count();
        $activeWarehouses = Warehouse::where('status', 'active')->count();
        $inactiveWarehouses = Warehouse::where('status', 'inactive')->count();

        return view('admin.warehouses.index', compact('warehouses', 'totalWarehouses', 'activeWarehouses', 'inactiveWarehouses'));
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
            'code' => 'nullable|string|max:255',
            'business' => 'nullable|string|max:255',
            'warehouse_capacity' => 'nullable|string|max:255',
            'username' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:1024',
            'location' => 'nullable|string|max:255',
            'badge' => 'nullable|string|max:255',
            'status' => 'nullable|in:active,inactive',
        ]);

        Warehouse::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'code' => $request->code,
            'status' => $request->status ?? 'active',
            'business' => $request->business,
            'warehouse_capacity' => $request->warehouse_capacity,
            'username' => $request->username,
            'address' => $request->address,
            'location' => $request->location,
            'badge' => $request->badge,
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
            'code' => 'nullable|string|max:255',
            'business' => 'nullable|string|max:255',
            'warehouse_capacity' => 'nullable|string|max:255',
            'username' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:1024',
            'location' => 'nullable|string|max:255',
            'badge' => 'nullable|string|max:255',
            'status' => 'nullable|in:active,inactive',
        ]);

        $warehouse->update([
            'name' => $request->name,
            'code' => $request->code,
            'status' => $request->status ?? $warehouse->status,
            'business' => $request->business,
            'warehouse_capacity' => $request->warehouse_capacity,
            'username' => $request->username,
            'address' => $request->address,
            'location' => $request->location,
            'badge' => $request->badge,
        ]);

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
