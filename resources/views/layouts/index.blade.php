<!doctype html>
<html lang="en">
<head>
    @include ('layouts.top_assets')
</head>
<body>

@include ('layouts.header')

@yield('content')

@include ('layouts.footer')
@include ('layouts.bottom_assets')
{{-- script --}}
@yield('script')
</body>
</html>
