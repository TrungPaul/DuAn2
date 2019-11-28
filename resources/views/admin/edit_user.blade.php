@extends('admin.layouts.main')
@section('title', 'Thay đổi trạng thái thành viên')
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3 card-style" style="max-width: 100%;">
                        <div class="card-header">
                            <h4> Thay đổi trạng thái</h4>
                        </div>
                        <div class="card-body" id="card-body-form">
                            <form method="post"  action="{{ route('admin.updateuser') }}">
                                @csrf
                                @if (isset($user))
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                @endif

                                <div class="form-group">
                                    Họ Và Tên
                                    <input type="text" class="form-control" value="{{ $user->name }}" name="name" readonly>

                                </div>

                                <div class="form-group">
                                   Email
                                    <input type="text" class="form-control"  value="{{ $user->email }}" name="email" readonly>
                                </div>


                                    <div class="col-6">
                                        Số điện thoại
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone_number" value="{{ $user->phone_number }}" readonly>
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="form-group">
                                      Giới tính
                                        <input type="text" class="form-control" readonly
                                            value=
                                                    @if ($user->gender == $gender['gender_type_male'])
                                                        Nam
                                                    @elseif($user->gender == $gender['gender_type_female'])
                                                        Nữ
                                                    @else
                                                        Other
                                                    @endif
                                            >
                                        </div>

                                </div>
                                @if($user->is_active != $gender['user_type_inActive'])
                                    <input type="hidden" name="is_active" value="0">
                                    <button type="submit" class="btn btn-danger btn-sm">Chặn</button>
                                @elseif($user->is_active != $gender['user_type_active'])
                                    <input type="hidden" name="is_active" value="1">
                                    <button type="submit" class="btn btn-success btn-sm">Thành viên</button>
                                @else
                                @endif
                                <a href="{{ route('admin.listuser') }}" class="btn btn-warning btn-sm text-light btn-cancel"> Hủy </a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@section('script')
<script>
    $('.btn-cancel').on('click', function(){
        swal({
            text: "@lang('messages.errorPost')",
            icon: "success",
            button: true,
            dangerMode: true,

        });
    });
</script>
@stop
@endsection
