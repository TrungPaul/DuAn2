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
                        <h4><i class="lni-file"></i> Bài viết</h4>
                    </div>

                    <div class="tr-single-body">
                        <div class="row">

                            <div class="col-md-12">

                                <!-- Single Manage job -->
                                @foreach ( $posts as $p)
                                <div class="manage-list">

                                    <div class="mg-list-wrap">
                                        <div class="mg-list-thumb">
                                            <img src="assets/img/adwords.png" class="mx-auto" alt="" />
                                        </div>
                                        <div class="mg-list-caption">
                                            <h4 class="mg-title">{{ $p->title }}</h4>
                                            @if ( $p->status == 0)
                                                <span class="mg-subtitle">Chờ duyệt</span>
                                            @else 
                                                <span class="mg-subtitle">Đã duyệt</span>
                                            @endif
                                            <span>{{ $p->content }}</span>
                                        </div>
                                    </div>

                                    <div class="mg-action">
                                        <div class="btn-group ml-2">
                                            <a href="{{route('edit-post', $p->id)}}" class="mg-edit" title="Sửa"><i class="ti-pencil"></i></a>
                                        </div>
                                        <div class="btn-group ml-2">
                                            <a href="{{route('add-post')}}" class="mg-edit" title="Thêm"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                            <div class="beautypress-pagination-wraper mx-auto">
                                <ul class="beautypress-pagination">
                                    {{ $posts->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Manage jobs -->

            </div>

        </div>

    </div>
@endsection()
