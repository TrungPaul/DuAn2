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
                            <form action="{{route('contact')}}" method="POST" id="beautypress-contact">
                                @csrf
                                <div class="beautypress-spilit-container">
                                    <div class="input-group">
                                        <input type="text" name="name"  placeholder="Tên"> 
                                    </div>
                                    <div class="input-group">
                                        <input type="email" name="email"  placeholder="Email" class="@error('email') is-invalid @enderror">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- .beautypress-spilit-container END -->
                                <div class="input-group">
                                    <input type="number" name="phone" placeholder="Điện thoại" class="@error('phone') is-invalid @enderror">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <textarea name="content"  cols="30" rows="10"
                                              placeholder="Nội dung" class="@error('content') is-invalid @enderror"></textarea>
                                    @error('content')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <input type="submit" value="Gửi" id="c_submit" class="mt-2">
                            </form><!-- #beautypress-contact END -->
                        </div><!-- .beautypress-contact-form END -->
                    </div>
                </div>
            </div><!-- .beautypress-contact-wraper END -->
        </div>
    </div>
@endsection
