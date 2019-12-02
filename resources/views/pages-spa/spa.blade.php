@extends('layouts-spa.index')
@section('title', 'Thông tin spa')

@section('content')
    <div class="col-md-9 col-sm-12">
        <div class="tab-pane active container" id="c-profile">
            <!-- Company Information -->
            <div class="tr-single-box">
                <div class="tr-single-header">
                    <h3><i class="ti-home"></i> Thông tin Spa</h3>
                </div>
                <div class="tr-single-body">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Tên cửa hàng: {{ Auth::guard('spa')->user()->name }} </label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Email:</label>
                                {{ Auth::guard('spa')->user()->email }}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Số điện thoại:</label>
                                {{ Auth::guard('spa')->user()->phone }}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Địa chỉ:</label>
                                {{ Auth::guard('spa')->user()->location }}
                                , {{ Auth::guard('spa')->user()->city['name'] }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('edit-profile-spa') }}" class="btn btn-info btn-md" style="margin-left: 40%">Thay đổi thông tin<i
                    class="ml-2 ti-arrow-right"></i></a>

        </div>
    </div>
@endsection()


