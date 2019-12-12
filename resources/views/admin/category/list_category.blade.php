@extends('admin.layouts.main')
@section('title', 'Danh mục bài viết')
@section('titlePage', 'Quản lí danh mục')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Danh mục bài viết
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
        <div class="card-body">
            <table id="example" class="table table-bordered">
                <thead>
                <tr>
                    <th width="50px">ID </th>
                    <th>Name </th>
                    <th width="120">
                        <a 
                        href="{{ route('admin.addcate')}}" 
                        class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>  Thêm
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $cate as $item)
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a 
                                href="{{route('admin.editcate', $item->id)}}"
                                class="btn btn-sm btn-primary">
                                <i class="fas fa-pencil-alt"></i>  Sửa
                            </a>
                            <a 
                                href="javascript:;" 
                                linkurl="{{route('admin.deletecate', $item->id)}}" 
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
            var conf = confirm('Bạn có chắc muốn xoá danh mục này không?');
            if(conf){
                window.location.href = url;
            }
        });
    </script>
@stop
@endsection
