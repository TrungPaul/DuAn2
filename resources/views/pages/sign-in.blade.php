@extends('layouts.login')
@section('title', 'Đăng nhập')
@section('content')
    <div class="center-sign">
        <div class="panel card-sign">
            <div class="card-title-sign mt-3 text-right">
                <h2 class="title text-uppercase font-weight-bold m-0"><a href="{{route('home')}}">SpaTime</a></h2>
            </div>
            <div class="card-body">
                @if(isset($create_user))<h4 class="text-success">{{ $create_user }}</h4>@endif
                @if(isset($erorrLogin))<span class="text-danger">{{ $erorrLogin }}</span>
                @endif
                <form action="{{ route('postLogin')}}" method="post">
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
                    <br>
                    <div class="mb-1 text-center">
                        <img src="{{asset('assets/img/section-heading-separetor.png')}}" alt="" style="width:52%">
                    </div>
                    <br>
                    <div class="mb-1 text-center">
                        <a class="btn btn-facebook mb-3 ml-1 mr-1" href="{{ route('login-spa') }}">Đăng nhập với tư cách
                            là Spa
                        </a>
                    </div>
                    <p class="text-center">Bạn đã có tài khoản <a href="/sign-up">Đăng ký</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
@if (session('create_user'))
    <script>
        toastr.success('{{ session('create_user')}}', {timeOut: 200});
    </script>
@endif


