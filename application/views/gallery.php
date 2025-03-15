<?php include('include/header.php') ?>
<style>
    .gallery-nav ul {

        display: flex;

        list-style: none;

        border-top: 2px solid #555555;

        border-bottom: 2px solid #555555;

        background-color: #c19d68;

        justify-content: space-evenly;

        color: white;

        margin: 0px;

    }



    .gallery-nav ul li {

        padding: 20px 20px;

    }



    .gallery-nav ul li:hover {

        background-color: white;

        color: black;

        cursor: pointer;

    }



    .gallery-active {

        background-color: white;

        color: black;

        cursor: pointer;

    }

    .hide {

        display: none;

    }
</style>

<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="breacumb-content">
                    <div class="breadcum-title">
                        <h4>Gallery</h4>
                    </div>
                    <ul>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>/</li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<section class="my-5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 pr-0 pl-0">



                <div class="gallery-nav">

                    <ul>

                        <li class="all" onclick="gallery('all')" value="all">All</li>

                        <?php foreach ($records as $k => $roo) : ?>

                            <li class="all" onclick="gallery(<?= $roo->GalleryId ?>)" value="all"><?= $roo->GalleryTitle ?></li>

                        <?php endforeach ?>





                    </ul>

                </div>

            </div>

        </div>



        <div id="allall" class="row All roooooo gallery_new ">

            <?php $tot = 0; ?>

            <?php foreach ($records as $k => $row) : ?>
                <?php $MoreImage = (array)json_decode($row->MoreImage); ?>

                <?php $ttt = 1 ?>

                <?php foreach ($MoreImage as $no => $ooo) : ?>

                    <?php if ($tot < 16) : ?>

                        <div class="col-md-3 pr-0 pl-0 mb-3">

                            <div class="item-gallery">

                                <a data-fancybox="gallery" href="<?= UP ?><?= $ooo ?>">

                                    <img src="<?= UP ?><?= $ooo ?>" class="gallery w-100">

                                </a>

                            </div>

                        </div>

                    <?php endif ?>


                    <?php $ttt = $ttt + 1; ?>

                <?php endforeach ?>

                <?php $tot = $tot + $ttt ?>

            <?php endforeach ?>


        </div>

        <?php foreach ($records as $k => $row) : ?>

            <?php $MoreImage = (array)json_decode($row->MoreImage); ?>



            <div style="display: none;" id="all<?= $row->GalleryId ?>" class="row roooooo Gampaha gallery_new ">

                <?php foreach ($MoreImage as $no => $ooo) : ?>

                    <div class="col-md-3 pr-0 pl-0">

                        <div class="item-gallery">

                            <a data-fancybox="gallery" href="<?= UP ?><?= $ooo ?>">

                                <img src="<?= UP ?><?= $ooo ?>" class="gallery w-100">

                            </a>

                        </div>

                    </div>

                <?php endforeach ?>

            </div>



        <?php endforeach ?>
    </div>
</section>


<?php include('include/footer.php') ?>

<script>
    $(document).ready(function() {



        $('body').addClass('archive post-type-archive post-type-archive-product theme-ippsum bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-shop woocommerce woocommerce-page woocommerce-js btHeadingStyle_default btHeadingWeight_bold btSupertitleWeight_bold btSubtitleWeight_normal btMenuWeight_normal btButtonWeight_bold btCurrentPage_dot btHasAltLogo btMenuRightEnabled btStickyEnabled btHideHeadline btLightSkin btBelowMenu noBodyPreloader btHardRoundedButtons btTransparentLightHeader  btSidebarRight btMenuRight btMenuHorizontal btRemovePreloader btMenuInitFinished');

    });

    function gallery(id) {

        $('.roooooo').css('display', 'none');

        $('#all' + id).css('display', 'flex');

    }
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
 <script>
     $('.test-popup-link').magnificPopup({
         items: {
             src: 'images/certificate/certificate-1.jpg'
         },
         type: 'image'
         // other options
     });
 </script>



