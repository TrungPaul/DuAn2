@extends('layouts.index')
@section('title', 'Chi tiết Spa')

@section('content')
    <div class="beautypress-newsfeed-section beautypress-no-bg section-padding">
            <div class="container">
                <div class="beautypress-section-headinig beautypress-version-2">
                    <h3>Chi tiết Spa</h3>
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
                            <img class="avatar-spa" src="images/spas/image-seeder.jpg" >

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


                                <div class="tab-pane" id="facial">
                                    <div class="tabbable tabs-left">
                                        <ul class="nav nav-tabs beautypress-side-nav">
                                            <li class="active"><a href="#mens_facial" data-toggle="tab"
                                                                  aria-expanded="false">Men's Facial</a></li>
                                            <li><a href="#women_facial" data-toggle="tab" aria-expanded="false">Women's
                                                    Facial</a></li>
                                            <li><a href="#child_facial" data-toggle="tab" aria-expanded="false">Children's
                                                    Facial</a></li>
                                            <li><a href="#teens_facial" data-toggle="tab" aria-expanded="false">Teen's
                                                    Facial</a></li>
                                            <li><a href="#layer_facial" data-toggle="tab" aria-expanded="false">Layer
                                                    Facial</a></li>
                                            <li><a href="#stylish_facial" data-toggle="tab" aria-expanded="false">Stylish
                                                    Facial</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane beautypress-tab-content active" id="mens_facial">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-1.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Men's Facial</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #mens_facial END -->

                                            <div class="tab-pane beautypress-tab-content" id="women_facial">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-2.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Women's Facial</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #women_facial END -->

                                            <div class="tab-pane beautypress-tab-content" id="child_facial">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-3.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Children's Facial</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #child_facial END -->

                                            <div class="tab-pane beautypress-tab-content" id="teens_facial">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-4.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Teen's Facial</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #teens_facial END -->

                                            <div class="tab-pane beautypress-tab-content" id="layer_facial">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-5.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Layer Facial</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #layer_facial END -->

                                            <div class="tab-pane beautypress-tab-content" id="stylish_facial">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-6.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Stylish Facial</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #stylish_facial END -->
                                        </div>
                                    </div>
                                </div><!-- #facial END -->

                                <div class="tab-pane" id="massage">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs beautypress-side-nav">
                                            <li class="active"><a href="#mens_massage" data-toggle="tab"
                                                                  aria-expanded="false">Men's massage</a></li>
                                            <li><a href="#women_massage" data-toggle="tab" aria-expanded="false">Women's
                                                    massage</a></li>
                                            <li><a href="#child_massage" data-toggle="tab" aria-expanded="false">Children's
                                                    massage</a></li>
                                            <li><a href="#teens_massage" data-toggle="tab" aria-expanded="false">Teen's
                                                    massage</a></li>
                                            <li><a href="#layer_massage" data-toggle="tab" aria-expanded="false">Layer
                                                    massage</a></li>
                                            <li><a href="#stylish_massage" data-toggle="tab" aria-expanded="false">Stylish
                                                    massage</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane beautypress-tab-content active" id="mens_massage">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-1.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Men's massage</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #mens_massage END -->

                                            <div class="tab-pane beautypress-tab-content" id="women_massage">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-2.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Women's massage</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #women_massage END -->

                                            <div class="tab-pane beautypress-tab-content" id="child_massage">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-3.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Children's massage</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #child_massage END -->

                                            <div class="tab-pane beautypress-tab-content" id="teens_massage">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-4.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Teen's massage</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #teens_massage END -->

                                            <div class="tab-pane beautypress-tab-content" id="layer_massage">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-5.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Layer massage</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #layer_massage END -->

                                            <div class="tab-pane beautypress-tab-content" id="stylish_massage">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-6.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Stylish massage</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #stylish_massage END -->
                                        </div>
                                    </div>
                                </div><!-- #massage END -->

                                <div class="tab-pane" id="nail">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs beautypress-side-nav">
                                            <li class="active"><a href="#mens_nail" data-toggle="tab"
                                                                  aria-expanded="false">Men's Nail care</a></li>
                                            <li><a href="#women_nail" data-toggle="tab" aria-expanded="false">Women's
                                                    Nail care</a></li>
                                            <li><a href="#child_nail" data-toggle="tab" aria-expanded="false">Children's
                                                    Nail care</a></li>
                                            <li><a href="#teens_nail" data-toggle="tab" aria-expanded="false">Teen's
                                                    Nail care</a></li>
                                            <li><a href="#layer_nail" data-toggle="tab" aria-expanded="false">Layer Nail
                                                    care</a></li>
                                            <li><a href="#stylish_nail" data-toggle="tab" aria-expanded="false">Stylish
                                                    Nail care</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane beautypress-tab-content active" id="mens_nail">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-1.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Men's Nail care</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #mens_nail END -->

                                            <div class="tab-pane beautypress-tab-content" id="women_nail">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-2.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Women's Nail care</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #women_nail END -->

                                            <div class="tab-pane beautypress-tab-content" id="child_nail">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-3.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Children's Nail care</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #child_nail END -->

                                            <div class="tab-pane beautypress-tab-content" id="teens_nail">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-4.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Teen's Nail care</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #teens_nail END -->

                                            <div class="tab-pane beautypress-tab-content" id="layer_nail">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-5.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Layer Nail care</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #layer_nail END -->

                                            <div class="tab-pane beautypress-tab-content" id="stylish_nail">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-6.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Stylish Nail care</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #stylish_nail END -->
                                        </div>
                                    </div>
                                </div><!-- #nail END -->

                                <div class="tab-pane active" id="waxing">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs beautypress-side-nav">
                                            <li class="active"><a href="#mens_waxing" data-toggle="tab"
                                                                  aria-expanded="true">Men's waxing</a></li>
                                            <li><a href="#women_waxing" data-toggle="tab" aria-expanded="true">Women's
                                                    waxing</a></li>
                                            <li><a href="#child_waxing" data-toggle="tab" aria-expanded="true">Children's
                                                    waxing</a></li>
                                            <li><a href="#teens_waxing" data-toggle="tab" aria-expanded="true">Teen's
                                                    waxing</a></li>
                                            <li><a href="#layer_waxing" data-toggle="tab" aria-expanded="true">Layer
                                                    waxing</a></li>
                                            <li><a href="#stylish_waxing" data-toggle="tab" aria-expanded="true">Stylish
                                                    waxing</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane beautypress-tab-content active" id="mens_waxing">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-1.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Men's waxing</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #mens_waxing END -->

                                            <div class="tab-pane beautypress-tab-content" id="women_waxing">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-2.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Women's waxing</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #women_waxing END -->

                                            <div class="tab-pane beautypress-tab-content" id="child_waxing">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-3.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Children's waxing</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #child_waxing END -->

                                            <div class="tab-pane beautypress-tab-content" id="teens_waxing">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-4.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Teen's waxing</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #teens_waxing END -->

                                            <div class="tab-pane beautypress-tab-content" id="layer_waxing">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-5.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Layer waxing</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #layer_waxing END -->

                                            <div class="tab-pane beautypress-tab-content" id="stylish_waxing">
                                                <div class="beautypress-spilit-container">
                                                    <div class="beautypress-tab-image">
                                                        <img src="img/service-tab-img-6.jpg" alt="Image">
                                                        <div class="beautypress-tab-image-content">
                                                            <span
                                                                class="beautypress-iocn-btn full-round-btn bg-color-purple">$50</span>
                                                        </div>
                                                    </div>
                                                    <div class="beautypress-tab-text-content">
                                                        <h3>Stylish waxing</h3>
                                                        <p> It showed a lady fitted out with a fur hat and fur boa who
                                                            sat upright, raising a heavy fur muff that covered the whole
                                                            of her lower arm towards the viewer. </p>
                                                        <p> A collection of textile samples lay spread out on the table
                                                            - Samsa was a travelling salesman - and above it there</p>
                                                        <div class="beautypress-btn-wraper">
                                                            <a href="#"
                                                               class="xs-btn round-btn box-shadow-btn bg-color-purple">get
                                                                appointment <span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- #stylish_waxing END -->
                                        </div>
                                    </div>
                                </div><!-- #waxing END -->
                            </div>
                        </div><!-- .tabbable END -->
                    </div><!-- .beautypress-tab END -->
                </div>
        </section>
    </div>
@endsection
