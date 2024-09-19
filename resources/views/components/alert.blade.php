@props(['key'])
@If(session()->has($key))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: '{{ $key === 'success' ? 'Done' : 'OOPS!' }}',
            text: '{{ session()->get($key) }}',  // Message from the session
            icon: '{{ $key === 'success' ? 'success' : 'error' }}',
            confirmButtonText: '{{ $key === 'success' ? 'OK' : 'Try Again' }}',
        });
    });
</script>
@endif

