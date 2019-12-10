<!doctype html>
<html lang="en">
<head>
        @include('layouts.css')
    @include ('layouts.top_assets')
</head>
<body>
<main class="xs-main-content">

@include ('layouts.header')
@yield('content')

@include ('layouts.footer')
</main>
@include ('layouts.bottom_assets')
{{-- script --}}
@include('layouts.script')
@yield('script')
@yield('alert')
</body>
</html>
