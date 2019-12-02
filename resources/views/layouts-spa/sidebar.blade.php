<div class="col-md-3 col-sm-12">
    <div class="dashboard-wrap">

        <div class="dashboard-thumb">
            <div class="dashboard-th-pic">
                <img src="images/spas/{{ Auth::guard('spa')->user()->image }}" class="img-fluid mx-auto img-circle" alt=""/>
            </div>
            <h4 class="mb-1">{{ Auth::guard('spa')->user()->name }}</h4>
            <span class="text-dark">{{ Auth::guard('spa')->user()->location }},
                {{ Auth::guard('spa')->user()->city['name'] }}</span>
        </div>
        <ul class="nav dashboard-verticle-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('list-employee') }}"><i class="ti-file"></i>Quản lí nhân viên</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('management-booking') }}"><i class="ti-file"></i>Quản lí đặt lịch</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('calendar-finish') }}"><i class="ti-file"></i>Lịch đã hoàn thành</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('list-serviceDetail') }}"><i class="ti-file"></i>Quản lí dịch vụ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('info-spa') }}">
                    <i class="ti-user"></i>Thông tin cá nhân
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('edit-profile-spa') }}">
                    <i class="fas fa-edit"></i> Chỉnh sửa thông tin
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('change-pass') }}">
                    <i class="lni-lock"></i>Đổi mật khẩu
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"><i class="lni-exit"></i>Đăng xuất</a>
            </li>
        </ul>

    </div>
</div>
