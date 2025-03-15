<?php include('include/header.php') ?>

<section class="breadcrum  bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-white">About us</h1>
                <nav class="d-flex">
                    <h6 class="mb-0 text-white text-decoration-none">
                        <a href="<?= base_url() ?>" class="text-white text-decoration-none">Home</a>
                        <span>/</span>
                        <a href="#" class="text-white text-decoration-none">About us</a>

                    </h6>
                </nav>
            </div>
        </div>
    </div>

</section>
<section class="story-section">
    <div class="container">
        <div class="row clearfix">
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <img src="<?= base_url() ?>media/image/<?= $pra->Image ?>" class="w-100" alt="" style="border-radius: 15px;">
            </div>
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="title-box">
                        <div class="rating">
                            <span class="star fa fa-star"></span>
                            <span class="star fa fa-star"></span>
                            <span class="star fa fa-star"></span>
                        </div>
                        <h3 class="main-text ">Sri Lanka Personal Chauffeurs</h3>
                    </div>
                    <div class="bold-text">Superior &amp; Luxury Vehicles - With Quality Services</div>
                    <div class="text">
                        <p><?= $pra->Description ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('include/footer.php') ?>