<?php include('include/header.php') ?>

<style>
    .blog-details-area ul li{
        list-style-type: disc;
        margin-left: 20px;
    }
</style>
<div class="breadcumb-area d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="breacumb-content">
                    <div class="breadcum-title">
                        <h4><?= $record->ProjectTitle ?></h4>
                    </div>
                    <ul>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>/</li>
                        <li><?= $record->ProjectTitle ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-details-thumb">
                            <img src="<?= UP ?><?= $record->Image ?>" class="w-100" alt="">
                        </div>
                        <div class="blog-details-content">
                            <div class="meta-blog" data-cue="zoomIn">
                                <ul>
                                    <li><?= $record->days ?> Days</li>
                                    <li>/</li>
                                    <li><?= $record->nights ?> night</li>


                                </ul>
                            </div>
                            <div class="blog-details-title" data-cue="zoomIn">
                                <a href="#"><?= $record->ProjectTitle ?></a>
                            </div>
                            <div class="blog-details-desc" data-cue="zoomIn">
                                <?= $record->Description ?>
                            </div>




                            <div class="row">
                                <?php $MoreImage = json_decode($record->MoreImage); ?>
                                <?php foreach ($MoreImage as $k => $img) : ?>
                                    <div class="col-md-6">
                                        <div class="blog-details-thumb-2" data-cue="zoomIn">
                                            <img src="<?= UP . $img ?>" class="w-100" alt="">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="widget-categories-box">
                            <!-- categories title -->
                            <div class="categories_title" data-cue="zoomIn">
                                <h4>Related Tours </h4>
                            </div>
                            <?php foreach ($recent as $rec) : ?>

                                <div class="sidber-widget-recent-post" data-cue="zoomIn">


                                    <div class="recent-widget-thumb">
                                        <img src="<?= UP ?><?= $rec->Image ?>" style="width: 75px;" alt="">
                                    </div>
                                    <div class="recent-widget-content">
                                        <a href="<?= base_url() ?>Blog-Details/<?= url_title($rec->ProjectTitle) ?>/<?= $rec->ProjectId ?>"><?= $rec->ProjectTitle ?></a>
                                        <br>
                                        <a href="<?= base_url() ?>Blog-Details/<?= url_title($rec->ProjectTitle) ?>/<?= $rec->ProjectId ?>">Read More</a>
                                    </div>


                                </div>
                            <?php endforeach ?>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('include/footer.php') ?>