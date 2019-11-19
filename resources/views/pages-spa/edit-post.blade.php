@extends('layouts-spa.index')
@section('title', 'Sửa bài viết')

@section('content')
    <div class="col-md-8 col-sm-12">
        <!-- Tab panes -->

        <!-- My Profile -->
        <div class="tab-pane active container" id="c-profile">

            <!-- Company Information -->
            <div class="tab-pane" id="manage-jobs">

                <div class="tr-single-box">
                    <div class="tr-single-header">
                        <h4><i class="lni-file"></i>Sửa bài viết</h4>
                    </div>

                    <div class="tr-single-body">
                        <form enctype="multipart/form-data" action="{{route('update-post')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$post->id}}">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $post->title }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                <label>Danh mục</label>
                                <select class="form-control" name="cate_id">
                                <?php foreach ($cate as $item): ?>
                                    <option 
                                        <?php if ($post['cate_id'] == $item['id']): ?>
                                        selected
                                        <?php endif ?>
                                        value="<?= $item['id'] ?>">
                                        <?= $item['name'] ?>
                                    </option>
                                <?php endforeach ?>
                                </select>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <!-- <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <img id="proImg" src="" class="img-responsive">
                                </div>
                                </div> -->
                                <img src="images/posts/{{ $post->image }}" alt="Ảnh" class="img-responsive" id="showImage" name="img" style="border: 2px solid #ccc">
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    @error('image') 
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 text-dark">
                                <div class="form-group">
                                    <label>Nội dung bài viết</label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10" id="textarea">{{ $post->content }}</textarea>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <a href="{{route('list-post')}}" class="btn btn-sm btn-danger">Huỷ</a>
                                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                                @if ($post->status == 0)
                                    <a href="{{route('change-status-post', $post->id)}}" class="btn btn-sm btn-success">Duyệt</a>
                                @else
                                    <a href="{{route('change-status-post-b', $post->id)}}" class="btn btn-sm btn-light">Bỏ duyệt</a>
                                @endif
                               
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <script>
        var img = document.querySelector('[name="image"]');
        img.onchange = function () {
            var anh = this.files[0];
            if (anh == undefined) {
                document.querySelector('#showImage').src = "images/posts/{{ $post->image }}";
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