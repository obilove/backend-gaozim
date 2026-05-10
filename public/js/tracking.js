// Shipment tracking functionality
document.getElementById('trackButton').addEventListener('click', function () {
    const trackingInput = document.getElementById('trackingInput').value.trim();
    const shipmentDetails = document.getElementById('shipmentDetails');

    if (trackingInput) {
        // Show shipment details
        shipmentDetails.classList.remove('d-none');

        // Scroll to details
        shipmentDetails.scrollIntoView({ behavior: 'smooth', block: 'start' });

        // Update tracking input with found shipment
        document.getElementById('trackingInput').value = 'SH-2024-001';
    }
});

// Allow Enter key to trigger tracking
document.getElementById('trackingInput').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        document.getElementById('trackButton').click();
    }
});

// Pre-fill with example shipment ID for demo
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('trackingInput').value = 'SH-2024-001';
});