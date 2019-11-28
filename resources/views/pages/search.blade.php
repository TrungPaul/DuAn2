@extends('layouts.index')
@section('title', 'Tìm kiếm bài viết')

@section('content')
<section class="beautypress-exclusive-products" style="margin-top:150px;">
    <div class="container">
        <div class="beautypress-section-headinig beautypress-version-2">
            <h3>Tìm kiếm</h3>
            <img src="assets/img/section-heading-separetor.png" alt="">
        </div>
        @if (count($services) != 0)
            <h6>Tìm thấy {{count($services)}} dịch vụ</h6>
            <hr>
        @endif
        <div class="row">
            @foreach ( $services as $key => $s )
                <div class="col-md-6 col-xl-4 col-lg-4">
                    <div class="beautypress-single-our-feature beautypress-black-gradient-overlay">
                        <i class="xsicon icon-cosmetics"></i>
                        <img src="images/{{ $s->icon }}" alt="">
                        <div class="beautypress-our-features-content">
                            <h3>{{ $s->name_service }}</h3>
                            <div class="xs-btn-wraper">
                                <a href="#" class="xs-btn round-btn box-shadow-btn bg-color-purple">Chi tiết <span></span></a>
                            </div>
                        </div>
                    </div><!-- .beautypress-single-our-feature END -->
                </div>
            @endforeach
        </div>
        @if (count($posts) != 0)
            <h6 style="margin-top:50px;">Tìm thấy {{count($posts)}} bài viết</h6>
            <hr>
        @endif
        <div class="row">
            @foreach ( $posts as $key => $p )
                <div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
                    <div class="beautypress-single-newsletter mb-30">
                        <div class="beautypress-newsfeed-header beautypress-black-gradient-overlay">
                            <img src="images/posts/{{ $p->image }}" alt="">
                            <div class="beautypress-newsfeed-header-content">
                                <div class="beautypress-newsfeed-img">
                                    <img src="images/{{ $p->user->avatar }}" alt="">
                                    <a href="#">{{ $p->user->name }}</a>
                                </div>
                                <div class="beautypress-dates">
                                    <p class="color-white"><strong>{{ $p->category->name }}</strong></p>
                                </div>
                            </div><!-- .beautypress-newsfeed-header-content END -->
                        </div><!-- .beautypress-newsfeed-header END -->
                        <div class="beautypress-newsfeed-footer">
                            <a href="{{route('detail_post', $p->id)}}">{{ $p->title }}</a>
                            <p>{{ $p->description }}</p>
                        </div><!-- .beautypress-newsfeed-footer END -->
                    </div><!-- .beautypress-single-newsletter END -->
                </div>
            @endforeach
        </div>
        @if (count($posts) == 0) 
            <div style="margin-top:500px;"></div>
        @endif
    </div>
</section><!-- .beautypress-exclusive-products END -->
@endsection