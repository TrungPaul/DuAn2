<div class="dashboard-wrap">
    <div class="dashboard-thumb">
        <div class="dashboard-th-pic">
            <img src="images/avatar/{{ Auth::user()->avatar }}" class="img-fluid" style="width:120px; height:120px; border-radius:100%;">
        </div>
        <h4 class="mb-1">{{ Auth::user()->name }}</h4>
    </div>
    <ul class="nav dashboard-verticle-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.list-booking') }}">
                <i class="fas fa-calendar" style="color: #9B27B0;"></i>Lịch đã đặt
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.list-booking-done') }}">
                <i class="fas fa-calendar-check" style="color: #9B27B0;"></i>Lịch đã hoàn thành
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.list-booking-cancel') }}">
                <i class="fas fa-calendar-times" style="color: #9B27B0;"></i>Lịch đã huỷ
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.edit-profile') }}">
                <i class="fas fa-edit" style="color: #9B27B0;"></i>Chỉnh sửa thông tin
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.change-password') }}">
                <i class="fas fa-lock" style="color: #9B27B0;"></i>Đổi mật khẩu
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout')}}"><i class="fas fa-sign-out-alt" style="color: #9B27B0;"></i>Đăng xuất</a>
        </li>
    </ul>
</div>
  




