@extends('layouts.index')
@section('title', 'Booking')
@section('content')
    <section class="beautypress-booking-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <div class="beautypress-booking-text-wraper">
                        <div class="beautypress-booking-content-text beautypress-border beautypress-version-3">
                            <div class="beautypress-booking-text">
                                <h2>Lịch làm việc</h2>
                                <h3>Giờ làm việc</h3>
                                <div class="beautypress-icon-bg-text">
                                    <p> Xin chào quý khách . Rất vui được phục vụ quý khách </p>
                                </div><!-- .beautypress-icon-bg-text END -->
                                <ul>
                                    <li>Mon - Sun : 8:00am - 10:00pm</li>
                                </ul>
                            </div><!-- .beautypress-booking-text END -->
                        </div><!-- .beautypress-booking-content-text END -->
                    </div><!-- .beautypress-booking-text-wraper END -->
                </div>
                <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <div class="beautypress-booking-form-wraper">
                        <form action="{{ route('user.book', $spaId)}}" method="post" enctype="multipart/form-data"
                              novalidate>
                            @csrf
                            <div class="alert hidden" id="beautypress-form-msg"></div>
                            <div class="beautypress-service-and-date">
                                <h2>Đặt dịch vụ</h2>
                                <div class="beautypress-select">
                                    <h5>Dịch vụ</h5>
                                <div class="beautypress-spilit-container">
                                    <div class="">
                                        <h5>Ngày</h5>
                                        <div class="input-group">
                                            <input type="date" id="appointment-date" class="form-control" name="date_booking" min="2019-11-28">
                                        </div>
                                        @if( $errors->first('date_booking'))
                                            <span class="text-danger">{{ $errors->first('date_booking')}}</span>
                                        @endif
                                    </div><!-- .beautypress-date-select END -->
                                </div>
                                <button type="submit" class="btn btn-info btn-md full-width">Thêm mới<i
                                        class="ml-2 ti-arrow-right"></i></button>
                            </div><!-- .beautypress-service-and-date END -->
                            <!-- .beautypress-personal-information END -->
                        </form><!-- #beautypress-booking-form END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('alert')
    @if (session('fail'))
        <script>
            toastr.error('{{ session('fail')}}', {timeOut: 200});
        </script>
    @endif
    @if (session('success'))
        <script>
            toastr.success('{{ session('success')}}', {timeOut: 200});
        </script>
    @endif
@endsection
