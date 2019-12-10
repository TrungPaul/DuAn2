@extends('layouts.index')
@section('title', 'Chi tiết bài viết')

@section('content')
<section class="beautypress-blog-post-section section-padding mt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xl-8 col-lg-8">
						<div class="beautypress-blog-post-group">
							<div class="beautypress-blog-post-wraper">
								<img src="images/posts/{{ $post->image }}" width="100%">	
								<p>Danh mục: <strong>{{ $post->category->name }}</strong></p> 
								<div class="beautypress-newsfeed-img">
									<strong>Tác giả: </strong>&emsp;
									<img src="images/avatar/{{ $post->user->avatar }}" alt="">
									{{ $post->user->name }}
								</div>
								{{ $post->created_at }} | <i class="fas fa-eye"></i> {{ $post->views }}
								<h2 class="pt-5">{{ $post->title }}</h2>
								<i>{{ $post->description }}</i><br><br>
                                <div id="summernote">{!! $post->content !!}</div>
							</div><!-- .beautypress-blog-post-wraper END -->
						
							<div class="beautypress-replay-answer-container mt-5">
								<div class="beautypress-simple-title mb-30">
									<h3>Bình luận</h3>
								</div>
								@if(session()->has('message_reply'))
									<div class="alert alert-success">
										{{ session()->get('message_reply') }}
									</div>
								@endif
								<div class="beautypress-replay-answer-wraper">
									@foreach ( $comments as $cmt)
										<div class="beautypress-single-replay">
											<div class="beautypress-replayer-img">
												@if (isset($cmt->avatar))
													<img src="images/avatar/{{ $cmt->avatar }}" style="border-radius:100%;">
												@else
													<img src="images/avatar/default-avatar.png" alt="">
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
												<ul class="beautypress-socail-react text-right">
													<li><a style="cursor: pointer;" class="color-purple" onclick="reply(this,{{ $cmt->id }})">Trả lời</a></li>
												</ul>
												
											</div>
											<!-- reply -->
												
											<!-- end reply -->
										</div><!-- .beautypress-single-replay END -->
										
										@foreach($cmt->replies as $rep)
										<div class="beautypress-single-replay" style="margin-left:80px;">
											<div class="beautypress-replayer-img">
											@if (isset($rep->avatar))
												<img src="images/avatar/{{ $rep->avatar }}" style="border-radius:100%;">
											@else
												<img src="images/avatar/default-avatar.png" alt="">
											@endif
											</div>
											<div class="beautypress-replay-text">
												<div class="beautypress-spilit-container">
													<div class="beautypress-replay-name">
														<h5>{{ $rep->name }}</h5>
													</div>
													<div class="beautypress-replay-time">
														<h6>{{ $rep->created_at }} </h6>
													</div>
												</div>
												<p> {{ $rep->content }}</p>
											
											</div>
										</div>
										@endforeach
										<hr>
									@endforeach
									
									<!-- Đăng reply -->
									@if (isset($cmt))
									<div class="beautypress-replay-container reply-row" style="display:none;">
										<div class="beautypress-replay-form-wraper">
											<form class="formreply" action="{{route('create_reply')}}" method="POST" id="beautypress-replay-form">
													<div class="row mb-30">
														@csrf
														<input type="hidden" name="comment_id"> 
														@if (Auth::check())
															<input type="hidden" name="name" value="<?= Auth::user()->name ?>">
															<input type="hidden" name="user_id" value="<?= Auth::user()->id ?>"> 
															<input type="hidden" name="avatar" value="<?= Auth::user()->avatar ?>"> 
														@endif
														<div class="col-md-12">
														@if (!Auth::check())
															<div class="form-group">
																<input type="text" name="reply_name" id="r_name" class="form-control" placeholder="Tên" value="{{ old('name') }}">
															</div>
														@endif
														</div>
													</div>
													<div class="form-group">
													@if (Auth::check())
														<img src="images/avatar/{{ Auth::user()->avatar }}" width="50" height="50" style="border-radius:100%;"><br><br>
														<textarea name="reply_content" class="form-control mb-30"  id="r_massage" cols="30" placeholder="Nhập bình luận" rows="10">{{ old('content') }}</textarea>
													@else 
														<textarea name="reply_content" class="form-control mb-30"  id="r_massage" cols="30" placeholder="Nhập bình luận" rows="10">{{ old('content') }}</textarea>
													@endif
													</div>
													<div class="form-group">
														<input type="submit" value="Đăng trả lời" id="r_submit">
													</div>
											</form>
										</div><!-- .beautypress-replay-form-wraper END -->
									</div><!-- .beautypress-replay-container END -->
									@endif
								</div><!-- .beautypress-replay-answer-wraper END -->
							</div><!-- .beautypress-replay-answer-container END -->
							<div class="beautypress-replay-answer-container">
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
														<input type="text" name="name" id="r_name" class="form-control" placeholder="Tên" value="{{ old('name') }}">
													</div>
												@endif
											</div>
										</div>
										<div class="form-group">
											@if (Auth::check())
												<div class="beautypress-newsfeed-img">
													<img src="images/avatar/{{ Auth::user()->avatar }}" width="50">
												</div><br>
												<textarea name="content" class="form-control mb-30"  id="r_massage" cols="30" placeholder="Nhập bình luận" rows="10">{{ old('content') }}</textarea>
											@else 
												<textarea name="content" class="form-control mb-30"  id="r_massage" cols="30" placeholder="Nhập bình luận" rows="10">{{ old('content') }}</textarea>
											@endif
										</div>
										<div class="form-group">
											<input type="submit" value="Gửi bình luận" id="r_submit">
										</div>
									</form>
								</div><!-- .beautypress-replay-form-wraper END -->
							</div><!-- .beautypress-replay-container END -->
						</div><!-- .beautypress-blog-post-group END -->
					</div>

					<!-- bải viết liên quan -->
					<div class="col-md-12 col-xl-4 col-lg-4">
						<div class="beautypress-side-bar-group">
							<div class="beautypress-single-sidebar">
								<div class="beautypress-sidebar-heading">
									<h3>Bài viết liên quan</h3>
								</div>
								<div class="beautypress-latest-news-wraper">
									@foreach ( $posts as $ps)
										@if ($ps->id != $post->id)
											<div class="beautypress-single-latest-news">
												<div class="beautypress-latest-post-img">
												<a href="{{route('detail_post', $ps->id)}}"><img src="images/posts/{{ $ps->image}}" alt=""></a>
												</div>
												<div class="beautypress-latest-post-content">
													<a href="{{route('detail_post', $ps->id)}}">{{ $ps->title }}</a>
												</div>
											</div><!-- .beautypress-single-latest-news END -->
										@endif
									@endforeach
								</div><!-- .beautypress-latest-news-wraper END -->
							</div><!-- .beautypress-single-sidebar END -->
								
							<!-- bài viết mới nhất -->
							<div class="beautypress-single-sidebar">
								<div class="beautypress-sidebar-heading">
									<h3>Bài viết mới nhất</h3>
								</div>
								<div class="beautypress-latest-news-wraper">
                                    @foreach ( $new_posts as $np)
                                        <div class="beautypress-single-latest-news">
                                            <div class="beautypress-latest-post-img">
                                            <a href="{{route('detail_post', $np->id)}}"><img src="images/posts/{{ $np->image}}" alt=""></a>
                                            </div>
                                            <div class="beautypress-latest-post-content">
                                                <a href="{{route('detail_post', $np->id)}}">{{ $np->title }}</a>
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
                                     	<li><a href="{{route('post_in_cate', $cate->id)}}"><i class="fa fa-play"></i> {{ $cate->name }}</a></li>
                                    @endforeach
								</ul><!-- .beautypress-category-list END -->
							</div><!-- .beautypress-single-sidebar END -->
						</div><!-- .beautypress-side-bar-group END -->
					</div>
				</div>
			</div>
		</section><!-- .beautypress-blog-post-section END -->
@endsection
