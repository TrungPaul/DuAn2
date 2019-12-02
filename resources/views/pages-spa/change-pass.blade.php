@extends('layouts-spa.index')
@section('title', 'Đổi mật khẩu')

@section('content')
    <div class="col-md-8 col-sm-12">
        <div class="tab-pane" id="change-password">
            <form action="{{ route('change-pass') }}" method="POST" novalidate>
                @csrf
                <div class="tr-single-box">
                    <div class="tr-single-header">
                        <h3><i class="lni-lock"></i> Đổi mật khẩu</h3>
                    </div>
                    <div class="tr-single-body">
                        <div class="form-group">
                            <label>Mật khẩu cũ <span class="text-danger">*</span></label>
                            <input class="form-control" name="password" type="password" placeholder="Mật khẩu cũ">
                            @if($errors->first('password'))
                                <span class="text-danger"> {{$errors->first('password')}} </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu mới <span class="text-danger">*</span></label>
                            <input class="form-control" name="newpassword" type="password" placeholder="Mật khẩu mới">
                            @if($errors->first('newpassword'))
                                <span class="text-danger"> {{$errors->first('newpassword')}} </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Xác nhận mật khẩu <span class="text-danger">*</span></label>
                            <input class="form-control" name="repassword" type="password" placeholder="Xác nhận mật khẩu">
                            @if($errors->first('repassword'))
                                <span class="text-danger"> {{$errors->first('repassword')}} </span>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-md" style="margin-left: 40%">Đổi mật
                    khẩu<i
                        class="ml-2 ti-arrow-right"></i></button>
            </form>
        </div>

    </div>
@endsection()
@section('alert')
    @if (session('errmsg'))
        <script>
            toastr.success('{{ session('errmsg')}}', {timeOut: 200});
        </script>
    @endif
    @if (session('changepassword'))
        <script>
            toastr.success('{{ session('changepassword')}}', {timeOut: 200});
        </script>
    @endif
@endsection
