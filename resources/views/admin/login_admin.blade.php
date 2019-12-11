@include('admin.layouts.css')
<div class="login-box">
        <div class="login-logo">
          <a></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Admin</p>
            @if(isset($message))<span class="text-danger">{{ $message }}</span>
                @endif
            @if($errors->first('email'))
                <span class="text-danger"> {{$errors->first('email')}} </span>
            @endif<br>
            @if($errors->first('password'))
                <span class="text-danger"> {{$errors->first('password')}} </span>
            @endif
            <form action="{{route('admin.post_login')}}"  method="post">
            @csrf
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
            
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
            
              <div class="row">
                <!-- /.col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <!-- /.social-auth-links -->
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
@include('admin.layouts.style')
