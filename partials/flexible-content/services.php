<div class="section m-0 clearfix" style="background: #FFF;">

    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <div class="heading-block  bottommargin-lg">
                    <h3 class="color"><?php the_sub_field('title'); ?></h3>
                    <span><?php the_sub_field('description'); ?></span>
                </div>
            </div>

            <div class="row justify-content-center col-mb-50">
                <?php while (have_rows('service_repeater')):
                    the_row()
                    ?>
                    <div class="col-sm-6 col-md-4 text-center">
                        <div class="feature-box media-box">
                            <div class="fbox-media" style="padding: 0 40px;">
                                <a href="<?php the_sub_field('link'); ?>"><img class="rounded-circle img-thumbnail"
                                                                               src="<?php the_sub_field('image_url'); ?>"
                                                                               alt="Why choose Us?"></a>
                            </div>
                            <div class="fbox-content">
                                <h3><?php the_sub_field('title'); ?><span
                                            class="subtitle"><?php the_sub_field('sub_title'); ?></span>
                                </h3>
                                <p><?php the_sub_field('description'); ?></p>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <div class="video-wrap d-block d-lg-none d-xl-none">
        <div class="video-overlay" style="background: rgba(255,255,255,0.9);"></div>
    </div>
</div>

<!--<a href="--><?php //the_sub_field('link'); ?><!--" class="button button-full center">-->
    <div class=" clearfix button button-full center">
        <?php the_sub_field('discount'); ?>
    </div>
<!--</a>-->
