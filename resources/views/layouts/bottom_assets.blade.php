<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/toastr.min.js"></script>

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
            "timeOut": "6000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
        <?php if (isset($_GET['action_contact']) && $_GET['action_contact'] == true) { ?>
            toastr.success('Cảm ơn bạn đã góp ý, chúng tôi sẽ phản hồi bạn trong thời gian sớm nhất!')
        <?php } ?>
</script>
