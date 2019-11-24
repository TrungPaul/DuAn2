<div id="preloader">
    <div class="preloader-window left-window"></div>
    <div class="preloader-window right-window"></div>
    <div class="preloader-content">
        <img src="assets/img/prelaoder-logo.png" alt="">
        <h2>Beautypress</h2>
    </div>
    <div class="spinner-block">
        <div class="spinner-eff spinner-eff-3">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
    </div>
</div>
<header
    class="beautypress-header-section beautypress-header-version-3 beautypress-header-version-2 header-height-calc-minus">
    <div class="beautypress-header-top bg-color-gray-2">
        <div class="container">
            <div class="beautypress-spilit-container beautypress-version-2">
                <div class="beautypress-language-select-list">
                </div>
                <ul class="beautypress-simple-iocn-list beautypress-version-1">
                    <li><i class="xsicon icon-call"></i>+00 11 222 333 444</li>
                    <li><i class="xsicon icon-envelope"></i>beautypress@gmail.com</li>
                </ul>
            </div>
        </div>
    </div><!-- .beautypress-header-top END -->
    <div class="beautypress-new-header color-grren xs-extra-css">
        <div class="container">
            <nav class="xs_nav_2 xs_nav-landscape">
                <div class="nav-header">
                    <a class="nav-logo" href="{{ url('/') }}">
                        <img src="assets/img/logo-v4.png" alt="logo">
                    </a>
                </div>
                <div class="nav-menus-wrapper">
                    <ul class="nav-menu nav-menu-centered" style="margin-right: -300px;">
                        <li>
                            <a href="{{ url('/') }}">Trang chủ</a>
                        </li>
                        <li>
                            <a href="{{ url('tim-kiem-spa') }}">Tìm spa</a>
                        </li>
                        <li>
                            <a href="{{ url('/danh-sach-bai-viet') }}">Bài viết</a>
                        </li>
                        <li>
                            <a href="{{ url('lien-he') }}">Liên hệ</a>
                        </li>
                        @if(Auth::check())
                            <li>
                                <a href="">{{ Auth::user()->name }}</a>
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
                                    <p><a href="{{ url('sign-up') }}">Đăng ký tài khoản thuờng</a></p>
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
            <input type="search" class="search" name="key" placeholder="Tìm kiếm..." />
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
    </div>
</header>