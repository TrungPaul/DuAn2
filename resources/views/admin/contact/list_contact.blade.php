@extends('admin.layouts.main')
@section('title', 'Dánh sách liên hệ')
@section('titlePage', 'Quản lí liên hệ')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách liên hệ
            </h3>
        </div>
        @if(session()->has('message_delete'))
            <div class="text-center alert alert-success rounded-0">
                {{ session()->get('message_delete') }}
            </div>
        @endif
        @if(session()->has('reply'))
            <div class="text-center alert alert-success rounded-0">
                {{ session()->get('message_reply') }}
            </div>
        @endif
        <div class="card-body">
            <table id="example" class="table table-bordered">
                <thead>
                <tr>
                    <th>Name </th>
                    <th>Email </th>
                    <th>Số điện thoại </th>
                    <th>Nội dung </th>
                    <th width="120">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $contact as $item)
                    <tr>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->content }}</td>
                        <td>
                            <a 
                                href="{{route('admin.replycontact', $item->id)}}"
                                class="btn btn-sm btn-primary">
                                <i class="fas fa-pencil-alt"></i>  Trả lời
                            </a>
                            <a 
                                href="javascript:;" 
                                linkurl="{{route('admin.deletecontact', $item->id)}}" 
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
            var conf = confirm('Bạn có chắc muốn xoá liên hệ này không?');
            if(conf){
                window.location.href = url;
            }
        });
    </script>
@stop
@endsection
