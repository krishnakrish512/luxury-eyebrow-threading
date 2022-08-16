<section id="section-testimonials" class="section parallax mb-0 page-section dark"
         style="background-image: url('<?php the_sub_field('image_url'); ?>'); padding: 140px 0; background-size: cover"
         data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading-block border-bottom-0">
                    <h3><?php the_sub_field('title'); ?></h3>
                </div>

                <div class="fslider restaurant-reviews mb-3" data-arrows="false" data-animation="slide">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <?php while (have_rows('testimonial_repeater')):
                                the_row()
                                ?>
                                <div class="slide">
                                    <p class="lead"><?php the_sub_field('testimonial'); ?></p>
                                    <span class="font-primary"><strong><?php the_sub_field('author_name'); ?></strong>, <?php the_sub_field('author_title'); ?></span><br>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <a href="<?php the_sub_field('link'); ?>"
                   class="button button-round" target="_blank"><?php the_sub_field('button_name'); ?></a>
            </div>
        </div>
    </div>
</section>
