@extends('layouts.app')

@section('content')
   <section class="mb-4">
                <div
                    class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3">
                    <div>
                        <h1 class="h3 fw-bold mb-1">Dashboard Overview</h1>
                        <p class="text-muted mb-0">Welcome back! Here&apos;s what&apos;s happening with your logistics
                            operations.</p>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#addVehicleModal"><i class="bi bi-plus-lg me-1"></i>Add Vehicle</button>
                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#newShipmentModal"><i class="bi bi-truck me-1"></i>New Shipment</button>
                    </div>
                </div>
            </section>
            <section class="row g-3 mb-4">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-soft h-100 p-3">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small">Active Shipments</div>
                            </div>
                            <div class="metric-badge bg-success-soft text-success"><i class="bi bi-truck"></i></div>
                        </div>
                        <div class="metric-value">42</div>
                        <div class="metric-label">Currently in transit</div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <span class="metric-tag text-success bg-success-soft border border-success-soft">+12%</span>
                            <i class="bi bi-arrow-up-short text-success"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-soft h-100 p-3">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small">Delivered Today</div>
                            </div>
                            <div class="metric-badge bg-success-soft text-success"><i class="bi bi-box-seam"></i></div>
                        </div>
                        <div class="metric-value">28</div>
                        <div class="metric-label">Successful deliveries</div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <span class="metric-tag text-success bg-success-soft border border-success-soft">+8%</span>
                            <i class="bi bi-arrow-up-short text-success"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-soft h-100 p-3">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small">Pending Orders</div>
                            </div>
                            <div class="metric-badge bg-danger-soft text-danger"><i class="bi bi-clock"></i></div>
                        </div>
                        <div class="metric-value">156</div>
                        <div class="metric-label">Awaiting processing</div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <span class="metric-tag text-danger bg-danger-soft border border-danger-soft">-5%</span>
                            <i class="bi bi-arrow-down-short text-danger"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-soft h-100 p-3">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small">Revenue (MTD)</div>
                            </div>
                            <div class="metric-badge bg-success-soft text-success"><i class="bi bi-cash-stack"></i>
                            </div>
                        </div>
                        <div class="metric-value">₦284,590</div>
                        <div class="metric-label">Month to date</div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <span class="metric-tag text-success bg-success-soft border border-success-soft">+15%</span>
                            <i class="bi bi-arrow-up-short text-success"></i>
                        </div>
                    </div>
                </div>
            </section>
            <section class="row g-3 mb-4">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-soft h-100 p-3">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small">Active Shipments</div>
                            </div>
                            <div class="metric-badge bg-success-soft text-success"><i class="bi bi-truck"></i></div>
                        </div>
                        <div class="metric-value">42</div>
                        <div class="metric-label">Currently in transit</div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <span class="metric-tag text-success bg-success-soft border border-success-soft">+12%</span>
                            <i class="bi bi-arrow-up-short text-success"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-soft h-100 p-3">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small">Delivered Today</div>
                            </div>
                            <div class="metric-badge bg-success-soft text-success"><i class="bi bi-box-seam"></i></div>
                        </div>
                        <div class="metric-value">28</div>
                        <div class="metric-label">Successful deliveries</div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <span class="metric-tag text-success bg-success-soft border border-success-soft">+8%</span>
                            <i class="bi bi-arrow-up-short text-success"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-soft h-100 p-3">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small">Pending Orders</div>
                            </div>
                            <div class="metric-badge bg-danger-soft text-danger"><i class="bi bi-clock"></i></div>
                        </div>
                        <div class="metric-value">156</div>
                        <div class="metric-label">Awaiting processing</div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <span class="metric-tag text-danger bg-danger-soft border border-danger-soft">-5%</span>
                            <i class="bi bi-arrow-down-short text-danger"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-soft h-100 p-3">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small">Revenue (MTD)</div>
                            </div>
                            <div class="metric-badge bg-success-soft text-success"><i class="bi bi-cash-stack"></i>
                            </div>
                        </div>
                        <div class="metric-value">₦284,590</div>
                        <div class="metric-label">Month to date</div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <span class="metric-tag text-success bg-success-soft border border-success-soft">+15%</span>
                            <i class="bi bi-arrow-up-short text-success"></i>
                        </div>
                    </div>
                </div>
            </section>
            <section class="row g-3 mb-4">
                <div class="col-12 col-lg-8">
                    <div class="card card-soft h-100">
                        <div class="card-body">
                            <h5 class="card-title">Shipment Trends</h5>
                            <p class="text-muted small mb-4">Monthly shipment and delivery performance over the past
                                year.</p>
                            <div class="border rounded-3"
                                style="min-height: 280px; background: linear-gradient(to bottom right, rgba(22, 46, 28, .08), rgba(239, 246, 255, .6)); display:flex; align-items:center; justify-content:center;">
                                <span class="text-muted">Chart placeholder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card card-soft h-100">
                        <div class="card-body">
                            <h5 class="card-title d-flex align-items-center gap-2">Fleet Status Overview</h5>
                            <div class="row text-center gy-3 mt-3">
                                <div class="col-6">
                                    <div class="h4 fw-bold">45</div>
                                    <p class="small text-muted mb-0">Total Vehicles</p>
                                </div>
                                <div class="col-6">
                                    <div class="h4 fw-bold text-success">87%</div>
                                    <p class="small text-muted mb-0">Efficiency</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex justify-content-between small text-muted mb-2">
                                    <span>Active</span><span>71%</span>
                                </div>
                                <div class="progress progress-track mb-3">
                                    <div class="progress-bar bg-success" style="width: 71%;"></div>
                                </div>
                                <div class="d-flex justify-content-between small text-muted mb-2">
                                    <span>Maintenance</span><span>18%</span>
                                </div>
                                <div class="progress progress-track mb-3">
                                    <div class="progress-bar bg-warning" style="width: 18%;"></div>
                                </div>
                                <div class="d-flex justify-content-between small text-muted mb-2">
                                    <span>Available</span><span>11%</span>
                                </div>
                                <div class="progress progress-track">
                                    <div class="progress-bar bg-info" style="width: 11%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="row g-3 mb-4">
                <div class="col-12">
                    <div class="card card-soft">
                        <div class="card-body">
                            <div
                                class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-3">
                                <div>
                                    <h5 class="card-title mb-1">Quick Actions</h5>
                                    <p class="text-muted small mb-0">Launch the most important logistics workflows
                                        quickly.</p>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6 col-md-3">
                                    <button
                                        class="btn btn-outline-primary quick-action-btn w-100 h-100 rounded-4 py-4 d-flex flex-column align-items-start gap-2 text-start"
                                        data-bs-toggle="modal" data-bs-target="#newShipmentModal">
                                        <span class="fs-4"><i class="bi bi-box-seam"></i></span>
                                        <strong>New Shipment</strong>
                                        <small class="text-muted">Create order</small>
                                    </button>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <button
                                        class="btn btn-outline-primary quick-action-btn w-100 h-100 rounded-4 py-4 d-flex flex-column align-items-start gap-2 text-start"
                                        data-bs-toggle="modal" data-bs-target="#addVehicleModal">
                                        <span class="fs-4"><i class="bi bi-truck"></i></span>
                                        <strong>Add Vehicle</strong>
                                        <small class="text-muted">Register fleet asset</small>
                                    </button>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <button
                                        class="btn btn-outline-primary quick-action-btn w-100 h-100 rounded-4 py-4 d-flex flex-column align-items-start gap-2 text-start">
                                        <span class="fs-4"><i class="bi bi-geo-alt"></i></span>
                                        <strong>Top Routes</strong>
                                        <small class="text-muted">Review best corridors</small>
                                    </button>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <button
                                        class="btn btn-outline-primary quick-action-btn w-100 h-100 rounded-4 py-4 d-flex flex-column align-items-start gap-2 text-start">
                                        <span class="fs-4"><i class="bi bi-bell"></i></span>
                                        <strong>Alerts</strong>
                                        <small class="text-muted">View critical updates</small>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-4">
                <div class="section-header">
                    <div>
                        <h2 class="section-title-large mb-1">Performance Highlights</h2>
                        <p class="section-note mb-0">Key metrics across shipments, delivery, and fleet efficiency.</p>
                    </div>
                </div>
            </section>

            <section class="row g-3 mb-4">
                <div class="col-12 col-lg-4">
                    <div class="card card-soft h-100 p-3">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small">On-Time Delivery</div>
                            </div>
                            <div class="metric-badge bg-success-soft text-success"><i class="bi bi-check-circle"></i>
                            </div>
                        </div>
                        <div class="metric-value">94%</div>
                        <div class="metric-label">Strength of deliveries</div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <span class="metric-tag text-success bg-success-soft border border-success-soft">+4%</span>
                            <i class="bi bi-arrow-up-short text-success"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card card-soft h-100 p-3">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small">Route Efficiency</div>
                            </div>
                            <div class="metric-badge bg-info-soft text-info"><i class="bi bi-speedometer2"></i></div>
                        </div>
                        <div class="metric-value">78%</div>
                        <div class="metric-label">Fuel and time savings</div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <span class="metric-tag text-info bg-info-soft border border-info-soft">+2%</span>
                            <i class="bi bi-arrow-up-short text-info"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card card-soft h-100 p-3">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small">Alerts Resolved</div>
                            </div>
                            <div class="metric-badge bg-warning-soft text-warning"><i class="bi bi-bell"></i></div>
                        </div>
                        <div class="metric-value">12</div>
                        <div class="metric-label">This week</div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <span class="metric-tag text-warning bg-warning-soft border border-warning-soft">+1</span>
                            <i class="bi bi-arrow-up-short text-warning"></i>
                        </div>
                    </div>
                </div>
            </section>

            <section class="row g-3 mb-4">
                <div class="col-12 col-lg-8">
                    <div class="card card-soft h-100">
                        <div class="card-body">
                            <h5 class="card-title">Top Routes</h5>
                            <p class="text-muted small mb-3">Most active delivery corridors this month.</p>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Route</th>
                                            <th>Shipments</th>
                                            <th>On-time</th>
                                            <th>Driver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>NYC - LA</td>
                                            <td>112</td>
                                            <td><span class="badge bg-success">98%</span></td>
                                            <td>Alex Kim</td>
                                        </tr>
                                        <tr>
                                            <td>Chicago - Houston</td>
                                            <td>89</td>
                                            <td><span class="badge bg-success">96%</span></td>
                                            <td>Maria Lopez</td>
                                        </tr>
                                        <tr>
                                            <td>Miami - Atlanta</td>
                                            <td>74</td>
                                            <td><span class="badge bg-success">93%</span></td>
                                            <td>Tony Blake</td>
                                        </tr>
                                        <tr>
                                            <td>Seattle - Denver</td>
                                            <td>61</td>
                                            <td><span class="badge bg-warning">88%</span></td>
                                            <td>Priya Shah</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card card-soft h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <h5 class="card-title mb-0">Alerts & Notifications</h5>
                                    <p class="text-muted small mb-0">Critical operational updates.</p>
                                </div>
                                <span class="badge bg-danger">4 New</span>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item rounded-3 mb-2 border">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="rounded-3 bg-danger-soft text-danger d-flex align-items-center justify-content-center"
                                            style="width: 44px; height: 44px;"><i class="bi bi-exclamation-circle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0">Route delay alert</h6>
                                                <span class="text-muted small">5m ago</span>
                                            </div>
                                            <p class="small text-muted mb-0">Route Seattle - Denver is delayed due to
                                                weather.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item rounded-3 mb-2 border">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="rounded-3 bg-warning-soft text-warning d-flex align-items-center justify-content-center"
                                            style="width: 44px; height: 44px;"><i class="bi bi-bell"></i></div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0">Maintenance due</h6>
                                                <span class="text-muted small">18m ago</span>
                                            </div>
                                            <p class="small text-muted mb-0">Truck TRK-018 requires inspection tomorrow.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item rounded-3 mb-2 border">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="rounded-3 bg-info-soft text-info d-flex align-items-center justify-content-center"
                                            style="width: 44px; height: 44px;"><i class="bi bi-info-circle"></i></div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0">New shipment assigned</h6>
                                                <span class="text-muted small">30m ago</span>
                                            </div>
                                            <p class="small text-muted mb-0">Shipment #SH-2024-009 assigned to driver
                                                Mike.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item rounded-3 border">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="rounded-3 bg-success-soft text-success d-flex align-items-center justify-content-center"
                                            style="width: 44px; height: 44px;"><i class="bi bi-check-circle"></i></div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0">Alert resolved</h6>
                                                <span class="text-muted small">1h ago</span>
                                            </div>
                                            <p class="small text-muted mb-0">Issue on route NYC - LA has been cleared.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="row g-3 mb-4">
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card card-soft h-100">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Fleet Utilization</h5>
                            <p class="text-muted small mb-3">Vehicle efficiency</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <div class="h4 mb-0">87%</div>
                                </div>
                                <span class="badge text-success bg-success-soft">+3%</span>
                            </div>
                            <div class="progress progress-track mb-3">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 87%;"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="small text-muted"><i class="bi bi-check-circle-fill text-success me-1"></i>
                                    Active</div>
                                <span class="small badge bg-success-soft text-success">71%</span>
                            </div>
                            <div class="progress progress-track mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 71%;"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="small text-muted"><i class="bi bi-wrench text-warning me-1"></i> Maintenance
                                </div>
                                <span class="small badge bg-warning-soft text-warning">18%</span>
                            </div>
                            <div class="progress progress-track mb-3">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 18%;"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="small text-muted"><i
                                        class="bi bi-exclamation-triangle-fill text-info me-1"></i> Available</div>
                                <span class="small badge bg-info-soft text-info">11%</span>
                            </div>
                            <div class="progress progress-track">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 11%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-8">
                    <div class="card card-soft h-100">
                        <div class="card-body">
                            <h5 class="card-title">Fleet Status Overview</h5>
                            <div class="row text-center gy-3 mt-3">
                                <div class="col-6 col-xl-3">
                                    <div class="h4 fw-bold mb-1">45</div>
                                    <p class="small text-muted mb-0">Total Vehicles</p>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="h4 fw-bold text-success mb-1">87%</div>
                                    <p class="small text-muted mb-0">Efficiency</p>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="h4 fw-bold mb-1">32</div>
                                    <p class="small text-muted mb-0">Active</p>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="h4 fw-bold mb-1">8</div>
                                    <p class="small text-muted mb-0">Maintenance</p>
                                </div>
                            </div>
                            <div class="row gy-3 mt-4">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between small text-muted mb-2"><span><i
                                                class="bi bi-check-circle-fill text-success me-1"></i>
                                            Active</span><span>71%</span></div>
                                    <div class="progress progress-track mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 71%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-between small text-muted mb-2"><span><i
                                                class="bi bi-wrench text-warning me-1"></i>
                                            Maintenance</span><span>18%</span></div>
                                    <div class="progress progress-track mb-3">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 18%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-between small text-muted mb-2"><span><i
                                                class="bi bi-exclamation-triangle-fill text-info me-1"></i>
                                            Available</span><span>11%</span></div>
                                    <div class="progress progress-track">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 11%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="row g-3 mb-4">
                <div class="col-12">
                    <div class="card card-soft h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <h5 class="card-title mb-1">Active Deliveries</h5>
                                    <p class="text-muted small mb-0">Current shipments in transit and their status.</p>
                                </div>
                                <button class="btn btn-outline-primary btn-sm"><i class="bi bi-eye me-1"></i> View
                                    All</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Shipment ID</th>
                                            <th>Customer</th>
                                            <th>Route</th>
                                            <th>ETA</th>
                                            <th>Status</th>
                                            <th>Driver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SH-2024-001</td>
                                            <td>Acme Corporation</td>
                                            <td>NYC → LA</td>
                                            <td>May 18, 2:30 PM</td>
                                            <td><span class="badge bg-primary">In Transit</span></td>
                                            <td>John Smith</td>
                                        </tr>
                                        <tr>
                                            <td>SH-2024-002</td>
                                            <td>Globex Industries</td>
                                            <td>CHI → HOU</td>
                                            <td>May 17, 6:45 PM</td>
                                            <td><span class="badge bg-primary">In Transit</span></td>
                                            <td>Maria Lopez</td>
                                        </tr>
                                        <tr>
                                            <td>SH-2024-003</td>
                                            <td>Wayne Enterprises</td>
                                            <td>MIA → ATL</td>
                                            <td>May 17, 4:15 PM</td>
                                            <td><span class="badge bg-warning text-dark">Delayed</span></td>
                                            <td>Tony Blake</td>
                                        </tr>
                                        <tr>
                                            <td>SH-2024-004</td>
                                            <td>Stark Industries</td>
                                            <td>SFO → TOK</td>
                                            <td>May 15, 8:00 AM</td>
                                            <td><span class="badge bg-success">Delivered</span></td>
                                            <td>Priya Shah</td>
                                        </tr>
                                        <tr>
                                            <td>SH-2024-005</td>
                                            <td>Oceanic Imports</td>
                                            <td>SHA → SEA</td>
                                            <td>May 20, 11:30 AM</td>
                                            <td><span class="badge bg-primary">In Transit</span></td>
                                            <td>Mike Johnson</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="row g-3">
                <div class="col-12 col-xl-8">
                    <div class="card card-soft h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <h5 class="card-title mb-1">Recent Activity</h5>
                                    <p class="text-muted small mb-0">Latest shipment and fleet updates.</p>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item rounded-3 mb-2 border">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="rounded-3 bg-primary-soft text-primary d-flex align-items-center justify-content-center"
                                            style="width: 44px; height: 44px;"><i class="bi bi-truck"></i></div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0">New shipment created</h6>
                                                <span class="text-muted small">2m ago</span>
                                            </div>
                                            <p class="small text-muted mb-1">Shipment #SH-2024-001 from New York to Los
                                                Angeles.</p>
                                            <div class="d-flex align-items-center gap-2 small text-muted"><span
                                                    class="badge rounded-circle bg-secondary-soft text-secondary"
                                                    style="width: 28px; height: 28px; display:inline-flex; align-items:center; justify-content:center;">JD</span>
                                                John Doe</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item rounded-3 mb-2 border">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="rounded-3 bg-success-soft text-success d-flex align-items-center justify-content-center"
                                            style="width: 44px; height: 44px;"><i class="bi bi-box-seam"></i></div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0">Delivery completed</h6>
                                                <span class="text-muted small">15m ago</span>
                                            </div>
                                            <p class="small text-muted mb-1">Package #PKG-789 delivered successfully to
                                                client.</p>
                                            <div class="d-flex align-items-center gap-2 small text-muted"><span
                                                    class="badge rounded-circle bg-secondary-soft text-secondary"
                                                    style="width: 28px; height: 28px; display:inline-flex; align-items:center; justify-content:center;">SW</span>
                                                Sarah Wilson</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item rounded-3 mb-2 border">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="rounded-3 bg-warning-soft text-warning d-flex align-items-center justify-content-center"
                                            style="width: 44px; height: 44px;"><i
                                                class="bi bi-exclamation-triangle-fill"></i></div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0">Vehicle maintenance due</h6>
                                                <span class="text-muted small">1h ago</span>
                                            </div>
                                            <p class="small text-muted mb-1">Truck TRK-042 requires scheduled
                                                maintenance.</p>
                                            <div class="d-flex align-items-center gap-2 small text-muted"><span
                                                    class="badge rounded-circle bg-secondary-soft text-secondary"
                                                    style="width: 28px; height: 28px; display:inline-flex; align-items:center; justify-content:center;">MJ</span>
                                                Mike Johnson</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item rounded-3 border">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="rounded-3 bg-danger-soft text-danger d-flex align-items-center justify-content-center"
                                            style="width: 44px; height: 44px;"><i class="bi bi-truck"></i></div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0">Shipment delayed</h6>
                                                <span class="text-muted small">2h ago</span>
                                            </div>
                                            <p class="small text-muted mb-1">SH-2024-002 delayed due to weather
                                                conditions.</p>
                                            <div class="d-flex align-items-center gap-2 small text-muted"><span
                                                    class="badge rounded-circle bg-secondary-soft text-secondary"
                                                    style="width: 28px; height: 28px; display:inline-flex; align-items:center; justify-content:center;">EC</span>
                                                Emily Chen</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
