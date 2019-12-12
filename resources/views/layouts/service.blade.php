<section class="beautypress-our-features-section">
    <div class="container">
        <div class="beautypress-section-headinig beautypress-version-2">
            <h3>Dịch vụ</h3>
            <img alt="" src="assets/img/section-heading-separetor.png">
        </div>
        <div class="row">
            @foreach ( $services as $key => $s )
                <div class="col-md-6 col-xl-4 col-lg-4 pt-5">
                    <div class="beautypress-single-our-feature beautypress-black-gradient-overlay">
                        <i class="xsicon icon-cosmetics"></i>
                        <img src="images/{{ $s->icon }}" alt="">
                        <div class="beautypress-our-features-content">
                            <h3>{{ $s->name_service }}</h3>
                        </div>
                    </div><!-- .beautypress-single-our-feature END -->
                </div>
            @endforeach
        </div>
    </div>
</section>
