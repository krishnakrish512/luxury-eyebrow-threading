<!-- Content
    ============================================= -->
<section id="content">
    <div class="content-wrap pt-0">

        <div id="section-about" class="section page-section m-0">

            <div class="container clearfix">

                <div class="row">
                    <div class="col-lg-7">
                        <div class="heading-block border-bottom-0 bottommargin-sm d-none">
                            <h3 class="color"><?php the_sub_field('title'); ?></h3>
                        </div>
                        <p class="lead mb-6"><?php the_sub_field('description'); ?></p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 pr-3">
                                <div class="opening-time">
                                    <h5 class="h5 mb-3">Opening Time</h5>
                                    <ul class="list-unstyled iconlist ml-0">
                                        <li class="mb-1"><?php the_sub_field('working_days'); ?> :<?php the_sub_field('office_time'); ?></li>
                                        <li class="mb-1"><?php the_sub_field('holidays'); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 pl-md-4 border-left appointment-block">
                                <h5 class="h5 mb-3">Appointment</h5>
                                <p class="mb-2">Book your appointment today.</p>
                                <a href="tel:<?php the_sub_field('call_number'); ?>" class="button button-theme button-round d-block text-center">Call us<?php the_sub_field('call_number'); ?></a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-5">
                        <img class=" mx-auto img-fluid" src="<?php the_sub_field('image_url'); ?>"
                             alt="Image">
                    </div>

                </div>
                <div class="row d-none">
                    <?php while (have_rows('about_repeater')):
                        the_row()
                        ?>
                        <div class="col-lg-4 bottommargin">
                            <div class="feature-box fbox-plain" data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <a href="<?php the_sub_field('link'); ?>"><i
                                                class="<?php the_sub_field('icons'); ?>"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>

	