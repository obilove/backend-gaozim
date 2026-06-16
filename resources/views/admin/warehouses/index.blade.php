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
                                <h3 class="mb-0">{{ $totalWarehouses }}</h3>
                            </div>
                            <div class="metric-badge bg-primary-soft text-primary"><i class="bi bi-building"></i></div>
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
                                <p class="text-muted mb-1">Active Sites</p>
                                <h3 class="mb-0">{{ $activeWarehouses }}</h3>
                            </div>
                            <div class="metric-badge bg-success-soft text-success"><i class="bi bi-check-circle"></i></div>
                        </div>
                        <p class="text-muted small mb-0">Currently active facilities</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Inactive Sites</p>
                                <h3 class="mb-0">{{ $inactiveWarehouses }}</h3>
                            </div>
                            <div class="metric-badge bg-warning-soft text-warning"><i class="bi bi-slash-circle"></i></div>
                        </div>
                        <p class="text-muted small mb-0">Currently offline or inactive</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Page results</p>
                                <h3 class="mb-0">{{ $warehouses->count() }}</h3>
                            </div>
                            <div class="metric-badge bg-info-soft text-info"><i class="bi bi-grid-1x2"></i></div>
                        </div>
                        <p class="text-muted small mb-0">Warehouses shown on this page</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            @forelse ($warehouses as $warehouse)
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                                <div>
                                    <h5 class="mb-1">{{ $warehouse->name }}</h5>
                                    <p class="text-muted small mb-0">{{ $warehouse->location ?? 'Unknown location' }}</p>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary rounded-circle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bi bi-three-dots"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#warehouseDetailModal" data-wh-id="{{ $warehouse->id }}"
                                                data-wh-name="{{ $warehouse->name }}" data-wh-code="{{ $warehouse->code }}"
                                                data-wh-status="{{ $warehouse->status }}"
                                                data-wh-business="{{ $warehouse->business }}"
                                                data-wh-capacity="{{ $warehouse->warehouse_capacity }}"
                                                data-wh-username="{{ $warehouse->username }}"
                                                data-wh-address="{{ $warehouse->address }}"
                                                data-wh-location="{{ $warehouse->location }}"
                                                data-wh-badge="{{ $warehouse->badge }}">
                                                View details
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('admin.warehouses.inventory', $warehouse->id) }}">View
                                                items</a></li>
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#editWarehouseModal" data-wh-id="{{ $warehouse->id }}"
                                                data-wh-name="{{ $warehouse->name }}"
                                                data-wh-code="{{ $warehouse->code }}"
                                                data-wh-status="{{ $warehouse->status }}"
                                                data-wh-business="{{ $warehouse->business }}"
                                                data-wh-capacity="{{ $warehouse->warehouse_capacity }}"
                                                data-wh-username="{{ $warehouse->username }}"
                                                data-wh-address="{{ $warehouse->address }}"
                                                data-wh-location="{{ $warehouse->location }}"
                                                data-wh-badge="{{ $warehouse->badge }}">
                                                Edit warehouse
                                            </a></li>
                                        <li>
                                            <form method="POST"
                                                action="{{ route('admin.warehouses.destroy', $warehouse->id) }}"
                                                onsubmit="return confirm('Are you sure you want to delete this warehouse? This action cannot be undone.');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item text-danger">Delete
                                                    warehouse</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-3">
                                <span
                                    class="badge bg-{{ $warehouse->status === 'active' ? 'success' : 'warning text-dark' }}">{{ ucfirst($warehouse->status) }}</span>
                            </div>
                            <div class="row gx-2 gy-2">
                                <div class="col-6">
                                    <div class="small text-muted">Capacity</div>
                                    <div class="fw-semibold">{{ $warehouse->warehouse_capacity ?? 'N/A' }}</div>
                                </div>
                                <div class="col-6">
                                    <div class="small text-muted">Business</div>
                                    <div class="fw-semibold">{{ $warehouse->business ?? 'N/A' }}</div>
                                </div>
                                <div class="col-6">
                                    <div class="small text-muted">Manager</div>
                                    <div class="fw-semibold">{{ $warehouse->username ?? 'TBD' }}</div>
                                </div>
                                <div class="col-6">
                                    <div class="small text-muted">Address</div>
                                    <div class="fw-semibold">
                                        {{ \Illuminate\Support\Str::limit($warehouse->address ?? 'N/A', 24) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="card border-0 shadow-sm p-4 text-center">
                        <p class="mb-0 text-muted">No warehouses found. Add a new warehouse to populate this view.</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="mt-4">
            {{ $warehouses->links() }}
        </div>

    </main>
    @include('admin.warehouses.show')

    <script>
        const warehouseDetailModal = document.getElementById('warehouseDetailModal');
        const editWarehouseModal = document.getElementById('editWarehouseModal');
        const editWarehouseForm = document.getElementById('editWarehouseForm');

        if (warehouseDetailModal) {
            warehouseDetailModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-wh-id');
                const name = button.getAttribute('data-wh-name');
                const code = button.getAttribute('data-wh-code');
                const status = button.getAttribute('data-wh-status');
                const business = button.getAttribute('data-wh-business');
                const capacity = button.getAttribute('data-wh-capacity');
                const username = button.getAttribute('data-wh-username');
                const address = button.getAttribute('data-wh-address');
                const location = button.getAttribute('data-wh-location');
                const badge = button.getAttribute('data-wh-badge');

                document.getElementById('viewWarehouseName').textContent = name;
                document.getElementById('viewWarehouseCode').textContent = code || 'N/A';
                document.getElementById('viewWarehouseBusiness').textContent = business || 'N/A';
                document.getElementById('viewWarehouseCapacity').textContent = capacity || 'N/A';
                document.getElementById('viewWarehouseManager').textContent = username || 'N/A';
                document.getElementById('viewWarehouseAddress').textContent = address || 'N/A';
                document.getElementById('viewWarehouseLocation').textContent = location || 'N/A';
                document.getElementById('viewWarehouseBadge').textContent = badge || 'N/A';

                const statusBadge = document.getElementById('viewWarehouseStatus');
                if (statusBadge) {
                    statusBadge.textContent = status ? status.charAt(0).toUpperCase() + status.slice(1) : 'N/A';
                    statusBadge.className = 'badge ' + (status === 'inactive' ? 'bg-warning text-dark' :
                        'bg-success');
                }

                const inventoryLink = document.getElementById('viewWarehouseInventoryLink');
                if (inventoryLink) {
                    inventoryLink.href = '{{ route('admin.warehouses.inventory', ':id') }}'.replace(':id', id);
                }
            });
        }

        if (editWarehouseModal && editWarehouseForm) {
            editWarehouseModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-wh-id');
                const name = button.getAttribute('data-wh-name');
                const code = button.getAttribute('data-wh-code');
                const status = button.getAttribute('data-wh-status');
                const business = button.getAttribute('data-wh-business');
                const capacity = button.getAttribute('data-wh-capacity');
                const username = button.getAttribute('data-wh-username');
                const address = button.getAttribute('data-wh-address');
                const location = button.getAttribute('data-wh-location');
                const badge = button.getAttribute('data-wh-badge');

                document.getElementById('editWarehouseName').value = name || '';
                document.getElementById('editWarehouseCode').value = code || '';
                document.getElementById('editWarehouseStatus').value = status || 'active';
                document.getElementById('editWarehouseBusiness').value = business || '';
                document.getElementById('editWarehouseCapacity').value = capacity || '';
                document.getElementById('editWarehouseManager').value = username || '';
                document.getElementById('editWarehouseAddress').value = address || '';
                document.getElementById('editWarehouseLocation').value = location || '';
                document.getElementById('editWarehouseBadge').value = badge || '';

                editWarehouseForm.setAttribute('action', '{{ route('admin.warehouses.update', ':id') }}'.replace(
                    ':id', id));
            });
        }
    </script>
@endsection
