@extends('admin.layouts.main')
@section('title', 'Dánh sách dịch vụ')
@section('titlePage', 'Quản lí dịch vụ')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách dịch vụ
            </h3>
            <a href="">Thêm</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th># Tên </th>
                    <th>Spa </th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $service as $item)
                    <tr>
                        <td>{{ $item->name_service}}</td>
                        <td>{{ $item->spa_id}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
