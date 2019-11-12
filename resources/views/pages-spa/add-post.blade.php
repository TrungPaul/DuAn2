@extends('layouts-spa.index')
@section('title', 'Thêm bài viết')

@section('content')
    <div class="col-md-8 col-sm-12">
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
                        <form enctype="multipart/form-data" action="{{route('create-post')}}" method="post">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" name="title" class="form-control">
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

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nội dung bài viết</label>
                                    <textarea name="content" class="form-control" rows="10" class="textarea"></textarea>
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
