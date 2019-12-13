<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/apple-touch-icon.png">

    <link rel="icon" type="image/png" href="assets/favicon.ico">
    <title>@yield('title')</title>

    <!-- All Plugins Css -->
    @include ('layouts-spa.top_assets')
</head>

<body class="blue-skin">
<div class="Loader"></div>

<div id="main-wrapper">


    <div class="clearfix"></div>

    <div class="beautypress-header-top bg-color-gray-2">
        <div class="container">
            <div class="beautypress-spilit-container beautypress-version-2">
                <div class="beautypress-language-select-list">
                </div>
                <ul class="beautypress-simple-iocn-list beautypress-version-1">
                    <li><i class="xsicon icon-call"></i>Liên hệ trợ giúp: 0123456789</li>
                    <li><i class="xsicon icon-envelope"></i>Email: beautypress@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
{{--    <div class="topbar tp-rlt">--}}
{{--        <div class="container">--}}
{{--            <nav class="xs_nav_2 xs_nav-landscape">--}}
{{--                <div class="nav-header">--}}
{{--                    <a class="nav-logo" href="{{ url('/') }}">--}}
{{--                        <img src="assets/img/logo-v4.png" alt="logo">--}}
{{--                    </ao>--}}
{{--                </div>--}}
{{--                <div class="nav-menus-wrapper">--}}
{{--                    <ul class="nav-menu nav-menu-centered" style="margin-right: -300px;">--}}
{{--                        <li>--}}
{{--                            <a href="{{ url('contact') }}">Liên hệ với chúng tôi</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="clearfix"></div>
    <!-- ============================ Hero Banner End ================================== -->
    <!-- ============== Candidate Dashboard ====================== -->
    <section class="tr-single-detail gray-bg">
        <div class="container">
            <div class="row">
                <!-- Sidebar Start -->
            @include ('layouts-spa.sidebar')
            <!-- /col-md-4 -->
                @yield ('content')

            </div>
        </div>
    </section>
    @include ('layouts.footer')
    @include ('layouts-spa.bottom_assets')
    @yield('alert')
</div>

</body>

</html>
