$(document).ready(function () {
    $('.edit').click(function () {
        let id = $(this).data('id');
        //edit employ eployee
        $.ajax({
            url: 'spa/employee/' + id,
            dataType: 'json',
            type: 'get',
            success: function ($result) {
                var el = document.getElementById("showAvatar");
                console.log($result);
                $('.name').val($result.name);
                $('.title').text($result.name);
                if ($result.gender == 'Nam') {
                    $('.nam').attr('selected', 'selected');
                } else {
                    $('.nu').attr('selected', 'selected');
                }
                el.src = 'images/employee/' + $result.avatar;

                var img = document.querySelector('[name="avatar"]');
                img.onchange = function () {
                    var anh = this.files[0];
                    if (anh == undefined) {
                        document.querySelector('#showAvatar').src = "images/employee/" + $result.avatar;
                    } else {
                        getBase64(anh, '#showAvatar');
                    }
                    getBase64(anh, '#showAvatar');
                }

                function getBase64(file, selector) {
                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        document.querySelector(selector).src = reader.result;
                    };
                    reader.onerror = function (error) {
                        console.log('Error: ', error);
                    };
                }
            }
        });
    });

// delete employee
    $('.delete').click(function () {
        let id = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.del').click(function () {
            $.ajax({
                url: 'spa/employee-status/' + id,
                dataType: 'json',
                type: 'post',
                success: function ($result) {
                    console.log($result);
                    $('#delete').modal('hide');
                    toastr.success($result.success, {timeOut: 5000});
                    location.reload();
                }
            });

        });
    });

    //detail booking of user
    $('.detail-booking').click(function () {
        let id = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'spa/management-booking/' + id,
            dataType: 'json',
            type: 'get',
            success : function ($result) {
                console.log($result);
                 $('.name_guest').html($result.user_book["name"]);
                 $('.email_guest').html($result.user_book["email"]);
                 $('.phone_guest').html($result.user_book["phone_number"]);
                 if($result.detail_service == null)
                 {
                     $('.name_service').html('Dịch vụ này không còn hoạt động');
                     $('.price_service').html('Dịch vụ này không còn hoạt động');

                 }else {
                     $('.name_service').html($result.detail_service['name_service']);
                     $('.price_service').html($result.detail_service['price_service']);
                 }
                 $('.date_booking').html($result.date_booking);
                 $('.time_booking').html($result.time_booking);
                 $('.staff_name').html($result.detail_staff['name']);
                 $('.staff_gender').html($result.detail_staff['gender']);
            }
        });
    });
});
