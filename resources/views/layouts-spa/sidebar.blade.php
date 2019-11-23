<div class="col-md-3 col-sm-12">
    <div class="dashboard-wrap">

        <div class="dashboard-thumb">
            <div class="dashboard-th-pic">
                <img src="assets/img/user-3.jpg" class="img-fluid mx-auto img-circle" alt=""/>
            </div>
            <h4 class="mb-1">Adam Muklarial</h4>
            <span class="text-success">Web Designer</span>
        </div>
        <ul class="nav dashboard-verticle-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('list-employee') }}"><i class="ti-file"></i>Quản lí nhân viên</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('management-booking') }}"><i class="ti-file"></i>Quản lí đặt lịch</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="">
                    <i class="ti-user"></i>Thông tin cá nhân
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-edit"></i> Chỉnh sửa thông tin
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#change-password">
                    <i class="lni-lock"></i>Đổi mật khẩu
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"><i class="lni-exit"></i>Đăng xuất</a>
            </li>
        </ul>

    </div>
</div>
