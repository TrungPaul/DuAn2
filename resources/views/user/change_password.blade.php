@extends('layouts.index')
@section('title', 'Đổi mật khẩu')
@section('content')
    <div class="container" style="margin-top: 170px; margin-bottom:50px;">
        <div class="row">
            <div class="col-md-3">
                @include('layouts.menu_bar')
            </div>
            <div class="col-md-9">
                <div class="tr-single-header">
                    <h2>Thay đổi mật khẩu</h2>
                    <hr>
                </div>
                @if (session('errmsg'))
                    <p class="text-danger"> {{session('errmsg')}} </p>
                @endif
                <div class="col-md-9">
                     <form action="{{ route('user.save-password') }}" method="post">
                        @csrf
                        @if (isset(Auth::user()->id))
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        @endif
                        <div class="form-group">
                            <span class="pf-title">Mật khẩu hiện tại</span>
                            <input type="password" name="password" class="form-control">
                            @if($errors->first('password'))
                                <span class="text-danger"> {{$errors->first('password')}} </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <span class="pf-title">Mật khẩu mới</span>
                            <input type="password" name="newpassword" class="form-control">
                            @if($errors->first('newpassword'))
                                <span class="text-danger"> {{$errors->first('newpassword')}} </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <span class="pf-title">Nhập lại mật khẩu</span>
                            <input type="password" name="repassword" class="form-control">
                            @if($errors->first('repassword'))
                                <span class="text-danger"> {{$errors->first('repassword')}} </span>
                            @endif
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success btn-xs">
                            Cập nhật
                            </button>
                            <a href="{{ route('user.profile') }}" class="btn btn-danger btn-xs">Huỷ</a>&emsp;
                        </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
