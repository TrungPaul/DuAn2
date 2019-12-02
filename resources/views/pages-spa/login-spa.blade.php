@extends('layouts.login')
@section('title', 'Đăng nhập khoản spa')
@section('content')
    <div class="center-sign">
        <div class="panel card-sign">
            <div class="card-title-sign mt-3 text-right">
                <h2 class="title text-uppercase font-weight-bold m-0"><a href="{{route('home')}}">Đăng nhập - Spa</a></h2>
            </div>
            <div class="card-body">
                <form action="{{ route('login-spa')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <span class="text-danger">(*)</span>
                        <div class="input-group">
                            <input name="email" type="text" class="form-control form-control-lg"/>
                            <span class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </span>
                        </div>
                        @if (session('errmsg'))
                            <p class="text-danger"> {{session('errmsg')}} </p>
                        @endif
                        @if($errors->first('email'))
                            <span class="text-danger"> {{$errors->first('email')}} </span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <span class="text-danger">(*)</span>
                        <div class="clearfix">
                            <label class="float-left"></label>
                        </div>
                        <div class="input-group">
                            <input name="password" type="password" class="form-control form-control-lg"/>
                            <span class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </span>
                        </div>
                        @if($errors->first('password'))
                            <span class="text-danger"> {{$errors->first('password')}} </span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="checkbox-custom checkbox-default">
                                <input id="RememberMe" name="rememberme" type="checkbox"/>
                                <label for="RememberMe" class="card-link">Nhớ tài khoản</label>

                            </div>
                        </div>
                        <div class="col-sm-4 text-right">
                            <button type="submit" class="btn btn-primary mt-2">Đăng nhập</button>
                            <a href="" style="color: #999" class="float-right"></a>

                        </div>
                    </div>
                    <div class="mb-1 text-center">
                        <img src="{{asset('assets/img/section-heading-separetor.png')}}" alt="" style="width:52%">
                    </div>
                    <p class="text-center">Bạn muốn đăng ký để trở thành Spa trong hệ thống?<br> <a href="/sign-up-spa">Đăng ký</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection

