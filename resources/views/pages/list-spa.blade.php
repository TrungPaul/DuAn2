@extends('layouts.index')
@section('title', 'Danh sách Spa')

@section('content')
    <div class="beautypress-newsfeed-section beautypress-no-bg section-padding">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-version-2">
                <h3>Danh sách Spa</h3>
                <img src="assets/img/section-heading-separetor.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-container d-sm-none d-md-block d-none">
                        <!-- Keyword -->
                        <form action="" method="get">
                            <div class="sidebar-widget">
                                <div class="form-group">
                                    <h5>Tên Spa</h5>
                                    <div class="input-with-icon">
                                        <input type="text" class="form-control" name="key" placeholder="Tên spa...">
                                        <i class="ti-key"></i>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Location -->
                            <div class="sidebar-widget">
                                <div class="form-group">
                                    <h5>Địa điểm</h5>
                                    <div class="input-with-icon">
                                        <select id="location" name="location"
                                                class="js-states form-control select2-hidden-accessible"
                                                data-select2-id="location" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="2"></option>
                                            @foreach($location as $key => $lo)
                                                <option value="{{ $lo->id }}">{{ $lo->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- Category -->
                            <div class="sidebar-widget">
                                <button type="submit" style="margin-top: 5%"
                                        class="btn btn-search full-width btn-info bg-color-purple">Tìm kiếm
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">
                    @foreach($result as $key => $spa)
                        <div class="beautypress-single-new-pricing-wraper active">
                            <div
                                class="beautypress-single-new-pricing beautypress-watermark-icon beautypress-pricing-header beautypress-pricing-content">
                                <img src="images/spas/{{ $spa->image }}" class="w3-round">
                            </div><!-- .beautypress-single-new-pricing END -->
                            <div class="beautypress-single-new-pricing beautypress-pricing-content">
                                <ul class="beautypress-both-side-list beautypress-version-3">
                                    <li><h3 class="text-dark">{{ $spa->name }}</h3></li>
                                    <hr>
                                    <li>Email: {{ $spa->email }}</li>
                                    <li>Số điện thoại: {{ $spa->phone }}</li>
                                    <li>Địa chỉ: {{ $spa->location }}, {{ $spa->city->name }} </li>
                                </ul>
                            </div><!-- .beautypress-single-new-pricing END -->
                            <a href="{{ route('detail-spa',[ $spa->id ]) }}" class="beautypress-single-new-pricing beautypress-pricing-footer">
                                <h3>Đặt lịch</h3>
                            </a><!-- .beautypress-single-new-pricing END -->
                        </div>
                    @endforeach
                    {{ $result->links() }}
                </div>
            </div>

        </div>
    </div>
@endsection

