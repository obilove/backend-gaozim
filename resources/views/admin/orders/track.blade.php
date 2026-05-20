@extends('layouts.app')

@section('content')
    <main class="p-3 p-lg-4">
        <div class="section-header">
            <div>
                <h1 class="h2 mb-1">Track Delivery</h1>
                <p class="text-muted">Find current shipment positions and expected delivery times.</p>
            </div>

        </div>

        <!-- Shipment Tracking Form -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <div class="row g-3 align-items-end">
                    <div class="col-12 col-md-8">
                        <label class="form-label fw-semibold">Shipment ID or Reference Number</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Enter shipment ID (e.g., SH-2024-001)"
                                id="trackingInput">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <button class="btn btn-primary w-100" id="trackButton">
                            <i class="bi bi-compass me-1"></i> Track Shipment
                        </button>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="text-muted small mb-0">
                        <i class="bi bi-info-circle me-1"></i>
                        Enter a shipment ID to view real-time tracking information, route details, and delivery
                        status.
                    </p>
                </div>
            </div>
        </div>

        <!-- Shipment Details Display (Hidden by default) -->
        <div id="shipmentDetails" class="d-none">
            <div class="row g-3 mb-4">
                <!-- Shipment Overview -->
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-1" id="detailTitle">Shipment SH-2024-001</h5>
                                    <p class="mb-0 small opacity-75" id="detailSubtitle">Electronic components and
                                        industrial machinery parts</p>
                                </div>
                                <div class="text-end">
                                    <div class="badge bg-white text-primary fs-6 px-3 py-2" id="detailStatus">In
                                        Transit</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center"
                                            style="width: 60px; height: 60px;">
                                            <i class="bi bi-truck text-primary fs-4"></i>
                                        </div>
                                        <h6 class="mt-2 mb-1">Transport Mode</h6>
                                        <p class="text-muted small mb-0" id="detailTransport">Road Freight</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center"
                                            style="width: 60px; height: 60px;">
                                            <i class="bi bi-geo-alt text-success fs-4"></i>
                                        </div>
                                        <h6 class="mt-2 mb-1">Current Location</h6>
                                        <p class="text-muted small mb-0" id="detailLocation">Chicago, IL</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center"
                                            style="width: 60px; height: 60px;">
                                            <i class="bi bi-clock text-warning fs-4"></i>
                                        </div>
                                        <h6 class="mt-2 mb-1">Estimated Delivery</h6>
                                        <p class="text-muted small mb-0" id="detailETA">May 18, 2024</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center"
                                            style="width: 60px; height: 60px;">
                                            <i class="bi bi-person text-info fs-4"></i>
                                        </div>
                                        <h6 class="mt-2 mb-1">Driver</h6>
                                        <p class="text-muted small mb-0" id="detailDriver">John Smith</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <!-- Route & Timeline -->
                <div class="col-12 col-lg-8">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-light">
                            <h6 class="card-title mb-0">Route & Timeline</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6 class="mb-0">Route Overview</h6>
                                    <span class="badge bg-primary" id="routeDistance">2,840 km</span>
                                </div>
                                <div class="route-display">
                                    <div class="route-point origin">
                                        <div class="route-marker bg-success"></div>
                                        <div class="route-info">
                                            <strong>New York, NY</strong>
                                            <br><small class="text-muted">Origin - Departed May 15, 10:15 AM</small>
                                        </div>
                                    </div>
                                    <div class="route-progress">
                                        <div class="progress route-line">
                                            <div class="progress-bar bg-primary" style="width: 65%"></div>
                                        </div>
                                    </div>
                                    <div class="route-point current">
                                        <div class="route-marker bg-primary animate-pulse"></div>
                                        <div class="route-info">
                                            <strong>Chicago, IL</strong>
                                            <br><small class="text-muted">Current Location - Updated 2 hours
                                                ago</small>
                                        </div>
                                    </div>
                                    <div class="route-progress">
                                        <div class="progress route-line">
                                            <div class="progress-bar bg-secondary" style="width: 35%"></div>
                                        </div>
                                    </div>
                                    <div class="route-point destination">
                                        <div class="route-marker bg-secondary"></div>
                                        <div class="route-info">
                                            <strong>Los Angeles, CA</strong>
                                            <br><small class="text-muted">Destination - ETA May 18, 3:30 PM</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline">
                                <div class="timeline-item completed">
                                    <div class="timeline-marker bg-success"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Shipment Created</h6>
                                        <p class="text-muted small mb-0">May 15, 2024 at 08:30 AM - Origin warehouse
                                            processing completed</p>
                                    </div>
                                </div>
                                <div class="timeline-item completed">
                                    <div class="timeline-marker bg-success"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Departed Origin</h6>
                                        <p class="text-muted small mb-0">May 15, 2024 at 10:15 AM - Left New York
                                            facility</p>
                                    </div>
                                </div>
                                <div class="timeline-item completed">
                                    <div class="timeline-marker bg-success"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Checkpoint: Philadelphia</h6>
                                        <p class="text-muted small mb-0">May 15, 2024 at 02:45 PM - Route
                                            verification completed</p>
                                    </div>
                                </div>
                                <div class="timeline-item completed">
                                    <div class="timeline-marker bg-success"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Checkpoint: Chicago</h6>
                                        <p class="text-muted small mb-0">May 16, 2024 at 11:20 AM - Arrived at
                                            distribution center</p>
                                    </div>
                                </div>
                                <div class="timeline-item active">
                                    <div class="timeline-marker bg-primary"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">In Transit to Destination</h6>
                                        <p class="text-muted small mb-0">May 17, 2024 at 09:30 AM - En route to Los
                                            Angeles</p>
                                    </div>
                                </div>
                                <div class="timeline-item pending">
                                    <div class="timeline-marker bg-secondary"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Delivery</h6>
                                        <p class="text-muted small mb-0">May 18, 2024 at 3:30 PM - Expected delivery
                                            time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shipment Details -->
                <div class="col-12 col-lg-4">
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-header bg-light">
                            <h6 class="card-title mb-0">Shipment Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label fw-semibold small text-muted">SHIPMENT ID</label>
                                <p class="mb-2" id="detailId">SH-2024-001</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold small text-muted">CUSTOMER</label>
                                <p class="mb-2" id="detailCustomer">Acme Corporation</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold small text-muted">PRIORITY</label>
                                <p class="mb-2"><span class="badge bg-danger-soft text-danger">High</span></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold small text-muted">WEIGHT</label>
                                <p class="mb-2" id="detailWeight">2,450 kg</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold small text-muted">VALUE</label>
                                <p class="mb-2 fw-semibold text-success" id="detailValue">₦72,350</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold small text-muted">DEPARTURE</label>
                                <p class="mb-2" id="detailDeparture">May 15, 2024</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold small text-muted">LAST UPDATE</label>
                                <p class="mb-2" id="detailLastUpdate">2 hours ago</p>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h6 class="card-title mb-0">Quick Actions</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-sm">
                                    <i class="bi bi-telephone me-1"></i> Contact Driver
                                </button>
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-envelope me-1"></i> Send Update
                                </button>
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-share me-1"></i> Share Tracking
                                </button>
                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-flag me-1"></i> Report Issue
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </main>
@endsection
