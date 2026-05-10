




<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>

<body>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <aside id="sidebar" class="sidebar closed">
        <div class="d-flex align-items-center justify-content-between brand">
            <div>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="badge bg-primary rounded-circle p-2"><i class="bi bi-truck fs-5"></i></span>
                    <span class="fs-5 fw-semibold">Gaozim</span>
                </div>

            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary d-lg-none" id="sidebarClose"
                aria-label="Close sidebar">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        <div class="px-3">
            <div class="section-title">Dashboard</div>
            <a href="index.html" class="nav-link active"><i class="bi bi-speedometer2"></i> Overview</a>
            <a href="map.html" class="nav-link"><i class="bi bi-map"></i> Live Shipment Map</a>
            <a href="fleet-status.html" class="nav-link"><i class="bi bi-activity"></i> Fleet Status</a>
            <div class="section-title">Shipments</div>
            <a href="shipments.html" class="nav-link"><i class="bi bi-truck"></i> All Shipments</a>
            <a href="track.html" class="nav-link"><i class="bi bi-compass"></i> Track Shipment</a>
            <a href="create.html" class="nav-link"><i class="bi bi-plus-square"></i> Create Shipment</a>
            <a href="delayed.html" class="nav-link"><i class="bi bi-clock"></i> Delayed Shipments</a>
            <div class="section-title">Fleet Management</div>
            <a href="vehicles.html" class="nav-link"><i class="bi bi-bus-front"></i> Vehicle List</a>
            <a href="maintenance.html" class="nav-link"><i class="bi bi-wrench"></i> Maintenance Logs</a>
            <a href="drivers.html" class="nav-link"><i class="bi bi-person-badge"></i> Driver Assignments</a>
            <div class="section-title">Warehouses</div>
            <a href="warehouses.html" class="nav-link"><i class="bi bi-building"></i> Warehouse Locations</a>
            <a href="inventory.html" class="nav-link"><i class="bi bi-box-seam"></i> Inventory Levels</a>
            <a href="restock.html" class="nav-link"><i class="bi bi-cart-plus"></i> Restock Requests</a>
            <div class="section-title">Vendors & Clients</div>
            <a href="vendors.html" class="nav-link"><i class="bi bi-people"></i> Vendor Directory</a>
            <a href="clients.html" class="nav-link"><i class="bi bi-person-lines-fill"></i> Clients List</a>
            <a href="feedback.html" class="nav-link"><i class="bi bi-chat-left-text"></i> Client Feedback</a>
            <div class="section-title">Orders</div>
            <a href="orders.html" class="nav-link"><i class="bi bi-card-checklist"></i> All Orders</a>
            <a href="scheduled.html" class="nav-link"><i class="bi bi-calendar-check"></i> Scheduled Deliveries</a>
            <a href="returns.html" class="nav-link"><i class="bi bi-arrow-counterclockwise"></i> Returns</a>
            <a href="cancellations.html" class="nav-link"><i class="bi bi-x-circle"></i> Cancellations</a>
            <div class="section-title">Reports</div>
            <a href="delivery.html" class="nav-link"><i class="bi bi-bar-chart-line"></i> Delivery Performance</a>
            <a href="revenue.html" class="nav-link"><i class="bi bi-graph-up"></i> Revenue Analysis</a>
            <a href="fleet.html" class="nav-link"><i class="bi bi-pie-chart"></i> Fleet Efficiency</a>
            <div class="section-title">System Tools</div>
            <a href="settings.html" class="nav-link"><i class="bi bi-gear"></i> Settings</a>
            <a href="roles.html" class="nav-link"><i class="bi bi-shield-check"></i> Roles & Permissions</a>
            <a href="notifications.html" class="nav-link"><i class="bi bi-bell"></i> Notifications</a>
            <div class="section-title">Help & Logs</div>
            <a href="help.html" class="nav-link"><i class="bi bi-life-preserver"></i> Help Center</a>
            <a href="contact.html" class="nav-link"><i class="bi bi-telephone"></i> Contact</a>
            <a href="email.html" class="nav-link"><i class="bi bi-envelope"></i> Email</a>
            <a href="chat.html" class="nav-link"><i class="bi bi-chat-dots"></i> Chat</a>
            <a href="tickets.html" class="nav-link"><i class="bi bi-ticket-perforated"></i> Support Tickets</a>
            <a href="logs.html" class="nav-link"><i class="bi bi-journal-text"></i> Audit Logs</a>
            <a href="widgets.html" class="nav-link"><i class="bi bi-grid-3x3-gap-fill"></i> Widgets</a>
        </div>
    </aside>

    <div class="main-content">
        <header class="main-header sticky-top py-3 px-3 px-lg-4">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <div class="d-flex align-items-center gap-2">
                    <button class="btn btn-white btn-sm d-lg-none shadow-sm" type="button" id="sidebarToggle"
                        aria-label="Toggle sidebar">
                        <i class="bi bi-list"></i>
                    </button>
                    <form class="d-none d-md-flex align-items-center w-100 position-relative">
                        <i class="bi bi-search position-absolute text-muted"
                            style="left: 1rem; top: 50%; transform: translateY(-50%);"></i>
                        <input class="form-control rounded-pill ps-5 pe-3 py-2" type="search"
                            placeholder="Search shipments, clients, orders..." aria-label="Search" />
                    </form>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <button class="btn btn-white btn-icon shadow-sm" type="button" aria-label="Notifications"><i
                            class="bi bi-bell text-primary"></i><span
                            class="badge bg-danger rounded-circle position-absolute"
                            style="top: .25rem; right: .25rem; font-size:.65rem;">3</span></button>
                    <button class="btn btn-white btn-icon shadow-sm" type="button" aria-label="Language"><i
                            class="bi bi-globe2 text-primary"></i></button>
                    <div class="dropdown">
                        <button class="btn btn-white btn-icon shadow-sm" type="button" id="headerDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/user10848a.png') }}"
                                alt="User" class="rounded-circle" width="32" height="32" />
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2"
                            aria-labelledby="headerDropdown">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Billing</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main class="container-fluid px-3 px-lg-4 py-4">
         
         @yield('content')
        </main>
    </div>

    <div class="modal fade" id="addVehicleModal" tabindex="-1" aria-labelledby="addVehicleLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addVehicleLabel">Add New Vehicle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label class="form-label">Vehicle ID</label>
                                <input type="text" class="form-control" placeholder="Enter vehicle ID" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Vehicle Type</label>
                                <input type="text" class="form-control" placeholder="Truck, Van, Trailer" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">License Plate</label>
                                <input type="text" class="form-control" placeholder="ABC-1234" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Capacity</label>
                                <input type="text" class="form-control" placeholder="12 tons" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Assigned Driver</label>
                                <input type="text" class="form-control" placeholder="Driver name" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option selected>In service</option>
                                    <option>Maintenance</option>
                                    <option>Standby</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Vehicle</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="newShipmentModal" tabindex="-1" aria-labelledby="newShipmentLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newShipmentLabel">Create New Shipment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label class="form-label">Shipment ID</label>
                                <input type="text" class="form-control" placeholder="SH-2024-010" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Priority</label>
                                <select class="form-select">
                                    <option selected>Standard</option>
                                    <option>Express</option>
                                    <option>Overnight</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Origin</label>
                                <input type="text" class="form-control" placeholder="New York, NY" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Destination</label>
                                <input type="text" class="form-control" placeholder="Los Angeles, CA" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Pickup Date</label>
                                <input type="date" class="form-control" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Delivery Date</label>
                                <input type="date" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label">Special Instructions</label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Notes for driver or client"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create Shipment</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>