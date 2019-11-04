@extends('layouts.index')
@section('content')
    <div class="beautypress-newsfeed-section beautypress-no-bg section-padding">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-version-2" style="margin-top: 5%">
                <h3>Liên hệ với chúng tôi</h3>
                <img src="assets/img/section-heading-separetor.png" alt="">
            </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-xl-4">
                        <div class="beautypress-contact-details bg-color-purple">
                            <div class="beautypress-separetor-sub-heading beautypress-version-2">
                                <h2>Liên hệ</h2>
                            </div><!-- .beautypress-separetor-sub-heading END -->
                            <ul class="beautypress-icon-with-text">
                                <li><i class="fa fa-map-marker"></i>121 King Street, Melbourne Victoria 3000 Australia
                                </li>
                                <li><i class="xsicon icon-phone3"></i>+91 00 00 00 00</li>
                                <li><i class="xsicon icon-envelope5"></i>mail@domain.com</li>
                                <li><i class="fa fa-facebook"></i>facebok.com/name</li>
                            </ul><!-- .beautypress-icon-with-text END -->
                        </div><!-- .beautypress-contact-details END -->
                    </div>
                    <div class="col-sm-12 col-lg-8 col-xl-8">
                        <div class="beautypress-contact-form">
                            <form action="#" method="POST" id="beautypress-contact">
                                <div class="beautypress-spilit-container">
                                    <div class="input-group">
                                        <input type="text" name="name" id="c_name" placeholder="Your name">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    </div>
                                    <div class="input-group">
                                        <input type="email" name="email" id="c_email" placeholder="Your email">
                                        <div class="input-group-addon"><i class="xsicon icon-envelope5"></i></div>
                                    </div>
                                </div><!-- .beautypress-spilit-container END -->
                                <div class="input-group">
                                    <input type="text" name="subject" id="c_subject" placeholder="Subject">
                                    <div class="input-group-addon">@</div>
                                </div>
                                <div class="input-group">
                                    <textarea name="massage" id="c_massage" cols="30" rows="10"
                                              placeholder="Your comments"></textarea>
                                    <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                </div>
                                <input type="submit" value="submit" id="c_submit">
                            </form><!-- #beautypress-contact END -->
                        </div><!-- .beautypress-contact-form END -->
                    </div>
                </div>
            </div><!-- .beautypress-contact-wraper END -->
        </div>
    </div>
@endsection
