@extends('layouts.index')
@section('title', 'Chi tiết bài viết')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<section class="beautypress-blog-post-section section-padding mt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xl-8 col-lg-8">
						<div class="beautypress-blog-post-group">
							<div class="beautypress-blog-post-wraper">
								<img src="images/posts/{{ $post->image }}" alt="">		
								<h2>{{ $post->title }}</h2>
                                <p>{{ $post->content }}</p>
							</div><!-- .beautypress-blog-post-wraper END -->
						
							<div class="beautypress-replay-answer-container">
								<div class="beautypress-simple-title mb-30">
									<h3>Bình luận</h3>
								</div>
								<div class="beautypress-replay-answer-wraper">
									@foreach ( $comments as $cmt)
										<div class="beautypress-single-replay">
											<div class="beautypress-replayer-img">
												@if (isset($cmt->avatar))
													<img src="images/{{ $cmt->avatar }}" alt="">
												@else
													<img src="https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg" alt="">
												@endif
											</div>
											<div class="beautypress-replay-text">
												<div class="beautypress-spilit-container">
													<div class="beautypress-replay-name">
														<h5>{{ $cmt->name }}</h5>
													</div>
													<div class="beautypress-replay-time">
														<h6>{{ $cmt->created_at }} </h6>
													</div>
												</div>
												<p> {{ $cmt->content }}</p>
											</div>
										</div><!-- .beautypress-single-replay END -->
									@endforeach
								</div><!-- .beautypress-replay-answer-wraper END -->
							</div><!-- .beautypress-replay-answer-container END -->
							<div class="beautypress-replay-container">
								<div class="beautypress-simple-title mb-30">
									<h3>Đăng bình luận</h3>
								</div><!-- .beautypress-simple-title END -->
								@if(session()->has('message'))
									<div class="alert alert-success">
										{{ session()->get('message') }}
									</div>
								@endif
								@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
								<div class="beautypress-replay-form-wraper">
									<form action="{{route('create_comment')}}" method="POST" id="beautypress-replay-form">
										@csrf
										<input type="hidden" name="post_id" value="<?= $post->id ?>"> 
										@if (Auth::check())
											<input type="hidden" name="name" value="<?= Auth::user()->name ?>">
											<input type="hidden" name="user_id" value="<?= Auth::user()->id ?>"> 
											<input type="hidden" name="avatar" value="<?= Auth::user()->avatar ?>"> 
										@endif
										<div class="row mb-10">
											<div class="col-md-6 col-sm-12">
												@if (!Auth::check())
													<div class="form-group">
														<input type="text" name="name" id="r_name" class="form-control" placeholder="Tên (bắt buộc)" value="{{ old('name') }}">
													</div>
												@endif
											</div>
										</div>
										<div class="form-group">
											<textarea name="content" class="form-control mb-30"  id="r_massage" cols="30" placeholder="Nội dung (bắt buộc)" rows="10">{{ old('content') }}</textarea>
										</div>
										<div class="form-group">
											<input type="submit" value="Gửi bình luận" id="r_submit">
										</div>
									</form>
								</div><!-- .beautypress-replay-form-wraper END -->
							</div><!-- .beautypress-replay-container END -->
						</div><!-- .beautypress-blog-post-group END -->
					</div>
					<div class="col-md-12 col-xl-4 col-lg-4">
						<div class="beautypress-side-bar-group">
							<div class="beautypress-single-sidebar">
								<div class="beautypress-sidebar-heading">
									<h3>Bài viết mới nhất</h3>
								</div>
								<div class="beautypress-latest-news-wraper">
                                    @foreach ( $new_posts as $np)
                                        <div class="beautypress-single-latest-news">
                                            <div class="beautypress-latest-post-img">
                                                <img src="images/posts/{{ $np->image}}" alt="">
                                            </div>
                                            <div class="beautypress-latest-post-content">
                                                <a href="{{route('detail_post', $np->id)}}">{{ $np->title }}</a>
                                                <i>{{ $np->description }}</i>
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
                                     <li><a href="#"><i class="fa fa-play"></i>{{ $cate->name }}</a></li>
                                    @endforeach
								</ul><!-- .beautypress-category-list END -->
							</div><!-- .beautypress-single-sidebar END -->
						</div><!-- .beautypress-side-bar-group END -->
					</div>
				</div>
			</div>
		</section><!-- .beautypress-blog-post-section END -->
@endsection
