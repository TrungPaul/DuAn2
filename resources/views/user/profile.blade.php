@extends('layouts.index')
@section('title', 'Thông tin cá nhân')
@section('content')
<section class="tr-single-detail gray-bg mb-5" style="margin-top:170px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('layouts.menu_bar')
                </div>
                
                <div class="col-md-9">
                    <div class="tr-single-header">
                        <h2>Thông tin tài khoản</h2>
                        <hr>
                    </div>
                    <div class="tr-single-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label><b>Tên:</b> {{ Auth::user()->name }}</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label><b>Email:</b> {{ Auth::user()->email }}</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label><b>Số điện thoại:</b> {{ Auth::user()->phone_number }}</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label><b>Ngày sinh:</b> {{ Auth::user()->date_of_birth }}</label>
                                    
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label><b>Giới tính:</b>
                                        @if ( Auth::user()->gender == $gender['gender_type_male'] )
                                            Nam
                                        @elseif ( Auth::user()->gender == $gender['gender_type_female'] )
                                            Nữ
                                        @else
                                            Khác
                                        @endif
                                    </label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
