@include('admin.layouts.css')
<div class="login-box">
        <div class="login-logo">
          <a></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Đăng nhập Admin</p>
            @if (session('errmsg'))
            <p class="text-danger"> {{session('errmsg')}} </p>
    @endif
    @if($errors->first('email'))
    <span class="text-danger"> {{$errors->first('email')}} </span>
    @endif
            <form action="{{route('admin.post_login')}}"  method="post">
            @csrf
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Mật kh" name="password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      Ghi nhớ mật khẩu
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <!-- /.social-auth-links -->
            <p class="mb-1">
              <a href="#">Quên mật khẩu</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
@include('admin.layouts.style')
