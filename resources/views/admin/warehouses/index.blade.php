@extends('layouts.app')

@section('content')
    <main class="p-3 p-lg-4">
        <div class="section-header">
            <div>
                <h1 class="h2 mb-1">Warehouse Locations</h1>
                <p class="text-muted">Manage your facility network with dynamic capacity, inventory, and site
                    actions.</p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                    data-bs-target="#addWarehouseModal"><i class="bi bi-plus-lg me-1"></i> Add Warehouse</button>

            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Facilities</p>
                                <h3 class="mb-0">7</h3>
                            </div>
                            <div class="metric-badge bg-primary-soft text-primary"><i class="bi bi-building"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Total site count</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Average Utilization</p>
                                <h3 class="mb-0">72%</h3>
                            </div>
                            <div class="metric-badge bg-info-soft text-info"><i class="bi bi-bar-chart"></i></div>
                        </div>
                        <p class="text-muted small mb-0">Warehouse utilization</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Available Space</p>
                                <h3 class="mb-0">28%</h3>
                            </div>
                            <div class="metric-badge bg-success-soft text-success"><i class="bi bi-boxes"></i></div>
                        </div>
                        <p class="text-muted small mb-0">Remaining capacity</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Active Alerts</p>
                                <h3 class="mb-0">3</h3>
                            </div>
                            <div class="metric-badge bg-warning-soft text-warning"><i
                                    class="bi bi-exclamation-triangle"></i></div>
                        </div>
                        <p class="text-muted small mb-0">Temperature & capacity issues</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                            <div>
                                <h5 class="mb-1">Lagos Depot</h5>
                                <p class="text-muted small mb-0">West Africa</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bi bi-three-dots"></i></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#warehouseDetailModal">View details</a></li>
                                    <li><a class="dropdown-item" href="warehouse-items.html">View items</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editWarehouseModal">Edit warehouse</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-success">Stable</span>
                        </div>
                        <div class="row gx-2 gy-2">
                            <div class="col-6">
                                <div class="small text-muted">Capacity</div>
                                <div class="fw-semibold">18,000 m²</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Utilization</div>
                                <div class="fw-semibold">76%</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Temp Control</div>
                                <div class="fw-semibold">+15°C to +18°C</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Manager</div>
                                <div class="fw-semibold">Amina Yusuf</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                            <div>
                                <h5 class="mb-1">Abuja Hub</h5>
                                <p class="text-muted small mb-0">Central Africa</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bi bi-three-dots"></i></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#warehouseDetailModal">View details</a></li>
                                    <li><a class="dropdown-item" href="warehouse-items.html">View items</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editWarehouseModal">Edit warehouse</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-success">Stable</span>
                        </div>
                        <div class="row gx-2 gy-2">
                            <div class="col-6">
                                <div class="small text-muted">Capacity</div>
                                <div class="fw-semibold">12,000 m²</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Utilization</div>
                                <div class="fw-semibold">69%</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Temp Control</div>
                                <div class="fw-semibold">+18°C to +22°C</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Manager</div>
                                <div class="fw-semibold">Chinedu Okonkwo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                            <div>
                                <h5 class="mb-1">Port Harcourt Yard</h5>
                                <p class="text-muted small mb-0">South Africa</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bi bi-three-dots"></i></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#warehouseDetailModal">View details</a></li>
                                    <li><a class="dropdown-item" href="warehouse-items.html">View items</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editWarehouseModal">Edit warehouse</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-warning text-dark">Near capacity</span>
                        </div>
                        <div class="row gx-2 gy-2">
                            <div class="col-6">
                                <div class="small text-muted">Capacity</div>
                                <div class="fw-semibold">9,500 m²</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Utilization</div>
                                <div class="fw-semibold">88%</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Temp Control</div>
                                <div class="fw-semibold">+10°C to +16°C</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Manager</div>
                                <div class="fw-semibold">Nkechi Madu</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                            <div>
                                <h5 class="mb-1">Port Harcourt Yard</h5>
                                <p class="text-muted small mb-0">South Africa</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bi bi-three-dots"></i></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#warehouseDetailModal">View details</a></li>
                                    <li><a class="dropdown-item" href="warehouse-items.html">View items</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editWarehouseModal">Edit warehouse</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-warning text-dark">Near capacity</span>
                        </div>
                        <div class="row gx-2 gy-2">
                            <div class="col-6">
                                <div class="small text-muted">Capacity</div>
                                <div class="fw-semibold">9,500 m²</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Utilization</div>
                                <div class="fw-semibold">88%</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Temp Control</div>
                                <div class="fw-semibold">+10°C to +16°C</div>
                            </div>
                            <div class="col-6">
                                <div class="small text-muted">Manager</div>
                                <div class="fw-semibold">Nkechi Madu</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
@include('admin.warehouses.show')
