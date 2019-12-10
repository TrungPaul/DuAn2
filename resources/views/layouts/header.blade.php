<header
    class="beautypress-header-section beautypress-header-version-3 beautypress-header-version-2 header-height-calc-minus">
    <div class="beautypress-header-top bg-color-gray-2">
        <div class="container">
            <div class="beautypress-spilit-container beautypress-version-2">
                <div class="beautypress-language-select-list">
                </div>
                <ul class="beautypress-simple-iocn-list beautypress-version-1">
                    <li><i class="xsicon icon-call"></i>+84 374 969 474</li>
                    <li><i class="xsicon icon-envelope"></i>spatime@gmail.com</li>
                </ul>
            </div>
        </div>
    </div><!-- .beautypress-header-top END -->
    <div class="beautypress-new-header color-grren xs-extra-css">
        <div class="container">
            <nav class="xs_nav_2 xs_nav-landscape">
                <div class="nav-header">
                    <a class="nav-logo" href="{{ url('/') }}">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="nav-menus-wrapper">
                    <ul class="nav-menu nav-menu-centered" style="margin-right: -300px;">
                        <li>
                            <a href="{{ url('/') }}">Trang chủ</a>
                        </li>
                        <li>
                            <a href="{{ url('list-spa') }}">Tìm spa</a>
                        </li>
                        <li>
                            <a href="{{ url('/danh-sach-bai-viet') }}">Bài viết</a>
                        </li>
                        <li>
                            <a href="{{ url('lien-he') }}">Liên hệ</a>
                        </li>
                        @if(Auth::check())
                            <li>
                                <p>| <a href="{{ route('user.profile') }}">{{ Auth::user()->name }}</a></p>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            </li>
                        @else
                            <li>
                                <a href="{{ url('sign-in') }}">Đăng nhập</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Đăng ký</a>
                                <div class="dropdown-content">
                                    <p><a href="{{ url('sign-up') }}">Đăng ký tài khoản thường</a></p>
                                    <hr>
                                    <p><a href="{{ url('sign-up-spa') }}">Đăng ký tải khoản spa</a></p>
                                </div>
                            <li>
                        @endif
                        <li>
                            <a href="#search" title="Tìm kiếm"><i class="fas fa-search"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div id="search">
        <button type="button" class="close">×</button>
        <form action="{{route('search')}}" method="GET" autocomplete="off">
            <input type="search" class="search" name="key" placeholder="Tìm kiếm spa, dịch vụ, bài viết" />
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
    </div>
</header>
