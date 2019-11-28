@extends('layouts.index')
@section('title', 'Chỉnh sửa thông tin cá nhân')
@section('content')
    <div class="container" style="margin-top: 10%">
        <div class="row">
            <div class="col-lg-3 column border-right">
                @include('layouts.menu_bar')
            </div>
            <div class="col-lg-9 column" id="my-profile">
                <div class="profile-title">
                    <h3>Thông tin cá nhân</h3>
                </div>
                <form action="{{ route('user.update-profile') }}" method="post" enctype="multipart/form-data"
                        style="margin-left: 3%">
                    @csrf
                    @if (isset(Auth::user()->id))
                        <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                    @endif
                    <div class="row">
                        <div class="col-md-9" style="margin-top : 5%;">
                            <div class="form-group">

                                        <span class="pf-title">Avatar <span class="text-danger">*</span></span>
                                        <img src="{{ asset(Auth::user()->avatar) }}">
                                            <input type="file" name="avatar" class="form-control"
                                                   value="{{ Auth::user()->avatar }}" rows="10" placeholder="Họ và tên">
                                        @if($errors->first('avatar'))
                                            <span class="text-danger"> {{$errors->first('avatar')}} </span>
                                        @endif
                            </div>
                            <div class="form-group">
                                <span class="pf-title">Họ Và Tên <span class="text-danger">*</span></span>
                                    <input type="text" name="name" class="form-control"
                                           value="{{ Auth::user()->name }}" rows="10" placeholder="Họ và tên">
                                @if($errors->first('name'))
                                    <span class="text-danger"> {{$errors->first('name')}} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <span class="pf-title">Email <span class="text-danger">*</span></span>
                                <input type="text" name="email" class="form-control"
                                       value="{{ Auth::user()->email }}" placeholder="Email">
                                @if($errors->first('email'))
                                    <span class="text-danger"> {{$errors->first('email')}} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <span class="pf-title">Số điện thoại <span class="text-danger">*</span></span>
                                <input type="number" name="phone_number" class="form-control"
                                       value="{{ Auth::user()->phone_number }}" id="phone" placeholder="Số điện thoại">
                                <span id="err" class="text-danger"></span>
                                @if($errors->first('phone_number'))
                                    <span class="text-danger"> {{$errors->first('phone_number')}} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <span class="pf-title">Ngày sinh <span class="text-danger">*</span></span>
                                <input type="date" name="date_of_birth" class="form-control"
                                       value="{{ Auth::user()->date_of_birth }}" placeholder="Ngày sinh">
                                @if($errors->first('date_of_birth'))
                                    <span class="text-danger"> {{$errors->first('date_of_birth')}} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <span class="pf-title">Giới Tính <span class="text-danger">*</span></span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"
                                           @if (Auth::user()->gender == $gender['gender_type_male'] )
                                           Checked
                                           @endif
                                           value="1" id="inlineRadio1">
                                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"
                                           @if (Auth::user()->gender == $gender['gender_type_female'] )
                                           Checked
                                           @endif
                                           value="2" id="inlineRadio2">
                                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"
                                           @if (Auth::user()->gender == $gender['gender_type_other'])
                                           Checked
                                           @endif
                                           value="3" id="inlineRadio3">
                                    <label class="form-check-label" for="inlineRadio3">Khác</label>
                                </div>
                                @if($errors->first('gender'))
                                    <span class="text-danger"> {{$errors->first('gender')}} </span>
                                @endif
                            </div>

                                <button type="submit" class="btn btn-outline-success btn-xs">
                                        Cập nhật
                                </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
