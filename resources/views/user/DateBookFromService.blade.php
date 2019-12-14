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
                        <form action="{{ route('service.book',$serviceId)}}" method="get" enctype="multipart/form-data"
                              novalidate>
                            <input type="hidden" value={{$spaId}}>
                            @csrf
                            <div class="beautypress-service-and-date">
                                <h2>Đặt dịch vụ</h2>
                                <div class="beautypress-select">
                                    <h5>Dịch vụ</h5>
                                    <div class="beautypress-select">
                                        <div class="">
                                            <h5>Ngày</h5>
                                            <div class="input-group">
                                                <input type="date" id="appointment-date" class="form-control"
                                                       name="date_booking" min={{$dateNow}}>
                                            </div>
                                            @if( $errors->first('date_booking'))
                                                <span class="text-danger">{{ $errors->first('date_booking')}}</span>
                                            @endif
                                        </div><!-- .beautypress-date-select END -->
                                    </div>
                                    <div class="beautypress-select">
                                        <div class="">
                                            <h5>Nhân viên</h5>
                                            <div class="input-group">
                                                <select name="staff_id" id="appointment-service" class="form-control">
                                                    @foreach($staff as $st)
                                                        <option value="{{$st->id}}">{{$st->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if( $errors->first('staff_id'))
                                                <span class="text-danger">{{ $errors->first('staff_id')}}</span>
                                            @endif
                                        </div><!-- .beautypress-date-select END -->
                                    </div>
                                    <button type="submit" class="btn btn-info btn-md full-width">Tiếp theo<i
                                            class="ml-2 ti-arrow-right"></i></button>
                                </div><!-- .beautypress-service-and-date END -->
                                <!-- .beautypress-personal-information END --><!-- #beautypress-booking-form END -->
                            </div>
                        </form>
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

