@extends('admin.layouts.main')
@section('title', 'Thêm danh mục')
@section('content')
<div class="col-md-12 pb-5">
        <!-- Tab panes -->

        <!-- My Profile -->
        <div class="tab-pane active container" id="c-profile">

            <!-- Company Information -->
            <div class="tab-pane" id="manage-jobs">

                <div class="tr-single-box">
                    <div class="tr-single-header">
                        <h4><i class="lni-file"></i>Sửa danh mục</h4>
                    </div>

                    <div class="tr-single-body">
                        <form enctype="multipart/form-data" action="{{route('admin.update_cate', $cate->id)}}" method="post">
                            @csrf
{{--                            <input type="hidden" name="id"  value="{{ $cate->id }}">--}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $cate->name }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-6 text-right">
                                <a href="{{route('admin.listcate')}}" class="btn btn-sm btn-danger">Huỷ</a>
                                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
