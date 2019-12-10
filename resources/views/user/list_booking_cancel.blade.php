@extends('layouts.index')
@section('title', 'Lịch đã huỷ')
@section('content')
<section class="tr-single-detail gray-bg mb-5" style="margin-top:170px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('layouts.menu_bar')
                </div>
                
                <div class="col-md-9">
                    <div class="tr-single-header">
                        <h2>Danh sách lịch đã huỷ</h2>
                        <hr>
                    </div>
                    <form class="search-big-form search-shadow">
                        <div class="row">
                            <form action="" method="get">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <div class="form-group">
                                        <input type="date" name="date" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <div class="form-group">
                                        <select id="" name="spa" class="js-states form-control"
                                                placeholder="Chọn dịch vụ">
                                            <option value="">Chọn spa</option>
                                            <option>Spa 1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                                    <div class="form-group">
                                        <select id="select" name="service_detail_id" class="js-states form-control"
                                                placeholder="Chọn dịch vụ">
                                            <option value="">Chọn dịch vụ</option>
                                            <option value="">Dịch vụ 1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                    <button type="submit" class="btn btn-info full-width">Tìm kiếm</button>
                                </div>
                            </form>
                        </div>
                    </form>
                    <div class="tr-single-body">
                        <div class="col-md-12">
                            <!-- Single Manage job -->
                                <div class="manage-list">

                                    <div class="mg-list-wrap">
                                        <div class="mg-list-thumb">
                                            <img src="images/spas/tmv-xuan-huong.jpg" class="mx-auto"
                                                 alt=""/>
                                        </div>
                                        <div class="mg-list-caption">
                                            <h4 class="mg-title">Tên spa: Thẩm mỹ viện Con bò
                                            <span class="mg-subtitle">Tên dịch vụ: Matxa lưng
                                                    - Giá: {{ number_format(22000000) }}</span>
                                            <span>Ngày đặt lịch: 11/12/2019
                                                    - Ca: 3 ( 10:00 Sáng )
                                                </span>
                                        </div>
                                    </div>
                                    <div class="mg-action">
                                        <div class="btn-group ml-2">
                                            <a href="javascript:;"
                                               class="mg-edit edit detail-booking" title="Chi tiết"
                                               data-toggle="modal"
                                               data-target="#signup" data-id=""><i
                                                    class="fas fa-eye"></i></a>
                                        </div>
                                        <div class="btn-group ml-2">
                                            <a
                                                href="javascript:;"
                                                linkurl="" data-target="#delete"
                                                data-toggle="modal" class="mg-delete delete btn-remove"
                                                data-id=""
                                                title="Xóa"><i
                                                    class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="manage-list">
                                    <h4 class="text-danger">Không có lịch trùng khớp</h4>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade show" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up"
         style="display: none;">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="sign-up">
                <div class="modal-header">
                    <div class="logo-thumb"><img src="assets/img/logo-light.png" class="img-fluid" alt="">
                        <button type="button" class="close_booking" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-close"></i></span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-header-title">Chi tiết lịch đã huỷ</h4>
                    <div class="login-form">
                        <form>
                            <h6>Thông tin spa</h6>
                            <div class="form-group">
                                <label class="text-dark">Tên spa:</label>
                                <span class="name_guest"></span>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Email:</label>
                                <span class="email_guest"></span>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Số điện thoại:</label>
                                <span class="phone_guest"></span>
                            </div>
                            <hr>
                            <h6>Thông tin dịch vụ</h6>
                            <div class="form-group">
                                <label class="text-dark">Tên dịch vụ:</label>
                                <span class="name_service"></span>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Giá:</label>
                                <span class="price_service"></span>
                            </div>
                            <hr>
                            <h6>Thời gian</h6>
                            <div class="form-group">
                                <label class="text-dark">Ngày đặt lịch:</label>
                                <span class="date_booking"></span>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Khung giờ:</label>
                                <span class="time_booking"></span>
                            </div>
                            <hr>
                            <h6>Nhân viên</h6>
                            <div class="form-group">
                                <label class="text-dark">Tên nhân viên:</label>
                                <span class="staff_name"></span>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Giới tính:</label>
                                <span class="staff_gender"></span>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
