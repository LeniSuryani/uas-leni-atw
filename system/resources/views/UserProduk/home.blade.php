@extends('userproduk.template')

@section('content')

<!-- banner -->
<div class="banner-grid">
    <div id="visual">
        <div class="slide-visual">
            <!-- Slide Image Area (1000 x 424) -->
            <ul class="slide-group">
                <li><img class="img-responsive" src="{{url('public')}}/uas-atw/images/ba2.jpg" alt="Dummy Image" /></li>
                <li><img class="img-responsive" src="{{url('public')}}/uas-atw/images/ba1.jpg" alt="Dummy Image" /></li>
                <li><img class="img-responsive" src="{{url('public')}}/uas-atw/images/ba3.jpg" alt="Dummy Image" /></li>
            </ul>

            <!-- Slide Description Image Area (316 x 328) -->
            <div class="script-wrap">
                <ul class="script-group">
                    <li>
                        <div class="inner-script"><img class="img-responsive" src="{{url('public')}}/uas-atw/images/baa1.jpg" alt="Dummy Image" /></div>
                    </li>
                    <li>
                        <div class="inner-script"><img class="img-responsive" src="{{url('public')}}/uas-atw/images/baa2.jpg" alt="Dummy Image" /></div>
                    </li>
                    <li>
                        <div class="inner-script"><img class="img-responsive" src="{{url('public')}}/uas-atw/images/baa3.jpg" alt="Dummy Image" /></div>
                    </li>
                </ul>
                <div class="slide-controller">
                    <a href="#" class="btn-prev"><img src="{{url('public')}}/uas-atw/images/btn_prev.png" alt="Prev Slide" /></a>
                    <a href="#" class="btn-play"><img src="{{url('public')}}/uas-atw/images/btn_play.png" alt="Start Slide" /></a>
                    <a href="#" class="btn-pause"><img src="{{url('public')}}/uas-atw/images/btn_pause.png" alt="Pause Slide" /></a>
                    <a href="#" class="btn-next"><img src="{{url('public')}}/uas-atw/images/btn_next.png" alt="Next Slide" /></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script type="text/javascript" src="{{url('public')}}/uas-atw/js/pignose.layerslider.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(window).load(function() {
            $('#visual').pignoseLayerSlider({
                play: '.btn-play',
                pause: '.btn-pause',
                next: '.btn-next',
                prev: '.btn-prev'
            });
        });
        //]]>
    </script>

</div>
<!-- //banner -->
<!-- content -->

<!-- isi -->
<div class="new_arrivals">
    <div class="container">
        <h3><span>Branded </span>collection</h3>
        <p>Kami menyediakan barang Branded dijamin keaslian barang </p>
        <!-- card -->

        <div class="d-flex electro-left text-center mt-5">
            <div class="electro-img-btm-left mask">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{url('public')}}/uas-atw/images/e1.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content electro-text simpleCart_shelfItem">
                            <h4>Mobiles</h4>
                            <span class="separator"></span>
                            <p><span class="item_price">$500</span></p>
                            <span class="separator"></span>
                            <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="electro-img-btm-right mask">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{url('public')}}/uas-atw/images/e2.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content electro-text simpleCart_shelfItem">
                            <h4>Branded Watches</h4>
                            <span class="separator"></span>
                            <p><span class="item_price">$500</span></p>
                            <span class="separator"></span>
                            <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="electro-img-btm-left mask">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{url('public')}}/uas-atw/images/e2.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content electro-text simpleCart_shelfItem">
                            <h4>Branded Watches</h4>
                            <span class="separator"></span>
                            <p><span class="item_price">$500</span></p>
                            <span class="separator"></span>
                            <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //content -->

@endsection