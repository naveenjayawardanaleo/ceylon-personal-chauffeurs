<?php include('include/header.php') ?>
<div class="inner-pages-bnr">
    <img src="<?= base_url() ?>assets/html/images/shop-banner.jpg" class="img-responsive" alt="">
    <div class="banner-caption">
        <h1><?= $record->QuartzTitle ?></h1>
        <ul class="breadcumb">
            <li><a href="#">Home</a> - </li>
            <li><?= $record->QuartzTitle ?></li>
        </ul>
    </div>
</div>
<!--=========Banner end============-->
<section class="pad100-top-bottom">
    <div class="container">
        <div class="row">
            <!--=========Blog Right Start============-->
            <div class="col-md-8">
                <div class="blog-list-cl ">
                    <div class="blog-img">
                        <span class="image_hover ">
                            <img src="<?= UP . $record->Image ?>" class="img-responsive zoom_img_effect" alt="blog-image">
                        </span>
                    </div>
                    <div class="blog-head">
                        <h6 class="wdt-100"><?= $record->QuartzTitle ?></h6>
                    </div>
                    <p><?= $record->Description ?></p>
                </div>
                <style>
                    .single-image {
                        margin: 0px 5px 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-3 single-image">
                        <a data-fancybox="gallery" data-src="<?= UP . $record->Image ?>">
                            <img src="<?= UP . $record->Image ?>" class="img-responsive zoom_img_effect" alt="cnc-image">
                        </a>
                    </div>
                    <?php $MoreImage = json_decode($record->MoreImage); ?>
                    <?php foreach ($MoreImage as $k => $img) : ?>
                        <div class="col-md-3 single-image">
                            <a data-fancybox="gallery" data-src="<?= UP . $img ?>">
                                <img src="<?= UP . $img ?>" class="img-responsive zoom_img_effect" alt="cnc-image">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!--=========Blog Left end============-->
            <!--=========Blog Left Start============-->
            <div class="col-md-4 left-column">
                <div class="wdt-100 marbtm50">
                    <h4>POPULAR POSTS</h4>
                    <?php foreach ($recent as $row) : ?>
                        <div class="post-list">
                            <span class="post-img">
                                <img src="<?= UP . $row->Image ?>" class="img-responsive" alt="post-image">
                            </span>
                            <div class="post-txt">
                                <h5><?= $row->QuartzTitle ?></h5>
                                <a class="read-more" href="<?= base_url('Quartz-Details/') . url_title($row->QuartzTitle) . '/' . $row->QuartzId ?>">Read More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!--=========Blog Left end============-->
        </div>
    </div>
</section>
<section class="history-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><span>Downloads</span></h2>
            </div>
            <?php foreach ($document as $row) : ?>
                <div class="col-md-12">
                    <div class="shop-column custom-column">
                        <div class="single-service">
                            <div class="img">
                                <img src="<?= DOC . $row->Image ?>" class="img-responsive" alt="product-image">
                            </div>
                            <div class="content">
                                <h5><?= $row->DocTitle ?></h5>
                                <div class="order-more">
                                    <a class="header-requestbtn" target="_blank" href="<?= DOC . $row->Document ?>"> View</a>
                                    <a class="header-requestbtn" href="<?= DOC . $row->Document ?>" dowload=""> Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php include('include/footer.php') ?>