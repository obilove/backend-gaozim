@extends('layouts.app')

@section('content')
    <main class="p-3 p-lg-4">
        <!-- Section Header -->
        <div class="section-header d-flex flex-wrap align-items-start justify-content-between gap-3 mb-3">
            <div>
                <h1 class="h2 mb-1">Roles & Permissions</h1>
                <p class="text-muted">Manage team access levels, permission controls, and user assignments across the Gaozim
                    platform.</p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newRoleModal">
                    <i class="bi bi-plus-lg me-1"></i> New Role
                </button>
                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bulkActionsModal">
                    <i class="bi bi-check-square me-1"></i> Bulk Actions
                </button>
                <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#permissionMatrixModal">
                    <i class="bi bi-grid me-1"></i> Permission Matrix
                </button>
                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-download me-1"></i> Export
                </button>
            </div>
        </div>

        <!-- Filter Form Submit wrapper -->
        <form action="{{-- {{ route('roles-permissions.index') }} --}}" method="GET">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="row g-3 align-items-end">
                        <div class="col-12 col-md-3">
                            <label class="form-label small fw-semibold">Status</label>
                            <select class="form-select form-select-sm" name="status" onchange="this.form.submit()">
                                <option value="" selected>All statuses</option>
                                <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive
                                </option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3">
                            <label class="form-label small fw-semibold">Access Level</label>
                            <select class="form-select form-select-sm" name="access_level" onchange="this.form.submit()">
                                <option value="" selected>All access levels</option>
                                <option value="full" {{ request('access_level') == 'full' ? 'selected' : '' }}>Full Access
                                </option>
                                <option value="limited" {{ request('access_level') == 'limited' ? 'selected' : '' }}>Limited
                                </option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3">
                            <label class="form-label small fw-semibold">Member Count</label>
                            <select class="form-select form-select-sm" name="member_count" onchange="this.form.submit()">
                                <option value="" selected>All sizes</option>
                                <option value="0-5" {{ request('member_count') == '0-5' ? 'selected' : '' }}>0-5 members
                                </option>
                                <option value="6-15" {{ request('member_count') == '6-15' ? 'selected' : '' }}>6-15
                                    members</option>
                                <option value="16+" {{ request('member_count') == '16+' ? 'selected' : '' }}>16+ members
                                </option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3">
                            <label class="form-label small fw-semibold">Search</label>
                            <div class="position-relative">
                                <i class="bi bi-search position-absolute text-muted"
                                    style="top: 50%; left: 0.9rem; transform: translateY(-50%);"></i>
                                <input type="search" class="form-control form-control-sm ps-5" name="search"
                                    value="{{ request('search') }}" placeholder="Search role name..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Dynamic Metrics Cards -->
        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Total Roles</p>
                                <h3 class="mb-0">{{ $totalRolesCount }}</h3>
                            </div>
                            <div class="metric-badge bg-primary-soft text-primary">
                                <i class="bi bi-shield-check"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Defined in system</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Active Users</p>
                                <h3 class="mb-0">{{ $totalUsersWithRoles }}</h3>
                            </div>
                            <div class="metric-badge bg-info-soft text-info">
                                <i class="bi bi-people"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Assigned to roles</p>
                        <div class="mt-2">
                            <span class="badge bg-info-soft text-info">{{ $userAssignmentPercentage }}%</span>
                            <small class="text-muted ms-1">of total users</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Admin Roles</p>
                                <h3 class="mb-0">{{ $adminRolesCount }}</h3>
                            </div>
                            <div class="metric-badge bg-success-soft text-success">
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Full access roles</p>
                        <div class="mt-2">
                            <span class="badge bg-success-soft text-success">{{ $adminRolesPercentage }}%</span>
                            <small class="text-muted ms-1">of all roles</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Total Permissions</p>
                                <h3 class="mb-0">{{ $permissions->count() }}</h3>
                            </div>
                            <div class="metric-badge bg-warning-soft text-warning">
                                <i class="bi bi-key"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">System capabilities mapped</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Role Data Output Table -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="table-responsive">
                <table class="table align-middle card-table mb-0">
                    <thead>
                        <tr>
                            <th>Role Name</th>
                            <th>Assigned Permissions</th>
                            <th>Total Members</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($roles as $role)
                            <tr>
                                <td><span class="fw-semibold text-heading">{{ ucfirst($role->name) }}</span></td>
                                <td>
                                    @if ($role->name === 'admin')
                                        <span class="badge bg-success-soft text-success">All Permissions (*)</span>
                                    @else
                                        <span class="text-muted small">{{ $role->permissions_count }} permission(s)</span>
                                    @endif
                                </td>
                                <td><span class="badge bg-light text-dark">{{ $role->users_count }}</span></td>
                                <td class="text-end">
                                    <button class="btn btn-light btn-xs text-primary me-1" title="Edit Role">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-light btn-xs text-danger" title="Delete Role">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">No roles found matching criteria.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if ($roles->hasPages())
                <div class="card-footer bg-white border-0 py-3">
                    {{ $roles->links() }}
                </div>
            @endif
        </div>

        <!-- Tab Section Layout fix -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body pb-2">
                <ul class="nav nav-tabs border-0" id="roleTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="roles-tab" data-bs-toggle="tab" data-bs-target="#roles-pane"
                            type="button" role="tab">Roles List</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="permissions-tab" data-bs-toggle="tab"
                            data-bs-target="#permissions-pane" type="button" role="tab">All System
                            Permissions</button>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection
