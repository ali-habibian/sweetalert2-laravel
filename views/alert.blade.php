<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if(session('message') && session('alert-type'))
        Swal.fire({
            title: '{{ session("alert-title", config("alert.alert_types." . session("alert-type") . ".en")) }}',  // Default to English
            text: "{{ session('message') }}",  // Message from session
            icon: "{{ session('alert-type') }}",  // Type (success, error, etc.)
            confirmButtonText: "{{ config('alert.confirm_button_text') }}"  // Button text
        });
        @endif
    });
</script>
