@extends('layouts.app')
@section('title')Arom Egypt registry | Home @endsection
@section('content')

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider">
            <div class="container-fluid p-0">

                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider" data-version="5.0">
                        <ul>

                            <!-- SLIDE 1 -->
                            <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/slider/slider-1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/slider/slider-1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                {{--<div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-dark-transparent-light pl-30 pr-30"--}}
                                     {{--id="rs-1-layer-1"--}}

                                     {{--data-x="['center']"--}}
                                     {{--data-hoffset="['0']"--}}
                                     {{--data-y="['middle']"--}}
                                     {{--data-voffset="['-115']"--}}
                                     {{--data-fontsize="['30']"--}}
                                     {{--data-lineheight="['50']"--}}
                                     {{--data-width="none"--}}
                                     {{--data-height="none"--}}
                                     {{--data-whitespace="nowrap"--}}
                                     {{--data-transform_idle="o:1;s:500"--}}
                                     {{--data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"--}}
                                     {{--data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"--}}
                                     {{--data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"--}}
                                     {{--data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"--}}
                                     {{--data-start="1000"--}}
                                     {{--data-splitin="none"--}}
                                     {{--data-splitout="none"--}}
                                     {{--data-responsive_offset="on"--}}
                                     {{--style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:45px;">--}}
                                    {{--AROM Registration--}}
                                {{--</div>--}}

                            <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-dark-transparent-light pl-40 pr-40"
                                     id="rs-1-layer-2"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['-115']"
                                     data-fontsize="['30']"
                                     data-lineheight="['50']"

                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="font-size:32px !important; z-index: 7; white-space: nowrap; font-weight:600; border-radius:45px;">
                                    Egyptian
                                </div>


                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-dark-transparent-light pl-20 pr-20"
                                     id="rs-1-layer-2"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['-45']"
                                     data-fontsize="['30']"
                                     data-lineheight="['70']"

                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="font-size:32px !important; z-index: 7; white-space: nowrap; font-weight:600; border-radius:45px;">
                                  Rheumatology Registration
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-center text-white bg-theme-colored-transparent pt-10 pb-10 pr-40 pl-40"
                                     id="rs-1-layer-3"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['30']"
                                     data-fontsize="['26']"
                                     data-lineheight="['28']"

                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                    First Web site Rheumatology Registeration in EGYPT

                                </div>

                                <!-- LAYER NR. 4 -->
                                {{--<div class="tp-caption tp-resizeme"--}}
                                     {{--id="rs-1-layer-4"--}}

                                     {{--data-x="['center']"--}}
                                     {{--data-hoffset="['0']"--}}
                                     {{--data-y="['middle']"--}}
                                     {{--data-voffset="['90']"--}}

                                     {{--data-width="none"--}}
                                     {{--data-height="none"--}}
                                     {{--data-whitespace="nowrap"--}}
                                     {{--data-transform_idle="o:1;"--}}
                                     {{--data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"--}}
                                     {{--data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"--}}
                                     {{--data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"--}}
                                     {{--data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"--}}
                                     {{--data-start="1400"--}}
                                     {{--data-splitin="none"--}}
                                     {{--data-splitout="none"--}}
                                     {{--data-responsive_offset="on"--}}
                                     {{--style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">View Details</a>--}}
                                {{--</div>--}}
                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/slider/slider-2.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/slider/slider-2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-dark-transparent-light pl-15 pr-15"
                                     id="rs-2-layer-1"

                                     data-x="['left']"
                                     data-hoffset="['30']"
                                     data-y="['middle']"
                                     data-voffset="['-110']"
                                     data-fontsize="['30']"
                                     data-lineheight="['50']"

                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:600;">We Provide
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-15 pr-15"
                                     id="rs-2-layer-2"

                                     data-x="['left']"
                                     data-hoffset="['30']"
                                     data-y="['middle']"
                                     data-voffset="['-45']"
                                     data-fontsize="['30']"
                                     data-lineheight="['70']"

                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:600;">15 rheumatological
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-15 pr-15"
                                     id="rs-2-layer-2"

                                     data-x="['left']"
                                     data-hoffset="['30']"
                                     data-y="['middle']"
                                     data-voffset="['30']"
                                     data-fontsize="['30']"
                                     data-lineheight="['70']"

                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:600;"> & orthopedic research studies
                                </div>

                                {{--<!-- LAYER NR. 3 -->--}}
                                {{--<div class="tp-caption tp-resizeme text-white"--}}
                                     {{--id="rs-2-layer-3"--}}

                                     {{--data-x="['left']"--}}
                                     {{--data-hoffset="['30']"--}}
                                     {{--data-y="['middle']"--}}
                                     {{--data-voffset="['30']"--}}
                                     {{--data-fontsize="['16']"--}}
                                     {{--data-lineheight="['28']"--}}

                                     {{--data-width="none"--}}
                                     {{--data-height="none"--}}
                                     {{--data-whitespace="nowrap"--}}
                                     {{--data-transform_idle="o:1;s:500"--}}
                                     {{--data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"--}}
                                     {{--data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"--}}
                                     {{--data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"--}}
                                     {{--data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"--}}
                                     {{--data-start="1400"--}}
                                     {{--data-splitin="none"--}}
                                     {{--data-splitout="none"--}}
                                     {{--data-responsive_offset="on"--}}
                                     {{--style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.--}}
                                {{--</div>--}}

                                <!-- LAYER NR. 4 -->
                                {{--<div class="tp-caption tp-resizeme"--}}
                                     {{--id="rs-2-layer-4"--}}

                                     {{--data-x="['left']"--}}
                                     {{--data-hoffset="['30']"--}}
                                     {{--data-y="['middle']"--}}
                                     {{--data-voffset="['90']"--}}

                                     {{--data-width="none"--}}
                                     {{--data-height="none"--}}
                                     {{--data-whitespace="nowrap"--}}
                                     {{--data-transform_idle="o:1;"--}}
                                     {{--data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"--}}
                                     {{--data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"--}}
                                     {{--data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"--}}
                                     {{--data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"--}}
                                     {{--data-start="1400"--}}
                                     {{--data-splitin="none"--}}
                                     {{--data-splitout="none"--}}
                                     {{--data-responsive_offset="on"--}}
                                     {{--style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">View Details</a>--}}
                                {{--</div>--}}
                            </li>

                            <!-- SLIDE 3 -->
                            <li data-index="rs-3" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/slider/slider-3.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/slider/slider-3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                {{--<div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-dark-transparent-light pl-15 pr-15"--}}
                                     {{--id="rs-3-layer-1"--}}

                                     {{--data-x="['right']"--}}
                                     {{--data-hoffset="['30']"--}}
                                     {{--data-y="['middle']"--}}
                                     {{--data-voffset="['-110']"--}}
                                     {{--data-fontsize="['30']"--}}
                                     {{--data-lineheight="['50']"--}}

                                     {{--data-width="none"--}}
                                     {{--data-height="none"--}}
                                     {{--data-whitespace="nowrap"--}}
                                     {{--data-transform_idle="o:1;s:500"--}}
                                     {{--data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"--}}
                                     {{--data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"--}}
                                     {{--data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"--}}
                                     {{--data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"--}}
                                     {{--data-start="1000"--}}
                                     {{--data-splitin="none"--}}
                                     {{--data-splitout="none"--}}
                                     {{--data-responsive_offset="on"--}}
                                     {{--style="z-index: 7; white-space: nowrap; font-weight:600;">We Provide Total--}}
                                {{--</div>--}}

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-15 pr-15"
                                     id="rs-3-layer-2"

                                     data-x="['center']"
                                     data-hoffset="['30']"
                                     data-y="['middle']"
                                     data-voffset="['-45']"
                                     data-fontsize="['22']"
                                     data-lineheight="['70']"

                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:600;">the simplest method to register & follow up your cases
                                </div>

                                <!-- LAYER NR. 3 -->
                                {{--<div class="tp-caption tp-resizeme text-right text-white"--}}
                                     {{--id="rs-3-layer-3"--}}

                                     {{--data-x="['right']"--}}
                                     {{--data-hoffset="['30']"--}}
                                     {{--data-y="['middle']"--}}
                                     {{--data-voffset="['30']"--}}
                                     {{--data-fontsize="['16']"--}}
                                     {{--data-lineheight="['28']"--}}

                                     {{--data-width="none"--}}
                                     {{--data-height="none"--}}
                                     {{--data-whitespace="nowrap"--}}
                                     {{--data-transform_idle="o:1;s:500"--}}
                                     {{--data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"--}}
                                     {{--data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"--}}
                                     {{--data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"--}}
                                     {{--data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"--}}
                                     {{--data-start="1400"--}}
                                     {{--data-splitin="none"--}}
                                     {{--data-splitout="none"--}}
                                     {{--data-responsive_offset="on"--}}
                                     {{--style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.--}}
                                {{--</div>--}}

                                <!-- LAYER NR. 4 -->
                                {{--<div class="tp-caption tp-resizeme"--}}
                                     {{--id="rs-3-layer-4"--}}

                                     {{--data-x="['right']"--}}
                                     {{--data-hoffset="['30']"--}}
                                     {{--data-y="['middle']"--}}
                                     {{--data-voffset="['90']"--}}

                                     {{--data-width="none"--}}
                                     {{--data-height="none"--}}
                                     {{--data-whitespace="nowrap"--}}
                                     {{--data-transform_idle="o:1;"--}}
                                     {{--data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"--}}
                                     {{--data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"--}}
                                     {{--data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"--}}
                                     {{--data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"--}}
                                     {{--data-start="1400"--}}
                                     {{--data-splitin="none"--}}
                                     {{--data-splitout="none"--}}
                                     {{--data-responsive_offset="on"--}}
                                     {{--style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">View Details</a>--}}
                                {{--</div>--}}
                            </li>
                        </ul>
                    </div><!-- end .rev_slider -->
                </div>
                <!-- end .rev_slider_wrapper -->
                <script>
                    $(document).ready(function(e) {
                        var revapi = $(".rev_slider").revolution({
                            sliderType:"standard",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "gyges",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 800,
                                    style: "hebe",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [655, 768, 960, 720],
                            lazyType: "none",
                            parallax: {
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                type: "scroll"
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script>
                <!-- Slider Revolution Ends -->

            </div>
        </section>

        <!-- Section: About -->
        <section id="about">
            <div class="container pb-20">
                <div class="row">
                    <div class="col-md-8">

                        <div class="home-block-quotes">
                            <h1>dear colleague,</h1>
                            <p class="pt-font text-center p-20">
                                I would like to take this opportunity to welcome you in our registration
                                and to thank you for choosing our web site to participate in this great research
                                we looks forward to providing you with all material you need in scientific research.
                            </p>
                        </div>

                    </div>



                    <div class="col-md-4 d-none d-md-block" style="padding-top: 55px">
                        <img src="images/dr-hesham.jpg" alt="Dr.Hesham Hamoud">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-gray-silver font-playfair mt-10 mt-sm-30 mb-0">About</h3>
                        <h1 class="font-playfair mt-0 text-theme-colored">Arom Egypt Registry</h1>
                        <ul class="list theme-colored angle-double-right list-border-bottom">
                            <li  class="mt-10 font-16">This registries aim to create the first Mixed cohort study, retrospective and prospective cohort of patients with different rheumatic disorders from different governorates representing all of the Egyptian populations.
                            </li>
                            <li class="mt-10 varela-font font-16">To trace the path of the patient by analyzing the initial diagnostic phase, the therapeutic choice of the acute attack and the long-term management of the patient with different rheumatic disorders from different governorates representing all of the Egyptian populations.
                            </li>
                            <li class="mt-10 varela-font font-16">To identifying critical pathways and studying prognostic and efficacy of the treatments in clinical practice.
                            </li>
                            <li  class="mt-10 varela-font font-16">To identifying the appropriateness of the diagnostic and therapeutic phases in the management of patients with different rheumatic disorders from different governorates representing all of the Egyptian populations.
                            </li>
                        </ul>


                        <p class="mt-20"><img src="images/signature.png" alt=""></p>
                        <!-- <a href="#" class="btn btn-default btn-lg mt-15 mb-md-30">Read more</a> -->
                    </div>
                </div>

            </div>

        </section>



        <!-- Section: Projects -->
        <section id="projects" class="bg-lighter">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="thumb">
                            <img class="img-fullwidth" src="images/projects-side.jpg" alt="Projects">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-content">
                            {{--<h3 class="sub-title mb-0 mt-30">Projects</h3>--}}
                            <h3 class="title mt-0">5 Reasons why you should register your cases</h3>
                            <ul class="font-15 list theme-colored angle-double-right">
                                <li>To estimate the prevalence of rheumatological health problems in Egypt.</li>
                                <li>To enable a national real world documentation of many different aspects.</li>
                                <li>To facilitate the work of rheumatological scientific research.</li>
                                <li>To follow up your patients easily.</li>
                                <li>To improve the health care and tretment for rheumatological patients.</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-30 mb-20">

                    <div class="panel-group accordion style2 mb-0 mt-20 col-xs-12" id="accordion2">
                        <div class="col-md-6 col-sm-12">

                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion21" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> SpAERe - AS </a> </div>
                                <div class="panel-collapse collapse" id="accordion21">
                                    <div class="panel-content pb-50">
                                        <h6>SpondyloArthritis Egyptian Registry</h6>
                                        <p>Concerning the initial treatment of SpAs in daily practice this project proposes to describe the Egyptian daily clinical practice reality, delayed diagnosis, use/abuse of ACR/EULAR management recommendations, the unmet needs with Cs DMARDs and the constraints of biological usage.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion22" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> SpAERe - Psoriasis </a> </div>
                                <div class="panel-collapse collapse" id="accordion22">
                                    <div class="panel-content pb-50">
                                        <h6>SpondyloArthritis Egyptian Registry</h6>
                                        <p>Concerning the initial treatment of SpAs in daily practice this project proposes to describe the Egyptian daily clinical practice reality, delayed diagnosis, use/abuse of ACR/EULAR management recommendations, the unmet needs with Cs DMARDs and the constraints of biological usage.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion23" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> SpAERe - Non Radiographic Axial SpA </a> </div>
                                <div class="panel-collapse collapse" id="accordion23">
                                    <div class="panel-content pb-50">
                                        <h6>SpondyloArthritis Egyptian Registry</h6>
                                        <p>Concerning the initial treatment of SpAs in daily practice this project proposes to describe the Egyptian daily clinical practice reality, delayed diagnosis, use/abuse of ACR/EULAR management recommendations, the unmet needs with Cs DMARDs and the constraints of biological usage.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion24" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> OPERe </a> </div>
                                <div class="panel-collapse collapse" id="accordion24">
                                    <div class="panel-content pb-50">
                                        <h6>Osteoporosis Egyptian Registry</h6>
                                        <p>Concerning the initial treatment of osteoporosis in daily practice this project proposes to describe the Egyptian daily clinical practice reality, delayed diagnosis and use/abuse of the management recommendations.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion25" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> RAERe </a> </div>
                                <div class="panel-collapse collapse" id="accordion25">
                                    <div class="panel-content pb-50">
                                        <h6>Rheumatoid Arthritis Registry</h6>
                                        <p>Concerning the initial treatment of Rheumatoid arthritis in daily practice this project proposes to describe the Egyptian daily clinical practice reality, delayed diagnosis, use/abuse of ACR/EULAR management recommendations, the unmet needs with Conventional DMARDs and the constraints of biological usage.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion26" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> MEGRA </a> </div>
                                <div class="panel-collapse collapse" id="accordion26">
                                    <div class="panel-content pb-50">
                                        <h6>Methotrexate EGyptian Registry in Rheumatoid Arthritis</h6>
                                        <p>Concerning the initial treatment of rheumatoid arthritis in practice the project proposes to describe the Egyptian daily clinical practice reality.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion27" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> ESKOAERe </a> </div>
                                <div class="panel-collapse collapse" id="accordion27">
                                    <div class="panel-content pb-50">
                                        <h6>Early Symptomatic Knee Osteoarthritis Egyptian Registry</h6>
                                        <ul>
                                            <li>
                                                <strong>Phase 1:</strong>
                                                (Qualitative Research). Define the OA early symptomatic disease
                                            </li>
                                            <li>
                                                <strong>Phase 2:</strong>
                                                ESKOAERe register Study the natural history of OA from the earliest precocious (Non-radiographic) areas of studying risk factors and influence of therapeutic factors outcomes as long term illness.
                                            </li>
                                            <li>
                                                <strong>Phase 3:</strong>
                                                (Study ESKOAERe Promote, draw, coordinate and conduct an early international study report.
                                            </li>
                                        </ul>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion28" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> SLERe  </a> </div>
                                <div class="panel-collapse collapse" id="accordion28">
                                    <div class="panel-content pb-50">
                                        <h6>Systemic Lupus Egyptian Registry</h6>
                                        <p>General serological objective of SLE-treated patients in Egypt treated with the Describe the socio-demographic, clinical and currently used therapeutic characteristics traditional and / or with biological drugs. Evaluate the efficacy and safety of therapies.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion29" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> VascERe  </a> </div>
                                <div class="panel-collapse collapse" id="accordion29">
                                    <div class="panel-content pb-50">
                                        <h6>Vasculitis Egyptian Registry</h6>
                                        <p>Concerning the initial treatment of Vasculitis in daily practice this project proposes to describe the Egyptian daily clinical practice reality, delayed diagnosis, use/abuse of management recommendations, the unmet needs with DMARDs and immunosuppressive drugs.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion30" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> OcumERe  </a> </div>
                                <div class="panel-collapse collapse" id="accordion30">
                                    <div class="panel-content pb-50">
                                        <h6>Ocular manifestations of rheumatic disorders Egyptian Registry</h6>
                                        <p>Concerning the initial treatment of Rheumatic diseases with ocular affection in daily practice this project proposes to describe the Egyptian daily clinical practice reality, delayed diagnosis of ocular affection with most rheumatic diseases.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion31" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> BAERe   </a> </div>
                                <div class="panel-collapse collapse" id="accordion31">
                                    <div class="panel-content pb-50">
                                        <h6>Biological Agents Egyptian Registry</h6>
                                        <p>  Concerning the initial treatment of biological agents in daily practice, this project proposes to describe the Egyptian daily clinical practice reality, use/abuse of ACR/EULAR management recommendations, and the unmet needs with biological usage.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion32" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> HFERe </a> </div>
                                <div class="panel-collapse collapse" id="accordion32">
                                    <div class="panel-content pb-50">
                                        <h6>Hip Fracture Egyptian Registry</h6>
                                        <p>Concerning the initial assessment of Hip Fracture in daily practice this project proposes to describe the Egyptian daily clinical practice reality, delayed diagnosis.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion33" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> CLumERe </a> </div>
                                <div class="panel-collapse collapse" id="accordion33">
                                    <div class="panel-content pb-50">
                                        <h6>Cervico-Lumbar Radiculopathy Egyptian Registry</h6>
                                        <p>Concerning the initial assessment and management of cervico-lumabar radiculopathy in daily practice, this project proposes to describe the Egyptian daily clinical practice reality.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion34" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> SCLERe  </a> </div>
                                <div class="panel-collapse collapse" id="accordion34">
                                    <div class="panel-content pb-50">
                                        <h6>Scleroderma Egyptian Registry</h6>
                                        <p>  Concerning the initial treatment of Systemic sclerosis in daily practice this project proposes to describe the Egyptian daily clinical practice reality, delayed diagnosis, use/abuse of ACR/EULAR management recommendations, the unmet needs with DMARDs and the immunosuppressive drugs.</p>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"> <a href="#accordion35" data-toggle="collapse" data-parent="#accordion2">
                                        <span class="open-sub"></span> CAERe   </a> </div>
                                <div class="panel-collapse collapse" id="accordion35">
                                    <div class="panel-content pb-50">
                                        <h6>Crystal induced Arthritis Egyptian Registry</h6>
                                        <ul>
                                            <li>
                                                Identifying prognostic factors of damage and disability
                                            </li>
                                            <li>
                                                Evaluating the efficacy and safety of drugs in clinical practice
                                            </li>
                                            <li>
                                                Evaluating adherence to the recommendations on the clinical validating the application of the prospective criteria ACR/EULAR for gout diagnosis
                                            </li>
                                            <li>
                                                Validate & Develop a disease activity score in gout and validate diagnostic tools for CPP arthritis
                                            </li>
                                        </ul>
                                        <a class="btn btn-lg btn-dark btn-theme-colored float-right" href="#"> Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>


        <!-- Section: statisitics -->
        <section class="divider parallax layer-overlay text-center" data-bg-img="images/slider/slider-4.jpg">
            <div class="container pt-120 pb-120">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- <h1>JQUERY NUMBER ANIMATION</h1>
              <h3>jQuery counter to count up to a target number</h3> -->

                        <div class="counter-wrapper">
                            <div id="counter" class="counter col_third icon-box iconbox-theme-colored">
                                <a class="icon icon-gray icon-bordered icon-circled icon-border-effect effect-circled" href="#">
                                    <i class="fa fa-user-md"></i>
                                </a>
                                <h5 class="timer count-title count-number counter-value varela-font"  data-count="120">0</h5>
                                <p class="count-text">signed up doctor</p>
                            </div>

                            <div class="counter col_third icon-box iconbox-theme-colored">
                                <a class="icon icon-gray icon-bordered icon-circled icon-border-effect effect-circled" href="#">
                                    <i class="fa fa-heartbeat"></i>
                                </a>
                                <h5 class="timer count-title count-number counter-value varela-font"  data-count="5000">0</h5>
                                <p class="count-text">Patient case</p>
                            </div>

                            <div class="counter col_third end icon-box iconbox-theme-colored">
                                <a class="icon icon-gray icon-bordered icon-circled icon-border-effect effect-circled" href="#">
                                    <i class="fa fa-user"></i>
                                </a>
                                <h5 class="timer count-title count-number counter-value varela-font"  data-count="500">0</h5>
                                <p class="count-text">visitors</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Time Plan -->
        <section id="time_plan" class="pt-50">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h5 class="text-uppercase mt-0">Project Timeline</h5>
                        <div class="title-icon">
                            <img class="mb-10" src="images/title-icon.png" alt="">
                        </div>
                        <p>Project Timeline 2018/19 to 2024<br> </p>
                    </div>
                </div>
            </div>
            <div id="cd-timeline" class="cd-container pt-50">

                <div class="cd-timeline-block">
                    <div class="cd-timeline-img bg-theme-colored">
                        <img src="images/flat-color-icons-svg/calendar-01.svg" alt="time plan">
                    </div> <!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                        <h5>AROM projects Launched</h5>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>--}}
                        {{--<a href="#0" class="cd-read-more">Read more</a>--}}
                        <span class="cd-date">2018</span>
                    </div> <!-- cd-timeline-content -->
                </div> <!-- cd-timeline-block -->

                <div class="cd-timeline-block">
                    <div class="cd-timeline-img bg-theme-colored">
                        <img src="images/flat-color-icons-svg/calendar-01.svg" alt="time plan">
                    </div> <!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                        <h5>Design and protocol</h5>
                        <h5>Recruitment Centers</h5>
                        <h5>Recruitment Doctors</h5>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>--}}
                        {{--<a href="#0" class="cd-read-more">Read more</a>--}}
                        <span class="cd-date">2019/2020</span>
                    </div> <!-- cd-timeline-content -->
                </div> <!-- cd-timeline-block -->

                <div class="cd-timeline-block">
                    <div class="cd-timeline-img bg-theme-colored">
                        <img src="images/flat-color-icons-svg/calendar-01.svg" alt="Time plan">
                    </div> <!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                        <h5>Follow up</h5>
                        <h5>Monitoring</h5>
                        <h5>Data analysis</h5>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>--}}
                        {{--<a href="#0" class="cd-read-more">Read more</a>--}}
                        <span class="cd-date">2021/2022</span>
                    </div> <!-- cd-timeline-content -->
                </div> <!-- cd-timeline-block -->

                <div class="cd-timeline-block">
                    <div class="cd-timeline-img bg-theme-colored">
                        <img src="images/flat-color-icons-svg/calendar-01.svg" alt="Time plan">
                    </div> <!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                        <h5>Publication</h5>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>--}}
                        {{--<a href="#0" class="cd-read-more">Read more</a>--}}
                        <span class="cd-date">2023/2024</span>
                    </div> <!-- cd-timeline-content -->
                </div> <!-- cd-timeline-block -->

            </div>
        </section>

        <!-- Section: Team -->
        <section id="team" class="divider parallax layer-overlay text-center" data-bg-img="images/slider/slider-4.jpg">
            <div class="container pb-80">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0" style="color:white">Our Team</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon.png" alt="">
                            </div>
                            <p style="color:#EEE">People behind the scene<br> </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        <div class="col-md-12">
                            <div class="team-carousel-4col">
                                <div class="item">
                                    <div class="team border-1px sm-text-center maxwidth400">
                                        <div class="thumb"><img class="img-fullwidth" src="images/dr-hesham.jpg" alt=""></div>
                                        <div class="content p-15 bg-white-light w-100">
                                            <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="{{url('doctor-details')}}">Prof. Hesham Hamoud</a></h4>
                                            <h6 class="title mt-0">Innovator of the Project</h6>
                                            {{--<p class="mb-30">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>--}}
                                            <ul class="social-icons icon-dark icon-theme-colored icon-sm pull-left flip">
                                                <li><a target="_blank" href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" href="https://aboutme.google.com"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                            <a class="btn btn-theme-colored btn-sm pull-right flip" href="{{url('doctor-details')}}">view details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team border-1px sm-text-center maxwidth400">
                                        <div class="thumb"><img class="img-fullwidth" src="images/dr-bahaa.jpg" alt=""></div>
                                        <div class="content p-15 bg-white-light w-100">
                                            <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="{{url('doctor-details')}}">Prof. Bahaa Kornah</a></h4>
                                            <h6 class="title mt-0">AROM President</h6>
                                            {{--<p class="mb-30">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>--}}
                                            <ul class="social-icons icon-dark icon-theme-colored icon-sm pull-left flip">
                                                <li><a target="_blank" href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" href="https://aboutme.google.com"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                            <a class="btn btn-theme-colored btn-sm pull-right flip" href="{{url('doctor-details')}}">view details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team border-1px sm-text-center maxwidth400">
                                        <div class="thumb"><img class="img-fullwidth" src="images/dr-ahmed.jpg" alt=""></div>
                                        <div class="content p-15 bg-white-light w-100">
                                            <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="{{url('doctor-details')}}">Dr. Ahmed Roshdy</a></h4>
                                            <h6 class="title mt-0">Team Member</h6>
                                            {{--<p class="mb-30">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>--}}
                                            <ul class="social-icons icon-dark icon-theme-colored icon-sm pull-left flip">
                                                <li><a target="_blank" href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" href="https://aboutme.google.com"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                            <a class="btn btn-theme-colored btn-sm pull-right flip" href="{{url('doctor-details')}}">view details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team border-1px sm-text-center maxwidth400">
                                        <div class="thumb"><img class="img-fullwidth" src="images/dr-risha.jpg" alt=""></div>
                                        <div class="content p-15 bg-white-light w-100">
                                            <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="{{url('doctor-details')}}">Dr. Mahmoud Risha </a></h4>
                                            <h6 class="title mt-0">Team Member</h6>
                                            {{--<p class="mb-30">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>--}}
                                            <ul class="social-icons icon-dark icon-theme-colored icon-sm pull-left flip">
                                                <li><a target="_blank" href="https://www.facebook.com/mahmoud.risha"><i class="fa fa-facebook"></i></a></li>
                                                {{--<li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li><a target="_blank" href="https://aboutme.google.com"><i class="fa fa-google-plus"></i></a></li>--}}
                                            </ul>
                                            <a class="btn btn-theme-colored btn-sm pull-right flip" href="{{url('doctor-details')}}">view details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team border-1px sm-text-center maxwidth400">
                                        <div class="thumb"><img class="img-fullwidth" src="images/dr-hanafy.jpg" alt=""></div>
                                        <div class="content p-15 bg-white-light w-100">
                                            <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="{{url('doctor-details')}}">Dr. Mohamed Hanafy</a></h4>
                                            <h6 class="title mt-0">Team Member</h6>
                                            {{--<p class="mb-30">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>--}}
                                            <ul class="social-icons icon-dark icon-theme-colored icon-sm pull-left flip">
                                                <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100000219712366"><i class="fa fa-facebook"></i></a></li>
                                                {{--<li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>--}}
                                                <li><a target="_blank" href="https://aboutme.google.com"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                            <a class="btn btn-theme-colored btn-sm pull-right flip" href="{{url('doctor-details')}}">view details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--





        asamy el sharekat

        1- Amgen
        2- Pfizer
        3- Novartis
        -->


        <!-- Section: sponsers -->
        <section id="sponsers">
            <div class="container pb-200">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0">sponsors</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon.png" alt="">
                            </div>
                            <p>The AROM Egypt Registry thanks the following founding sponsors of the AROM registry</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row multi-row-clearfix">

                        <div class="owl-carousel-3col">
                            <div class="item"><img src="images/amgen.png" alt="Amgen"  > </div>
                            <div class="item"><img src="images/novartis.png" alt="Novartis" > </div>
                            <div class="item"><img src="images/pfizer.png" alt="Pfizer" > </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!-- Section: News -->
        {{--<section id="news">--}}
            {{--<div class="container pb-110">--}}
                {{--<div class="section-title text-center">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-8 col-md-offset-2">--}}
                            {{--<h2 class="text-uppercase mt-0">News</h2>--}}
                            {{--<div class="title-icon">--}}
                                {{--<img class="mb-10" src="images/title-icon.png" alt="">--}}
                            {{--</div>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="section-content">--}}
                    {{--<div class="row multi-row-clearfix">--}}
                        {{--<div class="blog-posts">--}}
                            {{--<div class="col-xs-12 col-sm-12 col-md-6 wow fadeInLeft animation-delay1">--}}
                                {{--<article class="post style1 clearfix maxwidth500">--}}
                                    {{--<div class="col-md-4 p-0">--}}
                                        {{--<div class="entry-header">--}}
                                            {{--<div class="post-thumb">--}}
                                                {{--<img src="images/news-1.jpg" alt="" class="img-responsive img-fullwidth">--}}
                                            {{--</div>--}}
                                            {{--<div class="entry-date entry-date-absolute">--}}
                                                {{--25 <span>Dec</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-8 p-0">--}}
                                        {{--<div class="entry-content pl-50 p-20 pt-30 pr-20">--}}
                                            {{--<h5 class="entry-title pt-0"><a href="#">Different types of stroke</a></h5>--}}
                                            {{--<p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>--}}
                                            {{--<div class="entry-meta pull-left flip mt-10">--}}
                                                {{--<ul class="list-inline">--}}
                                                    {{--<li><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>--}}
                                                    {{--<li><i class="fa fa-comments-o mr-5"></i> 43</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                            {{--<a class="text-theme-colored mt-10 mb-0 pull-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animation-delay1">--}}
                                {{--<article class="post style1 clearfix maxwidth500">--}}
                                    {{--<div class="col-md-4 p-0">--}}
                                        {{--<div class="entry-header">--}}
                                            {{--<div class="post-thumb">--}}
                                                {{--<img src="images/news-2.jpg" alt="" class="img-responsive img-fullwidth">--}}
                                            {{--</div>--}}
                                            {{--<div class="entry-date entry-date-absolute">--}}
                                                {{--25 <span>Dec</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-8 p-0">--}}
                                        {{--<div class="entry-content pl-50 p-20 pt-30 pr-20">--}}
                                            {{--<h5 class="entry-title pt-0"><a href="#">Different types of stroke</a></h5>--}}
                                            {{--<p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>--}}
                                            {{--<div class="entry-meta pull-left flip mt-10">--}}
                                                {{--<ul class="list-inline">--}}
                                                    {{--<li><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>--}}
                                                    {{--<li><i class="fa fa-comments-o mr-5"></i> 43</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                            {{--<a class="text-theme-colored mt-10 mb-0 pull-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animation-delay1">--}}
                                {{--<article class="post style1 clearfix maxwidth500">--}}
                                    {{--<div class="col-md-4 p-0">--}}
                                        {{--<div class="entry-header">--}}
                                            {{--<div class="post-thumb">--}}
                                                {{--<img src="images/news-3.jpg" alt="" class="img-responsive img-fullwidth">--}}
                                            {{--</div>--}}
                                            {{--<div class="entry-date entry-date-absolute">--}}
                                                {{--25 <span>Dec</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-8 p-0">--}}
                                        {{--<div class="entry-content pl-50 p-20 pt-30 pr-20">--}}
                                            {{--<h5 class="entry-title pt-0"><a href="#">Different types of stroke</a></h5>--}}
                                            {{--<p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>--}}
                                            {{--<div class="entry-meta pull-left flip mt-10">--}}
                                                {{--<ul class="list-inline">--}}
                                                    {{--<li><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>--}}
                                                    {{--<li><i class="fa fa-comments-o mr-5"></i> 43</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                            {{--<a class="text-theme-colored mt-10 mb-0 pull-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-12 col-md-6 wow fadeInLeft animation-delay1">--}}
                                {{--<article class="post style1 clearfix maxwidth500">--}}
                                    {{--<div class="col-md-4 p-0">--}}
                                        {{--<div class="entry-header">--}}
                                            {{--<div class="post-thumb">--}}
                                                {{--<img src="images/news-4.jpg" alt="" class="img-responsive img-fullwidth">--}}
                                            {{--</div>--}}
                                            {{--<div class="entry-date entry-date-absolute">--}}
                                                {{--25 <span>Dec</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-8 p-0">--}}
                                        {{--<div class="entry-content pl-50 p-20 pt-30 pr-20">--}}
                                            {{--<h5 class="entry-title pt-0"><a href="#">Different types of stroke</a></h5>--}}
                                            {{--<p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>--}}
                                            {{--<div class="entry-meta pull-left flip mt-10">--}}
                                                {{--<ul class="list-inline">--}}
                                                    {{--<li><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>--}}
                                                    {{--<li><i class="fa fa-comments-o mr-5"></i> 43</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                            {{--<a class="text-theme-colored mt-10 mb-0 pull-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}


    </div>
    <!-- end main-content -->
@endsection




@section('script')
    <!-- Footer Scripts -->

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
          (Load Extensions only on Local File Systems !
           The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{url('js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>



@endsection