@extends('layouts.login')
@section('title', 'Đăng kí tài khoản spa')
@section('content')
    <div class="center-sign">
        <div class="panel card-sign">
            <div class="card-title-sign mt-3 text-right">
                <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign Up - Spa</h2>
            </div>
            <div class="card-body">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <a class="text-primary h5" href="{{ url('/') }}">Trở về trang chủ</a><br><br>
                <form action="{{ route('spa_register') }}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="form-group mb-3">
                        <label>Tên spa</label>
                        <label class="text-danger">(*)</label>
                        <div class="input-group">
                            <input name="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}"/>
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </span>
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Location</label>
                        <label class="text-danger">(*)</label>
                        <div class="input-group">
                            <input name="location" type="text" class="form-control form-control-lg @error('location') is-invalid @enderror"
                                   value="{{ old('location') }}"/>
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-location-arrow"></i>
                            </span>
                        </span>
                        </div>
                        @error('location')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Số điện thoại</label>
                        <label class="text-danger">(*)</label>
                        <div class="input-group">
                            <input name="phone" type="number" class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                   value="{{old('phone')}}"/>
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-phone"></i>
                            </span>
                        </span>
                        </div>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <div class="clearfix">
                            <label class="float-left">Hỉnh ảnh spa</label>
                            <label class="text-danger">(*)</label>
                        </div>
                        <div class="input-group" style="font-size:12px;">
                            <input name="image" type="file" class="form-control form-control-lg @error('image') is-invalid @enderror" style="font-size:18px;" value=""/>
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-image"></i>
                            </span>
                        </span>
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="checkbox-custom checkbox-default">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="remember" type="checkbox"/>
                                    <label for="RememberMe"><a href="https://www.facebook.com/legal/terms" class="text-primary">Tôi cam đoan những thông tin trên là thật</a></label>
                                </div>
                                @error('remember')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary mt-2 mb-2">Đăng ký</button>
                        </div>
                    </div>
                    <!-- <br>
                    <div class="mb-1 text-center">
                        <img src="{{asset('assets/img/section-heading-separetor.png')}}" alt="" style="width:52%">
                    </div>
                    <br>
                    <div class="mb-1 text-center">
                        <a class="btn btn-facebook mb-3 ml-1 mr-1" href="#">Đăng nhập <i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-google mb-3 ml-1 mr-1" href="#">Đăng nhập <i class="fab fa-google"></i></a>
                    </div> -->
                    <p class="text-center">Bạn đã có tài khoản<a href="{{route('login')}}" class="text-primary"> Đăng nhập</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection

