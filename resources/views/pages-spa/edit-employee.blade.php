@extends('layouts-spa.index')
@section('title', 'Danh sách nhân viên')

@section('content')
    <div class="col-md-8 col-sm-12">
        <!-- Tab panes -->
        <!-- My Profile -->
        <div class="tab-pane active container" id="c-profile">

            <!-- Company Information -->
            <div class="tab-pane active container" id="post-new-job">
                <!-- Add New jobs -->
                <div class="tr-single-box">
                    <div class="tr-single-header">
                        <a href="{{ route('list-employee')}}" class="btn mg-add">
                            <h4 class="btn-add"><i class="ti-shift-right mr-2"></i> Quay lại</h4>
                        </a>
                    </div>
                    <div class="tr-single-body">
                        <form action="{{ route('edit-employee', ['id' => $employee->id]) }}" method="POST" enctype="multipart/form-data"
                              novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Tên nhân viên</label>
                                        <input class="form-control" type="text" name="name" value="{{ $employee->name }}">
                                        @if( $errors->first('name'))
                                            <span class="text-danger">{{ $errors->first('name')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group" data-select2-id="10">
                                        <label>Giới tính</label>
                                        <select id="career-gender" name="gender"
                                                class="form-control select2-hidden-accessible"
                                                data-select2-id="career-gender" tabindex="-1" aria-hidden="true">
                                            <option value="{{ $employee->gender }}" data-select2-id="6">{{ $employee->gender }}</option>
                                            <option value="Nam" data-select2-id="12">Nam</option>
                                            <option value="Nữ" data-select2-id="13">Nữ</option>
                                        </select><span
                                            class="select2 select2-container select2-container--default select2-container--below select2-container--focus"
                                            dir="ltr" data-select2-id="5" style="width: 329px;"><span
                                                class="selection"></span>
                                        @if( $errors->first('gender'))
                                                <span class="text-danger">{{ $errors->first('gender')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Ảnh đại diện</label>
                                        <div class="custom-file">
                                            <input type="file" name="avatar" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" style="overflow: hidden" for="customFile">Chọn ảnh</label>
                                            @if( $errors->first('avatar'))
                                                <span class="text-danger">{{ $errors->first('avatar')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6col-sm-6" style="width: 150px; ">
                                    <div class="form-group">
                                        <img id="showImage" src="images/{{ $employee->avatar }}" width="150"
                                             style="margin-left: 30%;">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-md full-width">Thay đổi<i
                                        class="ml-2 ti-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        var img = document.querySelector('[name="avatar"]');
        img.onchange = function () {
            var anh = this.files[0];
            if (anh == undefined) {
                document.querySelector('#showImage').src = "images/{{ $employee->avatar }}";
            } else {
                getBase64(anh, '#showImage');
            }
            getBase64(anh, '#showImage');
        }

        function getBase64(file, selector) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                document.querySelector(selector).src = reader.result;
            };
            reader.onerror = function (error) {
                console.log('Error: ', error);
            };
        }
    </script>
@endsection()
