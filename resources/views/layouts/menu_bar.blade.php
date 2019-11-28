<div class="widget">
    <div class="tree_widget-sec">

            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="{{ route('user.profile') }}" title=""><i class="far fa-user"></i>Thông tin cá nhân</a>
                </li>
                <li class="active">
                    <a href="{{ route('user.edit-profile') }}"><i class="far fa-edit"></i>Sửa Thông Tin Cá Nhân</a>
                </li>
                <li class="active">
                    <a href="{{ route('user.change-password') }}"><i class="far fa-edit"></i>Thay Đổi Password</a>
                    </li>
                <li>
                    <a href="{{ route('logout')}}" title=""><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>
            </ul>
    </div>
</div>
