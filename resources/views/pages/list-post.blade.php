@extends('layouts.index')
@section('title', 'Bài viết')

@section('content')
    <div class="beautypress-newsfeed-section beautypress-no-bg section-padding">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-version-2" style="margin-top: 5%">
                <h3>Danh sách bài viết</h3>
                <img src="assets/img/section-heading-separetor.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-8 mb-3">
                    @foreach ( $posts as $key => $p )
                        <div class="beautypress-single-newsletter mb-5">
                            <div class="beautypress-newsfeed-header beautypress-black-gradient-overlay d-flex">
                                <img src="images/posts/{{ $p->image }}" style="height:400px;">
                                <div class="beautypress-newsfeed-header-content">
                                    <div class="beautypress-newsfeed-img">
                                        <img src="images/avatar/{{ $p->user->avatar }}" alt="">
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
                    <div class="d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                        
                </div>

                <div class="col-md-4">
                    <div class="beautypress-single-sidebar">
                        <div class="beautypress-sidebar-heading">
                            <h3>Sắp xếp</h3>
                        </div>
                        <ul class="beautypress-category-list">
                            <li><a href="{{route('new_post')}}"><i class="fa fa-play"></i>&emsp;Mới nhất</a></li>
                            <li><a href="{{route('hot_post')}}"><i class="fa fa-play"></i>&emsp;Xem nhiều</a></li>
                        <ul>
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
