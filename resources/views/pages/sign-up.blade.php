@extends('layouts.login')
@section('title', 'Đăng kí tài khoản')
@section('content')
    <div class="center-sign">
        <div class="panel card-sign">
            <div class="card-title-sign mt-3 text-right">
                <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign Up</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="form-group mb-3">
                        <label>Tên hiển thị</label>
                        <label class="text-danger">(*)</label>
                        <div class="input-group">
                            <input name="name" type="text" class="form-control form-control-lg"
                                   value="{{ old('name') }}"/>
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </span>
                        </div>
                        @if($errors->first('name'))
                            <span class="text-danger"> {{ $errors->first('name') }} </span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <label class="text-danger">(*)</label>
                        <div class="input-group">
                            <input name="email" type="text" class="form-control form-control-lg"
                                   value="{{ old('email') }}"/>
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </span>
                        </div>
                        @if($errors->first('email'))
                            <span class="text-danger"> {{ $errors->first('email') }} </span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label>Mật khẩu</label>
                        <label class="text-danger">(*)</label>
                        <div class="input-group">
                            <input name="password" type="password" class="form-control form-control-lg"
                                   value="{{old('password')}}"/>
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </span>
                        </div>
                        @if($errors->first('password'))
                            <span class="text-danger"> {{ $errors->first('password') }} </span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <div class="clearfix">
                            <label class="float-left">Nhập lại password</label>
                            <label class="text-danger">(*)</label>
                        </div>
                        <div class="input-group">
                            <input name="pwd" type="password" class="form-control form-control-lg" value=""/>
                            <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </span>
                        </div>
                        @if($errors->first('pwd'))
                            <span class="text-danger"> {{ $errors->first('pwd') }}  </span>
                        @endif
                    </div>
                    <div class="form-group mb-3 ">
                        <div class="clearfix">
                            <label class="float-left">Giới Tính</label>
                            <label class="text-danger">(*)</label>
                        </div>
                        <div class="d-flex justify-content-around">
                            <div class="form-check p-2">
                                <input class="form-check-input" type="radio" name="gender" value="1">
                                <label class="form-check-label" for="exampleRadios2">
                                    Nam
                                </label>
                            </div>
                            <div class="form-check p-2">
                                <input class="form-check-input " type="radio" name="gender" value="2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Nữ
                                </label>
                            </div>
                            <div class="form-check p-2">
                                <input class="form-check-input " type="radio" name="gender" value="3">
                                <label class="form-check-label" for="exampleRadios2">
                                    Khác
                                </label>
                            </div>
                        </div>
                        @if($errors->first('gender'))
                            <span class="text-danger"> {{ $errors->first('gender') }}  </span>
                        @endif
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="checkbox-custom checkbox-default">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="remember" type="checkbox"/>
                                    <label for="RememberMe"><a href="https://www.facebook.com/legal/terms"
                                                               class="text-primary">Tôi đồng ý với các điều khoản sử
                                            dụng</a></label>
                                </div>
                                @if($errors->first('remember'))
                                    <span class="text-danger"> {{ $errors->first('remember') }} </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary mt-2 ">Đăng ký</button>
                        </div>
                    </div>
                    <br>
                    <div class="mb-1 text-center">
                        <img src="{{asset('assets/img/section-heading-separetor.png')}}" alt="" style="width:52%">
                    </div>
                    <br>
                    <p class="text-center">Bạn đã có tài khoản<a href="{{route('login')}}" class="text-primary"> Đăng
                            nhập</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection

