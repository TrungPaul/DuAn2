@extends('layouts.index')
@section('title', 'Chi tiết Spa')

@section('content')
    <div class="beautypress-newsfeed-section beautypress-no-bg section-padding mt-5">
            <div class="container">
                <div class="beautypress-section-headinig beautypress-version-2">
                    <h3>{{ $detailSpa->name }}</h3>
                    <img src="assets/img/section-heading-separetor.png" alt="">
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xl-4">
                        <div class="beautypress-single-portfolio-details">
                            <div class="beautypress-single-portfolio-details-wraper">
                                <div class="beautypress-portfolio-text-content">
                                    <div class="beautypress-portfolio-content-header">
                                        <h3 class="color-black">{{ $detailSpa->name }}</h3>
                                    </div>
                                    <p>{{ $detailSpa->location }},{{ $detailSpa->city['name']}}</p>
                                </div>
                                <div class="beautypress-portfolio-text-content">
                                    <div class="beautypress-portfolio-content-header">
                                        <h3 class="color-black">Liên Hệ</h3>
                                    </div>
                                    <p>Số điện thoại: {{ $detailSpa->phone }}</p>
                                    <p>Email: {{ $detailSpa->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xl-8">
                        <div id="sync1" class="beautypress-spilit-container">
                            <img class="avatar-spa" src="images/spas/{{ $detailSpa->image }}" style="height:400px;">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="beautypress-tab">
                        <div class="tabbable">
                            <ul class="nav nav-tabs beautypress-top-nav">
                                    <li class=""><a href="#facial" data-toggle="tab" aria-expanded="false"><i
                                                class="xsicon icon-cream-3"></i><span>Dịch Vụ Mặt</span></a></li>
                                    <li class=""><a href="#massage" data-toggle="tab" aria-expanded="false"><i
                                                class="xsicon icon-massage"></i><span>Dịch Vụ Body</span></a></li>
                                    <li class=""><a href="#nail" data-toggle="tab" aria-expanded="false"><i
                                                class="xsicon icon-nail"></i><span>Dịch Vụ Móng</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <!-- dv mặt -->
                                <div class="tab-pane" id="facial">
                                    <div class="tabbable tabs-left">
                                        @if (count($service_one) > 0)
                                            <ul class="nav nav-tabs beautypress-side-nav">
                                                @foreach ($service_one as $sv1 => $service)
                                                    <li @if($sv1 == 0) class="active" @endif><a href="#tab-{{ $service->id }}" data-toggle="tab"
                                                                    aria-expanded="false">{{ $service->name_service }}</a></li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <ul class="nav nav-tabs beautypress-side-nav">
                                                <li><h6>Không có dịch vụ nào</h6></li>
                                            </ul>
                                        @endif 
                                        <div class="tab-content">
                                            @foreach ($service_one as $sv1 => $service)
                                                <div @if($sv1 == 0) class="tab-pane beautypress-tab-content active" @else class="tab-pane beautypress-tab-content" @endif id="tab-{{ $service->id }}">
                                                    <div class="beautypress-spilit-container">
                                                        <div class="beautypress-tab-image">
                                                            <img src="images/{{ $service->image_service}}" alt="Image">
                                                            <div class="beautypress-tab-image-content">
                                                                <span
                                                                    class="beautypress-iocn-btn full-round-btn bg-color-purple" style="">{{ number_format($service->price_service) }} VNĐ</span>
                                                            </div>
                                                        </div>
                                                        <div class="beautypress-tab-text-content">
                                                            <h4><b>{{ $service->name_service }}</b></h4>
                                                            <p> {{ $service->detail_service }} </p>
                                                            <div class="beautypress-btn-wraper">
                                                                <a href="#"
                                                                class="xs-btn round-btn box-shadow-btn bg-color-purple">Đặt dịch vụ này<span></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- #mens_facial END -->
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- #facial END -->
                                <!-- end dv mặt -->

                                <!-- dv body -->
                                <div class="tab-pane" id="massage">
                                    <div class="tabbable">
                                        @if (count($service_two) > 0)
                                            <ul class="nav nav-tabs beautypress-side-nav">
                                                @foreach ($service_two as $sv2 => $service)
                                                    <li @if($sv2 == 0) class="active" @endif><a href="#tab-{{ $service->id }}" data-toggle="tab"
                                                                    aria-expanded="false">{{ $service->name_service }}</a></li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <ul class="nav nav-tabs beautypress-side-nav">
                                                <li><h6>Không có dịch vụ nào</h6></li>
                                            </ul>
                                        @endif 
                                        <div class="tab-content">
                                            @foreach ($service_two as $sv2 => $service)
                                                <div @if($sv2 == 0) class="tab-pane beautypress-tab-content active" @else class="tab-pane beautypress-tab-content" @endif id="tab-{{ $service->id }}">
                                                    <div class="beautypress-spilit-container">
                                                        <div class="beautypress-tab-image">
                                                            <img src="images/{{ $service->image_service}}" alt="Image">
                                                            <div class="beautypress-tab-image-content">
                                                                <span
                                                                    class="beautypress-iocn-btn full-round-btn bg-color-purple">{{ number_format($service->price_service) }} VNĐ</span>
                                                            </div>
                                                        </div>
                                                        <div class="beautypress-tab-text-content">
                                                            <h4><b>{{ $service->name_service }}</b></h4>
                                                            <p> {{ $service->detail_service }} </p>
                                                            <div class="beautypress-btn-wraper">
                                                                <a href="#"
                                                                class="xs-btn round-btn box-shadow-btn bg-color-purple">Đặt dịch vụ này <span></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- #mens_massage END -->
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- #massage END -->
                                <!-- end dv body -->

                                <!-- dv móng -->
                                <div class="tab-pane" id="nail">
                                    <div class="tabbable">
                                        @if (count($service_three) > 0)
                                            <ul class="nav nav-tabs beautypress-side-nav">
                                                @foreach ($service_three as $sv3 => $service)
                                                    <li @if($sv3 == 0) class="active" @endif><a href="#tab-{{ $service->id }}" data-toggle="tab"
                                                                    aria-expanded="false">{{ $service->name_service }}</a></li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <ul class="nav nav-tabs beautypress-side-nav">
                                                <li><h6>Không có dịch vụ nào</h6></li>
                                            </ul>
                                        @endif 
                                        <div class="tab-content">
                                            @foreach ($service_three as $sv3 => $service)
                                                <div @if($sv3 == 0) class="tab-pane beautypress-tab-content active" @else class="tab-pane beautypress-tab-content" @endif id="tab-{{ $service->id }}">
                                                    <div class="beautypress-spilit-container">
                                                        <div class="beautypress-tab-image">
                                                            <img src="images/{{ $service->image_service}}" alt="Image">
                                                            <div class="beautypress-tab-image-content">
                                                                <span
                                                                    class="beautypress-iocn-btn full-round-btn bg-color-purple">{{ number_format($service->price_service) }} VNĐ</span>
                                                            </div>
                                                        </div>
                                                        <div class="beautypress-tab-text-content">
                                                            <h4><b>{{ $service->name_service }}</b></h4>
                                                            <p>{{ $service->detail_service }}</p>
                                                           
                                                            <div class="beautypress-btn-wraper">
                                                                <a href="#"
                                                                class="xs-btn round-btn box-shadow-btn bg-color-purple">Đặt dịch vụ này<span></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- #mens_nail END -->

                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- #nail END -->
                                <!-- end dv móng -->

                            </div>
                        </div><!-- .tabbable END -->
                    </div><!-- .beautypress-tab END -->
                </div>
        </section>
    </div>
    <div style="margin-bottom:100px;"></div>
@endsection
