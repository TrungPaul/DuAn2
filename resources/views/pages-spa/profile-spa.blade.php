@extends('layouts-spa.index')
@section('title', 'Thông tin spa')

@section('content')
    <div class="col-md-9 col-sm-12">
        <div class="tab-pane active container" id="c-profile">
            <form action="{{ route('edit-profile-spa') }}" method="post" novalidate enctype="multipart/form-data"
                  novalidate>
                @csrf
                <div class="tr-single-box">
                    <div class="tr-single-header">
                        <h3><i class="ti-home"></i> Thông tin Spa</h3>
                    </div>
                    <div class="tr-single-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label> Tên cửa hàng: </label>
                                    <input type="text" value="{{ Auth::guard('spa')->user()->name }}" name="name"
                                           class="form-control">
                                    @if( $errors->first('name'))
                                        <span class="text-danger">{{ $errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label> Email:</label>
                                    <input type="text" value="{{ Auth::guard('spa')->user()->email }}" name="email"
                                           class="form-control">
                                    @if( $errors->first('email'))
                                        <span class="text-danger">{{ $errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Số điện thoại:</label>
                                    <input type="text" value="{{ Auth::guard('spa')->user()->phone }}" name="phone"
                                           class="form-control">
                                    @if( $errors->first('phone'))
                                        <span class="text-danger">{{ $errors->first('phone')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Địa chỉ:</label>
                                    <input type="text" value="{{ Auth::guard('spa')->user()->location }}"
                                           name="location"
                                           class="form-control">
                                    @if( $errors->first('location'))
                                        <span class="text-danger">{{ $errors->first('location')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group" data-select2-id="10">
                                    <label>Tỉnh</label>
                                    <select name="city_id" class="form-control">
                                        <option value="{{ Auth::guard('spa')->user()->city['id'] }}"
                                                data-select2-id="6">{{ Auth::guard('spa')->user()->city['name'] }}</option>
                                        <option value="1" data-select2-id="12">Hà Nội</option>
                                        <option value="2" data-select2-id="13">Hồ Chí Minh</option>
                                        <option value="3" data-select2-id="14">Đà Nẵng</option>
                                    </select>
                                    @if( $errors->first('city'))
                                        <span class="text-danger">{{ $errors->first('city')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Chọn ảnh</label>
                                        @if( $errors->first('avatar'))
                                            <span class="text-danger">{{ $errors->first('avatar')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6col-sm-6" >
                                <div class="form-group">
                                    <img id="showImage" src="images/spas/{{ Auth::guard('spa')->user()->image }}"
                                         style="width: 390px; overflow: hidden">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-md" style="margin-left: 40%">Thay đổi thông tin<i
                        class="ml-2 ti-arrow-right"></i></button>
            </form>
        </div>
        <script>

            var img = document.querySelector('[name="image"]');
            img.onchange = function () {
                var anh = this.files[0];
                if (anh == undefined) {
                    document.querySelector('#showImage').src = "images/spas/{{ Auth::guard('spa')->user()->image }}";
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
    </div>
@endsection()

@section('alert')
    @if (session('success'))
        <script>
            toastr.success('{{ session('success')}}', {timeOut: 200});
        </script>
    @endif
@endsection


