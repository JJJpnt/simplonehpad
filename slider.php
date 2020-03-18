<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Classic - Slider Revolution</title>
    <meta name="description" content="Slider Revolution Example" />
    <meta name="keywords" content="fullscreen image, grid layout, flexbox grid, transition" />
    <meta name="author" content="ThemePunch" />

    
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="assets/rev/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.video.min.js"></script>
</head>

<body>

    <div class="rev_slider_wrapper fullwidthbanner-container">

        <!-- the ID here will be used in the JavaScript below to initialize the slider -->
        <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">

            <ul>
                <!-- *********************** -->
                <!-- Slides to be added here -->
                <!-- *********************** -->

                <!-- MINIMUM SLIDE STRUCTURE -->
                <li data-transition="fade">
             
                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                    <img src="assets/img/01.jpg" alt="Slide01" class="rev-slidebg">

                    <!-- BEGIN TEXT LAYER -->
                    <div class="tp-caption tp-topslider"
 
                    
                        data-frames='[{"delay": 500, "speed": 300, "from": "opacity: 0", "to": "opacity: 1"},
                                    {"delay": "wait", "speed": 300, "to": "opacity: 0"}]'

                        data-fontsize="['4']"
                        data-lineheight="['24']"
                        data-color="['#FFF']"
                        data-textAlign="['center']"

                        data-x="center"
                        data-y="center"
                        data-hoffset="0"
                        data-voffset="-100"
                        data-width="['auto']"
                        data-height="['auto']"
                        data-whitespace="['normal']"

                        style="
                        width: 80vh;
                        height: 25%;
                        /* background-color: rgba(21, 61, 124, 0.5);  */
                        border-radius: 1em; 
                        color: white;
                        "><p>That other text? Sadly, it’s no longer a 10. Lorem Ipsum is unattractive, both inside and out. I fully understand why it’s former users left it for something else. They made a good decision. Lorem Ipsum is FAKE TEXT!That other text? Sadly, it’s no longer a 10. Lorem Ipsum is unattractive, both inside and out. I fully understand why it’s former users left it for something else. They made a good decision. Lorem Ipsum is FAKE TEXT!</p></div>
                    <!-- END TEXT LAYER -->
                </li>
             
                <!-- MINIMUM SLIDE STRUCTURE -->
                <li data-transition="fade">
             
                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                    <img src="assets/img/02.jpg" alt="Slide02" class="rev-slidebg">
             
                </li>                

            </ul>

        </div>

    </div>



        <!-- Slider's main "init" script -->
        <script type="text/javascript">
 
            /* https://learn.jquery.com/using-jquery-core/document-ready/ */
            jQuery(document).ready(function() {
 
                /* initialize the slider based on the Slider's ID attribute from the wrapper above */
                jQuery('#rev_slider_1').show().revolution({
 
                    /* options are 'auto', 'fullwidth' or 'fullscreen' */
                    sliderLayout: 'auto',
 
                    /* basic navigation arrows and bullets */
                    navigation: {
 
                        arrows: {
                            enable: true,
                            style: "hesperiden",
                            hide_onleave: false
                        },
 
                        bullets: {
                            enable: true,
                            style: "hesperiden",
                            hide_onleave: false,
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 20,
                            space: 5
 
                        }
                    }
                });
            });
 
        </script>

    <script type="text/javascript">
        // var tpj = jQuery;

        // var revapi1078;
        // tpj(document).ready(function () {
        //     if (tpj("#rev_slider_1078_1").revolution == undefined) {
        //         revslider_showDoubleJqueryError("#rev_slider_1078_1");
        //     } else {
        //         revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
        //             sliderType: "standard",
        //             jsFileLocation: "revolution/js/",
        //             sliderLayout: "auto",
        //             dottedOverlay: "none",
        //             delay: 9000,
        //             navigation: {
        //                 keyboardNavigation: "off",
        //                 keyboard_direction: "horizontal",
        //                 mouseScrollNavigation: "off",
        //                 mouseScrollReverse: "default",
        //                 onHoverStop: "off",
        //                 touch: {
        //                     touchenabled: "on",
        //                     swipe_threshold: 75,
        //                     swipe_min_touches: 1,
        //                     swipe_direction: "horizontal",
        //                     drag_block_vertical: false
        //                 },
        //                 arrows: {
        //                     style: "zeus",
        //                     enable: true,
        //                     hide_onmobile: true,
        //                     hide_under: 600,
        //                     hide_onleave: true,
        //                     hide_delay: 200,
        //                     hide_delay_mobile: 1200,
        //                     tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
        //                     left: {
        //                         h_align: "left",
        //                         v_align: "center",
        //                         h_offset: 30,
        //                         v_offset: 0
        //                     },
        //                     right: {
        //                         h_align: "right",
        //                         v_align: "center",
        //                         h_offset: 30,
        //                         v_offset: 0
        //                     }
        //                 },
        //                 bullets: {
        //                     enable: true,
        //                     hide_onmobile: true,
        //                     hide_under: 600,
        //                     style: "metis",
        //                     hide_onleave: true,
        //                     hide_delay: 200,
        //                     hide_delay_mobile: 1200,
        //                     direction: "horizontal",
        //                     h_align: "center",
        //                     v_align: "bottom",
        //                     h_offset: 0,
        //                     v_offset: 30,
        //                     space: 5,
        //                     tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
        //                 }
        //             },
        //             viewPort: {
        //                 enable: true,
        //                 outof: "pause",
        //                 visible_area: "80%",
        //                 presize: false
        //             },
        //             responsiveLevels: [1240, 1024, 778, 480],
        //             visibilityLevels: [1240, 1024, 778, 480],
        //             gridwidth: [1240, 1024, 778, 480],
        //             gridheight: [600, 600, 500, 400],
        //             lazyType: "none",
        //             parallax: {
        //                 type: "mouse",
        //                 origo: "slidercenter",
        //                 speed: 2000,
        //                 levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55],
        //                 type: "mouse",
        //             },
        //             shadow: 0,
        //             spinner: "off",
        //             stopLoop: "off",
        //             stopAfterLoops: -1,
        //             stopAtSlide: -1,
        //             shuffle: "off",
        //             autoHeight: "off",
        //             hideThumbsOnMobile: "off",
        //             hideSliderAtLimit: 0,
        //             hideCaptionAtLimit: 0,
        //             hideAllCaptionAtLilmit: 0,
        //             debugMode: false,
        //             fallbacks: {
        //                 simplifyAll: "off",
        //                 nextSlideOnWindowFocus: "off",
        //                 disableFocusListener: false,
        //             }
        //         });
        //     }
        // }); /*ready*/
    </script>


    </article>
    </section>

    <div class="clearfix"></div>


    <script type="text/javascript" src="assets/rev/assets/warning.js"></script>
