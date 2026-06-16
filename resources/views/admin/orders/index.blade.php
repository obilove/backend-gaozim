@extends('layouts.app')

@section('content')
    <main class="p-3 p-lg-4">
        <div class="section-header d-flex flex-wrap align-items-start justify-content-between gap-3 mb-3">
            <div>
                <h1 class="h2 mb-1">All Orders</h1>
                <p class="text-muted">Track orders, monitor status, and manage fulfillment from a single dashboard.</p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ route('admin.orders.create') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg me-1"></i> New Order
                </a>
                <button class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-download me-1"></i> Export
                </button>
                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-funnel me-1"></i> Filter
                </button>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Total Orders</p>
                                <h3 class="mb-0">{{ $totalOrders }}</h3>
                            </div>
                            <div class="metric-badge bg-primary-soft text-primary">
                                <i class="bi bi-card-checklist"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">All orders in the system</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">In Transit</p>
                                <h3 class="mb-0">{{ $inTransitOrders }}</h3>
                            </div>
                            <div class="metric-badge bg-info-soft text-info">
                                <i class="bi bi-truck"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Currently on route</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Delivered</p>
                                <h3 class="mb-0">{{ $deliveredOrders }}</h3>
                            </div>
                            <div class="metric-badge bg-success-soft text-success">
                                <i class="bi bi-check-circle"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Successfully completed</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Pending</p>
                                <h3 class="mb-0">{{ $pendingOrders }}</h3>
                            </div>
                            <div class="metric-badge bg-warning-soft text-warning">
                                <i class="bi bi-hourglass-split"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Awaiting fulfillment</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="bg-surface-strong">
                            <tr>
                                <th class="py-3 px-3 text-start text-muted small">Tracker</th>
                                <th class="py-3 px-3 text-start text-muted small">Customer</th>
                                <th class="py-3 px-3 text-start text-muted small">Vendor</th>
                                <th class="py-3 px-3 text-start text-muted small">Carrier</th>
                                <th class="py-3 px-3 text-start text-muted small">Warehouse</th>
                                <th class="py-3 px-3 text-start text-muted small">Delivery</th>
                                <th class="py-3 px-3 text-start text-muted small">Amount</th>
                                <th class="py-3 px-3 text-start text-muted small">Status</th>
                                <th class="py-3 px-3 text-start text-muted small">Expected</th>
                                <th class="py-3 px-3 text-start text-muted small">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle">{{ $order->tracker }}</td>
                                    <td class="py-3 px-3 align-middle">{{ optional($order->user)->name ?? $order->sender }}
                                    </td>
                                    <td class="py-3 px-3 align-middle">{{ optional($order->vendor)->name ?? '—' }}</td>
                                    <td class="py-3 px-3 align-middle">{{ optional($order->carrier)->name ?? '—' }}</td>
                                    <td class="py-3 px-3 align-middle">{{ optional($order->warehouse)->name ?? '—' }}</td>
                                    <td class="py-3 px-3 align-middle">
                                        {{ ucfirst(str_replace('_', ' ', $order->delivery_type ?? 'N/A')) }}</td>
                                    <td class="py-3 px-3 align-middle">₦{{ number_format($order->amount ?? 0, 2) }}</td>
                                    <td class="py-3 px-3 align-middle">
                                        @if ($order->status === 'pending')
                                            <span class="badge bg-warning text-warning">Pending</span>
                                        @elseif ($order->status === 'pickup_requested')
                                            <span class="badge bg-secondary text-secondary">Pickup Requested</span>
                                        @elseif ($order->status === 'assigned')
                                            <span class="badge bg-info text-info">Assigned</span>
                                        @elseif ($order->status === 'picked_up')
                                            <span class="badge bg-primary text-primary">Picked Up</span>
                                        @elseif ($order->status === 'at_collection')
                                            <span class="badge bg-dark text-dark">At Collection</span>
                                        @elseif ($order->status === 'batched')
                                            <span class="badge bg-secondary text-secondary">Batched</span>
                                        @elseif ($order->status === 'in_transit')
                                            <span class="badge bg-primary text-primary">In Transit</span>
                                        @elseif ($order->status === 'delivered')
                                            <span class="badge bg-success text-success">Delivered</span>
                                        @elseif ($order->status === 'cancelled')
                                            <span class="badge bg-danger text-danger">Cancelled</span>
                                        @else
                                            <span
                                                class="badge bg-secondary text-secondary">{{ ucfirst($order->status ?? 'unknown') }}</span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        {{ $order->expected_delivery_date ? \Carbon\Carbon::parse($order->expected_delivery_date)->format('M d, Y') : '—' }}
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.orders.show', $order->id) }}">
                                                        <i class="bi bi-eye me-2"></i>View
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.orders.edit', $order->id) }}">
                                                        <i class="bi bi-pencil me-2"></i>Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <form method="POST"
                                                        action="{{ route('admin.orders.destroy', $order->id) }}"
                                                        onsubmit="return confirm('Delete this order? This cannot be undone.');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item text-danger">
                                                            <i class="bi bi-trash me-2"></i>Delete
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center py-4 text-muted">No orders found. Create an
                                        order to get started.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-4">
            {{ $orders->links() }}
        </div>
    </main>
@endsection
