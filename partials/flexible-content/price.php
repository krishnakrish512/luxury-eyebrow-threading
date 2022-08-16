<div id="section-price" class="section m-0 page-section bg-transparent">
    <div class="container clearfix">

        <div class="heading-block center bottommargin-lg">
            <h3 class="cookie-font text-capitalize color"><?php the_sub_field('title'); ?></h3>
            <span><?php the_sub_field('description'); ?></span>
        </div>

        <div class="tabs tabs-responsive clearfix" id="tab-1" data-accordion-style="accordion accordion-bg">

            <ul class="tab-nav center tab-nav2 bottommargin clearfix justify-content-center">
                <?php $count = 1 ?>
                <?php while (have_rows('tab_repeater')):
                    the_row();
                    ?>
                    <li><a href="#tabs-<?php echo $count ?>"><?php the_sub_field('title'); ?></a></li>
                    <?php $count++;endwhile;
                ?>
            </ul>
            <div class="row">
                <div class="tab-container col-lg-8 offset-lg-2">
                    <?php $count = 1 ?>
                    <?php while (have_rows('tabs_repeater')):
                        the_row();
                        ?>
                        <div class="tab-content clearfix" id="tabs-<?php echo $count ?>">
                            <div class="row">
                                <?php while (have_rows('tab_content_repeater')):
                                    the_row()
                                    ?>
                                    <div class="col-lg-6 service-wrap">
                                        <div class="service-header">
                                            <div class="service-name">
                                                <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
                                            </div>
                                            <div class="service-dots">
                                                <span class="separator-dots"></span>
                                            </div>
                                            <div class="service-price color"><?php the_sub_field('price'); ?></div>
                                        </div>

                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <?php $count++;endwhile; ?>
                </div>
            </div>
            

        </div>
        <div class="center"><img class="img-responsive" src="<?php the_sub_field('image_url'); ?>" alt="Image"></div>
    </div>
</div>
