@extends('admin.layouts.main')
@section('title', 'Dánh sách bình luận')
@section('titlePage', 'Quản lí bình luận')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách bình luận
            </h3>
        </div>
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
                    <th width="200">Người tạo</th>
                    <th width="50">Avatar </th>
                    <th>Nội dung </th>
                    <th>Bình luận con</th>
                    <th width="150"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $comment as $item)
                    <tr>
                        <td>{{ $item->name}}</td>
                        <td>
                            @if (isset($item->user_id))
                                <img src="../images/{{ $item->user->avatar }}" width="55;" height="55;" style="border-radius:100%; margin-left:auto; margin-right:auto; display:block" >
                            @else 
                                <img src="https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg" class="img-fluid">
                            @endif
                        </td>
                        <td>{{ $item->content }}
                       <td>
                            @foreach($item->replies as $rep)
                                @if (isset($rep->user_id))
                                    <img src="../images/{{ $rep->user->avatar }}" width="42;" height="42;" style="border-radius:100%;">
                                @else 
                                    <img src="https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg" width="50;" class="img-fluid">
                                @endif
                                {{ $rep->name }}: <i style="font-size:13px;">{{ $rep->content }}</i>&emsp;
                                <a 
                                    href="javascript:;" 
                                    linkurl="{{route('admin.deletereply', $rep->id)}}" 
                                    class="btn btn-sm btn-danger btn-remove">
                                    <i class="fa fa-trash"></i>  Xoá
                                </a>
                                <br><br>
                            @endforeach
                       </td>
                        <td>
                            <a 
                                href="{{route('detail_post', $item->post_id)}}"
                                class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i>  Xem chi tiết
                            </a>
                            <a 
                                href="javascript:;" 
                                linkurl="{{route('admin.deletecomment', $item->id)}}" 
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
            var conf = confirm('Bạn có chắc muốn xoá bình luận này không?');
            if(conf){
                window.location.href = url;
            }
        });
    </script>
@stop
@endsection
