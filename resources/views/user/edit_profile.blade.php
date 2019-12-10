@extends('layouts.index')
@section('title', 'Chỉnh sửa thông tin cá nhân')
@section('content')
    <div class="container mb-5" style="margin-top:170px">
        <div class="row">
            <div class="col-md-3">
                @include('layouts.menu_bar')
            </div>

            <div class="col-md-9">
                <div class="tr-single-header">
                    <h2>Sửa thông tin tài khoản</h2>
                    <hr>
                </div>
                <form action="{{ route('user.update-profile') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if (isset(Auth::user()->id))
                        <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="pf-title">Avatar <span class="text-danger">*</span></span>
                                <img id="showImage" src="images/avatar/{{ Auth::user()->avatar }}" 
                                                    style="width:120px; height:120px; border-radius:100%; display: block; margin-left: auto; margin-right:auto; ">
                                <input type="file" name="avatar" class="form-control mt-3" value="{{ Auth::user()->avatar }}">
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
                        </div>
                        <div class="col-md-6">
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

                            <div class="text-right" style="margin-top:100px;">
                                <button type="submit" class="btn btn-success btn-xs">Cập nhật</button>
                                <a href="{{ route('user.profile') }}" class="btn btn-danger btn-xs">Huỷ</a>&emsp;
                            </div>
                        </div>
            
                    </div>
                </form>
            </div>
        </div>
    </div>
@section('script')
    <script>
        var img = document.querySelector('[name="avatar"]');
        img.onchange = function () {
            var anh = this.files[0];
            if (anh == undefined) {
                document.querySelector('#showImage').src = "images/avatar/default-avatar.png";
            } else {
                getBase64(anh, '#showImage');
            }
            getBase64(anh, '#showImage');
        }
        function getBase64(file, selector) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                document.querySelector(selector).src = reader.result;
            };
            reader.onerror = function (error) {
                console.log('Error: ', error);
            };
        }
    </script>
@stop
@endsection
