@extends('layouts.app')

@section('content')
    <main class="p-3 p-lg-4">
        <div class="section-header">
            <div>
                <h1 class="h2 mb-1">All Carriers</h1>
                <p class="text-muted">Manage shipments, check delivery status, and filter priority routes.</p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newShipmentModal">
                    <i class="bi bi-plus-lg me-1"></i> New Shipment
                </button>
                <button class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-download me-1"></i> Export
                </button>
                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-funnel me-1"></i> Filter
                </button>
            </div>
        </div>

        <!-- Filters Section -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-12 col-md-3">
                        <label class="form-label small fw-semibold">Status</label>
                        <select class="form-select form-select-sm">
                            <option>All Statuses</option>
                            <option>In Transit</option>
                            <option>Delivered</option>
                            <option>Pending</option>
                            <option>Delayed</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="form-label small fw-semibold">Transport Type</label>
                        <select class="form-select form-select-sm">
                            <option>All Types</option>
                            <option>Road</option>
                            <option>Air</option>
                            <option>Sea</option>
                            <option>Rail</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="form-label small fw-semibold">Date Range</label>
                        <select class="form-select form-select-sm">
                            <option>Last 30 days</option>
                            <option>Last 7 days</option>
                            <option>Today</option>
                            <option>Custom range</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="form-label small fw-semibold">Priority</label>
                        <select class="form-select form-select-sm">
                            <option>All Priorities</option>
                            <option>High</option>
                            <option>Medium</option>
                            <option>Low</option>
                        </select>
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
                                <p class="text-muted mb-1">Total Shipments</p>
                                <h3 class="mb-0">1,284</h3>
                            </div>
                            <div class="metric-badge bg-primary-soft text-primary">
                                <i class="bi bi-truck"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Active this month</p>
                        <div class="mt-2">
                            <span class="badge bg-success-soft text-success">+12.5%</span>
                            <small class="text-muted ms-1">vs last month</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">In Transit</p>
                                <h3 class="mb-0">847</h3>
                            </div>
                            <div class="metric-badge bg-info-soft text-info">
                                <i class="bi bi-arrow-right-circle"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Currently moving</p>
                        <div class="mt-2">
                            <span class="badge bg-info-soft text-info">66.1%</span>
                            <small class="text-muted ms-1">of total</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Delivered</p>
                                <h3 class="mb-0">389</h3>
                            </div>
                            <div class="metric-badge bg-success-soft text-success">
                                <i class="bi bi-check-circle"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Completed this month</p>
                        <div class="mt-2">
                            <span class="badge bg-success-soft text-success">30.3%</span>
                            <small class="text-muted ms-1">completion rate</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Delayed</p>
                                <h3 class="mb-0">48</h3>
                            </div>
                            <div class="metric-badge bg-warning-soft text-warning">
                                <i class="bi bi-exclamation-triangle"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Require attention</p>
                        <div class="mt-2">
                            <span class="badge bg-warning-soft text-warning">3.7%</span>
                            <small class="text-muted ms-1">delay rate</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Shipments Table -->
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <h5 class="card-title mb-1">Shipment Details</h5>
                        <p class="text-muted small mb-0">Complete shipment information and tracking</p>
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
                                <th class="py-3 px-3 text-start text-muted small">Shipment ID</th>
                                <th class="py-3 px-3 text-start text-muted small">Customer</th>
                                <th class="py-3 px-3 text-start text-muted small">Route</th>
                                <th class="py-3 px-3 text-start text-muted small">Priority</th>
                                <th class="py-3 px-3 text-start text-muted small">Weight</th>
                                <th class="py-3 px-3 text-start text-muted small">Value</th>
                                <th class="py-3 px-3 text-start text-muted small">Departure</th>
                                <th class="py-3 px-3 text-start text-muted small">ETA</th>
                                <th class="py-3 px-3 text-start text-muted small">Status</th>
                                <th class="py-3 px-3 text-start text-muted small">Transport</th>
                                <th class="py-3 px-3 text-start text-muted small">Driver</th>
                                <th class="py-3 px-3 text-start text-muted small">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carriers as $carrier)
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="py-3 px-3 align-middle">SH-2024-0{{ $carrier->id }}</td>
                                    <td class="py-3 px-3 align-middle">{{ $carrier->name }}</td>
                                    <td class="py-3 px-3 align-middle">{{ $carrier->phone }}</td>
                                    <td class="py-3 px-3 align-middle"><span
                                            class="badge bg-danger-soft text-danger">High</span></td>
                                    <td class="py-3 px-3 align-middle">2,450 kg</td>
                                    <td class="py-3 px-3 align-middle">₦72,350</td>
                                    <td class="py-3 px-3 align-middle">May 15, 2024</td>
                                    <td class="py-3 px-3 align-middle">May 18, 2024</td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-primary">In Transit</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle"><i class="bi bi-truck text-primary me-1"></i>Road
                                    </td>
                                    <td class="py-3 px-3 align-middle">John Smith</td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#shipmentDetailModal"><i
                                                            class="bi bi-eye me-2"></i>View Details</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-pencil me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-geo-alt me-2"></i>Track</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i
                                                            class="bi bi-trash me-2"></i>Cancel</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>
@endsection
