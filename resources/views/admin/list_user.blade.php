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
                        <td>@if ( $item->is_active == $gender['user_type_active'] )
                            <a href="{{ route('admin.edit_user', $item->id ) }}" class="btn btn-success btn-sm text-white">
                                Thành Viên
                            </a>
                        @elseif ( $item->is_active == $gender['user_type_inActive'] )
                        <a href="{{ route('admin.edit_user', $item->id ) }}" class="btn btn-danger btn-sm text-white">
                            Chặn
                        </a>
                        @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
