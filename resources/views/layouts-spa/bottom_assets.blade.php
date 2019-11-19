<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets-spa/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets-spa/js/select2.min.js"></script>
<script src="assets-spa/js/aos.js"></script>
<script src="assets-spa/js/perfect-scrollbar.jquery.min.js"></script>
<script src="assets-spa/js/owl.carousel.min.js"></script>
<script src="assets-spa/js/jquery.counterup.min.js"></script>
<script src="assets-spa/js/slick.js"></script>
<script src="assets-spa/js/bootstrap-datepicker.js"></script>
<script src="assets-spa/js/isotope.min.js"></script>
<script src="assets-spa/js/summernote.js"></script>
<script src="assets-spa/js/cl-switch.js"></script>
<script src="assets-spa/js/custom.js"></script>
<script src="assets-spa/js/summernote.min.js"></script>
<script src="assets-spa/js/summernote-bs4.min.js"></script>
<script src="assets-spa/js/summernote-lite.min.js"></script>
<script src="assets/js/toastr.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

<script type="text/javascript">
            toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
        <?php if (isset($_GET['success']) && $_GET['success'] == 0) { ?>
            toastr.success('Xoá thành công!')
        <?php } ?>

        <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
            toastr.success('Thêm thành công!')
        <?php } ?>

        <?php if (isset($_GET['success']) && $_GET['success'] == 2) { ?>
            toastr.success('Sửa thành công!')
        <?php } ?>

        <?php if (isset($_GET['success']) && $_GET['success'] == 3) { ?>
            toastr.success('Thay đổi trạng thái thành công!')
        <?php } ?>

        $('#textarea').summernote({
            height:300,
        });
        $('.datepicker').datepicker({
            format: 'mm-dd-yyyy'
        });
        $('.mg-delete').on('click', function(){
            var url = $(this).attr('linkurl');
            var conf = confirm('Bạn có chắc muốn xoá không?');
            if(conf){
                window.location.href = url;
            }
        });
</script>
