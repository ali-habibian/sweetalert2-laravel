import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function () {
@if(session('swalalert'))
        const alertData = @json(session('swalalert'));
    Swal.fire({
        title: alertData.message,
        icon: alertData.type,
        confirmButtonText: "{{ config('swalalert.confirm_button_text', 'OK') }}",
    });
@endif
});