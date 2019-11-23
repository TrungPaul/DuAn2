@extends('layouts-spa.index')
@section('title', 'Danh sách đặt lịch')

@section('content')
    <div class="col-md-9 col-sm-12">
        <!-- Tab panes -->
        <!-- My Profile -->
        <div class="tab-pane active container" id="c-profile">
            <!-- Company Information -->
            <div class="tab-pane" id="manage-jobs">
                <div class="tr-single-box">
                    <form action="" method="get">
                        <div class="tr-single-header">

                                <h3 ><i class="ti-shift-right mr-2"></i> Danh sách đặt lịch</h3>

{{--                            <input style="float: right; margin-left: 30%" class="form-control" width="50" type="text"--}}
{{--                                   name="keyword" value="{{ old('name') }}">--}}
{{--                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
                        </div>
                    </form>
                    <div class="tr-single-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Single Manage job -->
                                @foreach($getData as $key => $book)
                                    <div class="manage-list">

                                        <div class="mg-list-wrap">
                                            <div class="mg-list-thumb">
                                                <img src="images/{{ $book->userBook['avatar']  }}" class="mx-auto"
                                                     alt=""/>
                                            </div>
                                            <div class="mg-list-caption">
                                                <h4 class="mg-title">{{ $book->userBook['name'] }}</h4>
                                                <span class="mg-subtitle">Tên dịch vụ: {{ $book->detailService['name_service'] }}</span>
                                            </div>
                                        </div>

                                        <div class="mg-action">
                                            <div class="btn-group ml-2">
                                                <a href="{{ route('edit-employee',['id' => $book->id ]) }}"
                                                   class="mg-edit edit" title="Chi tiết"><i
                                                        class="ti-eye"></i></a>
                                            </div>
                                            <div class="btn-group ml-2">
                                                <a data-target="#delete"
                                                   data-toggle="modal" class="mg-delete delete"
                                                   data-id="{{ $book->id }}"
                                                   title="Xóa"><i
                                                        class="ti-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{ $getData->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Manage jobs -->
            </div>
        </div>
    </div>
    <div class="modal fade show" id="delete" tabindex="-1" role="dialog" aria-labelledby="registermodal"
         style="display: none;">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <div class="modal-header">
                    {{--                    <h3 class="modal-title " id="exampleModalLabel">Modal</h3>--}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-danger">
                    <h4>Bạn có muốn xóa không!</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary del" id="ok">Đồng ý</button>
                </div>
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
@endsection
