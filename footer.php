<!-- Footer
		============================================= -->
<footer id="footer" class="border-0" style="background-color: #F5F5F5;">

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" class="bg-transparent">

        <div class="container clearfix">

            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7">
                    <div class="widget clearfix text-center text-md-left">
                        <p class="mb-0"><?php echo date('Y'); ?> All Rights Reserved by Luxury Eyebrow Threading.</p>
                    </div>
                </div>

                <div class="col-lg-6 text-right">
                    <div class="text-center float-md-right clearfix">
                        <p class="mb-0">
                            Website develop with ❤ by <a href="https://nirvanstudio.com/" target="_blank">Nirvan Studio</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    
    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<?php wp_footer(); ?>


<script>
    var tpj = jQuery;
    var revapi10;
    var $ = jQuery.noConflict();
    tpj(document).ready(function () {
        if (tpj("#rev_slider_10_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_10_1");
        } else {
            revapi10 = tpj("#rev_slider_10_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "include/rs-plugin/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "vertical",
                        drag_block_vertical: false
                    }
                    ,
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        style: "uranus",
                        hide_onleave: false,
                        direction: "vertical",
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0,
                        space: 8,
                        tmp: '<span class="tp-bullet-inner"></span>'
                    },
                    touch: {
                        touchenabled: "off",
                        swipe_treshold: 75,
                        swipe_min_touches: 1,
                        drag_block_vertical: false,
                        swipe_direction: "horizontal"
                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [1140, 1024, 778, 480],
                gridheight: [800, 700, 960, 720],
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                shuffle: "off",
                autoHeight: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
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
        }

        revapi10.on("revolution.slide.onloaded", function (e) {
            setTimeout(function () {
                SEMICOLON.slider.sliderDimensions();
            }, 200);
        });

        revapi10.on("revolution.slide.onchange", function (e, data) {
            SEMICOLON.slider.revolutionSliderMenu();
        });

    });	/*ready*/

</script>
<script>
    $('.primary-menu a[href^="#"]').click(function (event) {
            var id = $(this).attr("href");
            var target = $(id).offset().top - 100;
            $('html, body').animate({scrollTop: target}, 500);
            event.preventDefault();
        });
        $('.menu-container li:first-child').addClass('current-menu-item');
        $('.menu-container li a').on('click', function () {
            $(this).parent().addClass('current-menu-item');
            $(this).parent().siblings().removeClass('current-menu-item')
        });
</script>

</body>
</html>