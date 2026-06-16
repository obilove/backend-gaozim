@extends('layouts.app')

@section('content')
    <main class="p-3 p-lg-4">
        <div class="section-header">
            <div>
                <h1 class="h2 mb-1">Add Delivery Request</h1>
                <p class="text-muted">Schedule a new order using the database-backed delivery and cargo fields.</p>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="orderStepperForm" method="POST" action="{{ route('admin.orders.store') }}">
            @csrf

            <!-- Stepper Progress -->
            <div class="stepper-container mb-4">
                <div class="stepper-progress">
                    <div class="stepper-line"></div>
                    <div class="stepper-steps">
                        <div class="step active" data-step="1">
                            <div class="step-circle">1</div>
                            <div class="step-label">Order Details</div>
                        </div>
                        <div class="step" data-step="2">
                            <div class="step-circle">2</div>
                            <div class="step-label">Delivery Schedule</div>
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

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="step-content active" id="step1">
                        <h4 class="mb-4">Order Details</h4>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Customer <span class="text-danger">*</span></label>
                                <select class="form-select" name="user_id" id="customer" required>
                                    <option value="">Select customer</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Vendor</label>
                                <select class="form-select" name="vendor_id">
                                    <option value="">Unassigned</option>
                                    @foreach ($vendors as $vendor)
                                        <option value="{{ $vendor->id }}"
                                            {{ old('vendor_id') == $vendor->id ? 'selected' : '' }}>
                                            {{ $vendor->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Carrier</label>
                                <select class="form-select" name="carrier_id" id="assignedDriver">
                                    <option value="">Auto-assign</option>
                                    @foreach ($carriers as $carrier)
                                        <option value="{{ $carrier->id }}"
                                            {{ old('carrier_id') == $carrier->id ? 'selected' : '' }}>
                                            {{ $carrier->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Warehouse</label>
                                <select class="form-select" name="warehouse_id">
                                    <option value="">Unassigned</option>
                                    @foreach ($warehouses as $warehouse)
                                        <option value="{{ $warehouse->id }}"
                                            {{ old('warehouse_id') == $warehouse->id ? 'selected' : '' }}>
                                            {{ $warehouse->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Delivery Type <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="delivery_type" id="deliveryType" required>
                                    <option value="">Choose delivery direction</option>
                                    <option value="send" {{ old('delivery_type') == 'send' ? 'selected' : '' }}>Send
                                    </option>
                                    <option value="receive" {{ old('delivery_type') == 'receive' ? 'selected' : '' }}>
                                        Receive</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Sender Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="sender" id="sender"
                                    value="{{ old('sender') }}" placeholder="Sender name" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Sender Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="sender_address" id="origin"
                                    value="{{ old('sender_address') }}" placeholder="Pickup location" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Sender Phone <span
                                        class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="sender_phone" id="senderPhone"
                                    value="{{ old('sender_phone') }}" placeholder="+234 000 0000" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Sender Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="sender_email" id="senderEmail"
                                    value="{{ old('sender_email') }}" placeholder="sender@example.com" required>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Receiver Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="receiver" id="receiver"
                                    value="{{ old('receiver') }}" placeholder="Receiver name" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Receiver Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="receiver_address" id="destination"
                                    value="{{ old('receiver_address') }}" placeholder="Delivery location" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Receiver Phone <span
                                        class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="receiver_phone" id="receiverPhone"
                                    value="{{ old('receiver_phone') }}" placeholder="+234 000 0000" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Receiver Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="receiver_email" id="receiverEmail"
                                    value="{{ old('receiver_email') }}" placeholder="receiver@example.com" required>
                            </div>
                        </div>
                    </div>

                    <div class="step-content" id="step2">
                        <h4 class="mb-4">Delivery Schedule</h4>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Expected Delivery</label>
                                <input type="date" class="form-control" name="expected_delivery_date"
                                    id="deliveryDate" value="{{ old('expected_delivery_date') }}">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Pickup Request ID</label>
                                <input type="text" class="form-control" name="pickup_request_id" id="pickupRequestId"
                                    value="{{ old('pickup_request_id') }}" placeholder="Optional request ID">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Duration</label>
                                <input type="text" class="form-control" name="duration" id="duration"
                                    value="{{ old('duration') }}" placeholder="e.g. 3 days">
                            </div>
                        </div>
                    </div>

                    <div class="step-content" id="step3">
                        <h4 class="mb-4">Cargo Information</h4>
                        <div class="row g-3">
                            <div class="col-12 col-md-4">
                                <label class="form-label fw-semibold">Value (₦) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="worth" id="value"
                                    value="{{ old('worth') }}" placeholder="0.00" min="0" step="0.01"
                                    required>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="form-label fw-semibold">Package Type</label>
                                <select class="form-select" name="item_size" id="packageType">
                                    <option value="">Select type</option>
                                    <option value="Pallet" {{ old('item_size') == 'Pallet' ? 'selected' : '' }}>Pallet
                                    </option>
                                    <option value="Container" {{ old('item_size') == 'Container' ? 'selected' : '' }}>
                                        Container</option>
                                    <option value="Box" {{ old('item_size') == 'Box' ? 'selected' : '' }}>Box</option>
                                    <option value="Loose Cargo" {{ old('item_size') == 'Loose Cargo' ? 'selected' : '' }}>
                                        Loose Cargo</option>
                                    <option value="Hazardous Materials"
                                        {{ old('item_size') == 'Hazardous Materials' ? 'selected' : '' }}>Hazardous
                                        Materials</option>
                                    <option value="Perishable Goods"
                                        {{ old('item_size') == 'Perishable Goods' ? 'selected' : '' }}>Perishable Goods
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="form-label fw-semibold">Payment Type</label>
                                <select class="form-select" name="payment_type" id="paymentType">
                                    <option value="">Select payment type</option>
                                    <option value="cash" {{ old('payment_type') == 'cash' ? 'selected' : '' }}>Cash
                                    </option>
                                    <option value="card" {{ old('payment_type') == 'card' ? 'selected' : '' }}>Card
                                    </option>
                                    <option value="wallet" {{ old('payment_type') == 'wallet' ? 'selected' : '' }}>Wallet
                                    </option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Item Description <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="item" id="item"
                                    value="{{ old('item') }}" placeholder="Describe the cargo" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-semibold">Total Amount</label>
                                <input type="number" class="form-control" name="amount" id="amount"
                                    value="{{ old('amount') }}" placeholder="0.00" min="0" step="0.01">
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="form-label fw-semibold">Insurance Required</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="fragile"
                                        id="insuranceRequired" value="1" {{ old('fragile') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="insuranceRequired">
                                        Yes, include cargo insurance
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Special Handling Instructions</label>
                                <textarea class="form-control" name="process" id="specialInstructions" rows="3"
                                    placeholder="Fragile items, temperature requirements, security concerns, etc.">{{ old('process') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="step-content" id="step4">
                        <h4 class="mb-4">Review & Confirm</h4>
                        <div class="review-section">
                            <div class="review-card mb-3">
                                <h6 class="review-title">Order Details</h6>
                                <div class="review-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Customer:</strong> <span id="reviewCustomer">-</span><br>
                                            <strong>Delivery Type:</strong> <span id="reviewDeliveryType">-</span><br>
                                            <strong>Sender:</strong> <span id="reviewSender">-</span>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Receiver:</strong> <span id="reviewReceiver">-</span><br>
                                            <strong>Carrier:</strong> <span id="reviewCarrier">-</span><br>
                                            <strong>Warehouse:</strong> <span id="reviewWarehouse">-</span>
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
                                            <strong>Pickup Request:</strong> <span id="reviewPickupRequest">-</span><br>
                                            <strong>ETA:</strong> <span id="reviewETA">-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="review-card mb-3">
                                <h6 class="review-title">Cargo Details</h6>
                                <div class="review-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Item:</strong> <span id="reviewItem">-</span><br>
                                            <strong>Package Type:</strong> <span id="reviewPackageType">-</span>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Insurance:</strong> <span id="reviewInsurance">-</span><br>
                                            <strong>Duration:</strong> <span id="reviewDuration">-</span>
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
        </form>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const steps = Array.from(document.querySelectorAll('.step'));
            const stepContents = Array.from(document.querySelectorAll('.step-content'));
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const currentStepText = document.getElementById('currentStep');
            const form = document.getElementById('orderStepperForm');
            let currentStep = 1;
            const totalSteps = 4;

            function showStep(step) {
                steps.forEach((stepElement) => {
                    stepElement.classList.toggle('active', Number(stepElement.dataset.step) === step);
                });

                stepContents.forEach((content) => {
                    content.classList.toggle('active', content.id === `step${step}`);
                });

                prevBtn.disabled = step === 1;
                nextBtn.innerHTML = step === totalSteps ? 'Submit Order <i class="bi bi-check-lg ms-1"></i>' :
                    'Next <i class="bi bi-arrow-right ms-1"></i>';
                currentStepText.textContent = step;
            }

            function validateStep(step) {
                const stepElement = document.getElementById(`step${step}`);
                const controls = Array.from(stepElement.querySelectorAll('input, select, textarea'));
                let valid = true;

                controls.forEach((control) => {
                    if (control.required && !control.checkValidity()) {
                        valid = false;
                        control.classList.add('is-invalid');
                    } else {
                        control.classList.remove('is-invalid');
                    }
                });

                return valid;
            }

            function updateReview() {
                const customerSelect = document.getElementById('customer');
                const carrierSelect = document.getElementById('assignedDriver');
                const warehouseSelect = form.querySelector('select[name="warehouse_id"]');
                const deliveryType = document.getElementById('deliveryType');
                const sender = document.getElementById('sender');
                const receiver = document.getElementById('receiver');
                const origin = document.getElementById('origin');
                const destination = document.getElementById('destination');
                const deliveryDate = document.getElementById('deliveryDate');
                const pickupRequestId = document.getElementById('pickupRequestId');
                const duration = document.getElementById('duration');
                const item = document.getElementById('item');
                const value = document.getElementById('value');
                const packageType = document.getElementById('packageType');
                const insuranceRequired = document.getElementById('insuranceRequired');

                document.getElementById('reviewCustomer').textContent = customerSelect.selectedOptions[0]?.text ||
                    '-';
                document.getElementById('reviewDeliveryType').textContent = deliveryType.selectedOptions[0]?.text ||
                    '-';
                document.getElementById('reviewSender').textContent = sender.value || '-';
                document.getElementById('reviewReceiver').textContent = receiver.value || '-';
                document.getElementById('reviewCarrier').textContent = carrierSelect.selectedOptions[0]?.text ||
                    'Auto-assign';
                document.getElementById('reviewWarehouse').textContent = warehouseSelect.selectedOptions[0]?.text ||
                    'Unassigned';
                document.getElementById('reviewOrigin').textContent = origin.value || '-';
                document.getElementById('reviewDestination').textContent = destination.value || '-';
                document.getElementById('reviewPickupRequest').textContent = pickupRequestId.value || 'None';
                document.getElementById('reviewETA').textContent = deliveryDate.value || '-';
                document.getElementById('reviewItem').textContent = item.value || '-';
                document.getElementById('reviewPackageType').textContent = packageType.value || '-';
                document.getElementById('reviewInsurance').textContent = insuranceRequired.checked ? 'Yes' : 'No';
                document.getElementById('reviewDuration').textContent = duration.value || '-';

                const baseCost = parseFloat(value.value) || 0;
                const insuranceCost = insuranceRequired.checked ? baseCost * 0.05 : 0;
                document.getElementById('reviewBaseCost').textContent = `₦${baseCost.toFixed(2)}`;
                document.getElementById('reviewInsuranceCost').textContent = `₦${insuranceCost.toFixed(2)}`;
                document.getElementById('reviewTotalCost').textContent =
                    `₦${(baseCost + insuranceCost).toFixed(2)}`;
            }

            prevBtn.addEventListener('click', function() {
                if (currentStep > 1) {
                    currentStep -= 1;
                    showStep(currentStep);
                }
            });

            nextBtn.addEventListener('click', function() {
                if (currentStep < totalSteps) {
                    if (!validateStep(currentStep)) {
                        return;
                    }

                    if (currentStep === totalSteps - 1) {
                        updateReview();
                    }

                    currentStep += 1;
                    showStep(currentStep);
                } else {
                    if (!validateStep(currentStep)) {
                        return;
                    }

                    form.submit();
                }
            });

            showStep(currentStep);
        });
    </script>
@endsection
