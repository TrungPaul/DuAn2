{{--<script src="{{ asset('js/client/script.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('js/client/slick.min.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('js/client/select-chosen.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('js/sweetalert.min.js') }}"></script>--}}
<script>
    $('.btn-remove').on('click', function () {
        swal({
            title: "Cảnh báo!",
            text: "Bạn có chắc chắn muốn hủy bỏ lịch này ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = $(this).attr('linkurl');
                } else {
                    swal("Cảm ơn bạn!");
                }
            })
    });
</script>
