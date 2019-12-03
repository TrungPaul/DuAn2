@extends('layouts.index')
@section('title', 'SpaTime')

@section('content')
    @include('layouts.owl-carousel')
    @include('layouts.service')
    @include('layouts.post')
    @include('layouts.partner')

@endsection
@section('alert')
    @if (session('fail'))
        <script>
            toastr.error('{{ session('fail')}}', {timeOut: 200});
        </script>
    @endif
    @if (session('success'))
        <script>
            toastr.success('{{ session('success')}}', {timeOut: 200});
        </script>
    @endif
@endsection
