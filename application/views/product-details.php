<?php include('include/header.php') ?>

 

<style>
#galleria {
      height: 500px;
    }
    .wrapper {

        /* max-width: 500px; */

        width: 100%;

    }


    .product-title {
        font-size: 35px !important;

    }

    .btArticleCategories a {
        color: inherit;
        width: 100%;
        white-space: nowrap;
    }

    div.product div.product-description {
        padding: 0em 0em 0 0em;
        margin-bottom: 1em;
    }

    .swiper-slide2 {
        background-size: cover;
        width: 100% !important;

        /* left: 38%; */
    }

    .woocommerce-product-gallery__trigger {
        display: none !important;
    }
   
</style>



<div class="btContentWrap btClear">

    <div class="btBlogHeaderContent">

        <section id="bt_bb_section626a05f44eac7" data-parallax="0.7" data-parallax-offset="0" class="bt_bb_section bt_bb_top_spacing_large bt_bb_bottom_spacing_large bt_bb_color_scheme_1 bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_parallax bt_bb_background_image bt_bb_background_overlay_dark_solid" style="background-image: url(<?= base_url() ?>assets/html/img/featured_image_blog.jpg);">

            <div class="bt_bb_port">

                <div class="bt_bb_cell">

                    <div class="bt_bb_cell_inner">

                        <div class="bt_bb_row_wrapper">

                            <div class="bt_bb_row bt_bb_column_gap_0 bt_bb_animation_no_animation animate animated" data-structure="6-6">

                                <div class="bt_bb_column col-xl-6 bt_bb_align_left bt_bb_vertical_align_middle bt_bb_padding_normal bt_bb_animation_fade_in animate animated" data-width="6" data-bt-override-class="{}">

                                    <div class="bt_bb_column_content">

                                        <div class="bt_bb_column_content_inner">

                                            <header class="bt_bb_headline bt_bb_dash_none bt_bb_size_large bt_bb_superheadline bt_bb_subheadline bt_bb_align_inherit">

                                                <h1>

                                                    <span class="bt_bb_headline_content"><span>Product Details</span></span>
                                                </h1>







                                            </header>

                                        </div>

                                    </div>

                                </div>

                                <div class="bt_bb_column col-xl-6 bt_bb_align_left bt_bb_vertical_align_top bt_bb_padding_normal" data-width="6" data-bt-override-class="{}">

                                    <div class="bt_bb_column_content">

                                        <div class="bt_bb_column_content_inner"></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

    <div class="btContentHolder">



        <div class="btContent">

            <article class="btPostSingleItemStandard btWooCommerce gutter">

                <div class="port">

                    <div class="btPostContentHolder">

                        <div class="woocommerce-notices-wrapper"></div>

                        <div id="product-149" class="product type-product post-149 status-publish first instock product_cat-bag product_cat-merch has-post-thumbnail shipping-taxable product-type-external">



                            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-3 images" data-columns="3" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;"><a href="#" class="woocommerce-product-gallery__trigger">




                                    <img draggable="false" role="img" class="emoji" alt="🔍" src="https://s.w.org/images/core/emoji/13.1.0/svg/1f50d.svg">






                                </a>

                                <div class="wrapper">

                                    
                                        <div id="galleria" class="galleria">

                                          </a href="<?= UP ?><?= $obj->Image ?>"><img src="<?= UP ?><?= $obj->Image ?>"> </a>
                                           <?php $MoreImage = (array)json_decode($obj->MoreImage); ?>
                            
                                                    <?php foreach ($MoreImage as $a => $ime) : ?>
                            
                                                    <a href="<?= UP ?><?= $ime ?>">
                            
                            
                                                    <img src="<?= UP ?><?= $ime ?>">
                            
                                            </a>
                                                                          
                            
                                        <?php endforeach ?>

                                </div>
                                </div>
                                </div>

                                      



                            



                            <div class="summary entry-summary">

                                <header class="bt_bb_headline bt_bb_dash_bottom bt_bb_size_normal bt_bb_superheadline">

                                    <div class="bt_bb_headline_superheadline_outside"><span class="bt_bb_headline_superheadline"><span><span class="btArticleCategories">
                                                    <!-- <a href="http://ippsum.bold-themes.com/pax/product-category/bag/" class="btArticleCategory bag">Bag</a> --><a href="<?= base_url() ?>Products/<?= url_title($obj->CategoryTitle) ?>/<?= $obj->CategoryId ?>" class="btArticleCategory merch"><?= $obj->CategoryTitle ?></a>
                                                </span></span></span></div>

                                    <h4 class="product-title"><?= $obj->ProductTitle ?></h4>

                                </header>

                                <!-- <p class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span></p> -->

                                <div class="woocommerce-product-details__short-description">

                                    <p class="text-justify"><?= $obj->ShortDescription ?></p>

                                </div>





                            </div>





                            <div class="product-description">

                                <div class="bt_bb_tabs bt_bb_style_simple bt_bb_shape_square">



                                    <ul class="bt_bb_tabs_header" style="display:none;">

                                        <li class="description_tab on">

                                            <span>Description</span>

                                        </li>

                                    </ul>

                                    <div class="bt_bb_tabs_tabs">

                                        <div class="bt_bb_tab_item on" id="tab-description">

                                            <div class="bt_bb_tab_content">



                                                <h2>Description</h2>



                                                <div class="bt_bb_wrapper text-justify">

                                                    <?= $obj->Description ?>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            <section class="related products">



                                <h2>Related products</h2>



                                <ul class="products columns-3">

                                    <?php foreach ($related as $k => $roow) : ?>

                                        <li class="product type-product post-149 status-publish first instock product_cat-bag product_cat-merch has-post-thumbnail shipping-taxable product-type-external">

                                            <div class="btWooShopLoopItemInner">

                                                <div class="bt_bb_image"><a href="<?= base_url() ?>Products-Details/<?= url_title($roow->ProductTitle) ?>/<?= $roow->ProductId ?>" target="_self" title="product_01"><img src="<?= UP ?><?= $roow->Image ?>"></a></div>

                                                <header class="bt_bb_headline bt_bb_dash_top bt_bb_size_small bt_bb_superheadline bt_bb_subheadline">

                                                    <div class="bt_bb_headline_superheadline_outside"><span class="bt_bb_headline_superheadline"><span><span class="btArticleCategories"><a href="<?= base_url() ?>Products/<?= url_title($roow->CategoryTitle) ?>/<?= $roow->CategoryId ?>" class="btArticleCategory bag"><?= $roow->CategoryTitle ?></a></span></span></span></div>

                                                    <h2><span class="bt_bb_headline_content"><span><a href="<?= base_url() ?>Products-Details/<?= url_title($roow->ProductTitle) ?>/<?= $roow->ProductId ?>" target="_self" title="Blue &amp; White Tote Bag"><?= $roow->ProductTitle ?></a></span></span></h2>

                                                    <div class="bt_bb_headline_subheadline"><span class="btNoStarRating"></span></div>

                                                </header>

                                                <!-- <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span></span> -->

                                                <a href="<?= base_url() ?>Products-Details/<?= url_title($roow->ProductTitle) ?>/<?= $roow->ProductId ?>" class="button product_type_external">View</a>

                                            </div>

                                        </li>

                                    <?php endforeach ?>



                                    <!-- <li class="product type-product post-149 status-publish first instock product_cat-bag product_cat-merch has-post-thumbnail shipping-taxable product-type-external">

                                        <div class="btWooShopLoopItemInner">

                                            <div class="bt_bb_image"><a href="#" target="_self" title="product_01"><img src="http://ippsum.bold-themes.com/pax/wp-content/uploads/sites/5/2018/09/product_01-300x300.jpg"></a></div>

                                            <header class="bt_bb_headline bt_bb_dash_top bt_bb_size_small bt_bb_superheadline bt_bb_subheadline">

                                                <div class="bt_bb_headline_superheadline_outside"><span class="bt_bb_headline_superheadline"><span><span class="btArticleCategories"><a href="#" class="btArticleCategory bag">Bag</a><a href="#" class="btArticleCategory merch">Merch</a></span></span></span></div>

                                                <h2><span class="bt_bb_headline_content"><span><a href="#" target="_self" title="Blue &amp; White Tote Bag">Blue &amp; White Tote Bag</a></span></span></h2>

                                                <div class="bt_bb_headline_subheadline"><span class="btNoStarRating"></span></div>

                                            </header>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span></span>

                                            <a href="#" class="button product_type_external">Buy on Amazon</a>

                                        </div>

                                    </li>

                                    <li class="product type-product post-149 status-publish first instock product_cat-bag product_cat-merch has-post-thumbnail shipping-taxable product-type-external">

                                        <div class="btWooShopLoopItemInner">

                                            <div class="bt_bb_image"><a href="#" target="_self" title="product_01"><img src="http://ippsum.bold-themes.com/pax/wp-content/uploads/sites/5/2018/09/product_01-300x300.jpg"></a></div>

                                            <header class="bt_bb_headline bt_bb_dash_top bt_bb_size_small bt_bb_superheadline bt_bb_subheadline">

                                                <div class="bt_bb_headline_superheadline_outside"><span class="bt_bb_headline_superheadline"><span><span class="btArticleCategories"><a href="#" class="btArticleCategory bag">Bag</a><a href="#" class="btArticleCategory merch">Merch</a></span></span></span></div>

                                                <h2><span class="bt_bb_headline_content"><span><a href="#" target="_self" title="Blue &amp; White Tote Bag">Blue &amp; White Tote Bag</a></span></span></h2>

                                                <div class="bt_bb_headline_subheadline"><span class="btNoStarRating"></span></div>

                                            </header>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span></span>

                                            <a href="#" class="button product_type_external">Buy on Amazon</a>

                                        </div>

                                    </li> -->



                                </ul>



                            </section>

                        </div>



                    </div>

                </div>

            </article>



        </div><!-- /boldthemes_content -->

        <aside class="btSidebar">




            <div class="btBox woocommerce widget_product_categories">

                <h4><span>Product categories</span></h4>

                <ul class="product-categories">

                    <!-- < ?php foreach ($cate as $k => $adoo) : ?>

                        <li class="cat-item cat-item-30"><a href="< ?= base_url() ?>Products/< ?= url_title($adoo->CategoryTitle) ?>/< ?= $adoo->CategoryId ?>">< ?= $adoo->CategoryTitle ?></a></li>

                    < ?php endforeach ?> -->


                    <li class="cat-item cat-item-30">
                                                <a href="<?= base_url() ?>/Products/Hang-Tags-Labels-Polybags/11">
                                                    Hang Tags/ Labels/ Polybags </a>
                                            </li>
                                       
                                           
                                            <li class="cat-item cat-item-30">
                                                <a href="<?= base_url() ?>/Products/Food-Packaging/15">
                                                    Food Packaging </a>
                                            </li>
                                            <li class="cat-item cat-item-30">
                                                <a href="<?= base_url() ?>/Products/Food-Packaging-Machinery/16">
                                                    Food Packaging Machinery </a>
                                            </li>
                                            <li class="cat-item cat-item-30">
                                                <a href="<?= base_url() ?>/Products/Hygiene-solutions/17">
                                                    Hygiene solutions </a>
                                            </li>
                                            <li class="cat-item cat-item-30">
                                                <a href="<?= base_url() ?>/Products/Aluminum-Foil-Lunch-Box/18">
                                                    Aluminum Foil Lunch Box </a>
                                            </li>
                                         

                </ul>

            </div>

        </aside>

    </div><!-- /contentHolder -->

</div>

<script>
    function onload(){
        alert('sa')
    }
</script>
<?php include('include/footer.php') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.6.1/galleria.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.6.1/themes/azur/galleria.azur.min.css" integrity="sha512-EqHWHpG2EF7wlYFVs2XjNHdSDgFq9NYrpPNpZ2KADql42bZP5PRjh+PZMo5y+W+yslSTRwVU5c9aXLnC9MMQSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
<script>

    $(document).ready(function() {

         Galleria.loadTheme('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.6.1/themes/azur/galleria.azur.min.js');
      $('#galleria').galleria();

        $('body').addClass('product-template-default single single-product postid-149 theme-ippsum bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce woocommerce-page woocommerce-js btHeadingStyle_default btHeadingWeight_bold btSupertitleWeight_bold btSubtitleWeight_normal btMenuWeight_normal btButtonWeight_bold btCurrentPage_dot btHasAltLogo btMenuRightEnabled btStickyEnabled btHideHeadline btLightSkin btBelowMenu noBodyPreloader btHardRoundedButtons btTransparentLightHeader btWithSidebar btSidebarRight btMenuRight btMenuHorizontal btMenuInitFinished btRemovePreloader');

    });
</script>