@extends('layouts.index')
@section('title', 'Bài Viết')

@section('content')
<section class="beautypress-simple-text-with-img-section bg-color-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xl-6 col-lg-6">
                <div class="twentytwenty-wrapper twentytwenty-horizontal"><div class="twentytwenty-container beautypress-before-after" style="height: 393.438px;">
                    <img src="img/before-after-1.jpg" alt="" class="twentytwenty-before" style="clip: rect(0px, 270px, 393.438px, 0px);">
                    <img src="img/before-after-2.jpg" alt="" class="twentytwenty-after" style="clip: rect(0px, 540px, 393.438px, 270px);">
                <div class="twentytwenty-handle" style="left: 270px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div></div></div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                <div class="beautypress-simple-text beautypress-version-2">
                    <div class="beautypress-big-sub-heading">
                        <h2>Secret of</h2>
                        <h3>BeautyPress</h3>
                    </div><!-- .beautypress-separetor-sub-heading END -->
                    <div class="beautypress-simple-text-content">
                        <p>After owning two successful salon locations they decided to move their passion to the small town of Gainesville.</p>
                    </div>
                    <div class="beautypress-spilit-container">
                        <div class="beautypress-icon-with-text">
                            <div class="beautypress-svg-ico">
                                <img src="img/cosmetics.svg" alt="">
                            </div>
                            <h3>Reflexology</h3>
                            <p>Stimulates the movement of energy by applying pressure.</p>
                        </div><!-- .beautypress-icon-with-text END -->
                        <div class="beautypress-icon-with-text">
                            <div class="beautypress-svg-ico">
                                <img src="img/nail.svg" alt="">
                            </div>
                            <h3>Nail Therapy</h3>
                            <p>Wraps are intended to tone and tighten skin while helping.</p>
                        </div><!-- .beautypress-icon-with-text END -->
                    </div>
                </div><!-- .beautypress-simple-text END -->
            </div>
        </div>
    </div>
</section>
@endsection
