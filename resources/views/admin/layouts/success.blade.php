<script>
    @if ( session('success') == true)

    swal({
        text: '{{ session('success') }}',
        icon: "success",
        button: true,
    });
    @endif
</script>
