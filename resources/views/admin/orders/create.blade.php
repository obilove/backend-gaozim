@extends('layouts.app')

@section('content')
    <main class="p-3 p-lg-4">
        <div class="section-header">
            <div>
                <h1 class="h2 mb-1">Add Delivery Request</h1>
                <p class="text-muted">Schedule a new load with pickup, delivery, and priority details.</p>
            </div>
        </div>

        <!-- Stepper Progress -->
        <div class="stepper-container mb-4">
            <div class="stepper-progress">
                <div class="stepper-line"></div>
                <div class="stepper-steps">
                    <div class="step active" data-step="1">
                        <div class="step-circle">1</div>
                        <div class="step-label">Delivery Details</div>
                    </div>
                    <div class="step" data-step="2">
                        <div class="step-circle">2</div>
                        <div class="step-label">Route & Transport</div>
                    </div>
                    <div class="step" data-step="3">
                        <div class="step-circle">3</div>
                        <div class="step-label">Cargo Information</div>
                    </div>
                    <div class="step" data-step="4">
                        <div class="step-circle">4</div>
                        <div class="step-label">Review & Confirm</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stepper Form -->
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">

                <!-- Step 1: Shipment Details -->
                <div class="step-content active" id="step1">
                    <h4 class="mb-4">Shipment Details</h4>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-semibold">Customer <span class="text-danger">*</span></label>
                            <select class="form-select" id="customer" required>
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
                            <label class="form-label fw-semibold">Priority <span class="text-danger">*</span></label>
                            <select class="form-select" id="priority" required>
                                <option value="">Select priority</option>
                                <option value="high">High - Express Delivery</option>
                                <option value="medium">Medium - Standard Delivery</option>
                                <option value="low">Low - Economy Delivery</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Shipment Description</label>
                            <textarea class="form-control" id="description" rows="3" placeholder="Brief description of the shipment contents"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Route & Transport -->
                <div class="step-content" id="step2">
                    <h4 class="mb-4">Route & Transport</h4>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-semibold">Origin <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="origin" placeholder="City, State/Country"
                                required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-semibold">Destination <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="destination" placeholder="City, State/Country"
                                required>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label fw-semibold">Transport Type <span class="text-danger">*</span></label>
                            <select class="form-select" id="transportType" required>
                                <option value="">Select type</option>
                                <option value="road">Road Freight</option>
                                <option value="air">Air Cargo</option>
                                <option value="sea">Sea Freight</option>
                                <option value="rail">Rail</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label fw-semibold">Pickup Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="pickupDate" required>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label fw-semibold">Estimated Delivery</label>
                            <input type="date" class="form-control" id="deliveryDate">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Assign Driver</label>
                            <select class="form-select" id="assignedDriver">
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
                </div>

                <!-- Step 3: Cargo Information -->
                <div class="step-content" id="step3">
                    <h4 class="mb-4">Cargo Information</h4>
                    <div class="row g-3">
                        <div class="col-12 col-md-4">
                            <label class="form-label fw-semibold">Weight (kg) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="weight" placeholder="0.00" min="0"
                                step="0.01" required>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label fw-semibold">Value (₦) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="value" placeholder="0.00" min="0"
                                step="0.01" required>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label fw-semibold">Package Type</label>
                            <select class="form-select" id="packageType">
                                <option value="">Select type</option>
                                <option>Pallet</option>
                                <option>Container</option>
                                <option>Box</option>
                                <option>Loose Cargo</option>
                                <option>Hazardous Materials</option>
                                <option>Perishable Goods</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-semibold">Dimensions (L × W × H)</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="length" placeholder="Length (cm)">
                                <span class="input-group-text">×</span>
                                <input type="number" class="form-control" id="width" placeholder="Width (cm)">
                                <span class="input-group-text">×</span>
                                <input type="number" class="form-control" id="height" placeholder="Height (cm)">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-semibold">Insurance Required</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="insuranceRequired">
                                <label class="form-check-label" for="insuranceRequired">
                                    Yes, include cargo insurance
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Special Handling Instructions</label>
                            <textarea class="form-control" id="specialInstructions" rows="3"
                                placeholder="Fragile items, temperature requirements, security concerns, etc."></textarea>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Review & Confirm -->
                <div class="step-content" id="step4">
                    <h4 class="mb-4">Review & Confirm</h4>
                    <div class="review-section">
                        <div class="review-card mb-3">
                            <h6 class="review-title">Shipment Details</h6>
                            <div class="review-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>Customer:</strong> <span id="reviewCustomer">-</span><br>
                                        <strong>Priority:</strong> <span id="reviewPriority">-</span><br>
                                        <strong>Description:</strong> <span id="reviewDescription">-</span>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Transport:</strong> <span id="reviewTransport">-</span><br>
                                        <strong>Driver:</strong> <span id="reviewDriver">-</span><br>
                                        <strong>Pickup:</strong> <span id="reviewPickup">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="review-card mb-3">
                            <h6 class="review-title">Route Information</h6>
                            <div class="review-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>From:</strong> <span id="reviewOrigin">-</span><br>
                                        <strong>To:</strong> <span id="reviewDestination">-</span>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>ETA:</strong> <span id="reviewETA">-</span><br>
                                        <strong>Distance:</strong> <span id="reviewDistance">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="review-card mb-3">
                            <h6 class="review-title">Cargo Details</h6>
                            <div class="review-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>Weight:</strong> <span id="reviewWeight">-</span><br>
                                        <strong>Value:</strong> <span id="reviewValue">-</span>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Package Type:</strong> <span id="reviewPackageType">-</span><br>
                                        <strong>Insurance:</strong> <span id="reviewInsurance">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="review-card">
                            <h6 class="review-title">Cost Summary</h6>
                            <div class="review-content">
                                <div class="cost-breakdown">
                                    <div class="d-flex justify-content-between">
                                        <span>Base Freight:</span>
                                        <span id="reviewBaseCost">₦0.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Priority Surcharge:</span>
                                        <span id="reviewPriorityCost">₦0.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Insurance:</span>
                                        <span id="reviewInsuranceCost">₦0.00</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between fw-bold">
                                        <span>Total Cost:</span>
                                        <span id="reviewTotalCost">₦0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stepper Navigation -->
                <div class="stepper-navigation mt-4">
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-secondary" id="prevBtn" disabled>
                            <i class="bi bi-arrow-left me-1"></i> Previous
                        </button>
                        <div class="step-indicator">
                            Step <span id="currentStep">1</span> of 4
                        </div>
                        <button type="button" class="btn btn-primary" id="nextBtn">
                            Next <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
