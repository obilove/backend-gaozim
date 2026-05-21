<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
    /**
     * Display all permissions
     */
    public function index()
    {
        $permissions = Permission::latest()->paginate(20);

        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store permission
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:255|unique:permissions,name',

            'guard_name' => 'required|string|max:255',
        ]);

        Permission::create([

            'name' => Str::slug($request->name),

            'guard_name' => $request->guard_name,
        ]);

        return redirect()
            ->route('admin.permissions.index')
            ->with('success', 'Permission created successfully');
    }

    /**
     * Show single permission
     */
    public function show($id)
    {
        $permission = Permission::findOrFail($id);

        return view('admin.permissions.show', compact('permission'));
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);

        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update permission
     */
    public function update(Request $request, $id)
    {
        $permission = Permission::findOrFail($id);

        $request->validate([

            'name' => 'required|string|max:255|unique:permissions,name,' . $permission->id,

            'guard_name' => 'required|string|max:255',
        ]);

        $permission->update([

            'name' => Str::slug($request->name),

            'guard_name' => $request->guard_name,
        ]);

        return redirect()
            ->route('admin.permissions.index')
            ->with('success', 'Permission updated successfully');
    }

    /**
     * Delete permission
     */
    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);

        $permission->delete();

        return redirect()
            ->route('admin.permissions.index')
            ->with('success', 'Permission deleted successfully');
    }
}