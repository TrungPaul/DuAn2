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
                                </div>
                                <br><!-- .beautypress-icon-bg-text END -->
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
                            <input type="hidden" name="action" value="send_appointment_form"/>
                            <input type="hidden" name="date_booking" value="{{$data}}"/>
                            <input type="hidden" name="staff_id" value="{{$staff_id}}"/>
                            <input type="hidden" name="service_detail_id" value="{{$serviceId}}"/>
                            <div class="alert hidden" id="beautypress-form-msg"></div>
                            <div class="beautypress-service-and-date">
                                <h2>Đặt dịch vụ</h2>
                                <div class="beautypress-spilit-container">
                                    <div>
                                        <h5>Tên</h5>
                                        <div class="input-group">
                                            <input type="text" name="name" id="c_name" placeholder="Tên">
                                        </div>
                                        @if( $errors->first('name'))
                                            <span class="text-danger">{{ $errors->first('name')}}</span>
                                        @endif
                                    </div>
                                    <div>
                                        <h5>Email</h5>
                                        <div class="input-group">
                                            <input type="email" name="email" id="c_email" placeholder="Email">
                                        </div>
                                        @if( $errors->first('email'))
                                            <span class="text-danger">{{ $errors->first('email')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- .beautypress-select END -->
                                <div class="beautypress-spilit-container">
                                    <!-- .beautypress-date-select END -->
                                    <div class="beautypress-select">
                                        <h5>Thời gian còn trống</h5>
                                        <div class="input-group">
                                            <select name="time_booking" id="appointment-service" class="form-control">
                                                @foreach($timeNotBook as $not)
                                                    <option value="{{$not->id}}">
                                                        {{$not->time}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if( $errors->first('time_booking'))
                                                <span class="text-danger">{{ $errors->first('time_booking')}}</span>
                                            @endif
                                        </div>
                                    </div><!-- .beautypress-select END -->
                                </div>

                                <button type="submit" class="btn btn-info btn-md full-width">Đặt lịch<i
                                        class="ml-2 ti-arrow-right"></i></button>
                            </div><!-- .beautypress-service-and-date END -->
                            <!-- .beautypress-personal-information END -->
                        </form><!-- #beautypress-booking-form END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.time_booking').click(function () {
            let value = ('.time_booking').val();
            alert(value);
        });

        $('.button-checkbox').each(function () {
            // Settings
            var $widget = $(this),
                $button = $widget.find('button'),
                $checkbox = $widget.find('input:checkbox'),
                color = $button.data('color'),
                settings = {
                    on: {
                        icon: 'glyphicon glyphicon-check'
                    },
                    off: {
                        icon: 'glyphicon glyphicon-unchecked'
                    }
                };

            // Event Handlers
            $button.on('click', function () {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
                $checkbox.triggerHandler('change');
                updateDisplay();
            });
            $checkbox.on('change', function () {
                updateDisplay();
            });

            // Actions
            function updateDisplay() {
                var isChecked = $checkbox.is(':checked');

                // Set the button's state
                $button.data('state', (isChecked) ? "on" : "off");

                // Set the button's icon
                $button.find('.state-icon')
                    .removeClass()
                    .addClass('state-icon ' + settings[$button.data('state')].icon);

                // Update the button's color
                if (isChecked) {
                    $button
                        .removeClass('btn-default')
                        .addClass('btn-' + color + ' active');
                } else {
                    $button
                        .removeClass('btn-' + color + ' active')
                        .addClass('btn-default');
                }
            }

            // Initialization
            function init() {

                updateDisplay();

                // Inject the icon if applicable
                if ($button.find('.state-icon').length == 0) {
                    $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
                }
            }

            init();
        });
        })
        ;</script>
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
