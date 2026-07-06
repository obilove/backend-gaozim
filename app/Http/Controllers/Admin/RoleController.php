<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        // 1. Base Query for Roles with Spatie eager-loading counts
        $query = Role::withCount(['users', 'permissions']);

        // 2. Search Filter
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // 3. Member Count Filter
        if ($request->filled('member_count')) {
            if ($request->member_count === '0-5') {
                $query->has('users', '<=', 5);
            } elseif ($request->member_count === '6-15') {
                $query->has('users', '>', 5)->has('users', '<=', 15);
            } elseif ($request->member_count === '16+') {
                $query->has('users', '>', 15);
            }
        }

        // Fetch paginated roles
        $roles = $query->latest()->paginate(10)->withQueryString();

        // 4. Calculate Dynamic Metrics
        $totalRolesCount = Role::count();
        $totalUsersWithRoles = User::role(Role::all())->count();
        $totalUsers = User::count();
        $userAssignmentPercentage = $totalUsers > 0 ? round(($totalUsersWithRoles / $totalUsers) * 100, 1) : 0;
        
        // Count roles that possess all permissions (Admin Roles)
        $totalPermissionsCount = Permission::count();
        $adminRolesCount = Role::has('permissions', '=', $totalPermissionsCount)->count();
        $adminRolesPercentage = $totalRolesCount > 0 ? round(($adminRolesCount / $totalRolesCount) * 100, 1) : 0;

        // Fetch all permissions for use in modals or matrices
        $permissions = Permission::all();

        return view('admin.roles.index', compact(
            'roles',
            'permissions',
            'totalRolesCount',
            'totalUsersWithRoles',
            'userAssignmentPercentage',
            'adminRolesCount',
            'adminRolesPercentage'
        ));
    }
}
