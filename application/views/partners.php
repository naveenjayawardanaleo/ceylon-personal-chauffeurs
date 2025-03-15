<?php include('include/header.php') ?>
<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="breacumb-content">
                    <div class="breadcum-title">
                        <h4>Our Vehicles</h4>
                    </div>
                    <ul>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>/</li>
                        <li>Our Vehicles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<div class="blog-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <?php foreach ($partners as $paaa) : ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog-box inner">
                                <div class="single-blog-thumb">
                                    <img src="<?= UP ?><?= $paaa->Image ?>" class="w-100" />
                                </div>
                                <div class="blog-content">
                                    
                                    <a href="blog-details.html"><?= $paaa->PartnerTitle ?></a>
                                    <p><?= $paaa->ShortDescription ?></p>
                                </div>
                                <div class="blog-button">
                                    <a href="<?= base_url() ?>Contact-Us">Make a Inquiry<span><i class="bi bi-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>

        </div>

    </div>
</div>


<?php include('include/footer.php') ?>