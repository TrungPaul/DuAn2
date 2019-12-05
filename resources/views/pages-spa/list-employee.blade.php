@extends('layouts-spa.index')
@section('title', 'Danh sách nhân viên')

@section('content')
    <div class="col-md-8 col-sm-12">
        <!-- Tab panes -->
        <!-- My Profile -->
        <div class="tab-pane active container" id="c-profile">
            <!-- Company Information -->
            <div class="tab-pane" id="manage-jobs">
                <div class="tr-single-box">
                    <form action="" method="get">
                        <div class="tr-single-header">
                            <a href="{{ route('add-employee') }}" class="btn mg-add">
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
                                @foreach($getEmployee as $key => $employee)
                                    <div class="manage-list">

                                        <div class="mg-list-wrap">
                                            <div class="mg-list-thumb">
                                                <img src="images/{{ $employee->avatar }}" class="mx-auto"
                                                     alt=""/>
                                            </div>
                                            <div class="mg-list-caption">
                                                <h4 class="mg-title">{{ $employee->name }}</h4>
                                                <span class="mg-subtitle">{{ $employee->gender }}</span>
                                            </div>
                                        </div>

                                        <div class="mg-action">
                                            <div class="btn-group ml-2">
                                                <a href="{{ route('edit-employee',['id' => $employee->id ]) }}"
                                                   class="mg-edit edit" title="Sửa"><i
                                                        class="ti-pencil"></i></a>
                                            </div>
                                            <div class="btn-group ml-2">
                                                <a data-target="#delete"
                                                   href="javascript:;"
                                                   linkurl="{{ route('cancel-employee', $employee->id) }}"
                                                   data-toggle="modal" class="mg-delete delete btn-remove"
                                                   data-id="{{ $employee->id }}"
                                                   title="Xóa"><i
                                                        class="ti-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{ $getEmployee->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Manage jobs -->
            </div>
        </div>
    </div>
@endsection()
@section('alert')
    @if (session('successfully'))
        <script>
            toastr.success('{{ session('successfully')}}', {timeOut: 200});
        </script>
    @endif
    @if (session('success'))
        <script>
            toastr.success('{{ session('success')}}', {timeOut: 200});
        </script>
    @endif
    <script>
        $('.btn-remove').on('click', function() {
            swal({
                title: "Cảnh báo!",
                text: "Bạn có chắc chắn muốn xóa nhân viên này ?",
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
