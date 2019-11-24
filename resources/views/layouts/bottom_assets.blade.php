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
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>

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
    //thông báo sau khi liên hệ
    <?php if (isset($_GET['action_contact']) && $_GET['action_contact'] == true) { ?>
        toastr.success('Cảm ơn bạn đã góp ý, chúng tôi sẽ phản hồi bạn trong thời gian sớm nhất!')
    <?php } ?>

    // tìm kiếm ở trang chủ
    $(function() {
        $('a[href="#search"]').on("click", function(event) {
            event.preventDefault();
            $("#search").addClass("open");
            $('#search > form > input[type="search"]').focus();
        });

        $("#search, #search button.close").on("click keyup", function(event) {
            if (
            event.target == this ||
            event.target.className == "close" ||
            event.keyCode == 27
            ) {
            $(this).removeClass("open");
            }
        });
    });
</script>
