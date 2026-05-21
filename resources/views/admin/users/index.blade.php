@extends('layouts.app')

@section('content')
    </table>

    <main class="p-3 p-lg-4">
        <div class="section-header d-flex flex-wrap align-items-start justify-content-between gap-3 mb-3">
            <div>
                <h1 class="h2 mb-1">All Staff</h1>
                <p class="text-muted">Manage your team members and their permissions.
                </p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newOrderModal">
                    <i class="bi bi-plus-lg me-1"></i> New Staff
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


        <div class="card border-0 shadow-sm mb-4">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-surface-strong">
                        <tr>
                            <th class="py-3 px-3 text-start">
                                <input type="checkbox" class="form-check-input">
                            </th>
                            <th class="py-3 px-3 text-start text-muted small">ID</th>
                            <th class="py-3 px-3 text-start text-muted small">Staff</th>
                            <th class="py-3 px-3 text-start text-muted small">Email</th>
                            <th class="py-3 px-3 text-start text-muted small">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-bottom">
                                <td class="py-3 px-3 align-middle"><input type="checkbox" class="form-check-input">
                                </td>
                                <td class="py-3 px-3 align-middle">SH-2026-00{{ $user->id }}</td>
                                <td class="py-3 px-3 align-middle">{{ $user->name }}</td>
                                <td class="py-3 px-3 align-middle">{{ $user->email }}</td>
                                <td class="py-3 px-3 align-middle">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#viewUserModal" data-user-id="{{ $user->id }}"
                                                    data-user-name="{{ $user->name }}"
                                                    data-user-email="{{ $user->email }}"
                                                    data-user-phone="{{ $user->phone ?? '' }}"
                                                    data-user-status="{{ $user->status }}"><i
                                                        class="bi bi-eye me-2"></i>View Details</a></li>
                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#editOrderModal" data-user-id="{{ $user->id }}"
                                                    data-user-name="{{ $user->name }}"
                                                    data-user-email="{{ $user->email }}"
                                                    data-user-phone="{{ $user->phone ?? '' }}"
                                                    data-user-status="{{ $user->status }}"><i
                                                        class="bi bi-pencil me-2"></i>Edit</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <form method="POST"
                                                    action="{{ route('admin.users.destroy', $user->id) }}"
                                                    onsubmit="return confirm('Delete this user?');">
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="newOrderModal" tabindex="-1" aria-labelledby="newOrderModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newOrderModalLabel">Create new staff</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control"
                                        value="{{ old('name') }}" required />
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control"
                                        value="{{ old('email') }}" required />
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input name="phone" type="text" class="form-control"
                                        value="{{ old('phone') }}" />
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" required />
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Confirm Password</label>
                                    <input name="password_confirmation" type="password" class="form-control" required />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Avatar</label>
                                    <input name="image" type="file" class="form-control" accept="image/*" />
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create staff</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-sm">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="viewUserModalLabel">Staff details</h5>
                            <p class="text-muted small mb-0">Review staff profile, contact details, and account status.</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-4">
                            <div class="col-lg-5">
                                <div class="card card-soft h-100">
                                    <div class="card-body">
                                        <p class="text-muted small mb-1">Staff ID</p>
                                        <p class="fw-semibold mb-3" id="viewUserId"></p>
                                        <p class="text-muted small mb-1">Name</p>
                                        <p class="fw-semibold mb-3" id="viewUserNameDisplay"></p>
                                        <p class="text-muted small mb-1">Email</p>
                                        <p class="fw-semibold mb-3" id="viewUserEmailDisplay"></p>
                                        <p class="text-muted small mb-1">Phone</p>
                                        <p class="fw-semibold mb-3" id="viewUserPhoneDisplay"></p>
                                        <p class="text-muted small mb-1">Status</p>
                                        <p class="fw-semibold mb-0" id="viewUserStatusDisplay"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <h6 class="mb-3">Profile summary</h6>
                                        <p class="text-muted mb-2"><strong>Joined:</strong> <span
                                                id="viewUserJoined">N/A</span></p>
                                        <p class="text-muted mb-2"><strong>Role:</strong> <span
                                                id="viewUserRole">Staff</span></p>
                                        <p class="text-muted mb-2"><strong>Account status:</strong> <span
                                                id="viewUserStatusSummary">N/A</span></p>
                                        <hr>
                                        <h6 class="mb-3">Notes</h6>
                                        <p class="text-muted mb-0">Use this modal to confirm staff details before editing
                                            or deleting their account.</p>
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
                        <h5 class="modal-title" id="editOrderModalLabel">Edit staff</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editUserForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input id="editUserName" name="name" type="text" class="form-control"
                                        required />
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input id="editUserEmail" name="email" type="email" class="form-control"
                                        required />
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input id="editUserPhone" name="phone" type="text" class="form-control" />
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Status</label>
                                    <select id="editUserStatus" name="status" class="form-select">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Password (leave blank to keep current)</label>
                                    <input id="editUserPassword" name="password" type="password" class="form-control" />
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Confirm Password</label>
                                    <input name="password_confirmation" type="password" class="form-control" />
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Avatar</label>
                                    <input name="image" type="file" class="form-control" accept="image/*" />
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            const editModal = document.getElementById('editOrderModal');
            const editUserForm = document.getElementById('editUserForm');

            editModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const userId = button.getAttribute('data-user-id');
                const userName = button.getAttribute('data-user-name');
                const userEmail = button.getAttribute('data-user-email');
                const userPhone = button.getAttribute('data-user-phone');
                const userStatus = button.getAttribute('data-user-status');

                document.getElementById('editUserName').value = userName;
                document.getElementById('editUserEmail').value = userEmail;
                document.getElementById('editUserPhone').value = userPhone;
                document.getElementById('editUserStatus').value = userStatus;

                editUserForm.setAttribute('action', '{{ route('admin.users.update', ':id') }}'.replace(':id', userId));
            });

            const viewModal = document.getElementById('viewUserModal');

            viewModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const userId = button.getAttribute('data-user-id');
                const userName = button.getAttribute('data-user-name');
                const userEmail = button.getAttribute('data-user-email');
                const userPhone = button.getAttribute('data-user-phone');
                const userStatus = button.getAttribute('data-user-status');

                document.getElementById('viewUserId').textContent = 'SH-2026-00' + userId;
                document.getElementById('viewUserNameDisplay').textContent = userName;
                document.getElementById('viewUserEmailDisplay').textContent = userEmail;
                document.getElementById('viewUserPhoneDisplay').textContent = userPhone || 'N/A';
                document.getElementById('viewUserStatusDisplay').textContent = userStatus || 'N/A';
                document.getElementById('viewUserStatusSummary').textContent = userStatus ? userStatus.charAt(0)
                    .toUpperCase() + userStatus.slice(1) : 'N/A';
            });
        </script>

    </main>
@endsection
