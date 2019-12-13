@extends('admin.layouts.main')
@section('title', 'Dánh sách thành viên')
@section('titlePage', 'Quản lí thành viên')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách thành viên
            </h3>
        </div>
        <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th># Tên </th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Giới Tính</th>
                    <th>Trạng Thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($user as $item)
                    @if ( $item->role != $gender['role_type_admin'])
                        <tr>
                            <td>{{ $item->name}}</td> 
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone_number}}</td>
                            <td>
                                @if ( $item->gender == $gender['gender_type_male'] )
                                    Nam
                                @elseif ( $item->gender == $gender['gender_type_female'] )
                                    Nữ
                                @else
                                    Other
                                @endif
                            </td>
                            <td>
                                @if ( $item->is_active == $gender['user_type_active'] )
                                    <span class="btn btn-success btn-sm text-white">
                                        Thành viên
                                    </span>
                                @elseif ( $item->is_active == $gender['user_type_inActive'] )
                                    <a href="{{ route('admin.edit_user', $item->id ) }}" class="btn btn-danger btn-sm text-white">
                                        Đã chặn
                                    </a>
                                @else 
                                    Khác
                                @endif
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
