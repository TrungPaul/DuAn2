@extends('layouts.index')
@section('title', 'Lịch đã hoàn thành')
@section('content')
<section class="tr-single-detail gray-bg mb-5" style="margin-top:170px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('layouts.menu_bar')
                </div>

                <div class="col-md-9">
                    <div class="tr-single-header">
                        <h2>Danh sách lịch đã hoàn thành</h2>
                        <hr>
                    </div>
                    <form class="search-big-form search-shadow">
                        <div class="row">
                            <form action="" method="get">
                                <div class="col-lg-5 col-md-5 col-sm-12 p-0">
                                    <div class="form-group">
                                        <input type="date"  name="date" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-sm-12 p-0">
                                    <div class="form-group">
                                        <select id="select" name="service_detail_id" class="js-states form-control"
                                                placeholder="Chọn dịch vụ">
                                            <option value="">Chọn dịch vụ</option>
                                            @foreach($spa as $idService)
                                                <option
                                                    value="{{ $idService->service_detail_id}}">{{ $idService->detailService['name_service'] }}</option>
                                            @endforeach
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
                            @if(count($getData) > 0)
                                @foreach($getData as $key => $book)
                                    <div class="manage-list">

                                        <div class="mg-list-wrap">
                                            <div class="mg-list-thumb">
                                                <img src="images/spas/{{ $book->spaBook['image']  }}" class="mx-auto"
                                                     alt=""/>
                                            </div>
                                            <div class="mg-list-caption">
                                                <h4 class="mg-title">Tên Spa: {{ $book->spaBook['name'] }}</h4>
                                                @if($book->detailService == null)
                                                    <span class="mg-subtitle text-danger">Dịch vụ dừng hoạt động(*Vui lòng hủy lịch)</span>
                                                @else
                                                    <span class="mg-subtitle">Tên dịch vụ: {{ $book->detailService['name_service'] }}
                                                    - Giá: {{ $book->detailService['price_service'] }}</span>
                                                @endif
                                                <span>Ngày đặt lịch: {{ date('d-m-Y', strtotime($book->date_booking)) }}
                                                    - Ca: {{ $book->time_booking }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mg-action">
                                            <div class="btn-group ml-2">
                                                <a href="javascript:;"
                                                   class="mg-edit edit detail-booking-user" title="Chi tiết"
                                                   data-toggle="modal"
                                                   data-target="#signup" data-id="{{ $book->id }}"><i
                                                        class="fas fa-eye"></i></a>
                                            </div>
                                            <div class="btn-group ml-2">
                                                <a
                                                    href="javascript:;"
                                                    linkurl="{{ route('user-destroy-cancel-booking', $book->id) }}" data-target="#delete"
                                                    data-toggle="modal" class="mg-delete delete btn-remove"
                                                    data-id=""
                                                    title="Xóa"><i
                                                        class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="manage-list">
                                    <h4 class="text-danger">Không có lịch trùng khớp</h4>
                                </div>
                            @endif
                            {{ $getData->links() }}
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
                    <h4 class="modal-header-title">Chi tiết lịch đã hoàn thành</h4>
                    <div class="login-form">
                        <form>
                            <h6>Thông tin spa</h6>
                            <div class="form-group">
                                <label class="text-dark">Tên spa:</label>
                                <span class="name_spa"></span>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Email:</label>
                                <span class="email_spa"></span>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Số điện thoại:</label>
                                <span class="phone_spa"></span>
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
