<div class="section my-0">
    <div class="container">
        <div class="heading-block center bottommargin-lg">
            <h3 class="cookie-font text-capitalize color">Gallery</h3>
            <span><?php the_sub_field('gallery_description'); ?></span>
        </div>
        <div class="gallery">
            <?php $images = get_sub_field('gallery') ?>
            <div class="masonry-thumbs grid-container grid-5 clearfix" data-lightbox="gallery" style="width: 100.3%;">
                <?php foreach ($images as $image): ?>
                    <a class="grid-item" href="<?= $image['url'] ?>"
                       data-lightbox="gallery-item"><img
                                src="<?= $image['url'] ?>" alt="Gallery Thumb 1"
                                data-animate="zoomIn"></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>
<section id="section-contact" class="section m-0 pb-0 bg-transparent page-section">
    <div class="container">
        <div class="row clearfix justify-content-between">
            <div class="col-md-6 ">
                <div class="heading-block border-bottom-0 bottommargin-sm d-none">
                    <h3 class="cookie-font text-capitalize color"><?php the_sub_field('title'); ?></h3>
                </div>

                <div class="widget map-widget mt-0">
                    <h3 class="widget-title">
                        <?php the_sub_field('title'); ?>
                    </h3>
                    <?php
                    $map_iframe = get_sub_field('iframe');
                    echo $map_iframe;
                    ?>
                </div>
            </div>
            <?php
            $contact = get_field('contact', 'option');
            ?><?php
            $social = get_field('social', 'option');
            ?>
            <div class="col-md-5">
                <div class="heading-block border-bottom-0 bottommargin-sm d-none">
                    <h3 class="cookie-font text-capitalize color">Address</h3>
                </div>
                <div class="widget clearfix mt-0">
                    <h3 class="widget-title">Address</h3>
                    <div>
                        <h5 class="mb-2">Address:</h5>
                        <address class="mb-0">
                            <div class="text-muted">
                                <p class="mb-0"><?= $contact['address'] ?></p>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="widget clearfix">
                    <div>
                        <h5 class="mb-2">Contact:</h5>
                        <address class="mb-0">
                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> <?= $contact['phone_number'] ?>
                            <br>
                            <abbr title="Fax"><strong>Website:</strong></abbr> <?= $contact['website_url'] ?><br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr> <?= $contact['email'] ?>
                        </address>
                    </div>
                </div>
                <div class="widget clearfix">
                    <div>

                        <a href="<?= $social['google_business_url'] ?>"
                           class="social-icon si-small si-colored si-google-business" target="_blank">
                            <i class="flaticon-google-shopping"></i>
                            <i class="flaticon-google-shopping"></i>
                        </a>

                        <a href="<?= $social['yelp_url'] ?>" class="social-icon si-small si-colored si-yelp"
                           target="_blank">
                            <i class="icon-yelp"></i>
                            <i class="icon-yelp"></i>
                        </a>

                        <a href="<?= $social['groupon_url'] ?>" class="social-icon si-small si-colored si-groupon"
                           target="_blank">
                            <i class="flaticon-groupon"></i>
                            <i class="flaticon-groupon"></i>
                        </a>

                        <a href="<?= $social['instagram_url'] ?>" class="social-icon si-small si-colored si-instagram"
                           target="_blank">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                        <a href="<?= $social['facebook_url'] ?>" class="social-icon si-small si-colored si-facebook"
                           target="_blank">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

</div>
</section><!-- #content end -->
