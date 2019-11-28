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
                <p class="font-weight-bold">Thông tin cơ bản</p>
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
                        <label>Thành phố</label>
                        <label class="text-danger">(*)</label>
                        <div class="input-group">
                            <select name="city_id" class="browser-default custom-select form-control-lg @error('location') is-invalid @enderror" style="height:48px;">
                                <option value="">Chọn...</option>
                                @foreach ( $location as $city)
                                    <option value="{{ $city->id }}" {{ old('city_id') == $city->id ? "selected" : "" }}>{{ $city->name }}</option>
                                @endforeach
                            </select>
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-city"></i>
                            </span>
                        </span>
                        </div>
                        @error('city_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Địa chỉ cụ thể</label>
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
                            <input name="image" type="file" class="form-control form-control-lg @error('image') is-invalid @enderror" style="font-size:18px;" value="{{old('image')}}"/>
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

                    <p class="font-weight-bold">Thông tin đăng nhập</p>
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <label class="text-danger">(*)</label>
                        <div class="input-group">
                            <input name="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                   value="{{old('email')}}"/>
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </span>
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Mật khẩu</label>
                        <label class="text-danger">(*)</label>
                        <div class="input-group">
                            <input name="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror">
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </span>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Nhập lại mật khẩu</label>
                        <label class="text-danger">(*)</label>
                        <div class="input-group">
                            <input name="pwd" type="password" class="form-control form-control-lg @error('pwd') is-invalid @enderror">
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </span>
                        </div>
                        @error('pwd')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

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
                    <p class="text-center">Bạn đã có tài khoản<a href="{{route('login_spa')}}" class="text-primary"> Đăng nhập</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection

