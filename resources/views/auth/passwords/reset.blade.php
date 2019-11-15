@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 10%">
        <div class="row">

            <div class="col-lg-9 column">
                <div class="profile-title">
                    <h3>Cập nhật Password</h3>
                </div>
                @if (session('errmsg'))
                    <p class="text-danger"> {{session('errmsg')}} </p>
                @endif
                <form action="{{ route('user.save-password') }}" method="post" style="margin-left: 3%">
                    @csrf
                    <div class="form-group">
                        <span class="pf-title">Mật khẩu mới</span>
                        <input type="password" name="newpassword" class="form-control"
                               placeholder="mật khẩu mới">
                        @if($errors->first('newpassword'))
                            <span class="text-danger"> {{$errors->first('newpassword')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span class="pf-title">Nhập lại mật khẩu</span>
                        <input type="password" name="repassword" class="form-control"
                               placeholder="nhập lại mật khẩu">
                        @if($errors->first('repassword'))
                            <span class="text-danger"> {{$errors->first('repassword')}} </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-xs">
                       Cập nhật
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
