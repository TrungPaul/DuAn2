@extends('admin.layouts.main')
@section('title', 'Thêm bài viết')
@section('content')
<div class="col-md-12 pb-5">
        <!-- Tab panes -->

        <!-- My Profile -->
        <div class="tab-pane active container" id="c-profile">

            <!-- Company Information -->
            <div class="tab-pane" id="manage-jobs">

                <div class="tr-single-box">
                    <div class="tr-single-header">
                        <h4><i class="lni-file"></i>Thêm bài viết</h4>
                    </div>

                    <div class="tr-single-body">
                        <form enctype="multipart/form-data" action="{{route('admin.create_post')}}" method="post">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> 
                                    <label>Tiêu đề</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"> 
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="form-control" name="cate_id">
                                        <?php foreach ($category as $item): ?>
                                            <option value="<?= $item['id'] ?>">
                                                <?= $item['name'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <img src="https://summer.pes.edu/wp-content/uploads/2019/02/default-2.jpg" alt="Ảnh" class="img-fluid" id="showImage" name="img" style="border: 2px solid #ccc">
                                <div class="form-group">
                                    <label>Ảnh bài viết</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
                                    @error('image') 
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" >{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Nội dung bài viết</label>
                                    <textarea name="content" id="textarea_post" class="form-control @error('content') is-invalid @enderror" >{{ old('content') }}</textarea>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <a href="{{route('admin.listpost')}}" class="btn btn-sm btn-danger">Huỷ</a>
                                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>
@section('script')
    <script>
        $('#textarea_post').summernote({
            height:300,
        });
        var img = document.querySelector('[name="image"]');
        img.onchange = function () {
            var anh = this.files[0];
            if (anh == undefined) {
                document.querySelector('#showImage').src = "https://summer.pes.edu/wp-content/uploads/2019/02/default-2.jpg";
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
@stop
@endsection