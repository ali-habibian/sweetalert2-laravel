// assets/js/swalalert.js

import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function () {
    // Use a conditional check for the session data and assign it to the variable
    const alertData = @json(session('swalalert', null));

    if (alertData) {
        Swal.fire({
            title: alertData.message,
            icon: alertData.type,
            confirmButtonText: "{{ config('swalalert.confirm_button_text', 'OK') }}",
        });
    }
});
