@extends('layouts.app')

@section('content')
    <main class="p-3 p-lg-4">
        <div class="section-header d-flex flex-wrap align-items-start justify-content-between gap-3 mb-3">
            <div>
                <h1 class="h2 mb-1">All Carriers</h1>
                <p class="text-muted">Manage carrier profiles, update delivery details, and review contact information.</p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newCarrierModal">
                    <i class="bi bi-plus-lg me-1"></i> New Carrier
                </button>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Total Carriers</p>
                                <h3 class="mb-0">{{ $totalCarriers }}</h3>
                            </div>
                            <div class="metric-badge bg-primary-soft text-primary">
                                <i class="bi bi-truck"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Carrier records in the system</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Active Carriers</p>
                                <h3 class="mb-0">{{ $activeCarriers }}</h3>
                            </div>
                            <div class="metric-badge bg-success-soft text-success">
                                <i class="bi bi-check-circle"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Currently active carriers</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Inactive Carriers</p>
                                <h3 class="mb-0">{{ $inactiveCarriers }}</h3>
                            </div>
                            <div class="metric-badge bg-warning-soft text-warning">
                                <i class="bi bi-slash-circle"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Currently inactive</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Page results</p>
                                <h3 class="mb-0">{{ $carriers->count() }}</h3>
                            </div>
                            <div class="metric-badge bg-info-soft text-info">
                                <i class="bi bi-grid-1x2"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Carriers shown on this page</p>
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
                                <th class="py-3 px-3 text-start text-muted small">Name</th>
                                <th class="py-3 px-3 text-start text-muted small">Email</th>
                                <th class="py-3 px-3 text-start text-muted small">Phone</th>
                                <th class="py-3 px-3 text-start text-muted small">Business</th>
                                <th class="py-3 px-3 text-start text-muted small">Location</th>
                                <th class="py-3 px-3 text-start text-muted small">Status</th>
                                <th class="py-3 px-3 text-start text-muted small">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($carriers as $carrier)
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle">{{ $carrier->name }}</td>
                                    <td class="py-3 px-3 align-middle">{{ $carrier->email }}</td>
                                    <td class="py-3 px-3 align-middle">{{ $carrier->phone }}</td>
                                    <td class="py-3 px-3 align-middle">{{ $carrier->business ?? '—' }}</td>
                                    <td class="py-3 px-3 align-middle">{{ $carrier->location ?? '—' }}</td>
                                    <td class="py-3 px-3 align-middle">
                                        <span
                                            class="badge {{ $carrier->status === 'active' ? 'bg-success' : 'bg-warning text-dark' }}">{{ ucfirst($carrier->status) }}</span>
                                    </td>
                                    <td class="py-3 px-3 align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#viewCarrierModal" data-wh-id="{{ $carrier->id }}"
                                                        data-wh-name="{{ $carrier->name }}"
                                                        data-wh-email="{{ $carrier->email }}"
                                                        data-wh-phone="{{ $carrier->phone }}"
                                                        data-wh-status="{{ $carrier->status }}"
                                                        data-wh-business="{{ $carrier->business }}"
                                                        data-wh-delivery-capacity="{{ $carrier->delivery_capacity }}"
                                                        data-wh-ave-size="{{ $carrier->ave_size }}"
                                                        data-wh-item-cat="{{ $carrier->item_cat }}"
                                                        data-wh-biz-cat="{{ $carrier->biz_cat }}"
                                                        data-wh-username="{{ $carrier->username }}"
                                                        data-wh-address="{{ $carrier->address }}"
                                                        data-wh-location="{{ $carrier->location }}"
                                                        data-wh-badge="{{ $carrier->badge }}">
                                                        <i class="bi bi-eye me-2"></i>View
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editCarrierModal" data-wh-id="{{ $carrier->id }}"
                                                        data-wh-name="{{ $carrier->name }}"
                                                        data-wh-email="{{ $carrier->email }}"
                                                        data-wh-phone="{{ $carrier->phone }}"
                                                        data-wh-status="{{ $carrier->status }}"
                                                        data-wh-business="{{ $carrier->business }}"
                                                        data-wh-delivery-capacity="{{ $carrier->delivery_capacity }}"
                                                        data-wh-ave-size="{{ $carrier->ave_size }}"
                                                        data-wh-item-cat="{{ $carrier->item_cat }}"
                                                        data-wh-biz-cat="{{ $carrier->biz_cat }}"
                                                        data-wh-username="{{ $carrier->username }}"
                                                        data-wh-address="{{ $carrier->address }}"
                                                        data-wh-location="{{ $carrier->location }}"
                                                        data-wh-badge="{{ $carrier->badge }}">
                                                        <i class="bi bi-pencil me-2"></i>Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <form method="POST"
                                                        action="{{ route('admin.carriers.destroy', $carrier->id) }}"
                                                        onsubmit="return confirm('Delete this carrier? This action cannot be undone.');">
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
                                    <td colspan="7" class="text-center py-4 text-muted">No carriers found. Add a
                                        carrier to get started.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-4">
            {{ $carriers->links() }}
        </div>

        <div class="modal fade" id="newCarrierModal" tabindex="-1" aria-labelledby="newCarrierModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="newCarrierModalLabel">Add Carrier</h5>
                            <p class="text-muted small mb-0">Create a new carrier record and capture contact details.</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.carriers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control"
                                        value="{{ old('phone') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control"
                                        value="{{ old('address') }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option value="active" selected>Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Code</label>
                                    <input type="text" name="code" class="form-control"
                                        value="{{ old('code') }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control"
                                        value="{{ old('username') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Business</label>
                                    <input type="text" name="business" class="form-control"
                                        value="{{ old('business') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" class="form-control"
                                        value="{{ old('location') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Delivery capacity</label>
                                    <input type="text" name="delivery_capacity" class="form-control"
                                        value="{{ old('delivery_capacity') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Average size</label>
                                    <input type="text" name="ave_size" class="form-control"
                                        value="{{ old('ave_size') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Item category</label>
                                    <input type="text" name="item_cat" class="form-control"
                                        value="{{ old('item_cat') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Business category</label>
                                    <input type="text" name="biz_cat" class="form-control"
                                        value="{{ old('biz_cat') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Badge</label>
                                    <input type="text" name="badge" class="form-control"
                                        value="{{ old('badge') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Create carrier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editCarrierModal" tabindex="-1" aria-labelledby="editCarrierModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="editCarrierModalLabel">Edit Carrier</h5>
                            <p class="text-muted small mb-0">Update carrier profile details.</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="editCarrierForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" id="editCarrierName" class="form-control"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" id="editCarrierEmail" class="form-control"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" id="editCarrierPhone" class="form-control"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Leave blank to keep current password">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" id="editCarrierAddress" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status" id="editCarrierStatus">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Code</label>
                                    <input type="text" name="code" id="editCarrierCode" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" id="editCarrierUsername" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Business</label>
                                    <input type="text" name="business" id="editCarrierBusiness" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" id="editCarrierLocation" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Delivery capacity</label>
                                    <input type="text" name="delivery_capacity" id="editCarrierDeliveryCapacity"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Average size</label>
                                    <input type="text" name="ave_size" id="editCarrierAveSize" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Item category</label>
                                    <input type="text" name="item_cat" id="editCarrierItemCat" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Business category</label>
                                    <input type="text" name="biz_cat" id="editCarrierBizCat" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Badge</label>
                                    <input type="text" name="badge" id="editCarrierBadge" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="viewCarrierModal" tabindex="-1" aria-labelledby="viewCarrierModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="viewCarrierModalLabel">Carrier details</h5>
                            <p class="text-muted small mb-0">Review carrier contact details and profile information.</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="card card-soft h-100">
                                    <div class="card-body">
                                        <p class="text-muted small mb-1">Name</p>
                                        <p class="fw-semibold mb-3" id="viewCarrierName"></p>
                                        <p class="text-muted small mb-1">Email</p>
                                        <p class="fw-semibold mb-3" id="viewCarrierEmail"></p>
                                        <p class="text-muted small mb-1">Phone</p>
                                        <p class="fw-semibold mb-3" id="viewCarrierPhone"></p>
                                        <p class="text-muted small mb-1">Status</p>
                                        <p class="fw-semibold mb-3"><span class="badge" id="viewCarrierStatus"></span>
                                        </p>
                                        <p class="text-muted small mb-1">Code</p>
                                        <p class="fw-semibold mb-3" id="viewCarrierCode"></p>
                                        <p class="text-muted small mb-1">Username</p>
                                        <p class="fw-semibold mb-0" id="viewCarrierUsername"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <h6 class="mb-3">Business details</h6>
                                        <p class="text-muted mb-2"><strong>Business:</strong> <span
                                                id="viewCarrierBusiness"></span></p>
                                        <p class="text-muted mb-2"><strong>Delivery capacity:</strong> <span
                                                id="viewCarrierDeliveryCapacity"></span></p>
                                        <p class="text-muted mb-2"><strong>Average size:</strong> <span
                                                id="viewCarrierAveSize"></span></p>
                                        <p class="text-muted mb-2"><strong>Item category:</strong> <span
                                                id="viewCarrierItemCat"></span></p>
                                        <p class="text-muted mb-2"><strong>Business category:</strong> <span
                                                id="viewCarrierBizCat"></span></p>
                                        <p class="text-muted mb-2"><strong>Address:</strong> <span
                                                id="viewCarrierAddress"></span></p>
                                        <p class="text-muted mb-2"><strong>Location:</strong> <span
                                                id="viewCarrierLocation"></span></p>
                                        <p class="text-muted mb-0"><strong>Badge:</strong> <span
                                                id="viewCarrierBadge"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
        const viewCarrierModal = document.getElementById('viewCarrierModal');
        const editCarrierModal = document.getElementById('editCarrierModal');
        const editCarrierForm = document.getElementById('editCarrierForm');

        if (viewCarrierModal) {
            viewCarrierModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const name = button.getAttribute('data-wh-name');
                const email = button.getAttribute('data-wh-email');
                const phone = button.getAttribute('data-wh-phone');
                const status = button.getAttribute('data-wh-status');
                const code = button.getAttribute('data-wh-code');
                const username = button.getAttribute('data-wh-username');
                const business = button.getAttribute('data-wh-business');
                const deliveryCapacity = button.getAttribute('data-wh-delivery-capacity');
                const aveSize = button.getAttribute('data-wh-ave-size');
                const itemCat = button.getAttribute('data-wh-item-cat');
                const bizCat = button.getAttribute('data-wh-biz-cat');
                const address = button.getAttribute('data-wh-address');
                const location = button.getAttribute('data-wh-location');
                const badge = button.getAttribute('data-wh-badge');

                document.getElementById('viewCarrierName').textContent = name || 'N/A';
                document.getElementById('viewCarrierEmail').textContent = email || 'N/A';
                document.getElementById('viewCarrierPhone').textContent = phone || 'N/A';
                document.getElementById('viewCarrierStatus').textContent = status ? status.charAt(0).toUpperCase() +
                    status.slice(1) : 'N/A';
                document.getElementById('viewCarrierCode').textContent = code || 'N/A';
                document.getElementById('viewCarrierUsername').textContent = username || 'N/A';
                document.getElementById('viewCarrierBusiness').textContent = business || 'N/A';
                document.getElementById('viewCarrierDeliveryCapacity').textContent = deliveryCapacity || 'N/A';
                document.getElementById('viewCarrierAveSize').textContent = aveSize || 'N/A';
                document.getElementById('viewCarrierItemCat').textContent = itemCat || 'N/A';
                document.getElementById('viewCarrierBizCat').textContent = bizCat || 'N/A';
                document.getElementById('viewCarrierAddress').textContent = address || 'N/A';
                document.getElementById('viewCarrierLocation').textContent = location || 'N/A';
                document.getElementById('viewCarrierBadge').textContent = badge || 'N/A';
            });
        }

        if (editCarrierModal && editCarrierForm) {
            editCarrierModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-wh-id');
                const name = button.getAttribute('data-wh-name');
                const email = button.getAttribute('data-wh-email');
                const phone = button.getAttribute('data-wh-phone');
                const status = button.getAttribute('data-wh-status');
                const code = button.getAttribute('data-wh-code');
                const username = button.getAttribute('data-wh-username');
                const business = button.getAttribute('data-wh-business');
                const deliveryCapacity = button.getAttribute('data-wh-delivery-capacity');
                const aveSize = button.getAttribute('data-wh-ave-size');
                const itemCat = button.getAttribute('data-wh-item-cat');
                const bizCat = button.getAttribute('data-wh-biz-cat');
                const address = button.getAttribute('data-wh-address');
                const location = button.getAttribute('data-wh-location');
                const badge = button.getAttribute('data-wh-badge');

                document.getElementById('editCarrierName').value = name || '';
                document.getElementById('editCarrierEmail').value = email || '';
                document.getElementById('editCarrierPhone').value = phone || '';
                document.getElementById('editCarrierAddress').value = address || '';
                document.getElementById('editCarrierStatus').value = status || 'active';
                document.getElementById('editCarrierCode').value = code || '';
                document.getElementById('editCarrierUsername').value = username || '';
                document.getElementById('editCarrierBusiness').value = business || '';
                document.getElementById('editCarrierDeliveryCapacity').value = deliveryCapacity || '';
                document.getElementById('editCarrierAveSize').value = aveSize || '';
                document.getElementById('editCarrierItemCat').value = itemCat || '';
                document.getElementById('editCarrierBizCat').value = bizCat || '';
                document.getElementById('editCarrierLocation').value = location || '';
                document.getElementById('editCarrierBadge').value = badge || '';

                editCarrierForm.action = '{{ route('admin.carriers.update', ':id') }}'.replace(':id', id);
            });
        }
    </script>
@endsection
