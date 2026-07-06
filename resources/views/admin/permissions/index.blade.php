@extends('layouts.app')

@section('content')
    <main class="p-3 p-lg-4">
        <div class="section-header d-flex flex-wrap align-items-start justify-content-between gap-3 mb-3">
            <div>
                <h1 class="h2 mb-1">Roles & Permissions</h1>
                <p class="text-muted">Manage team access levels, permission controls, and user assignments across
                    the Gaozim platform.</p>
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

        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <div class="row g-3 align-items-end">
                    <div class="col-12 col-md-3">
                        <label class="form-label small fw-semibold">Status</label>
                        <select class="form-select form-select-sm">
                            <option selected>All statuses</option>
                            <option>Active</option>
                            <option>Inactive</option>
                            <option>Pending Review</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="form-label small fw-semibold">Access Level</label>
                        <select class="form-select form-select-sm">
                            <option selected>All access levels</option>
                            <option>Full Access</option>
                            <option>Limited</option>
                            <option>Read Only</option>
                            <option>Custom</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="form-label small fw-semibold">Member Count</label>
                        <select class="form-select form-select-sm">
                            <option selected>All sizes</option>
                            <option>0-5 members</option>
                            <option>6-15 members</option>
                            <option>16+ members</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="form-label small fw-semibold">Search</label>
                        <div class="position-relative">
                            <i class="bi bi-search position-absolute text-muted"
                                style="top: 50%; left: 0.9rem; transform: translateY(-50%);"></i>
                            <input type="search" class="form-control form-control-sm ps-5"
                                placeholder="Search role name or description" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Metrics Cards -->
        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Total Roles</p>
                                <h3 class="mb-0">8</h3>
                            </div>
                            <div class="metric-badge bg-primary-soft text-primary">
                                <i class="bi bi-shield-check"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Defined in system</p>
                        <div class="mt-2">
                            <span class="badge bg-success-soft text-success">+2</span>
                            <small class="text-muted ms-1">this quarter</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Active Users</p>
                                <h3 class="mb-0">47</h3>
                            </div>
                            <div class="metric-badge bg-info-soft text-info">
                                <i class="bi bi-people"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Assigned to roles</p>
                        <div class="mt-2">
                            <span class="badge bg-info-soft text-info">94%</span>
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
                                <h3 class="mb-0">3</h3>
                            </div>
                            <div class="metric-badge bg-success-soft text-success">
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Full access roles</p>
                        <div class="mt-2">
                            <span class="badge bg-success-soft text-success">37.5%</span>
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
                                <p class="text-muted mb-1">Pending Reviews</p>
                                <h3 class="mb-0">2</h3>
                            </div>
                            <div class="metric-badge bg-warning-soft text-warning">
                                <i class="bi bi-hourglass-split"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Role changes awaiting approval</p>
                        <div class="mt-2">
                            <span class="badge bg-warning-soft text-warning">25%</span>
                            <small class="text-muted ms-1">review rate</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="row g-3 mb-4">
            <div class="col-12 col-lg-6">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <h5 class="card-title">Role Distribution</h5>
                        <p class="text-muted small mb-4">Current breakdown by role type</p>
                        <div class="row text-center gy-3">
                            <div class="col-6">
                                <div class="position-relative">
                                    <svg width="120" height="120" class="mx-auto">
                                        <circle cx="60" cy="60" r="50" fill="none" stroke="#e2e8f0"
                                            stroke-width="8" />
                                        <circle cx="60" cy="60" r="50" fill="none" stroke="#162e1c"
                                            stroke-width="8" stroke-dasharray="314" stroke-dashoffset="94"
                                            stroke-linecap="round" />
                                    </svg>
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <div class="h4 mb-0">38%</div>
                                        <small class="text-muted">Admin</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="badge bg-primary me-2" style="width: 12px; height: 12px;"></div>
                                        <span class="small">Administrator (3)</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="badge bg-success me-2" style="width: 12px; height: 12px;"></div>
                                        <span class="small">Dispatcher (5)</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="badge bg-info me-2" style="width: 12px; height: 12px;"></div>
                                        <span class="small">Viewer (12)</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-secondary me-2" style="width: 12px; height: 12px;">
                                        </div>
                                        <span class="small">Other (8)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <h5 class="card-title">Permission Usage</h5>
                        <p class="text-muted small mb-4">Most frequently used permissions</p>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small text-muted mb-1">
                                <span>View shipments</span><span>95% of roles</span>
                            </div>
                            <div class="progress progress-track mb-3">
                                <div class="progress-bar bg-primary" style="width: 95%;"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small text-muted mb-1">
                                <span>Edit orders</span><span>62% of roles</span>
                            </div>
                            <div class="progress progress-track mb-3">
                                <div class="progress-bar bg-info" style="width: 62%;"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small text-muted mb-1">
                                <span>Manage users</span><span>38% of roles</span>
                            </div>
                            <div class="progress progress-track mb-3">
                                <div class="progress-bar bg-success" style="width: 38%;"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small text-muted mb-1">
                                <span>Access settings</span><span>25% of roles</span>
                            </div>
                            <div class="progress progress-track">
                                <div class="progress-bar bg-warning" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Permission Categories Overview -->
        <div class="row g-3 mb-4">
            <div class="col-12">
                <div class="card card-soft">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Permission Categories</h5>
                        <p class="text-muted small mb-4">Organized permission groups for better access control</p>
                        <div class="row g-3">
                            <div class="col-md-3">
                                <div class="d-flex align-items-center p-3 border rounded">
                                    <div class="metric-badge bg-primary-soft text-primary me-3">
                                        <i class="bi bi-speedometer2"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Dashboard</h6>
                                        <small class="text-muted">Overview & analytics access</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex align-items-center p-3 border rounded">
                                    <div class="metric-badge bg-info-soft text-info me-3">
                                        <i class="bi bi-truck"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Shipments</h6>
                                        <small class="text-muted">Shipment management & tracking</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex align-items-center p-3 border rounded">
                                    <div class="metric-badge bg-success-soft text-success me-3">
                                        <i class="bi bi-card-checklist"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Orders</h6>
                                        <small class="text-muted">Order processing & fulfillment</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex align-items-center p-3 border rounded">
                                    <div class="metric-badge bg-warning-soft text-warning me-3">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Users</h6>
                                        <small class="text-muted">User management & roles</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body pb-2">
                <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-all-roles" data-bs-toggle="tab"
                            data-bs-target="#roles-all" type="button" role="tab" aria-controls="roles-all"
                            aria-selected="true">All roles</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-active" data-bs-toggle="tab" data-bs-target="#roles-active"
                            type="button" role="tab" aria-controls="roles-active"
                            aria-selected="false">Active</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-pending" data-bs-toggle="tab" data-bs-target="#roles-pending"
                            type="button" role="tab" aria-controls="roles-pending" aria-selected="false">Pending
                            Review</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-admin" data-bs-toggle="tab" data-bs-target="#roles-admin"
                            type="button" role="tab" aria-controls="roles-admin"
                            aria-selected="false">Admin</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-limited" data-bs-toggle="tab" data-bs-target="#roles-limited"
                            type="button" role="tab" aria-controls="roles-limited"
                            aria-selected="false">Limited</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="roles-all" role="tabpanel" aria-labelledby="tab-all-roles">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <h5 class="card-title mb-1">Role Details</h5>
                            <p class="text-muted small mb-0">Complete role information and permission controls</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-columns me-1"></i> Columns
                            </button>
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-sort-down me-1"></i> Sort
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-surface-strong">
                                <tr>
                                    <th class="py-3 px-3 text-start">
                                        <input type="checkbox" class="form-check-input" id="selectAll">
                                    </th>
                                    <th class="py-3 px-3 text-start text-muted small">Role Name</th>
                                    <th class="py-3 px-3 text-start text-muted small">Description</th>
                                    <th class="py-3 px-3 text-start text-muted small">Members</th>
                                    <th class="py-3 px-3 text-start text-muted small">Access Level</th>
                                    <th class="py-3 px-3 text-start text-muted small">Status</th>
                                    <th class="py-3 px-3 text-start text-muted small">Created</th>
                                    <th class="py-3 px-3 text-start text-muted small">Last Modified</th>
                                    <th class="py-3 px-3 text-start text-muted small">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="metric-badge bg-danger-soft text-danger me-2">
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Administrator</div>
                                                <small class="text-muted">System administrator</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Full system access and configuration</td>
                                    <td class="py-3 px-3 align-middle">
                                        <span class="badge bg-primary">3 users</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-danger-soft text-danger">Full
                                            Access</span></td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-success">Active</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Jan 15, 2024</td>
                                    <td class="py-3 px-3 align-middle">May 5, 2024</td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#viewRoleModal">View details</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editRoleModal">Edit role</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#assignUsersModal">Assign users</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#duplicateRoleModal">Duplicate role</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete role</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="metric-badge bg-info-soft text-info me-2">
                                                <i class="bi bi-truck"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Dispatcher</div>
                                                <small class="text-muted">Shipment coordinator</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Manage shipments, routes, and delivery
                                        coordination</td>
                                    <td class="py-3 px-3 align-middle">
                                        <span class="badge bg-info">5 users</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle"><span
                                            class="badge bg-warning-soft text-warning">Limited</span></td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-success">Active</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Feb 20, 2024</td>
                                    <td class="py-3 px-3 align-middle">May 3, 2024</td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#viewRoleModal">View details</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editRoleModal">Edit role</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#assignUsersModal">Assign users</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#duplicateRoleModal">Duplicate role</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete role</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="metric-badge bg-success-soft text-success me-2">
                                                <i class="bi bi-card-checklist"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Order Manager</div>
                                                <small class="text-muted">Order processing specialist</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Handle order fulfillment, customer service,
                                        and
                                        returns</td>
                                    <td class="py-3 px-3 align-middle">
                                        <span class="badge bg-success">8 users</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle"><span
                                            class="badge bg-warning-soft text-warning">Limited</span></td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-success">Active</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Mar 10, 2024</td>
                                    <td class="py-3 px-3 align-middle">May 1, 2024</td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#viewRoleModal">View details</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editRoleModal">Edit role</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#assignUsersModal">Assign users</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#duplicateRoleModal">Duplicate role</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete role</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="metric-badge bg-secondary me-2">
                                                <i class="bi bi-eye"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Viewer</div>
                                                <small class="text-muted">Read-only access</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-3 align-middle">View-only access to shipments, orders, and
                                        reports</td>
                                    <td class="py-3 px-3 align-middle">
                                        <span class="badge bg-secondary">12 users</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-info-soft text-info">Read
                                            Only</span></td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-success">Active</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Jan 5, 2024</td>
                                    <td class="py-3 px-3 align-middle">Apr 28, 2024</td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#viewRoleModal">View details</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editRoleModal">Edit role</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#assignUsersModal">Assign users</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#duplicateRoleModal">Duplicate role</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete role</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="metric-badge bg-warning-soft text-warning me-2">
                                                <i class="bi bi-building"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Warehouse Manager</div>
                                                <small class="text-muted">Inventory specialist</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Manage warehouse inventory, stock levels, and
                                        restocking</td>
                                    <td class="py-3 px-3 align-middle">
                                        <span class="badge bg-warning">4 users</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle"><span
                                            class="badge bg-warning-soft text-warning">Limited</span></td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-warning text-dark">Pending
                                            Review</span></td>
                                    <td class="py-3 px-3 align-middle">Apr 15, 2024</td>
                                    <td class="py-3 px-3 align-middle">May 8, 2024</td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#viewRoleModal">View details</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editRoleModal">Edit role</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#assignUsersModal">Assign users</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#duplicateRoleModal">Duplicate role</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete role</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Additional Tab Panes -->
                <div class="tab-pane fade" id="roles-active" role="tabpanel" aria-labelledby="tab-active">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <h5 class="card-title mb-1">Active Roles</h5>
                            <p class="text-muted small mb-0">Currently active roles in the system</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-columns me-1"></i> Columns
                            </button>
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-sort-down me-1"></i> Sort
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-surface-strong">
                                <tr>
                                    <th class="py-3 px-3 text-start">
                                        <input type="checkbox" class="form-check-input">
                                    </th>
                                    <th class="py-3 px-3 text-start text-muted small">Role Name</th>
                                    <th class="py-3 px-3 text-start text-muted small">Description</th>
                                    <th class="py-3 px-3 text-start text-muted small">Members</th>
                                    <th class="py-3 px-3 text-start text-muted small">Access Level</th>
                                    <th class="py-3 px-3 text-start text-muted small">Status</th>
                                    <th class="py-3 px-3 text-start text-muted small">Created</th>
                                    <th class="py-3 px-3 text-start text-muted small">Last Modified</th>
                                    <th class="py-3 px-3 text-start text-muted small">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="metric-badge bg-danger-soft text-danger me-2">
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Administrator</div>
                                                <small class="text-muted">System administrator</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Full system access and configuration</td>
                                    <td class="py-3 px-3 align-middle">
                                        <span class="badge bg-primary">3 users</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-danger-soft text-danger">Full
                                            Access</span></td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-success">Active</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Jan 15, 2024</td>
                                    <td class="py-3 px-3 align-middle">May 5, 2024</td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#viewRoleModal">View details</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editRoleModal">Edit role</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#assignUsersModal">Assign users</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#duplicateRoleModal">Duplicate role</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete role</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="roles-pending" role="tabpanel" aria-labelledby="tab-pending">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <h5 class="card-title mb-1">Pending Review</h5>
                            <p class="text-muted small mb-0">Roles awaiting approval or review</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-columns me-1"></i> Columns
                            </button>
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-sort-down me-1"></i> Sort
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-surface-strong">
                                <tr>
                                    <th class="py-3 px-3 text-start">
                                        <input type="checkbox" class="form-check-input">
                                    </th>
                                    <th class="py-3 px-3 text-start text-muted small">Role Name</th>
                                    <th class="py-3 px-3 text-start text-muted small">Description</th>
                                    <th class="py-3 px-3 text-start text-muted small">Members</th>
                                    <th class="py-3 px-3 text-start text-muted small">Access Level</th>
                                    <th class="py-3 px-3 text-start text-muted small">Status</th>
                                    <th class="py-3 px-3 text-start text-muted small">Created</th>
                                    <th class="py-3 px-3 text-start text-muted small">Last Modified</th>
                                    <th class="py-3 px-3 text-start text-muted small">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="metric-badge bg-warning-soft text-warning me-2">
                                                <i class="bi bi-building"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Warehouse Manager</div>
                                                <small class="text-muted">Inventory specialist</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Manage warehouse inventory, stock levels, and
                                        restocking</td>
                                    <td class="py-3 px-3 align-middle">
                                        <span class="badge bg-warning">4 users</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle"><span
                                            class="badge bg-warning-soft text-warning">Limited</span></td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-warning text-dark">Pending
                                            Review</span></td>
                                    <td class="py-3 px-3 align-middle">Apr 15, 2024</td>
                                    <td class="py-3 px-3 align-middle">May 8, 2024</td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#viewRoleModal">View details</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editRoleModal">Edit role</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#assignUsersModal">Assign users</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#duplicateRoleModal">Duplicate role</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete role</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="roles-admin" role="tabpanel" aria-labelledby="tab-admin">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <h5 class="card-title mb-1">Admin Roles</h5>
                            <p class="text-muted small mb-0">Roles with full system access</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-columns me-1"></i> Columns
                            </button>
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-sort-down me-1"></i> Sort
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-surface-strong">
                                <tr>
                                    <th class="py-3 px-3 text-start">
                                        <input type="checkbox" class="form-check-input">
                                    </th>
                                    <th class="py-3 px-3 text-start text-muted small">Role Name</th>
                                    <th class="py-3 px-3 text-start text-muted small">Description</th>
                                    <th class="py-3 px-3 text-start text-muted small">Members</th>
                                    <th class="py-3 px-3 text-start text-muted small">Access Level</th>
                                    <th class="py-3 px-3 text-start text-muted small">Status</th>
                                    <th class="py-3 px-3 text-start text-muted small">Created</th>
                                    <th class="py-3 px-3 text-start text-muted small">Last Modified</th>
                                    <th class="py-3 px-3 text-start text-muted small">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="metric-badge bg-danger-soft text-danger me-2">
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Administrator</div>
                                                <small class="text-muted">System administrator</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Full system access and configuration</td>
                                    <td class="py-3 px-3 align-middle">
                                        <span class="badge bg-primary">3 users</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-danger-soft text-danger">Full
                                            Access</span></td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-success">Active</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Jan 15, 2024</td>
                                    <td class="py-3 px-3 align-middle">May 5, 2024</td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#viewRoleModal">View details</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editRoleModal">Edit role</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#assignUsersModal">Assign users</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#duplicateRoleModal">Duplicate role</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete role</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="roles-limited" role="tabpanel" aria-labelledby="tab-limited">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <h5 class="card-title mb-1">Limited Access Roles</h5>
                            <p class="text-muted small mb-0">Roles with restricted permissions</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-columns me-1"></i> Columns
                            </button>
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-sort-down me-1"></i> Sort
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-surface-strong">
                                <tr>
                                    <th class="py-3 px-3 text-start">
                                        <input type="checkbox" class="form-check-input">
                                    </th>
                                    <th class="py-3 px-3 text-start text-muted small">Role Name</th>
                                    <th class="py-3 px-3 text-start text-muted small">Description</th>
                                    <th class="py-3 px-3 text-start text-muted small">Members</th>
                                    <th class="py-3 px-3 text-start text-muted small">Access Level</th>
                                    <th class="py-3 px-3 text-start text-muted small">Status</th>
                                    <th class="py-3 px-3 text-start text-muted small">Created</th>
                                    <th class="py-3 px-3 text-start text-muted small">Last Modified</th>
                                    <th class="py-3 px-3 text-start text-muted small">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="metric-badge bg-info-soft text-info me-2">
                                                <i class="bi bi-truck"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Dispatcher</div>
                                                <small class="text-muted">Shipment coordinator</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Manage shipments, routes, and delivery
                                        coordination</td>
                                    <td class="py-3 px-3 align-middle">
                                        <span class="badge bg-info">5 users</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle"><span
                                            class="badge bg-warning-soft text-warning">Limited</span></td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-success">Active</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle">Feb 20, 2024</td>
                                    <td class="py-3 px-3 align-middle">May 3, 2024</td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#viewRoleModal">View details</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editRoleModal">Edit role</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#assignUsersModal">Assign users</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#duplicateRoleModal">Duplicate role</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete role</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-3">
                    <div class="text-muted small">Showing 1 to 8 of 8 results</div>
                    <nav aria-label="Roles pagination">
                        <ul class="pagination pagination-sm mb-0 pagination-primary">
                            <li class="page-item disabled"><a class="page-link" href="#"
                                    tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Modals -->
        <div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newRoleModalLabel">Create new role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Role name</label>
                                    <input type="text" class="form-control" placeholder="e.g., Warehouse Manager" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Access level</label>
                                    <select class="form-select">
                                        <option>Read Only</option>
                                        <option>Limited</option>
                                        <option>Full Access</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Describe the role responsibilities and scope"></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Permissions</label>
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="perm1">
                                                <label class="form-check-label" for="perm1">View
                                                    shipments</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="perm2">
                                                <label class="form-check-label" for="perm2">Edit orders</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="perm3">
                                                <label class="form-check-label" for="perm3">Manage users</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="perm4">
                                                <label class="form-check-label" for="perm4">Access
                                                    settings</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Create role</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="viewRoleModal" tabindex="-1" aria-labelledby="viewRoleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="viewRoleModalLabel">Role details</h5>
                            <p class="text-muted small mb-0">Review role permissions and assigned users.</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-4">
                            <div class="col-lg-5">
                                <div class="card card-soft h-100">
                                    <div class="card-body">
                                        <p class="text-muted small mb-1">Role Name</p>
                                        <p class="fw-semibold mb-3">Administrator</p>
                                        <p class="text-muted small mb-1">Access Level</p>
                                        <p class="fw-semibold mb-3">Full Access</p>
                                        <p class="text-muted small mb-1">Members</p>
                                        <p class="fw-semibold mb-3">3 users</p>
                                        <p class="text-muted small mb-1">Status</p>
                                        <p class="fw-semibold mb-0">Active</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <h6 class="mb-3">Permissions</h6>
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" checked disabled>
                                                    <label class="form-check-label">View shipments</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" checked disabled>
                                                    <label class="form-check-label">Edit orders</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" checked disabled>
                                                    <label class="form-check-label">Manage users</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" checked disabled>
                                                    <label class="form-check-label">Access settings</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">Assigned Users</h6>
                                        <p class="text-muted mb-0">Olivia Benson, John Smith, Sarah Johnson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editRoleModal" tabindex="-1" aria-labelledby="editRoleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editRoleModalLabel">Edit role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Role name</label>
                                    <input type="text" class="form-control" value="Administrator" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Access level</label>
                                    <select class="form-select">
                                        <option>Read Only</option>
                                        <option>Limited</option>
                                        <option selected>Full Access</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="3">Full system access for administrative tasks and oversight.</textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Permissions</label>
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="edit-perm1" checked>
                                                <label class="form-check-label" for="edit-perm1">View
                                                    shipments</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="edit-perm2" checked>
                                                <label class="form-check-label" for="edit-perm2">Edit
                                                    orders</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="edit-perm3" checked>
                                                <label class="form-check-label" for="edit-perm3">Manage
                                                    users</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="edit-perm4" checked>
                                                <label class="form-check-label" for="edit-perm4">Access
                                                    settings</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bulk Actions Modal -->
        <div class="modal fade" id="bulkActionsModal" tabindex="-1" aria-labelledby="bulkActionsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bulkActionsModalLabel">Bulk Actions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-muted mb-3">Apply actions to selected roles (2 selected)</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary d-flex align-items-center" type="button">
                                <i class="bi bi-person-plus me-2"></i>
                                Assign users to selected roles
                            </button>
                            <button class="btn btn-outline-warning d-flex align-items-center" type="button">
                                <i class="bi bi-pause-circle me-2"></i>
                                Deactivate selected roles
                            </button>
                            <button class="btn btn-outline-success d-flex align-items-center" type="button">
                                <i class="bi bi-play-circle me-2"></i>
                                Activate selected roles
                            </button>
                            <button class="btn btn-outline-info d-flex align-items-center" type="button">
                                <i class="bi bi-copy me-2"></i>
                                Duplicate selected roles
                            </button>
                            <hr>
                            <button class="btn btn-outline-danger d-flex align-items-center" type="button">
                                <i class="bi bi-trash me-2"></i>
                                Delete selected roles
                            </button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Permission Matrix Modal -->
        <div class="modal fade" id="permissionMatrixModal" tabindex="-1"
            aria-labelledby="permissionMatrixModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="permissionMatrixModalLabel">Permission Matrix</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th class="py-3 px-3">Permission</th>
                                        <th class="py-3 px-3 text-center">Administrator</th>
                                        <th class="py-3 px-3 text-center">Dispatcher</th>
                                        <th class="py-3 px-3 text-center">Order Manager</th>
                                        <th class="py-3 px-3 text-center">Viewer</th>
                                        <th class="py-3 px-3 text-center">Warehouse Manager</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-3 px-3 fw-semibold">View Shipments</td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-3 fw-semibold">Edit Orders</td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i class="bi bi-x-circle-fill text-muted"></i>
                                        </td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-3 fw-semibold">Manage Users</td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i class="bi bi-x-circle-fill text-muted"></i>
                                        </td>
                                        <td class="py-3 px-3 text-center"><i class="bi bi-x-circle-fill text-muted"></i>
                                        </td>
                                        <td class="py-3 px-3 text-center"><i class="bi bi-x-circle-fill text-muted"></i>
                                        </td>
                                        <td class="py-3 px-3 text-center"><i class="bi bi-x-circle-fill text-muted"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-3 fw-semibold">Access Settings</td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i class="bi bi-x-circle-fill text-muted"></i>
                                        </td>
                                        <td class="py-3 px-3 text-center"><i class="bi bi-x-circle-fill text-muted"></i>
                                        </td>
                                        <td class="py-3 px-3 text-center"><i class="bi bi-x-circle-fill text-muted"></i>
                                        </td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-3 fw-semibold">Manage Inventory</td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i class="bi bi-x-circle-fill text-muted"></i>
                                        </td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i class="bi bi-x-circle-fill text-muted"></i>
                                        </td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-3 fw-semibold">View Reports</td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                        <td class="py-3 px-3 text-center"><i
                                                class="bi bi-check-circle-fill text-success"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Export Matrix</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Assign Users Modal -->
        <div class="modal fade" id="assignUsersModal" tabindex="-1" aria-labelledby="assignUsersModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="assignUsersModalLabel">Assign Users to Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="card card-soft">
                                    <div class="card-body">
                                        <h6 class="mb-3">Role: Administrator</h6>
                                        <p class="text-muted small mb-0">Select users to assign to this role</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Search Users</label>
                                <div class="position-relative">
                                    <i class="bi bi-search position-absolute text-muted"
                                        style="top: 50%; left: 0.9rem; transform: translateY(-50%);"></i>
                                    <input type="search" class="form-control ps-5"
                                        placeholder="Search by name or email" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="border rounded p-3" style="max-height: 300px; overflow-y: auto;">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="user1" checked>
                                        <label class="form-check-label d-flex align-items-center" for="user1">
                                            <div class="metric-badge bg-primary-soft text-primary me-2">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Olivia Benson</div>
                                                <small class="text-muted">olivia.benson@company.com</small>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="user2">
                                        <label class="form-check-label d-flex align-items-center" for="user2">
                                            <div class="metric-badge bg-success-soft text-success me-2">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">John Smith</div>
                                                <small class="text-muted">john.smith@company.com</small>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="user3" checked>
                                        <label class="form-check-label d-flex align-items-center" for="user3">
                                            <div class="metric-badge bg-info-soft text-info me-2">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Sarah Johnson</div>
                                                <small class="text-muted">sarah.johnson@company.com</small>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="user4">
                                        <label class="form-check-label d-flex align-items-center" for="user4">
                                            <div class="metric-badge bg-warning-soft text-warning me-2">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Mike Davis</div>
                                                <small class="text-muted">mike.davis@company.com</small>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="user5">
                                        <label class="form-check-label d-flex align-items-center" for="user5">
                                            <div class="metric-badge bg-secondary me-2">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Emma Wilson</div>
                                                <small class="text-muted">emma.wilson@company.com</small>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Assign Users</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Duplicate Role Modal -->
        <div class="modal fade" id="duplicateRoleModal" tabindex="-1" aria-labelledby="duplicateRoleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="duplicateRoleModalLabel">Duplicate Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="card card-soft">
                                    <div class="card-body">
                                        <h6 class="mb-2">Original Role: Administrator</h6>
                                        <p class="text-muted small mb-0">Create a copy of this role with
                                            modified
                                            permissions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">New Role Name</label>
                                <input type="text" class="form-control" placeholder="e.g., Administrator (Copy)"
                                    value="Administrator (Copy)">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3" placeholder="Describe the duplicated role">Full system access and configuration</textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="copyPermissions" checked>
                                    <label class="form-check-label" for="copyPermissions">
                                        Copy all permissions from original role
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="copyUsers">
                                    <label class="form-check-label" for="copyUsers">
                                        Copy assigned users to new role
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Create Duplicate</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
