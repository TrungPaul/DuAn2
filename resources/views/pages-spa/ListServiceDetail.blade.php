@extends('layouts-spa.index')
@section('title', 'Danh sách dịch vụ')

@section('content')
    <div class="col-md-8 col-sm-12">
        <div class="tab-pane active container" id="c-profile">
            <!-- Company Information -->
            <div class="tab-pane" id="manage-jobs">

                <div class="tr-single-box">
                    <form action="" method="get">
                        <div class="tr-single-header">
                            <a href="{{ route('getAdd')}}"
                               class="btn mg-add">
                                <h4 class="btn-add"><i class="ti-shift-right mr-2"></i> Thêm</h4>
                            </a>
                            <input style="float: right; margin-left: 30%" class="form-control" width="100" type="text"
                                   name="keyword" value="{{ old('name') }}">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    <div class="tr-single-body">
                        <div class="row">

                            <div class="col-md-12">
                                <!-- Single Manage job -->
                                <div class="tr-single-body">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <!-- Single Manage job -->
                                            @if (count($service) > 0)
                                                @foreach ( $service as $ser)
                                                    <div class="manage-list">

                                                        <div class="mg-list-wrap">
                                                            <div class="mg-list-thumb">
                                                                <img src="images/{{ $ser->image_service }}"
                                                                     class="mx-auto"
                                                                     alt=""/>
                                                            </div>
                                                            <div class="mg-list-caption">
                                                                <h4 class="mg-title">Tên dịch
                                                                    vụ: {{ $ser->name_service }}</h4>
                                                                <span class="mg-subtitle">Giá: {{ $ser->price_service }}
                                                                - Khuyến mãi: {{ $ser->discount }}%
                                                                </span>

                                                            </div>
                                                        </div>
                                                        <div class="mg-action">
                                                            <div class="btn-group ml-2">
                                                                <a href="{{route('get-update-serviceDetail', $ser->id)}}"
                                                                   class="mg-edit" title="Sửa"><i class="ti-pencil"></i></a>
                                                            </div>
                                                            <div class="btn-group ml-2">
                                                                <a data-target="#delete"
                                                                   href="javascript:;"
                                                                   linkurl="{{ route('destroy-serviceDetail', $ser->id) }}"
                                                                   data-toggle="modal" class="mg-delete delete btn-remove"
                                                                   data-id="{{ $ser->id }}"
                                                                   title="Xóa"><i
                                                                        class="ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="manage-list">
                                                    <span class="text-danger">Không có dữ liệu phù hợp</span>
                                                </div>
                                            @endif
                                            {{ $service->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('alert')
    @if (session('create'))
        <script>
            toastr.success('{{ session('create')}}', {timeOut: 200});
        </script>
    @endif
    @if (session('update'))
        <script>
            toastr.success('{{ session('update')}}', {timeOut: 200});
        </script>
    @endif
    @if (session('destroy'))
        <script>
            toastr.success('{{ session('destroy')}}', {timeOut: 200});
        </script>
    @endif
    <script>
        $('.btn-remove').on('click', function () {
            swal({
                title: "Cảnh báo!",
                text: "Bạn có chắc chắn muốn xóa dịch vụ này ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = $(this).attr('linkurl');
                    } else {
                        swal("Cảm ơn bạn!");
                    }
                })
        });
    </script>
@endsection
