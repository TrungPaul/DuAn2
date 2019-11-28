<!DOCTYPE html>
<html>
<head>
  @include('admin.layouts.css')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.slide_bar')
        <section class="content">
            <div class="container">
             @yield('content')
            </div>
        </section>
    </div>
    <div>
        @include('admin.layouts.footer')
        @include('admin.layouts.custom')
    </div>
    @include('admin.layouts.style')
    @include('admin.layouts.table')
    @yield('script')
</body>
</html>
