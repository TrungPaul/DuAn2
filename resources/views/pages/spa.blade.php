@extends('layouts.index')
@section('title', 'SpaTime')

@section('content')

<section style="margin-top: 15%">
        <div class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 column">
                        <div class="heading left">
                            <h4>Danh sách spa </h4>
                        </div><!-- Heading -->
                        @foreach($listspa as $listspa)
                            {{-- @php
                                $applies = $newPost->applies->pluck('id')->toArray();
                            @endphp --}}
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"><img src="images/{{ $listspa->image }}"></div>
                                    <h3><a href="#" title="">{{$listspa->name}}</a></h3>
                                    {{-- <span>{{$newPost->category->name}}</span> --}}
                                    <div class="job-lctn text-danger">
                                            <i class="fas fa-phone-marker"></i>Số điện thoại: {{$listspa->phone}} <br>
                                        <div style="margin-left: 100px"><i class="fas fa-map-marker"></i>Địa chỉ: {{$listspa->location}}</div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                        {{-- {{$listspa->links()}} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
