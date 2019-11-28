@extends('layouts-spa.index')
@section('title', 'Danh sách bài viết')

@section('content')
    <div class="col-md-8 col-sm-12">
        <!-- Tab panes -->

        <!-- My Profile -->
        <div class="tab-pane active container" id="c-profile">

            <!-- Company Information -->
            <div class="tab-pane" id="manage-jobs">

                <div class="tr-single-box">
                    <div class="tr-single-header">
                        <h4><i class="lni-file"></i> </h4>
                        <a href="{{ route('getAdd-serviceDetail', $spaId) }}" class="btn mg-add">
                            <h4 class="btn-add"><i class="ti-shift-right mr-2"></i> Thêm</h4>
                        </a>
                    </div>
                    <div class="tr-single-body">
                        <div class="row">

                            <div class="col-md-12">
                                <!-- Single Manage job -->

                                <div class="tr-single-body">
                                    <div class="row">
                                        @foreach ( $service as $ser)
                                            <div class="col-md-12">
                                                <!-- Single Manage job -->
                                                <div class="manage-list">

                                                    <div class="mg-list-wrap">
                                                        <div class="mg-list-thumb">
                                                            <img src="images/{{ $ser->image_service }}" class="mx-auto"
                                                                 alt=""/>
                                                        </div>
                                                        <div class="mg-list-caption">
                                                            <h4 class="mg-title">{{ $ser->name_service }}</h4>
                                                            <p>{{ $ser->price_service }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="mg-action">
                                                        <div class="btn-group ml-2">
                                                            <a href="{{route('get-update-serviceDetail', $ser->id)}}" class="mg-edit" title="Sửa"><i class="ti-pencil"></i></a>
                                                        </div>
                                                        <div class="btn-group ml-2">
                                                            <a href="{{route('destroy-serviceDetail', $ser->id)}}" class="mg-edit" title="Xóa"><i class="ti-trash"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                                @endforeach
                                            </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /Manage jobs -->

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection()
