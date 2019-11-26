$(document).ready(function() {
    $(".formreply").validate({
        rules: {
            reply_name: "required",
            reply_content: "required",
        },
        messages: {
            reply_name: "Vui lòng nhập tên",
            reply_content: "Vui lòng nhập nội dung",
        }
    });
});

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

//trả lời bình luận
function reply(caller ,cmt_id) {
    x = cmt_id;
    $("input[type=hidden][name=comment_id]" ).val(x);
    $(".reply-row").insertAfter($(caller));
    $(".reply-row").show(500);
};