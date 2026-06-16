// Create Shipment Stepper Functionality
document.addEventListener('DOMContentLoaded', function () {
    let currentStep = 1;
    const totalSteps = 4;

    // Form data storage
    const formData = {
        customer: '',
        priority: '',
        description: '',
        origin: '',
        destination: '',
        transportType: '',
        pickupDate: '',
        deliveryDate: '',
        assignedDriver: '',
        weight: '',
        value: '',
        packageType: '',
        length: '',
        width: '',
        height: '',
        insuranceRequired: false,
        specialInstructions: ''
    };

    // DOM elements
    const steps = document.querySelectorAll('.step');
    const stepContents = document.querySelectorAll('.step-content');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const currentStepIndicator = document.getElementById('currentStep');
    const stepperLine = document.querySelector('.stepper-line');

    // Initialize
    updateStepper();

    // Event listeners
    nextBtn.addEventListener('click', nextStep);
    prevBtn.addEventListener('click', prevStep);

    // Form input listeners to store data
    document.querySelectorAll('input, select, textarea').forEach(element => {
        element.addEventListener('input', function () {
            formData[this.id] = this.type === 'checkbox' ? this.checked : this.value;
        });
    });

    function nextStep() {
        if (validateCurrentStep()) {
            if (currentStep < totalSteps) {
                currentStep++;
                updateStepper();
                if (currentStep === totalSteps) {
                    populateReview();
                }
            }
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            currentStep--;
            updateStepper();
        }
    }

    function updateStepper() {
        // Update step circles
        steps.forEach((step, index) => {
            const stepNumber = index + 1;
            step.classList.remove('active', 'completed');

            if (stepNumber < currentStep) {
                step.classList.add('completed');
            } else if (stepNumber === currentStep) {
                step.classList.add('active');
            }
        });

        // Update step content
        stepContents.forEach((content, index) => {
            content.classList.remove('active');
            if (index + 1 === currentStep) {
                content.classList.add('active');
            }
        });

        // Update navigation buttons
        prevBtn.disabled = currentStep === 1;
        nextBtn.innerHTML = currentStep === totalSteps ?
            '<i class="bi bi-check-lg me-1"></i> Create Shipment' :
            'Next <i class="bi bi-arrow-right ms-1"></i>';

        // Update step indicator
        currentStepIndicator.textContent = currentStep;

        // Update progress line
        const progress = ((currentStep - 1) / (totalSteps - 1)) * 100;
        stepperLine.style.background = `linear-gradient(to right, #162e1c 0%, #162e1c ${progress}%, #e5e7eb ${progress}%, #e5e7eb 100%)`;
    }

    function validateCurrentStep() {
        const currentStepContent = document.getElementById(`step${currentStep}`);
        const requiredFields = currentStepContent.querySelectorAll('[required]');
        let isValid = true;

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('is-invalid');
                isValid = false;
            } else {
                field.classList.remove('is-invalid');
            }
        });

        return isValid;
    }

    function populateReview() {
        // Populate review data
        document.getElementById('reviewCustomer').textContent = formData.customer || '-';
        document.getElementById('reviewPriority').textContent = getPriorityLabel(formData.priority) || '-';
        document.getElementById('reviewDescription').textContent = formData.description || '-';
        document.getElementById('reviewTransport').textContent = formData.transportType || '-';
        document.getElementById('reviewDriver').textContent = formData.assignedDriver || 'Auto-assign';
        document.getElementById('reviewPickup').textContent = formatDate(formData.pickupDate) || '-';
        document.getElementById('reviewOrigin').textContent = formData.origin || '-';
        document.getElementById('reviewDestination').textContent = formData.destination || '-';
        document.getElementById('reviewETA').textContent = formatDate(formData.deliveryDate) || 'TBD';
        document.getElementById('reviewDistance').textContent = calculateDistance() || '-';
        document.getElementById('reviewWeight').textContent = formData.weight ? `${formData.weight} kg` : '-';
        document.getElementById('reviewValue').textContent = formData.value ? `₦${parseFloat(formData.value).toLocaleString()}` : '-';
        document.getElementById('reviewPackageType').textContent = formData.packageType || '-';
        document.getElementById('reviewInsurance').textContent = formData.insuranceRequired ? 'Yes' : 'No';

        // Calculate costs
        calculateCosts();
    }

    function getPriorityLabel(priority) {
        const labels = {
            'high': 'High - Express Delivery',
            'medium': 'Medium - Standard Delivery',
            'low': 'Low - Economy Delivery'
        };
        return labels[priority] || priority;
    }

    function formatDate(dateString) {
        if (!dateString) return '';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        });
    }

    function calculateDistance() {
        // Mock distance calculation based on origin/destination
        if (formData.origin && formData.destination) {
            // This would normally use a mapping API
            return '2,840 km';
        }
        return '';
    }

    function calculateCosts() {
        const weight = parseFloat(formData.weight) || 0;
        const value = parseFloat(formData.value) || 0;

        // Mock cost calculation
        const baseRate = formData.transportType === 'air' ? 15 : formData.transportType === 'sea' ? 5 : 8;
        const baseCost = weight * baseRate;

        const priorityMultiplier = formData.priority === 'high' ? 1.5 : formData.priority === 'medium' ? 1.2 : 1.0;
        const priorityCost = baseCost * (priorityMultiplier - 1);

        const insuranceCost = formData.insuranceRequired ? value * 0.02 : 0;
        const totalCost = baseCost + priorityCost + insuranceCost;

        document.getElementById('reviewBaseCost').textContent = `₦${baseCost.toLocaleString()}`;
        document.getElementById('reviewPriorityCost').textContent = `₦${priorityCost.toLocaleString()}`;
        document.getElementById('reviewInsuranceCost').textContent = `₦${insuranceCost.toLocaleString()}`;
        document.getElementById('reviewTotalCost').textContent = `₦${totalCost.toLocaleString()}`;
    }

    // Handle form submission on final step
    nextBtn.addEventListener('click', function () {
        if (currentStep === totalSteps) {
            const orderForm = document.getElementById('orderStepperForm');

            if (orderForm) {
                orderForm.submit();
            }
        }
    });
});