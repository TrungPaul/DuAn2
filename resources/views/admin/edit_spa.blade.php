@extends('admin.layouts.main')
@section('title', 'Thay đổi trạng thái spa')
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3 card-style" style="max-width: 100%;">
                        <div class="card-header">
                            <h4> Thay đổi trạng thái</h4>
                        </div>
                        <div class="card-body" id="card-body-form">
                            <form method="post"  action="{{ route('admin.update_spa') }}">
                                @csrf
                                @if (isset($spa))
                                    <input type="hidden" name="id" value="{{ $spa->id }}">
                                @endif

                                <div class="col-md-6">
                                     <div class="form-group">
                                        Họ Và Tên
                                        <input type="text" class="form-control" value="{{ $spa->name }}" name="name" readonly>
                                    </div>

                                    <div class="form-group">
                                        Email
                                        <input type="text" class="form-control"  value="{{ $spa->email }}" name="email" readonly>
                                    </div>
                                </div>
                               
                                <div class="col-6">
                                        Số điện thoại
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" value="{{ $spa->phone }}" readonly>
                                        </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    @if($spa->is_active != $active['user_type_inActive'])
                                        <input type="hidden" name="is_active" value="0">
                                        <button type="submit" class="btn btn-danger btn-sm">Chặn</button>
                                    @elseif($spa->is_active != $active['user_type_active'])
                                        <input type="hidden" name="is_active" value="1">
                                        <button type="submit" class="btn btn-success btn-sm">Thành viên</button>
                                    @else
                                    @endif
                                    <a href="{{ route('admin.listspa') }}" class="btn btn-warning btn-sm text-light"> Hủy </a>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
