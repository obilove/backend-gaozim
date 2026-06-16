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
                <form method="GET" action="{{ route('admin.orders.track') }}">
                    <div class="row g-3 align-items-end">
                        <div class="col-12 col-md-8">
                            <label class="form-label fw-semibold">Shipment ID or Reference Number</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-search"></i></span>
                                <input name="tracker" type="text" class="form-control"
                                    placeholder="Enter shipment ID (e.g., SH-2024-001)"
                                    value="{{ old('tracker', $tracker ?? '') }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <button class="btn btn-primary w-100" type="submit" id="trackButton">
                                <i class="bi bi-compass me-1"></i> Track Shipment
                            </button>
                        </div>
                    </div>
                </form>
                <div class="mt-3">
                    <p class="text-muted small mb-0">
                        <i class="bi bi-info-circle me-1"></i>
                        Enter a shipment ID to view current tracking details and expected delivery time.
                    </p>
                </div>
            </div>
        </div>

        @if (empty($tracker))
            <div class="alert alert-info">
                Search by tracker number first to load shipment details.
            </div>
        @elseif (!empty($tracker) && empty($order))
            <div class="alert alert-warning">
                No order found for "{{ $tracker }}". Check the tracker number and try again.
            </div>
        @endif
        @if (!empty($tracker) && !empty($order))
            <div id="shipmentDetails" class="{{ $order ? '' : 'd-none' }}">
                <div class="row g-3 mb-4">
                    <!-- Shipment Overview -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="mb-1">Shipment {{ $order->tracker ?? '—' }}</h5>
                                        <p class="mb-0 small opacity-75">{{ $order->item ?? 'Order tracking details' }}</p>
                                    </div>
                                    <div class="text-end">
                                        <div class="badge bg-white text-primary fs-6 px-3 py-2">
                                            {{ $order ? ucfirst(str_replace('_', ' ', $order->status)) : 'Unknown' }}
                                        </div>
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
                                            <p class="text-muted small mb-0">
                                                {{ optional($order->carrier)->name ?? 'Road Freight' }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center"
                                                style="width: 60px; height: 60px;">
                                                <i class="bi bi-geo-alt text-success fs-4"></i>
                                            </div>
                                            <h6 class="mt-2 mb-1">Current Location</h6>
                                            <p class="text-muted small mb-0">
                                                {{ optional($order->warehouse)->location ?? ($order->receiver_address ?? 'Unknown') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center"
                                                style="width: 60px; height: 60px;">
                                                <i class="bi bi-clock text-warning fs-4"></i>
                                            </div>
                                            <h6 class="mt-2 mb-1">Estimated Delivery</h6>
                                            <p class="text-muted small mb-0">
                                                {{ $order->expected_delivery_date ? \Carbon\Carbon::parse($order->expected_delivery_date)->format('M d, Y') : 'Unknown' }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center"
                                                style="width: 60px; height: 60px;">
                                                <i class="bi bi-person text-info fs-4"></i>
                                            </div>
                                            <h6 class="mt-2 mb-1">Carrier</h6>
                                            <p class="text-muted small mb-0">
                                                {{ optional($order->carrier)->name ?? 'Unassigned' }}</p>
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
                                        <span class="badge bg-primary">
                                            {{ $order->route && is_array($order->route) ? count($order->route) . ' stops' : '—' }}
                                        </span>
                                    </div>
                                    <div class="route-display">
                                        <div class="route-point origin">
                                            <div class="route-marker bg-success"></div>
                                            <div class="route-info">
                                                <strong>{{ $order->sender ?? 'Origin' }}</strong>
                                                <br><small class="text-muted">Origin</small>
                                            </div>
                                        </div>
                                        <div class="route-progress">
                                            <div class="progress route-line">
                                                <div class="progress-bar bg-primary" style="width: 50%"></div>
                                            </div>
                                        </div>
                                        <div class="route-point current">
                                            <div class="route-marker bg-primary animate-pulse"></div>
                                            <div class="route-info">
                                                <strong>{{ optional($order->warehouse)->location ?? 'Current location' }}</strong>
                                                <br><small class="text-muted">Current status</small>
                                            </div>
                                        </div>
                                        <div class="route-progress">
                                            <div class="progress route-line">
                                                <div class="progress-bar bg-secondary" style="width: 50%"></div>
                                            </div>
                                        </div>
                                        <div class="route-point destination">
                                            <div class="route-marker bg-secondary"></div>
                                            <div class="route-info">
                                                <strong>{{ $order->receiver ?? 'Destination' }}</strong>
                                                <br><small class="text-muted">Destination</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline">
                                    <div class="timeline-item completed">
                                        <div class="timeline-marker bg-success"></div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">Shipment Created</h6>
                                            <p class="text-muted small mb-0">
                                                {{ optional($order->created_at)->format('M d, Y \a\t h:i A') ?? 'Created date unavailable' }}
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="timeline-item {{ in_array($order->status, ['assigned', 'picked_up', 'at_collection', 'batched', 'in_transit', 'delivered']) ? 'completed' : 'pending' }}">
                                        <div
                                            class="timeline-marker {{ in_array($order->status, ['assigned', 'picked_up', 'at_collection', 'batched', 'in_transit', 'delivered']) ? 'bg-success' : 'bg-secondary' }}">
                                        </div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">Pickup / Transit</h6>
                                            <p class="text-muted small mb-0">
                                                {{ ucfirst(str_replace('_', ' ', $order->status ?? 'pending')) }}</p>
                                        </div>
                                    </div>
                                    <div
                                        class="timeline-item {{ $order->status === 'delivered' ? 'active' : 'pending' }}">
                                        <div
                                            class="timeline-marker {{ $order->status === 'delivered' ? 'bg-primary' : 'bg-secondary' }}">
                                        </div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">Delivery</h6>
                                            <p class="text-muted small mb-0">
                                                {{ $order->expected_delivery_date ? \Carbon\Carbon::parse($order->expected_delivery_date)->format('M d, Y') : 'Expected delivery date not set' }}
                                            </p>
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
                                    <p class="mb-2">{{ $order->tracker }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold small text-muted">CUSTOMER</label>
                                    <p class="mb-2">{{ optional($order->user)->name ?? $order->sender }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold small text-muted">PRIORITY</label>
                                    <p class="mb-2"><span
                                            class="badge bg-{{ $order->fragile ? 'danger' : 'secondary' }}-soft text-{{ $order->fragile ? 'danger' : 'secondary' }}">{{ $order->fragile ? 'High' : 'Standard' }}</span>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold small text-muted">PACKAGE</label>
                                    <p class="mb-2">{{ $order->item_size ?? 'Standard size' }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold small text-muted">VALUE</label>
                                    <p class="mb-2 fw-semibold text-success">₦{{ number_format($order->worth ?? 0, 2) }}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold small text-muted">DEPARTURE</label>
                                    <p class="mb-2">{{ optional($order->created_at)->format('M d, Y') ?? 'Unknown' }}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold small text-muted">LAST UPDATE</label>
                                    <p class="mb-2">{{ optional($order->updated_at)->diffForHumans() ?? 'Just now' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-light">
                                <h6 class="card-title mb-0">Quick Actions</h6>
                            </div>
                            <div class="card-body">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary btn-sm" type="button">
                                        <i class="bi bi-telephone me-1"></i> Contact Carrier
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm" type="button">
                                        <i class="bi bi-envelope me-1"></i> Send Update
                                    </button>
                                    <button class="btn btn-outline-secondary btn-sm" type="button">
                                        <i class="bi bi-share me-1"></i> Share Tracking
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm" type="button">
                                        <i class="bi bi-flag me-1"></i> Report Issue
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
@endsection
