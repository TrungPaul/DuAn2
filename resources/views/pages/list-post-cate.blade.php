@extends('layouts.index')
@section('title', 'Danh mục bài viết')

@section('content')
    <div class="beautypress-newsfeed-section beautypress-no-bg section-padding">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-version-2" style="margin-top: 5%">
                <h3>Danh sách bài viết</h3>
                <img src="assets/img/section-heading-separetor.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-8">
                    @foreach ( $posts as $key => $p )
                        <div class="beautypress-single-newsletter mb-30">
                            <div class="beautypress-newsfeed-header beautypress-black-gradient-overlay d-flex">
                                <img src="images/posts/{{ $p->image }}">
                                <div class="beautypress-newsfeed-header-content">
                                    <div class="beautypress-newsfeed-img">
                                        <img src="images/{{ $p->user->avatar }}" alt="">
                                        <a href="#">{{ $p->user->name }}</a>
                                    </div>
                                    <div class="beautypress-dates">
                                        <p class="color-white"><strong>{{ $p->category->name }}</strong></p>
                                        <br>{{ $p->created_at }} | <i class="fas fa-eye"></i> {{ $p->views }}
                                    </div>
                                </div><!-- .beautypress-newsfeed-header-content END -->
                            </div><!-- .beautypress-newsfeed-header END -->
                            <div class="beautypress-newsfeed-footer">
                                <a href="{{route('detail_post', $p->id)}}">{{ $p->title }}</a>
                                <p>{{ $p->description }}</p>
                            </div><!-- .beautypress-newsfeed-footer END -->
                        </div><!-- .beautypress-single-newsletter END -->
                    @endforeach
                </div>

                <div class="col-md-4">
                    <div class="beautypress-single-sidebar">
                        <div class="beautypress-sidebar-heading">
                            <h3>Bài viết nổi bật</h3>
                        </div>
                        <div class="beautypress-latest-news-wraper">
                            @foreach ( $posts_view as $pv)
                                <div class="beautypress-single-latest-news">
                                    <div class="beautypress-latest-post-img">
                                        <a href="{{route('detail_post', $pv->id)}}"><img src="images/posts/{{ $pv->image}}" alt=""></a>
                                    </div>
                                    <div class="beautypress-latest-post-content">
                                        <a href="{{route('detail_post', $pv->id)}}">{{ $pv->title }}</a>
                                        <i class="fas fa-eye"></i> {{ $pv->views }}
                                    </div>
                                </div><!-- .beautypress-single-latest-news END -->
                            @endforeach
                        </div><!-- .beautypress-latest-news-wraper END -->
                    </div><!-- .beautypress-single-sidebar END -->
                    
                    <div class="beautypress-single-sidebar">
                        <div class="beautypress-sidebar-heading">
                            <h3>Danh mục</h3>
                        </div>
                        <ul class="beautypress-category-list">
                            @foreach ( $categories as $cate)
                                <li><a href="{{route('post_in_cate', $cate->id)}}"><i class="fa fa-play"></i>&emsp;{{ $cate->name }}</a></li>
                            @endforeach
                        </ul><!-- .beautypress-category-list END -->
                    </div><!-- .beautypress-single-sidebar END -->
                </div>
            </div>
        </div>
    </div>
@endsection
