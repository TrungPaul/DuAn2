@extends('layouts.index')
@section('title', 'Thông tin cá nhân')
@section('content')
    <div class="container" style="margin-top: 5%; padding: 30px">
        <div class="row">
            <aside class="col-lg-3 column border-right">
                @include('layouts.menu_bar')
            </aside>
            <div class="col-lg-9 column">
                <div class="profile-title">
                    <h3>Thông tin cá nhân</h3>
                </div>
                <div class="cand-single-user" style="margin-top: 10%">
                    <div class="can-detail-s">
                        <div class="cst"><img src="{{ Auth::user()->avatar }}" style="margin-top: 30%" alt=""></div>

                       <div style="margin-top: 15%">
                           <h3>{{ Auth::user()->name }}</h3>
                           <P>
                               Giới tính:
                               @if ( Auth::user()->gender == $gender['gender_type_male'] )
                                   Nam
                               @elseif ( Auth::user()->gender == $gender['gender_type_female'] )
                                   Nữ
                               @else
                                   Khác
                               @endif
                           </P>
                           <p>Ngày Sinh: {{ Auth::user()->date_of_birth }}</p>
                           <span>Số điện thoại: {{ Auth::user()->phone_number }}</span>
                           <span>Email: {{ Auth::user()->email }}</span>

                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>>


@endsection
