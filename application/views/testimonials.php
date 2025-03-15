<?php include 'include/header.php'; ?>

<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="breacumb-content">
                    <div class="breadcum-title">
                        <h4>Testimonials</h4>
                    </div>
                    <ul>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>/</li>
                        <li>Testimonials</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->


<!--==================================================-->
<div class="testimonial-area home-two">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title center home-two" data-cue="zoomIn">
                    <h4>Our Testimonials</h4>
                    <h1>Feedback from our Guests</h1>
                    <p class="section-desc-2 home-two">We greatly value and appreciate the feedback from our guests, <br> which continuously helps us improve and enhance our services.</p>
                </div>
            </div>
        </div>
        <div class="row" data-cue="zoomIn">
            <div class="testi-list owl-carousel">

                <?php foreach ($records as  $k => $roo) : ?>

                    <div class="col-lg-12">
                        <div class="single-testimonial-box-two">
                            <div class="testi-content-two">
                                <div class="testi-thumb-two">
                                    <img src="<?= UP ?><?= $roo->Image ?>" alt="">
                                </div>
                                <div class="testi-title">
                                    <h4><?= $roo->Name ?></h4>
                                    <p><?= $roo->Designation ?></p>
                                </div>
                            </div>
                            <div class="testi-decs-two">
                                <p><?= $roo->Description ?>”</p>
                            </div>
                            <div class="testi-author-rating">
                                <ul>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>