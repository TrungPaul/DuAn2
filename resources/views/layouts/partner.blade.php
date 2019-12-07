<section class="beautypress-partner-section" style="margin-bottom:100px;">
    <div class="container">
        <div class="beautypress-section-headinig beautypress-version-2">
            <h3>Spa uy tín</h3>
            <img src="assets/img/section-heading-separetor.png" alt="">
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="beautypress-partner-wraper">
                    <ul class="beautypress-partner-list beautypress-version-4">
                        @foreach ($spas as $spa)
                            <li>
                                <div class="beautypress-partner-our-feature beautypress-partner-gradient-overlay">
                                    <img src="images/spas/{{ $spa->image }}" alt="">
                                    <div class="beautypress-partner-features-content">
                                        <div class="xs-btn-wraper">
                                            <a href="{{ route('user.getbook', $spa->id) }}" class="xs-btn round-btn box-shadow-btn bg-color-purple">Đặt lịch <span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul><!-- .beautypress-partner-list END -->
                </div><!-- .beautypress-partner-wraper END -->
            </div>
        </div>
    </div>
    <div class="beautypress-round-icons-bg" style="background-image: url(assets/img/icons-bg.png);"></div>
</section>
