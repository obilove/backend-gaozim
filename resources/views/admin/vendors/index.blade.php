@extends('layouts.app')

@section('content')
    <main class="p-3 p-lg-4">
        <div class="section-header d-flex flex-wrap align-items-start justify-content-between gap-3 mb-3">
            <div>
                <h1 class="h2 mb-1">All Vendors</h1>
                <p class="text-muted">Manage vendor relationships, track performance, and coordinate deliveries across your
                    logistics network.</p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newVendorModal">
                    <i class="bi bi-plus-lg me-1"></i> New Vendor
                </button>
                <button class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-download me-1"></i> Export
                </button>
                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-funnel me-1"></i> Filter
                </button>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Total Vendors</p>
                                <h3 class="mb-0">{{ $totalVendors }}</h3>
                            </div>
                            <div class="metric-badge bg-primary-soft text-primary">
                                <i class="bi bi-card-checklist"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Connected vendors</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Active Vendors</p>
                                <h3 class="mb-0">{{ $activeVendors }}</h3>
                            </div>
                            <div class="metric-badge bg-success-soft text-success">
                                <i class="bi bi-check-circle"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Currently active</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Inactive Vendors</p>
                                <h3 class="mb-0">{{ $inactiveVendors }}</h3>
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
                                <h3 class="mb-0">{{ $vendors->count() }}</h3>
                            </div>
                            <div class="metric-badge bg-info-soft text-info">
                                <i class="bi bi-grid-1x2"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Displayed vendors</p>
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
                                <th class="py-3 px-3 text-start text-muted small">Vendor</th>
                                <th class="py-3 px-3 text-start text-muted small">Email</th>
                                <th class="py-3 px-3 text-start text-muted small">Phone</th>
                                <th class="py-3 px-3 text-start text-muted small">Business</th>
                                <th class="py-3 px-3 text-start text-muted small">Location</th>
                                <th class="py-3 px-3 text-start text-muted small">Status</th>
                                <th class="py-3 px-3 text-start text-muted small">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($vendors as $vendor)
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle">{{ $vendor->name }}</td>
                                    <td class="py-3 px-3 align-middle">{{ $vendor->email }}</td>
                                    <td class="py-3 px-3 align-middle">{{ $vendor->phone }}</td>
                                    <td class="py-3 px-3 align-middle">{{ $vendor->business ?? '—' }}</td>
                                    <td class="py-3 px-3 align-middle">{{ $vendor->location ?? '—' }}</td>
                                    <td class="py-3 px-3 align-middle">
                                        <span
                                            class="badge {{ $vendor->status === 'active' ? 'bg-success' : 'bg-warning text-dark' }}">{{ ucfirst($vendor->status) }}</span>
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
                                                        data-bs-target="#viewVendorModal" data-wh-id="{{ $vendor->id }}"
                                                        data-wh-name="{{ $vendor->name }}"
                                                        data-wh-email="{{ $vendor->email }}"
                                                        data-wh-phone="{{ $vendor->phone }}"
                                                        data-wh-status="{{ $vendor->status }}"
                                                        data-wh-user-type="{{ $vendor->user_type }}"
                                                        data-wh-account-type="{{ $vendor->account_type }}"
                                                        data-wh-business="{{ $vendor->business }}"
                                                        data-wh-delivery-capacity="{{ $vendor->delivery_capacity }}"
                                                        data-wh-ave-size="{{ $vendor->ave_size }}"
                                                        data-wh-item-cat="{{ $vendor->item_cat }}"
                                                        data-wh-biz-cat="{{ $vendor->biz_cat }}"
                                                        data-wh-username="{{ $vendor->username }}"
                                                        data-wh-address="{{ $vendor->address }}"
                                                        data-wh-location="{{ $vendor->location }}"
                                                        data-wh-badge="{{ $vendor->badge }}">
                                                        <i class="bi bi-eye me-2"></i>View
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editVendorModal"
                                                        data-wh-id="{{ $vendor->id }}"
                                                        data-wh-name="{{ $vendor->name }}"
                                                        data-wh-email="{{ $vendor->email }}"
                                                        data-wh-phone="{{ $vendor->phone }}"
                                                        data-wh-status="{{ $vendor->status }}"
                                                        data-wh-user-type="{{ $vendor->user_type }}"
                                                        data-wh-account-type="{{ $vendor->account_type }}"
                                                        data-wh-business="{{ $vendor->business }}"
                                                        data-wh-delivery-capacity="{{ $vendor->delivery_capacity }}"
                                                        data-wh-ave-size="{{ $vendor->ave_size }}"
                                                        data-wh-item-cat="{{ $vendor->item_cat }}"
                                                        data-wh-biz-cat="{{ $vendor->biz_cat }}"
                                                        data-wh-username="{{ $vendor->username }}"
                                                        data-wh-address="{{ $vendor->address }}"
                                                        data-wh-location="{{ $vendor->location }}"
                                                        data-wh-badge="{{ $vendor->badge }}">
                                                        <i class="bi bi-pencil me-2"></i>Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <form method="POST"
                                                        action="{{ route('admin.vendors.destroy', $vendor->id) }}"
                                                        onsubmit="return confirm('Delete this vendor? This cannot be undone.');">
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
                                    <td colspan="7" class="text-center py-4 text-muted">No vendors found. Add a vendor
                                        to get started.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-4">
            {{ $vendors->links() }}
        </div>

        <div class="modal fade" id="newVendorModal" tabindex="-1" aria-labelledby="newVendorModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="newVendorModalLabel">Add new vendor</h5>
                            <p class="text-muted small mb-0">Create a vendor record and assign business, location, and
                                capacity details.</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.vendors.store') }}" method="POST">
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
                                <div class="col-md-4">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option value="active" selected>Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">User type</label>
                                    <select class="form-select" name="user_type">
                                        <option value="consumer" selected>Consumer</option>
                                        <option value="vendor">Vendor</option>
                                        <option value="partner">Partner</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Account type</label>
                                    <select class="form-select" name="account_type">
                                        <option value="Personal" selected>Personal</option>
                                        <option value="Business">Business</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Business</label>
                                    <input type="text" name="business" class="form-control"
                                        value="{{ old('business') }}">
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
                                    <label class="form-label">Warehouse manager</label>
                                    <input type="text" name="username" class="form-control"
                                        value="{{ old('username') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control"
                                        value="{{ old('address') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" class="form-control"
                                        value="{{ old('location') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Badge</label>
                                    <input type="text" name="badge" class="form-control"
                                        value="{{ old('badge') }}">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Create vendor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editVendorModal" tabindex="-1" aria-labelledby="editVendorModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="editVendorModalLabel">Edit vendor</h5>
                            <p class="text-muted small mb-0">Update the vendor profile and delivery details.</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="editVendorForm" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" id="editVendorName" class="form-control"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" id="editVendorEmail" class="form-control"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" id="editVendorPhone" class="form-control"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Leave blank to keep current password">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status" id="editVendorStatus">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">User type</label>
                                    <select class="form-select" name="user_type" id="editVendorUserType">
                                        <option value="consumer">Consumer</option>
                                        <option value="vendor">Vendor</option>
                                        <option value="partner">Partner</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Account type</label>
                                    <select class="form-select" name="account_type" id="editVendorAccountType">
                                        <option value="Personal">Personal</option>
                                        <option value="Business">Business</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Business</label>
                                    <input type="text" name="business" id="editVendorBusiness" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Delivery capacity</label>
                                    <input type="text" name="delivery_capacity" id="editVendorDeliveryCapacity"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Average size</label>
                                    <input type="text" name="ave_size" id="editVendorAveSize" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Item category</label>
                                    <input type="text" name="item_cat" id="editVendorItemCat" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Business category</label>
                                    <input type="text" name="biz_cat" id="editVendorBizCat" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Vendor username</label>
                                    <input type="text" name="username" id="editVendorUsername" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" id="editVendorAddress" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" id="editVendorLocation" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Badge</label>
                                    <input type="text" name="badge" id="editVendorBadge" class="form-control">
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

        <div class="modal fade" id="viewVendorModal" tabindex="-1" aria-labelledby="viewVendorModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="viewVendorModalLabel">Vendor details</h5>
                            <p class="text-muted small mb-0">Review vendor profile, business and delivery information.</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="card card-soft h-100">
                                    <div class="card-body">
                                        <p class="text-muted small mb-1">Name</p>
                                        <p class="fw-semibold mb-3" id="viewVendorName"></p>
                                        <p class="text-muted small mb-1">Email</p>
                                        <p class="fw-semibold mb-3" id="viewVendorEmail"></p>
                                        <p class="text-muted small mb-1">Phone</p>
                                        <p class="fw-semibold mb-3" id="viewVendorPhone"></p>
                                        <p class="text-muted small mb-1">Status</p>
                                        <p class="fw-semibold mb-3"><span class="badge" id="viewVendorStatus"></span>
                                        </p>
                                        <p class="text-muted small mb-1">User type</p>
                                        <p class="fw-semibold mb-3" id="viewVendorUserType"></p>
                                        <p class="text-muted small mb-1">Account type</p>
                                        <p class="fw-semibold mb-0" id="viewVendorAccountType"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <h6 class="mb-3">Business details</h6>
                                        <p class="text-muted mb-2"><strong>Business:</strong> <span
                                                id="viewVendorBusiness"></span></p>
                                        <p class="text-muted mb-2"><strong>Delivery capacity:</strong> <span
                                                id="viewVendorDeliveryCapacity"></span></p>
                                        <p class="text-muted mb-2"><strong>Average size:</strong> <span
                                                id="viewVendorAveSize"></span></p>
                                        <p class="text-muted mb-2"><strong>Item category:</strong> <span
                                                id="viewVendorItemCat"></span></p>
                                        <p class="text-muted mb-2"><strong>Business category:</strong> <span
                                                id="viewVendorBizCat"></span></p>
                                        <p class="text-muted mb-2"><strong>Username:</strong> <span
                                                id="viewVendorUsername"></span></p>
                                        <p class="text-muted mb-2"><strong>Address:</strong> <span
                                                id="viewVendorAddress"></span></p>
                                        <p class="text-muted mb-2"><strong>Location:</strong> <span
                                                id="viewVendorLocation"></span></p>
                                        <p class="text-muted mb-0"><strong>Badge:</strong> <span
                                                id="viewVendorBadge"></span></p>
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
        const viewVendorModal = document.getElementById('viewVendorModal');
        const editVendorModal = document.getElementById('editVendorModal');
        const editVendorForm = document.getElementById('editVendorForm');

        if (viewVendorModal) {
            viewVendorModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-wh-id');
                const name = button.getAttribute('data-wh-name');
                const email = button.getAttribute('data-wh-email');
                const phone = button.getAttribute('data-wh-phone');
                const status = button.getAttribute('data-wh-status');
                const userType = button.getAttribute('data-wh-user-type');
                const accountType = button.getAttribute('data-wh-account-type');
                const business = button.getAttribute('data-wh-business');
                const deliveryCapacity = button.getAttribute('data-wh-delivery-capacity');
                const aveSize = button.getAttribute('data-wh-ave-size');
                const itemCat = button.getAttribute('data-wh-item-cat');
                const bizCat = button.getAttribute('data-wh-biz-cat');
                const username = button.getAttribute('data-wh-username');
                const address = button.getAttribute('data-wh-address');
                const location = button.getAttribute('data-wh-location');
                const badge = button.getAttribute('data-wh-badge');

                document.getElementById('viewVendorName').textContent = name || 'N/A';
                document.getElementById('viewVendorEmail').textContent = email || 'N/A';
                document.getElementById('viewVendorPhone').textContent = phone || 'N/A';
                document.getElementById('viewVendorStatus').textContent = status ? status.charAt(0).toUpperCase() +
                    status.slice(1) : 'N/A';
                document.getElementById('viewVendorUserType').textContent = userType || 'N/A';
                document.getElementById('viewVendorAccountType').textContent = accountType || 'N/A';
                document.getElementById('viewVendorBusiness').textContent = business || 'N/A';
                document.getElementById('viewVendorDeliveryCapacity').textContent = deliveryCapacity || 'N/A';
                document.getElementById('viewVendorAveSize').textContent = aveSize || 'N/A';
                document.getElementById('viewVendorItemCat').textContent = itemCat || 'N/A';
                document.getElementById('viewVendorBizCat').textContent = bizCat || 'N/A';
                document.getElementById('viewVendorUsername').textContent = username || 'N/A';
                document.getElementById('viewVendorAddress').textContent = address || 'N/A';
                document.getElementById('viewVendorLocation').textContent = location || 'N/A';
                document.getElementById('viewVendorBadge').textContent = badge || 'N/A';
            });
        }

        if (editVendorModal && editVendorForm) {
            editVendorModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-wh-id');
                const name = button.getAttribute('data-wh-name');
                const email = button.getAttribute('data-wh-email');
                const phone = button.getAttribute('data-wh-phone');
                const status = button.getAttribute('data-wh-status');
                const userType = button.getAttribute('data-wh-user-type');
                const accountType = button.getAttribute('data-wh-account-type');
                const business = button.getAttribute('data-wh-business');
                const deliveryCapacity = button.getAttribute('data-wh-delivery-capacity');
                const aveSize = button.getAttribute('data-wh-ave-size');
                const itemCat = button.getAttribute('data-wh-item-cat');
                const bizCat = button.getAttribute('data-wh-biz-cat');
                const username = button.getAttribute('data-wh-username');
                const address = button.getAttribute('data-wh-address');
                const location = button.getAttribute('data-wh-location');
                const badge = button.getAttribute('data-wh-badge');

                document.getElementById('editVendorName').value = name || '';
                document.getElementById('editVendorEmail').value = email || '';
                document.getElementById('editVendorPhone').value = phone || '';
                document.getElementById('editVendorStatus').value = status || 'active';
                document.getElementById('editVendorUserType').value = userType || 'consumer';
                document.getElementById('editVendorAccountType').value = accountType || 'Personal';
                document.getElementById('editVendorBusiness').value = business || '';
                document.getElementById('editVendorDeliveryCapacity').value = deliveryCapacity || '';
                document.getElementById('editVendorAveSize').value = aveSize || '';
                document.getElementById('editVendorItemCat').value = itemCat || '';
                document.getElementById('editVendorBizCat').value = bizCat || '';
                document.getElementById('editVendorUsername').value = username || '';
                document.getElementById('editVendorAddress').value = address || '';
                document.getElementById('editVendorLocation').value = location || '';
                document.getElementById('editVendorBadge').value = badge || '';

                editVendorForm.action = '{{ url('super-admin/vendors/update') }}/' + id;
            });
        }
    </script>
@endsection
