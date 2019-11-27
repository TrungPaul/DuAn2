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
                            <form action="{{ route('user.booking',$spaId) }}" method="POST" enctype="multipart/form-data"
                                  novalidate>
                                @csrf
                            @csrf
                            <input type="hidden" name="action" value="send_appointment_form"/>
                            <div class="alert hidden" id="beautypress-form-msg"></div>
                            <div class="beautypress-service-and-date">
                                <h2>Đặt dịch vụ</h2>
                                <div class="beautypress-select">
                                    <div class="input-group">
                                        <select name="service_detail_id" id="appointment-service" class="form-control">
                                            @foreach($service as $ser)
                                            <option value="{{$ser->id}}">{{$ser->name_service}} ({{$ser->price_service}}đ)</option>
                                            @endforeach
                                        </select>
                                        @if( $errors->first('service_detail_id'))
                                            <span class="text-danger">{{ $errors->first('service_detail_id')}}</span>
                                        @endif
                                    </div>
                                </div><!-- .beautypress-select END -->
                                <div class="beautypress-spilit-container">
                                    <div class="">
                                        <div class="input-group">
                                            <input type="date" id="appointment-date" class="form-control" name="date_booking">
                                            @if( $errors->first('date_booking'))
                                                <span class="text-danger">{{ $errors->first('date_booking')}}</span>
                                            @endif
                                        </div>
                                    </div><!-- .beautypress-date-select END -->
                                    <div class="beautypress-select">
                                        <div class="input-group">

                                            <select name="time_booking" id="appointment-time" class="form-control" >
                                                @foreach($times as $time)
                                                    <option value="{{$time->id}}">{{$time->time}}</option>
                                                @endforeach
                                            </select>
                                            @if( $errors->first('time_booking'))
                                                <span class="text-danger">{{ $errors->first('time_booking')}}</span>
                                            @endif
                                        </div>
                                    </div><!-- .beautypress-select END -->
                                </div>
                                <div class="beautypress-select">
                                    <div class="input-group">
                                        <select name="staff_id" id="appointment-service" class="form-control">
                                               @foreach($staff as $st)
                                                <option value="{{$st->id}}">{{$st->name}}</option>
                                                   @endforeach
                                        </select>
                                        @if( $errors->first('staff_id'))
                                            <span class="text-danger">{{ $errors->first('staff_id')}}</span>
                                        @endif
                                    </div>
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
