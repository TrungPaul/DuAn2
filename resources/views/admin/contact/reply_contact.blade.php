@extends('admin.layouts.main')
@section('title', 'Trả lời liên hệ')
@section('content')
<div class="col-md-12 pb-5">
        <!-- Tab panes -->

        <!-- My Profile -->
        <div class="tab-pane active container" id="c-profile">

            <!-- Company Information -->
            <div class="tab-pane" id="manage-jobs">
                <div class="tr-single-box">
                    <div class="tr-single-header">
                        <h4><i class="lni-file"></i>Trả lời liên hệ</h4>
                    </div><br>
                    <div class="h6">
                        <p><b>Tên:</b> {{ $contact->name }}</p>
                        <p><b>Email:</b> {{ $contact->email }}</p>
                        <p><b>Nội dung:</b> {{ $contact->content }}</p>
                    </div>
                    <hr>
                    <div class="tr-single-body">
                        <form enctype="multipart/form-data" action="{{route('admin.sendreplycontact')}}" method="post">
                            @csrf
                            <input type="hidden" name="name" value="{{$contact->name}}">
                            <input type="hidden" name="email" value="{{$contact->email}}">

                            <div class="col-md-12 text-dark">
                                <div class="form-group">
                                    <label>Nội dung trả lời</label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10" id="textarea_contact"></textarea>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <a href="{{route('admin.listcontact')}}" class="btn btn-sm btn-danger">Huỷ</a>
                                <button type="submit" class="btn btn-sm btn-primary">Gửi</button>
                               
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection