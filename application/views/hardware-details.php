<?php include('include/header.php') ?><div class="inner-pages-bnr">    <img src="<?= base_url() ?>assets/html/images/hardwera-banner.jpg" class="img-responsive" alt="">    <div class="banner-caption">        <h1><?= $record->HardwareTitle ?></h1>        <ul class="breadcumb">            <li><a href="#">Home</a> - </li>            <li><?= $record->HardwareTitle ?></li>        </ul>    </div></div><section class="pad100-top-bottom">    <div class="container">        <div class="row">            <div class="col-md-8 right-coloumn">                <div class="wdt-100 marbtm50">                    <div class="row">                        <div class="col-md-6">                            <div id="slider" class="owl-carousel product-slider">                                <div class="item">                                    <img src="<?= UP . $record->Image ?>" />                                </div>                                <?php $MoreImage = json_decode($record->MoreImage); ?>                                <?php foreach ($MoreImage as $k => $img) : ?>                                    <div class="item">                                        <img src="<?= UP . $img ?>" />                                    </div>                                <?php endforeach; ?>                            </div>                            <div id="thumb" class="owl-carousel product-thumb">                                <div class="item">                                    <img src="<?= UP . $record->Image ?>" />                                </div>                                <?php $MoreImage = json_decode($record->MoreImage); ?>                                <?php foreach ($MoreImage as $k => $img) : ?>                                    <div class="item">                                        <img src="<?= UP . $img ?>" />                                    </div>                                <?php endforeach; ?>                            </div>                        </div>                        <div class="col-md-6">                            <div class="product-desc">                                <h2><?= $record->HardwareTitle ?></h2>                                <p class="fnt-17"><?= $record->ShortDescription ?></p>                            </div>                        </div>                    </div>                </div>                <div class="wdt-100 marbtm50">                    <h4 class="fnt20">Product Description</h4>                    <p><?= $record->Description ?></p>                </div>            </div>            <!--=========Shop Left Start============-->            <div class="col-md-4 left-column left-right">                <div class="wdt-100 ">                    <h4>Top Rated Products</h4>                    <?php foreach ($recent as $row) : ?>                        <div class="post-list">                            <span class="post-img">                                <img src="<?= UP . $row->Image ?>" class="img-responsive" alt="post-image">                            </span>                            <div class="post-txt">                                <h5><?= $row->HardwareTitle ?></h5>                                <a class="read-more" href="<?= base_url('Hardware-Details/') . url_title($row->HardwareTitle) . '/' . $row->HardwareId ?>">Read More</a>                            </div>                        </div>                    <?php endforeach; ?>                </div>            </div>            <!--=========Shop Left end============-->            <!--=========Shop Right Start============-->            <!--=========Shop Right end============-->        </div>    </div></section><section class="history-section">    <div class="container">        <div class="row">            <div class="col-md-12 text-center">                <h2><span>Downloads</span></h2>            </div>            <?php foreach ($document as $row) : ?>                <div class="col-md-12">                    <div class="shop-column custom-column">                        <div class="single-service">                            <div class="img">                                <img src="<?= DOC . $row->Image ?>" class="img-responsive" alt="product-image">                            </div>                            <div class="content">                                <h5><?= $row->DocTitle ?></h5>                                <div class="order-more">                                    <a class="header-requestbtn" target="_blank" href="<?= DOC . $row->Document ?>"> View</a>                                    <a class="header-requestbtn" href="<?= DOC . $row->Document ?>" dowload=""> Download</a>                                </div>                            </div>                        </div>                    </div>                </div>            <?php endforeach; ?>        </div>    </div></section><?php include('include/footer.php') ?>