<!-- New Shipment Modal -->
<div class="modal fade" id="newShipmentModal" tabindex="-1" aria-labelledby="newShipmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newShipmentModalLabel">Create New Shipment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Customer <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="">Select customer</option>
                                <option>Acme Corporation</option>
                                <option>Globex Industries</option>
                                <option>Wayne Enterprises</option>
                                <option>Stark Industries</option>
                                <option>Oceanic Imports</option>
                                <option>TechCorp Solutions</option>
                                <option>Global Manufacturing</option>
                                <option>Fresh Foods Inc</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Priority <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="">Select priority</option>
                                <option value="high">High</option>
                                <option value="medium">Medium</option>
                                <option value="low">Low</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Origin <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="City, State/Country" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Destination <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="City, State/Country" required>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label">Weight (kg) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" placeholder="0.00" min="0" step="0.01"
                                required>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label">Value (₦) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" placeholder="0.00" min="0" step="0.01"
                                required>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label">Transport Type <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="">Select type</option>
                                <option value="road">Road</option>
                                <option value="air">Air</option>
                                <option value="sea">Sea</option>
                                <option value="rail">Rail</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Departure Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Estimated Arrival</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Shipment description or special instructions"></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Assign Driver</label>
                            <select class="form-select">
                                <option value="">Auto-assign</option>
                                <option>John Smith</option>
                                <option>Maria Lopez</option>
                                <option>Tony Blake</option>
                                <option>Priya Shah</option>
                                <option>Michael Chen</option>
                                <option>Sarah Johnson</option>
                                <option>Robert Davis</option>
                                <option>Lisa Wong</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Create Shipment</button>
            </div>
        </div>
    </div>
</div>

<!-- Shipment Detail Modal -->
<div class="modal fade" id="shipmentDetailModal" tabindex="-1" aria-labelledby="shipmentDetailModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shipmentDetailModalLabel">Shipment Details - <span
                        id="detailShipmentId">SH-2024-001</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <!-- Basic Information -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-light">
                                <h6 class="card-title mb-0">Basic Information</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold">Shipment ID</label>
                                        <p class="mb-0" id="detailId">SH-2024-001</p>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold">Customer</label>
                                        <p class="mb-0" id="detailCustomer">Acme Corporation</p>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold">Priority</label>
                                        <p class="mb-0"><span class="badge bg-danger-soft text-danger"
                                                id="detailPriority">High</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold">Status</label>
                                        <p class="mb-0"><span class="badge bg-primary" id="detailStatus">In
                                                Transit</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Route & Transport -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-header bg-light">
                                <h6 class="card-title mb-0">Route & Transport</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Origin → Destination</label>
                                    <p class="mb-0" id="detailRoute">New York, NY → Los Angeles, CA</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Transport Mode</label>
                                    <p class="mb-0"><i class="bi bi-truck text-primary me-1"></i><span
                                            id="detailTransport">Road Freight</span></p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Assigned Driver</label>
                                    <p class="mb-0" id="detailDriver">John Smith</p>
                                </div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <label class="form-label fw-semibold">Departure</label>
                                        <p class="mb-0" id="detailDeparture">May 15, 2024</p>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label fw-semibold">ETA</label>
                                        <p class="mb-0" id="detailETA">May 18, 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cargo Details -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-header bg-light">
                                <h6 class="card-title mb-0">Cargo Details</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <label class="form-label fw-semibold">Weight</label>
                                        <p class="mb-0" id="detailWeight">2,450 kg</p>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label fw-semibold">Value</label>
                                        <p class="mb-0 fw-semibold text-success" id="detailValue">₦72,350</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label class="form-label fw-semibold">Description</label>
                                    <p class="mb-0" id="detailDescription">Electronic components and industrial
                                        machinery parts. Handle with care - fragile items included.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tracking Timeline -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-light">
                                <h6 class="card-title mb-0">Tracking Timeline</h6>
                            </div>
                            <div class="card-body">
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <div class="timeline-marker bg-success"></div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">Shipment Created</h6>
                                            <p class="text-muted small mb-0">May 15, 2024 at 08:30 AM - Origin
                                                warehouse</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-marker bg-primary"></div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">In Transit</h6>
                                            <p class="text-muted small mb-0">May 15, 2024 at 10:15 AM - Departed
                                                from New York facility</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-marker bg-warning"></div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">Checkpoint: Chicago</h6>
                                            <p class="text-muted small mb-0">May 16, 2024 at 02:45 PM - Route
                                                verification completed</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item active">
                                        <div class="timeline-marker bg-primary"></div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">Current Location</h6>
                                            <p class="text-muted small mb-0">May 17, 2024 at 11:20 AM - En route to
                                                destination</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary me-2">
                    <i class="bi bi-pencil me-1"></i>Edit Shipment
                </button>
                <button type="button" class="btn btn-info">
                    <i class="bi bi-geo-alt me-1"></i>Track Live
                </button>
            </div>
        </div>
    </div>
</div>
