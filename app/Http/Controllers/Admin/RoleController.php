<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    /**
     * Display all roles
     */
    public function index()
    {
        $roles = Role::with('permissions')
            ->latest()
            ->paginate(20);

        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store role
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:255|unique:roles,name',

            'guard_name' => 'required|string|max:255',

            'permissions' => 'nullable|array',
        ]);

        $role = Role::create([

            'name' => Str::slug($request->name),

            'guard_name' => $request->guard_name,
        ]);

        /**
         * Assign permissions
         */
        if ($request->permissions) {

            $role->syncPermissions($request->permissions);
        }

        return redirect()
            ->route('admin.roles.index')
            ->with('success', 'Role created successfully');
    }

    /**
     * Show single role
     */
    public function show($id)
    {
        $role = Role::with('permissions')
            ->findOrFail($id);

        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);

        $permissions = Permission::all();

        return view('admin.roles.edit', compact(
            'role',
            'permissions'
        ));
    }

    /**
     * Update role
     */
    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([

            'name' => 'required|string|max:255|unique:roles,name,' . $role->id,

            'guard_name' => 'required|string|max:255',

            'permissions' => 'nullable|array',
        ]);

        $role->update([

            'name' => Str::slug($request->name),

            'guard_name' => $request->guard_name,
        ]);

        /**
         * Update permissions
         */
        if ($request->permissions) {

            $role->syncPermissions($request->permissions);

        } else {

            $role->syncPermissions([]);
        }

        return redirect()
            ->route('admin.roles.index')
            ->with('success', 'Role updated successfully');
    }

    /**
     * Delete role
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        return redirect()
            ->route('admin.roles.index')
            ->with('success', 'Role deleted successfully');
    }
}