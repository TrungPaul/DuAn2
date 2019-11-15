<title>@yield('title')</title>
@include('layouts.css')
<div class="theme-layout" id="scrollup">
    @include('layouts.header')
{{--    @include('client.layouts.search-slide')--}}
    @yield('content')
    @include('layouts.footer')
</div>
@include('layouts.script')
@yield('script')
