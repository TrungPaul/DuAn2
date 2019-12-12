@extends('admin.layouts.main')
@section('content')
<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
            <h3> {{$user}}</h3>
				<p> Thành viên</p>
			</div>
			<div class="icon">
				<i class="fas fa-users"></i></i>
			</div>
			<a href="{{ route('admin.listuser')}}" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3> {{ $post }}</h3>
				<p> Bài viết </p>
			</div>
			<div class="icon">
				<i class="fas fa-book"></i>
			</div>
			<a href="{{ route('admin.listpost')}}" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
		<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
            <h3> {{$spa}}</h3>
				<p>Spa</p>
			</div>
			<div class="icon">
				<i class="fas fa-spa"></i>
			</div>
			<a href="{{ route('admin.listspa')}}" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->
</div>

@endsection
