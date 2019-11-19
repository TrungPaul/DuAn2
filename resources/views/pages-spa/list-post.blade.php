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
                        <div class="btn-group ml-2">
                            <a href="spa/post#approved" class="mg-edit text-dark">Bài đã duyệt</a>
                        </div>
                    </div> 

                    <div class="tr-single-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-right mr-3 mb-3">
                                    <a href="{{route('add-post')}}" class="mg-edit" title="Thêm"><i class="ti-plus"></i></a>
                                </div>
                                
                                <!-- Single Manage job -->
                                @foreach ( $posts as $p)
                                    @if ($p->status == 0)
                                    <div class="manage-list bg-light">
                                        
                                        <div class="mg-list-wrap">
                                            <div class="mg-list-thumb">
                                                <img src="images/posts/{{ $p->image }}" class="mx-auto" alt="" />
                                            </div>
                                            <div class="mg-list-caption">
                                                <h4 class="mg-title">{{ $p->title }}</h4>
                                                @if ( $p->status == 0)
                                                    <span class="mg-subtitle">Chờ duyệt</span>
                                                @else 
                                                    <span class="mg-subtitle">Đã duyệt</span>
                                                @endif
                                                <!-- <span>{{ $p->content }}</span> -->
                                            </div>
                                        </div>

                                        <div class="mg-action">
                                            <div class="btn-group ml-2">
                                                <a href="{{route('edit-post', $p->id)}}" class="mg-edit" title="Sửa"><i class="ti-pencil"></i></a>
                                            </div>
                                            <div class="btn-group ml-2">
                                                <a 
                                                    href="javascript:;" 
                                                    linkurl="{{route('delete-post', $p->id)}}" 
                                                    class="mg-delete">
                                                    <i class="ti-trash"></i> 
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    @endif
                                @endforeach

                                @foreach ( $posts as $p)
                                    @if ($p->status == 1)
                                    <div id="approved" class="manage-list" >
                                        
                                        <div class="mg-list-wrap">
                                            <div class="mg-list-thumb">
                                                <img src="images/posts/{{ $p->image }}" class="mx-auto" alt="" />
                                            </div>
                                            <div class="mg-list-caption">
                                                <h4 class="mg-title">{{ $p->title }}</h4>
                                                @if ( $p->status == 0)
                                                    <span class="mg-subtitle">Chờ duyệt</span>
                                                @else 
                                                    <span class="mg-subtitle">Đã duyệt</span>
                                                @endif
                                                <!-- <span>{{ $p->content }}</span> -->
                                            </div>
                                        </div>

                                        <div class="mg-action">
                                            <div class="btn-group ml-2">
                                                <a href="{{route('edit-post', $p->id)}}" class="mg-edit" title="Sửa"><i class="ti-pencil"></i></a>
                                            </div>
                                            <div class="btn-group ml-2">
                                                <a 
                                                    href="javascript:;" 
                                                    linkurl="{{route('delete-post', $p->id)}}" 
                                                    class="mg-delete">
                                                    <i class="ti-trash"></i> 
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            
                        </div>
                    </div>

                </div>
                <!-- /Manage jobs -->

            </div>

        </div>

    </div>
@endsection()
