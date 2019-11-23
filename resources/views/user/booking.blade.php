@extends('layouts.index')
@section('title', 'Booking')
@section('content')
<section class="beautypress-booking-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <div class="beautypress-booking-form-wraper">
                        <form action="#" method="POST" id="beautypress-booking-form">
                            @csrf
                             <input type="hidden" name="action" value="send_appointment_form">
                            <div class="alert hidden" id="beautypress-form-msg"></div>
                            <div class="beautypress-service-and-date">
                                <h2>Đặt Dịch Vụ</h2>
                                <div class="beautypress-select">
                                    <div class="input-group">
                                        <select name="appointment-service" id="appointment-service" class="form-control">
                                            <option value="">Chọn loại dịch vụ</option>
                                            <option value="Oil Massage">Oil Massage ($59.00)</option>
                                            <option value="Relax Day">Relax Day ($199.00)</option>
                                            <option value="Spa &amp; Beauty">Spa &amp; Beauty ($299.00)</option>
                                            <option value="Relax Day (for Two)">Relax Day (for Two $399.00)</option>
                                        </select>
                                    </div>
                                </div><!-- .beautypress-select END -->
                                <div class="beautypress-spilit-container">
                                    <div class="beautypress-date-select beautypress-select">
                                        <div class="input-group">
                                            <input type="date" id="appointment-date" class="form-control datepicker" name="appointment-date" placeholder="Date Shedule">
                                        </div>
                                    </div><!-- .beautypress-date-select END -->
                                    <div class="beautypress-select">
                                        <div class="input-group">
                                            <select name="appointment-time" id="appointment-time" class="form-control">
                                                <option value="">Time Shedule</option>
                                                <option value="12:00 AM">12:00 AM</option>
                                                <option value="12:30 AM">12:30 AM</option>
                                                <option value="01:00 AM">01:00 AM</option>
                                                <option value="01:30 AM">01:30 AM</option>
                                                <option value="02:00 AM">02:00 AM</option>
                                                <option value="02:30 AM">02:30 AM</option>
                                                <option value="03:00 AM">03:00 AM</option>
                                                <option value="03:30 AM">03:30 AM</option>
                                                <option value="04:00 AM">04:00 AM</option>
                                                <option value="04:30 AM">04:30 AM</option>
                                                <option value="05:00 AM">05:00 AM</option>
                                                <option value="05:30 AM">05:30 AM</option>
                                                <option value="06:00 AM">06:00 AM</option>
                                                <option value="06:30 AM">06:30 AM</option>
                                                <option value="07:00 AM">07:00 AM</option>
                                                <option value="07:30 AM">07:30 AM</option>
                                                <option value="08:00 AM">08:00 AM</option>
                                                <option value="08:30 AM">08:30 AM</option>
                                                <option value="09:00 AM">09:00 AM</option>
                                                <option value="09:30 AM">09:30 AM</option>
                                                <option value="10:00 AM">10:00 AM</option>
                                                <option value="10:30 AM">10:30 AM</option>
                                                <option value="11:00 AM">11:00 AM</option>
                                                <option value="11:30 AM">11:30 AM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:30 PM">12:30 PM</option>
                                                <option value="01:00 PM">01:00 PM</option>
                                                <option value="01:30 PM">01:30 PM</option>
                                                <option value="02:00 PM">02:00 PM</option>
                                                <option value="02:30 PM">02:30 PM</option>
                                                <option value="03:00 PM">03:00 PM</option>
                                                <option value="03:30 PM">03:30 PM</option>
                                                <option value="04:00 PM">04:00 PM</option>
                                                <option value="04:30 PM">04:30 PM</option>
                                                <option value="05:00 PM">05:00 PM</option>
                                                <option value="05:30 PM">05:30 PM</option>
                                                <option value="06:00 PM">06:00 PM</option>
                                                <option value="06:30 PM">06:30 PM</option>
                                                <option value="07:00 PM">07:00 PM</option>
                                                <option value="07:30 PM">07:30 PM</option>
                                                <option value="08:00 PM">08:00 PM</option>
                                                <option value="08:30 PM">08:30 PM</option>
                                                <option value="09:00 PM">09:00 PM</option>
                                                <option value="09:30 PM">09:30 PM</option>
                                                <option value="10:00 PM">10:00 PM</option>
                                                <option value="10:30 PM">10:30 PM</option>
                                                <option value="11:00 PM">11:00 PM</option>
                                                <option value="11:30 PM">11:30 PM</option>
                                            </select>
                                        </div>
                                    </div><!-- .beautypress-select END -->
                                </div>
                            </div><!-- .beautypress-service-and-date END -->
                            <div class="beautypress-personal-information">
                                <h2>Personal Information</h2>
                                <div class="beautypress-spilit-container">
                                    <div class="form-group first-name-group">
                                        <input type="text" name="first-name" class="form-control" id="first-name" placeholder="First Name....">
                                    </div>
                                    <div class="form-group email-group">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Address....">
                                    </div>
                                </div>
                                <div class="form-group phone-group">
                                    <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone Number....">
                                </div>
                                <div class="form-group massage-gropu">
                                    <textarea class="form-control" rows="5" id="appointment-comment" placeholder="Enter Message...."></textarea>
                                </div>
                                <div class="form-group button-group">
                                    <input type="submit" name="submit" value="submit" id="beautypress-submit">
                                </div>
                            </div><!-- .beautypress-personal-information END -->
                        </form><!-- #beautypress-booking-form END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
