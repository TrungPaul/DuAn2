
<section class="beautypress-service-section beautypress-version-2 beautypress-padding-bottom">
    <div class="container">
        <div class="beautypress-section-headinig beautypress-version-2">
            <h2>We are awesome</h2>
            <h3>Our Spa</h3>
            <img src="img/section-heading-separetor.png" alt="">
        </div>
        <div class="beautypress-tab">
            <div class="tabbable">
                <ul class="nav nav-tabs beautypress-top-nav">
                    <li class="active"><a href="#makeup" data-toggle="tab"><i class="xsicon icon-cosmetics"></i><span>makeup</span></a></li>
                    <li><a href="#facial" data-toggle="tab"><i class="xsicon icon-cream-3"></i><span>Facial</span></a></li>
                    <li><a href="#haircut" data-toggle="tab"><i class="xsicon icon-hair-cut"></i><span>Hair Cut</span></a></li>
                    <li><a href="#massage" data-toggle="tab"><i class="xsicon icon-massage"></i><span>massage</span></a></li>
                    <li><a href="#nail" data-toggle="tab"><i class="xsicon icon-nail"></i><span>Nail care</span></a></li>
                    <li><a href="#waxing" data-toggle="tab"><i class="xsicon icon-hair-removal"></i><span>waxing</span></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="makeup">
                        <div class="tabbable">
                                @foreach($listspa as $listspa)
                            <div class="tab-content">
                                <div class="tab-pane beautypress-tab-content active" id="mens_makeup">
                                    <div class="beautypress-spilit-container">
                                        <div class="beautypress-tab-image">
                                            <img src="assets/img/inner-news-feed-1.jpg" alt="Image">
                                            <div class="beautypress-tab-image-content">
                                                <span class="beautypress-iocn-btn full-round-btn bg-color-cyan">$50</span>
                                            </div>
                                        </div>
                                        <div class="beautypress-tab-text-content">
                                            <h3>{{$listspa->name}}</h3>
                                            <p>{{$listspa->name}} </p>
                                            <p> {{$listspa->name}}</p>
                                            <div class="beautypress-btn-wraper">
                                                <a href="#" class="xs-btn round-btn box-shadow-btn bg-color-cyan">get appointment <span style="top: -50.225px; left: -155.388px;"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- #mens_makeup END -->
                            </div><!-- .tab-content END -->
                            @endforeach

                        </div>
                    </div><!-- #makeup END -->

                    <div class="tab-pane" id="facial">
                        <div class="tabbable">
                            <div class="tab-content">
                                <div class="tab-pane beautypress-tab-content active" id="mens_makeup">
                                    <div class="beautypress-spilit-container">
                                        <div class="beautypress-tab-image">
                                            <img src="assets/img/inner-news-feed-1.jpg" alt="Image">
                                            <div class="beautypress-tab-image-content">
                                                <span class="beautypress-iocn-btn full-round-btn bg-color-cyan">$50</span>
                                            </div>
                                        </div>
                                        <div class="beautypress-tab-text-content">
                                            <h3>Spa Live</h3>
                                            <p>location: 54 Long biên </p>
                                            <p> A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there</p>
                                            <div class="beautypress-btn-wraper">
                                                <a href="#" class="xs-btn round-btn box-shadow-btn bg-color-cyan">get appointment <span style="top: -50.225px; left: -155.388px;"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- #mens_makeup END -->
                            </div><!-- .tab-content END -->
                        </div>
                    </div><!-- #facial END -->

                    <div class="tab-pane" id="haircut">
                        <div class="tabbable">
                            <div class="tab-content">
                                <div class="tab-pane beautypress-tab-content active" id="mens_makeup">
                                    <div class="beautypress-spilit-container">
                                        <div class="beautypress-tab-image">
                                            <img src="assets/img/inner-news-feed-1.jpg" alt="Image">
                                            <div class="beautypress-tab-image-content">
                                                <span class="beautypress-iocn-btn full-round-btn bg-color-cyan">$50</span>
                                            </div>
                                        </div>
                                        <div class="beautypress-tab-text-content">
                                            <h3>Spa Live</h3>
                                            <p>location: 54 Long biên </p>
                                            <p> A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there</p>
                                            <div class="beautypress-btn-wraper">
                                                <a href="#" class="xs-btn round-btn box-shadow-btn bg-color-cyan">get appointment <span style="top: -50.225px; left: -155.388px;"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- #mens_makeup END -->
                            </div><!-- .tab-content END -->
                        </div>
                    </div><!-- #haircut END -->

                    <div class="tab-pane" id="massage">
                        <div class="tabbable">
                            <div class="tab-content">
                                <div class="tab-pane beautypress-tab-content active" id="mens_makeup">
                                    <div class="beautypress-spilit-container">
                                        <div class="beautypress-tab-image">
                                            <img src="assets/img/inner-news-feed-1.jpg" alt="Image">
                                            <div class="beautypress-tab-image-content">
                                                <span class="beautypress-iocn-btn full-round-btn bg-color-cyan">$50</span>
                                            </div>
                                        </div>
                                        <div class="beautypress-tab-text-content">
                                            <h3>Spa Live</h3>
                                            <p>location: 54 Long biên </p>
                                            <p> A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there</p>
                                            <div class="beautypress-btn-wraper">
                                                <a href="#" class="xs-btn round-btn box-shadow-btn bg-color-cyan">get appointment <span style="top: -50.225px; left: -155.388px;"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- #mens_makeup END -->
                            </div><!-- .tab-content END -->
                        </div>
                    </div><!-- #massage END -->

                    <div class="tab-pane" id="nail">
                        <div class="tabbable">
                            <div class="tab-content">
                                <div class="tab-pane beautypress-tab-content active" id="mens_makeup">
                                    <div class="beautypress-spilit-container">
                                        <div class="beautypress-tab-image">
                                            <img src="assets/img/inner-news-feed-1.jpg" alt="Image">
                                            <div class="beautypress-tab-image-content">
                                                <span class="beautypress-iocn-btn full-round-btn bg-color-cyan">$50</span>
                                            </div>
                                        </div>
                                        <div class="beautypress-tab-text-content">
                                            <h3>Spa Live</h3>
                                            <p>location: 54 Long biên </p>
                                            <p> A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there</p>
                                            <div class="beautypress-btn-wraper">
                                                <a href="#" class="xs-btn round-btn box-shadow-btn bg-color-cyan">get appointment <span style="top: -50.225px; left: -155.388px;"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- #mens_makeup END -->
                            </div><!-- .tab-content END -->
                        </div>
                    </div><!-- #waxing END -->
                </div>
            </div><!-- .tabbable END -->
        </div><!-- .beautypress-tab END -->
    </div>
</section>
