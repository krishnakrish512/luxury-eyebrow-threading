<!-- Slider
============================================= -->
<section id="slider" class="slider-element revslider-wrap min-vh-60 min-vh-md-100 include-header">
    <div class="slider-inner">

        <div id="rev_slider_10_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="fashion1"
             style="background-color:transparent;padding:0px;">

            <!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
            <div id="rev_slider_10_1" class="rev_slider" style="display:none;" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  --><?php $count = 36 ?>
                    <?php while (have_rows('silder_repeater')):
                        the_row()
                        ?>
                        <li data-index="rs-<?php echo $count ?>" class="dark"
                            data-transition="fadetoleftfadefromright"
                            data-fstransition="fade" data-slotamount="7" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="" data-rotate="0"
                            data-saveperformance="off" data-title="Enjoy Nature" data-description="">
                            <!-- MAIN IMAGE -->

                            <img src="<?php the_sub_field('image_url'); ?>" style='background-color:#ffffff' alt="Image"
                                 data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                 data-bgparallax="10" class="rev-slidebg" data-no-retina>

                            <div class="tp-caption tp-shape tp-shapewrapper rs-parallaxlevel-0"
                                 id="slide-36-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="normal"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-start="1000"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 style="z-index: 5; background: rgba(0,0,0,0.2)">
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption -  "
                                 id="slide-35-layer-1"
                                 data-x="['right','right','right','right']" data-hoffset="['40','40','40','40']"
                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','40','40','40']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-style_hover="cursor:pointer;"
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-mask_in="x:0px;y:0px;"
                                 data-mask_out="x:inherit;y:inherit;"
                                 data-start="500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400;padding:3px 8px 3px 8px;border-style:solid;border-width:1px;border-radius:30px 30px 30px 30px;">
                                <i class="icon-angle-down"></i>
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption Fashion-BigDisplay"
                                 id="slide-36-layer-5"
                                 data-x="['center','center','center','center']" data-hoffset="['255','231','211','62']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-30','-18','-48','-28']"
                                 data-fontsize="['80','50','50','56']"
                                 data-lineheight="['100','50','50','50']"
                                 data-width="['none','265','265','265']"
                                 data-height="['none','100','100','100']"
                                 data-whitespace="['nowrap','normal','normal','normal']"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 style="z-index: 9; white-space: nowrap;"><?php the_sub_field('title'); ?>
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption Fashion-TextBlock"
                                 id="slide-36-layer-6"
                                 data-x="['center','center','center','center']" data-hoffset="['189','219','200','39']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['120','130','80','110']"
                                 data-fontsize="['20','17','17','17']"
                                 data-lineheight="['40','30','30','30']"
                                 data-width="219"
                                 data-height="161"
                                 data-whitespace="normal"
                                 data-transform_idle="o:1;"

                                 data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 style="z-index: 10; min-width: 219px; max-width: 219px; max-width: 161px; max-width: 161px; white-space: normal;">
                                <i class="icon-line-check"></i><br>
                                <i class="icon-line-check"></i><br>
                                <i class="icon-line-check"></i><br>
                                <i class="icon-line-check"></i><br>
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption Fashion-SmallText"
                                 id="slide-36-layer-7"
                                 data-x="['center','center','center','center']" data-hoffset="['105','130','105','-39']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['-85','-85','-110','-95']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 style="z-index: 11; white-space: nowrap;"><?php the_sub_field('sub_title'); ?>
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption Fashion-TextBlock"
                                 id="slide-36-layer-8"
                                 data-x="['center','center','center','center']" data-hoffset="['224','254','230','80']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['120','130','79','110']"
                                 data-fontsize="['20','17','17','17']"
                                 data-lineheight="['40','30','30','30']"
                                 data-width="219"
                                 data-height="161"
                                 data-whitespace="normal"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 style="z-index: 12; min-width: 219px; max-width: 219px; max-width: 161px; max-width: 161px; white-space: normal; font-weight: 600;">
                                <?php the_sub_field('list'); ?>
                            </div>
                        </li>
                        <?php $count++; endwhile; ?>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->

    </div>
</section><!-- #content end -->
