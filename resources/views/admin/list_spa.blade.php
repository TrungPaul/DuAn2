@extends('admin.layouts.main')
@section('title', 'Dánh sách Spa')
@section('titlePage', 'Quản lí spa')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách spa
            </h3>
        </div>
        <div class="card-body">
            <table id="example" class="table table-bordered">
                <thead>
                <tr>
                    <th># Tên </th>
                    <th>Địa chỉ </th>
                    <th>Số điện thoại </th>
                    <th>Trạng thái </th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $spa as $item)
                    <tr>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->location}}</td>
                        <td>{{ $item->phone}}</td>
                        <td>@if ( $item->is_active == $active['user_type_active'] )
                        <a href=" {{ route('admin.editspa', $item->id ) }}" class="btn btn-success btn-sm text-white">
                                Thành Viên
                            </a>
                        @elseif ( $item->is_active == $active['user_type_inActive'] )
                        <a href="{{ route('admin.editspa', $item->id ) }}" class="btn btn-danger btn-sm text-white">
                            Chặn
                        </a>
                        @endif</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
