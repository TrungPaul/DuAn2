@extends('layouts.index')
@section('title', 'Chi tiết bài viết')

@section('content')
<section class="beautypress-blog-post-section section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xl-8 col-lg-8">
						<div class="beautypress-blog-post-group">
							<div class="beautypress-blog-post-wraper">
								<img src="images/{{ $post->image }}" alt="">		
								<div class="beautypress-tag">
									<a href="#">beauty</a>
									<a href="#">spa</a>
									<a href="#">nature</a>
									<a href="#">salon</a>
								</div><!-- .beautypress-tag END -->
								<h2>{{ $post->title }}</h2>
                                <p><span class="firstcharacter">O</span>{{ $post->content }}</p>

								<p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer.</p>
							</div><!-- .beautypress-blog-post-wraper END -->
							<div class="beautypress-spilit-container mb-70">
								<div class="beautypress-simple-title text-left">
									<h5>Previous Post</h5>
									<a href="#">One morning, when Gregor Samsa</a>
								</div><!-- .beautypress-simple-title END -->
								<div class="beautypress-simple-title text-right">
									<h5>Next Post</h5>
									<a href="#">However hard he threw himself</a>
								</div><!-- .beautypress-simple-title END -->
							</div><!-- .beautypress-spilit-container END -->
							<div class="beautypress-replay-answer-container">
								<div class="beautypress-simple-title mb-30">
									<h3>Bình luận <span>(211)</span></h3>
								</div>
								<div class="beautypress-replay-answer-wraper">
									<div class="beautypress-single-replay">
										<div class="beautypress-replayer-img">
											<img src="assets/img/avatar-1.jpg" alt="">
										</div>
										<div class="beautypress-replay-text">
											<div class="beautypress-spilit-container">
												<div class="beautypress-replay-name">
													<h5>Jhon William Smith</h5>
												</div>
												<div class="beautypress-replay-time">
													<h6>September 10, 2016 at 1:31 pm </h6>
												</div>
											</div>
											<p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
											<ul class="beautypress-socail-react">
												<li><a href="#" class="color-purple"><i class="fa fa-thumbs-o-up"></i></a>18K+</li>
												<li><a href="#" class="color-purple"><i class="fa fa-thumbs-o-down"></i></a>18k+</li>
												<li><a href="#" class="color-purple">Repley</a></li>
											</ul>
										</div>
									</div><!-- .beautypress-single-replay END -->
									<div class="beautypress-single-replay beautypress-replay">
										<div class="beautypress-replayer-img">
											<img src="assets/img/avatar-2.jpg" alt="">
										</div>
										<div class="beautypress-replay-text">
											<div class="beautypress-spilit-container">
												<div class="beautypress-replay-name">
													<h5>Jhon William Smith</h5>
												</div>
												<div class="beautypress-replay-time">
													<h6>September 10, 2016 at 1:31 pm </h6>
												</div>
											</div>
											<p>slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought.</p>
											<ul class="beautypress-socail-react">
												<li><a href="#" class="color-purple"><i class="fa fa-thumbs-o-up"></i></a>18K+</li>
												<li><a href="#" class="color-purple"><i class="fa fa-thumbs-o-down"></i></a>18k+</li>
												<li><a href="#" class="color-purple">Repley</a></li>
											</ul>
										</div>
									</div><!-- .beautypress-single-replay .beautypress-replay END -->
									<div class="beautypress-single-replay">
										<div class="beautypress-replayer-img">
											<img src="assets/img/avatar-3.jpg" alt="">
										</div>
										<div class="beautypress-replay-text">
											<div class="beautypress-spilit-container">
												<div class="beautypress-replay-name">
													<h5>Jhon William Smith</h5>
												</div>
												<div class="beautypress-replay-time">
													<h6>September 10, 2016 at 1:31 pm </h6>
												</div>
											</div>
											<p> However hard he threw himself onto his right, he always rolled back to where he was. He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when</p>
											<ul class="beautypress-socail-react">
												<li><a href="#" class="color-purple"><i class="fa fa-thumbs-o-up"></i></a>18K+</li>
												<li><a href="#" class="color-purple"><i class="fa fa-thumbs-o-down"></i></a>18k+</li>
												<li><a href="#" class="color-purple">Repley</a></li>
											</ul>
										</div>
									</div><!-- .beautypress-single-replay END -->
								</div><!-- .beautypress-replay-answer-wraper END -->
								<div class="beautypress-btn-wraper">
									<a href="#" class="xs-btn bg-color-purple round-btn box-shadow-btn">
										More Comments
										<span></span>
									</a>
								</div><!-- .beautypress-btn-wraper END -->
							</div><!-- .beautypress-replay-answer-container END -->
							<div class="beautypress-replay-container">
								<div class="beautypress-simple-title mb-30">
									<h3>Leave a Reply</h3>
								</div><!-- .beautypress-simple-title END -->
								<div class="beautypress-replay-form-wraper">
									<form action="#" method="POST" id="beautypress-replay-form">
										<div class="row mb-30">
											<div class="col-md-4 col-sm-12">
												<div class="form-group">
													<input type="text" id="r_name" class="form-control" placeholder="Your name">
												</div>
											</div>
											<div class="col-md-4 col-sm-12">
												<div class="form-group">
													<input type="email" id="r_email" class="form-control" placeholder="Your email">
												</div>
											</div>
											<div class="col-md-4 col-sm-12">
												<div class="form-group">
													<input type="text" id="r_website" class="form-control" placeholder="Website">
												</div>
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control mb-30" name="r_massage" id="r_massage" cols="30" placeholder="Comments" rows="10"></textarea>
										</div>
										<div class="form-group">
											<input type="submit" value="Submit comment" id="r_submit">
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
                                                <img src="assets/img/latest-post-img-3.jpg" alt="">
                                            </div>
                                            <div class="beautypress-latest-post-content">
                                                <a href="{{route('detail_post', $np->id)}}">{{ $np->title }}</a>
                                                <i>20 Hours Ago</i>
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
