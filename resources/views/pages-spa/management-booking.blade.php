@extends('layouts-spa.index')
@section('title', 'Danh sách đặt lịch')

@section('content')
    <div class="col-md-9 col-sm-12">
        <!-- Tab panes -->
        <!-- My Profile -->
        <div class="tab-pane active container" id="c-profile">
            <!-- Company Information -->
            <div class="tab-pane" id="manage-jobs">
                <div class="tr-single-box">

                    <div class="tr-single-header">

                        <h3><i class="ti-shift-right mr-2"></i> Danh sách đặt lịch</h3>


                    </div>
                    <form class="search-big-form search-shadow">
                        <div class="row">
                            <form action="" method="get">
                                <div class="col-lg-5 col-md-5 col-sm-12 p-0">
                                    <div class="form-group">
                                        <input type="date" name="date" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 p-0">
                                    <div class="form-group">
                                        <select id="" name="service_detail_id" class="js-states form-control"
                                                placeholder="Chọn dịch vụ">
                                            <option value="">Chọn dịch vụ</option>
                                            @foreach($choose_service as $idService)
                                                <option
                                                    value="{{ $idService->id}}">{{ $idService->name_service }}</option>
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
                        <div class="row">
                        </div>
                        <div class="col-md-12">
                            <!-- Single Manage job -->
                            @foreach($getData as $key => $book)
                                <div class="manage-list">

                                    <div class="mg-list-wrap">
                                        <div class="mg-list-thumb">
                                            <img src="images/{{ $book->userBook['avatar']  }}" class="mx-auto"
                                                 alt=""/>
                                        </div>
                                        <div class="mg-list-caption">
                                            <h4 class="mg-title">Tên khách: {{ $book->userBook['name'] }}
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
                                               class="mg-edit edit detail-booking" title="Chi tiết"
                                               data-toggle="modal"
                                               data-target="#signup" data-id="{{ $book->id }}"><i
                                                    class="ti-eye"></i></a>
                                        </div>
                                        <div class="btn-group ml-2">
                                            <a
                                                href="javascript:;"
                                                linkurl="{{ route('cancel-booking', $book->id) }}" data-target="#delete"
                                                data-toggle="modal" class="mg-delete delete btn-remove"
                                                data-id="{{ $book->id }}"
                                                title="Xóa"><i
                                                    class="ti-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $getData->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Manage jobs -->
        </div>
    </div>
    </div>
    <div class="modal fade show" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up"
         style="display: none;">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="sign-up">
                <div class="modal-header">
                    <div class="logo-thumb"><img src="assets/img/logo-light.png" class="img-fluid" alt="">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ti-close"></i></span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-header-title">Chi tiết đặt lịch</h4>
                    <div class="login-form">
                        <form>
                            <h6>Thông tin khác hàng</h6>
                            <div class="form-group">
                                <label class="text-dark">Tên khách hàng:</label>
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

@endsection()


@section('alert')
    @if (session('successfully'))
        <script>
            toastr.success('{{ session('successfully')}}', {timeOut: 200});
        </script>
    @endif
    @if (session('success'))
        <script>
            toastr.success('{{ session('success')}}', {timeOut: 200});
        </script>
    @endif
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
@endsection
