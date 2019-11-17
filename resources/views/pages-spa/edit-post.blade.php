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
                                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
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

                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12 text-dark">
                                <div class="form-group">
                                    <label>Nội dung bài viết</label>
                                    <textarea name="content" class="form-control" rows="10" class="textarea">{{ $post->content }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <a href="{{route('list-post')}}" class="btn btn-sm btn-danger">Huỷ</a>
                                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection()