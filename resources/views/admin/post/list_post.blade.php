@extends('admin.layouts.main')
@section('title', 'Dánh sách bài viết')
@section('titlePage', 'Quản lí bài viết')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách bài viết
            </h3>
        </div>
        @if(session()->has('message_add'))
            <div class="text-center alert alert-success rounded-0">
                {{ session()->get('message_add') }}
            </div>
        @endif
        @if(session()->has('message_edit'))
            <div class="text-center alert alert-success rounded-0">
                {{ session()->get('message_edit') }}
            </div>
        @endif
        @if(session()->has('message_delete'))
            <div class="text-center alert alert-success rounded-0">
                {{ session()->get('message_delete') }}
            </div>
        @endif
        @if(session()->has('message_change_status'))
            <div class="text-center alert alert-success rounded-0">
                {{ session()->get('message_change_status') }}
            </div>
        @endif
        <div class="card-body">
            <table id="example" class="table table-bordered">
                <thead>
                <tr>
                    <th width="200">Ảnh </th>
                    <th>Tiêu đề </th>
                    <th>Mô tả </th>
                    <th>Trạng thái </th>
                    <th style="width: 150px;">
                        <a 
                        href="{{ route('admin.addpost')}}" 
                        class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>  Thêm
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $posts as $item)
                    <tr>
                        <td><img src="../images/posts/{{ $item->image }}" class="img-fluid"></td>
                        <td>{{ $item->title}}</td>
                        <td>{{ $item->description }}</td>
                        @if ($item->status == 0)
                            <td>Chờ duyệt</td>
                        @else
                            <td>Đã duyệt</td>
                        @endif
                        <td>
                            <a 
                                href="{{route('admin.editpost', $item->id)}}"
                                class="btn btn-sm btn-primary">
                                <i class="fas fa-pencil-alt"></i>  Sửa
                            </a>
                            <a 
                                href="javascript:;" 
                                linkurl="{{route('admin.deletepost', $item->id)}}" 
                                class="btn btn-sm btn-danger btn-remove">
                                <i class="fa fa-trash"></i>  Xoá
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@section('script')
    <script>
         $('.btn-remove').on('click', function(){
            var url = $(this).attr('linkurl');
            var conf = confirm('Bạn có chắc muốn xoá bài viết này không?');
            if(conf){
                window.location.href = url;
            }
        });
    </script>
@stop
@endsection
