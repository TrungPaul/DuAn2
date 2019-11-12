<section class="beautypress-exclusive-products">
    <div class="container">
        <div class="beautypress-section-headinig beautypress-version-2">
            <h3>Bài viết</h3>
            <img src="assets/img/section-heading-separetor.png" alt="">
        </div>
        <div class="row">
            @foreach ( $posts as $key => $p )
                <div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
                    <div class="beautypress-single-newsletter mb-30">
                        <div class="beautypress-newsfeed-header beautypress-black-gradient-overlay">
                            <img src="images/{{ $p->image }}" alt="">
                            <div class="beautypress-newsfeed-header-content">
                                <div class="beautypress-newsfeed-img">
                                    <img src="assets/img/avatar-3.jpg" alt="">
                                    <a href="#">By Gomez</a>
                                </div>
                                <div class="beautypress-dates">
                                    <p class="bg-color-purple">5/10<strong>{{ $p->category->name }}</strong></p>
                                </div>
                            </div><!-- .beautypress-newsfeed-header-content END -->
                        </div><!-- .beautypress-newsfeed-header END -->
                        <div class="beautypress-newsfeed-footer">
                            <a href="{{route('detail_post', $p->id)}}">{{ $p->title }}</a>
                            <p>{{ $p->content }}</p>
                        </div><!-- .beautypress-newsfeed-footer END -->
                    </div><!-- .beautypress-single-newsletter END -->
                </div>
            @endforeach
        </div>
    </div>
</section><!-- .beautypress-exclusive-products END -->
