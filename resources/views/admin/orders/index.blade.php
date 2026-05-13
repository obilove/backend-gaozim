@extends('layouts.app')

@section('content')
    </table>
    <main class="p-3 p-lg-4">
        <div class="section-header d-flex flex-wrap align-items-start justify-content-between gap-3 mb-3">
            <div>
                <h1 class="h2 mb-1">All Orders</h1>
                <p class="text-muted">Track order fulfillment, billing, and delivery across your logistics network.
                </p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newOrderModal">
                    <i class="bi bi-plus-lg me-1"></i> New Order
                </button>
                <button class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-download me-1"></i> Export
                </button>
                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-funnel me-1"></i> Filter
                </button>
            </div>
        </div>

        <!-- Metrics Cards -->
        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Total Orders</p>
                                <h3 class="mb-0">1,247</h3>
                            </div>
                            <div class="metric-badge bg-primary-soft text-primary">
                                <i class="bi bi-card-checklist"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Active this month</p>
                        <div class="mt-2">
                            <span class="badge bg-success-soft text-success">+8.2%</span>
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
                                <p class="text-muted mb-1">Processing</p>
                                <h3 class="mb-0">834</h3>
                            </div>
                            <div class="metric-badge bg-info-soft text-info">
                                <i class="bi bi-gear"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Currently being fulfilled</p>
                        <div class="mt-2">
                            <span class="badge bg-info-soft text-info">66.8%</span>
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
                                <h3 class="mb-0">356</h3>
                            </div>
                            <div class="metric-badge bg-success-soft text-success">
                                <i class="bi bi-check-circle"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Completed this month</p>
                        <div class="mt-2">
                            <span class="badge bg-success-soft text-success">28.5%</span>
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
                                <p class="text-muted mb-1">Pending</p>
                                <h3 class="mb-0">57</h3>
                            </div>
                            <div class="metric-badge bg-warning-soft text-warning">
                                <i class="bi bi-hourglass-split"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Awaiting processing</p>
                        <div class="mt-2">
                            <span class="badge bg-warning-soft text-warning">4.6%</span>
                            <small class="text-muted ms-1">pending rate</small>
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
                        <h5 class="card-title">Order Status Distribution</h5>
                        <p class="text-muted small mb-4">Current breakdown by status</p>
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
                                        <div class="h4 mb-0">67%</div>
                                        <small class="text-muted">Processing</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="badge bg-primary me-2" style="width: 12px; height: 12px;"></div>
                                        <span class="small">Processing (834)</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="badge bg-success me-2" style="width: 12px; height: 12px;"></div>
                                        <span class="small">Delivered (356)</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="badge bg-warning me-2" style="width: 12px; height: 12px;"></div>
                                        <span class="small">Pending (57)</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-secondary me-2" style="width: 12px; height: 12px;">
                                        </div>
                                        <span class="small">Returned (0)</span>
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
                        <h5 class="card-title">Order Value Trends</h5>
                        <p class="text-muted small mb-4">Monthly order value performance</p>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small text-muted mb-1">
                                <span>This Month</span><span>₦2.4M</span>
                            </div>
                            <div class="progress progress-track mb-3">
                                <div class="progress-bar bg-primary" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small text-muted mb-1">
                                <span>Last Month</span><span>₦2.2M</span>
                            </div>
                            <div class="progress progress-track mb-3">
                                <div class="progress-bar bg-info" style="width: 78%;"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small text-muted mb-1">
                                <span>2 Months Ago</span><span>₦1.9M</span>
                            </div>
                            <div class="progress progress-track mb-3">
                                <div class="progress-bar bg-success" style="width: 67%;"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small text-muted mb-1">
                                <span>3 Months Ago</span><span>₦1.7M</span>
                            </div>
                            <div class="progress progress-track">
                                <div class="progress-bar bg-warning" style="width: 60%;"></div>
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
                        <button class="nav-link active" id="tab-all" data-bs-toggle="tab" data-bs-target="#orders-all"
                            type="button" role="tab" aria-controls="orders-all" aria-selected="true">All
                            orders</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-pending" data-bs-toggle="tab" data-bs-target="#orders-pending"
                            type="button" role="tab" aria-controls="orders-pending"
                            aria-selected="false">Pending</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-shipped" data-bs-toggle="tab" data-bs-target="#orders-shipped"
                            type="button" role="tab" aria-controls="orders-shipped"
                            aria-selected="false">Shipped</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-delivered" data-bs-toggle="tab"
                            data-bs-target="#orders-delivered" type="button" role="tab"
                            aria-controls="orders-delivered" aria-selected="false">Delivered</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-returned" data-bs-toggle="tab"
                            data-bs-target="#orders-returned" type="button" role="tab"
                            aria-controls="orders-returned" aria-selected="false">Returned</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="tab-all">


                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-surface-strong">
                                <tr>
                                    <th class="py-3 px-3 text-start">
                                        <input type="checkbox" class="form-check-input">
                                    </th>
                                    <th class="py-3 px-3 text-start text-muted small">Track ID</th>
                                    <th class="py-3 px-3 text-start text-muted small">Vendor</th>
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

                                @foreach ($orders as $order)
                                    <tr class="border-bottom">
                                        <td class="py-3 px-3 align-middle"><input type="checkbox"
                                                class="form-check-input">
                                        </td>
                                        <td class="py-3 px-3 align-middle">{{ $order->tracker }}</td>
                                        <td class="py-3 px-3 align-middle">{{ $order->sender }}</td>
                                        <td class="py-3 px-3 align-middle">{{ $order->receiver }} → {{ $order->receiver }}
                                        </td>
                                        <td class="py-3 px-3 align-middle">
                                            @if ($order->status == 'pending')
                                                <span class="badge bg-warning-soft text-warning">
                                                    Pending
                                                </span>
                                            @elseif($order->status == 'pickup_requested')
                                                <span class="badge bg-secondary-soft text-secondary">
                                                    Pickup Requested
                                                </span>
                                            @elseif($order->status == 'assigned')
                                                <span class="badge bg-info-soft text-info">
                                                    Assigned
                                                </span>
                                            @elseif($order->status == 'picked_up')
                                                <span class="badge bg-primary-soft text-primary">
                                                    Picked Up
                                                </span>
                                            @elseif($order->status == 'at_collection')
                                                <span class="badge bg-dark-soft text-dark">
                                                    At Collection
                                                </span>
                                            @elseif($order->status == 'batched')
                                                <span class="badge bg-secondary-soft text-secondary">
                                                    Batched
                                                </span>
                                            @elseif($order->status == 'in_transit')
                                                <span class="badge bg-primary-soft text-primary">
                                                    In Transit
                                                </span>
                                            @elseif($order->status == 'delivered')
                                                <span class="badge bg-success-soft text-success">
                                                    Delivered
                                                </span>
                                            @elseif($order->status == 'cancelled')
                                                <span class="badge bg-danger-soft text-danger">
                                                    Cancelled
                                                </span>
                                            @endif
                                        </td>
                                        <td class="py-3 px-3 align-middle">₦{{ number_format($order->worth, 2) }}</td>
                                        <td class="py-3 px-3 align-middle">₦{{ number_format($order->amount, 2) }}</td>
                                        <td class="py-3 px-3 align-middle">
                                            @if ($order->expected_delivery_date)
                                                {{ \Carbon\Carbon::parse($order->expected_delivery_date)->format('M d, Y') }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td class="py-3 px-3 align-middle">May 16, 2024</td>
                                        <td class="py-3 px-3 align-middle">
                                            @if ($order->status == 'pending')
                                            @elseif($order->status == 'pickup_requested')
                                                <span class="badge bg-secondary">
                                                    Pickup Requested
                                                </span>
                                            @elseif($order->status == 'assigned')
                                                <span class="badge bg-info">
                                                    Assigned
                                                </span>
                                            @elseif($order->status == 'picked_up')
                                                <span class="badge bg-primary">
                                                    Picked Up
                                                </span>
                                            @elseif($order->status == 'at_collection')
                                                <span class="badge bg-dark">
                                                    At Collection
                                                </span>
                                            @elseif($order->status == 'batched')
                                                <span class="badge bg-secondary">
                                                    Batched
                                                </span>
                                            @elseif($order->status == 'in_transit')
                                                <span class="badge bg-primary">
                                                    In Transit
                                                </span>
                                            @elseif($order->status == 'delivered')
                                                <span class="badge bg-success">
                                                    Delivered
                                                </span>
                                            @elseif($order->status == 'cancelled')
                                                <span class="badge bg-danger">
                                                    Cancelled
                                                </span>
                                            @endif
                                            <span class="badge bg-success">Delivered</span>
                                        </td>
                                        <td class="py-3 px-3 align-middle"><i
                                                class="bi bi-truck text-primary me-1"></i>Road
                                        </td>
                                        <td class="py-3 px-3 align-middle">Robert Davis</td>
                                        <td class="py-3 px-3 align-middle">
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline-secondary" type="button"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="bi bi-eye me-2"></i>View
                                                            Details</a></li>
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
        </div>

        <div class="modal fade" id="newOrderModal" tabindex="-1" aria-labelledby="newOrderModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newOrderModalLabel">Create new order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Customer</label>
                                    <select class="form-select">
                                        <option selected>Acme Corp</option>
                                        <option>Globex Industries</option>
                                        <option>Wayne Enterprises</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Order value</label>
                                    <input type="text" class="form-control" placeholder="₦0.00" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Shipment</label>
                                    <input type="text" class="form-control" placeholder="SH-2024-010" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Due date</label>
                                    <input type="date" class="form-control" />
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Notes</label>
                                    <textarea class="form-control" rows="3" placeholder="Add order instructions or special requirements"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Create order</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="viewOrderModal" tabindex="-1" aria-labelledby="viewOrderModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="viewOrderModalLabel">Order details</h5>
                            <p class="text-muted small mb-0">Review order status, customer and shipment information.
                            </p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-4">
                            <div class="col-lg-5">
                                <div class="card card-soft h-100">
                                    <div class="card-body">
                                        <p class="text-muted small mb-1">Order ID</p>
                                        <p class="fw-semibold mb-3">OR-5401</p>
                                        <p class="text-muted small mb-1">Customer</p>
                                        <p class="fw-semibold mb-3">Acme Corp</p>
                                        <p class="text-muted small mb-1">Shipment</p>
                                        <p class="fw-semibold mb-3">SH-2024-001</p>
                                        <p class="text-muted small mb-1">Due date</p>
                                        <p class="fw-semibold mb-0">May 18</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <h6 class="mb-3">Order summary</h6>
                                        <p class="text-muted mb-2"><strong>Value:</strong> ₦72,350</p>
                                        <p class="text-muted mb-2"><strong>Status:</strong> Processing</p>
                                        <p class="text-muted mb-2"><strong>Priority:</strong> High</p>
                                        <p class="text-muted mb-0"><strong>Assigned to:</strong> Dispatch Team A</p>
                                        <hr>
                                        <h6 class="mb-3">Notes</h6>
                                        <p class="text-muted mb-0">Priority freight must load before 10:00 AM and
                                            follow customs clearance protocol.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editOrderModal" tabindex="-1" aria-labelledby="editOrderModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editOrderModalLabel">Edit order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Order ID</label>
                                    <input type="text" class="form-control" value="OR-5401" readonly />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option>Processing</option>
                                        <option>Pending</option>
                                        <option>Shipped</option>
                                        <option>Delivered</option>
                                        <option>Returned</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Customer</label>
                                    <input type="text" class="form-control" value="Acme Corp" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Shipment</label>
                                    <input type="text" class="form-control" value="SH-2024-001" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Order value</label>
                                    <input type="text" class="form-control" value="₦72,350" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Due date</label>
                                    <input type="date" class="form-control" value="2024-05-18" />
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Notes</label>
                                    <textarea class="form-control" rows="3">Priority freight must load before 10:00 AM and follow customs clearance protocol.</textarea>
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

    </main>
@endsection
