@extends('layouts-spa.index')
@section('title', 'Sửa dịch vụ')

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
                        <h4><i class="ti-plus"></i> Sửa service</h4>
                    </div>
                    <div class="tr-single-body">
                            <form action="{{ route('update-serviceDetail', $ser->id) }}" method="POST"
                                  enctype="multipart/form-data"
                                  novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Tên dịch vụ<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="name_service"
                                                   value="{{$ser->name_service}}">
                                            @if( $errors->first('name_service'))
                                                <span class="text-danger">{{ $errors->first('name_service')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Giá<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="price_service"
                                                   value="{{ $ser->price_service}}">
                                            @if( $errors->first('price_service'))
                                                <span class="text-danger">{{ $errors->first('price_service')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Khuyến mãi%<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="discount"
                                                   value="{{$ser->discount}}">
                                            @if( $errors->first('discount'))
                                                <span class="text-danger">{{ $errors->first('discount')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" data-select2-id="10">
                                            <label>Danh mục dịch vụ<span class="text-danger">*</span></label>
                                            <select id="career-gender1" name="service_id"
                                                    class="form-control select2-hidden-accessible"
                                                    data-select2-id="" tabindex="-1" aria-hidden="true">
                                                <option value="{{$ser->service_id}}">{{ $ser->cateService['name_service'] }}</option>
                                                @foreach($service as $se)
                                                    <option value="{{$se->id}}">{{ $se ->name_service}}</option>
                                                @endforeach
                                            </select>
                                            @if( $errors->first('service_id'))
                                                <span class="text-danger">{{ $errors->first('service_id')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Ảnh đại diện</label>
                                            <div class="custom-file">
                                                <input type="file" name="image_service" class="custom-file-input"
                                                       id="customFile">
                                                <label class="custom-file-label" for="customFile">Chọn ảnh</label>
                                                @if( $errors->first('image_service'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('image_service')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Chi tiết<span class="text-danger">*</span></label>
                                            <textarea class="form-control" type="text"
                                                      name="detail_service">{{ $ser->detail_service }}</textarea>
                                            @if( $errors->first('detail_service'))
                                                <span class="text-danger">{{ $errors->first('detail_service')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6col-sm-6" style="width: 150px; ">
                                        <div class="form-group">
                                            <img id="showImage" src="images/{{ $ser->image_service }}" width="250">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-md full-width">Sửa đổi<i
                                            class="ml-2 ti-arrow-right"></i></button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <script>

            var img = document.querySelector('[name="image_service"]');
            img.onchange = function () {
                var anh = this.files[0];
                if (anh == undefined) {
                    document.querySelector('#showImage').src = "images/{{ $ser->image_service }}";
                } else {
                    getBase64(anh, '#showImage');
                }
                getBase64(anh, '#showImage');
            };

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
