<?php include('include/header.php') ?>

<div class="btContentWrap btClear products-page">

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

                                       <span class="bt_bb_headline_content"><span>Product List</span></span>
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

                  <p class="woocommerce-result-count">

                     <!-- Showing 1–9 of 12 results -->

                  </p>

                  <form class="woocommerce-ordering" method="get">

                     <div class="fancy-select">

                        <!-- <select name="orderby" class="orderby fancified" aria-label="Shop order" style="width: 1px; height: 1px; display: none; position: absolute; top: 0px; left: 0px; opacity: 0;">

                           <option value="menu_order" selected="selected">Default sorting</option>

                           <option value="popularity">Sort by popularity</option>

                           <option value="rating">Sort by average rating</option>

                           <option value="date">Sort by latest</option>

                           <option value="price">Sort by price: low to high</option>

                           <option value="price-desc">Sort by price: high to low</option>

                        </select> -->

                        <!-- <div class="trigger">Default sorting</div>

                        <ul class="options">

                           <li data-raw-value="menu_order" class="selected">Default sorting</li>

                           <li data-raw-value="popularity">Sort by popularity</li>

                           <li data-raw-value="rating">Sort by average rating</li>

                           <li data-raw-value="date">Sort by latest</li>

                           <li data-raw-value="price">Sort by price: low to high</li>

                           <li data-raw-value="price-desc">Sort by price: high to low</li>

                        </ul> -->

                     </div>

                     <input type="hidden" name="paged" value="1">

                  </form>

                  <ul class="products columns-3">

                     <?php foreach ($records as $key => $row) : ?>

                        <li class="product type-product post-149 status-publish first instock product_cat-bag product_cat-merch has-post-thumbnail shipping-taxable product-type-external">

                           <div class="btWooShopLoopItemInner">

                              <div class="bt_bb_image"><a href="<?= base_url() ?>Products-Details/<?= url_title($row->ProductTitle) ?>/<?= $row->ProductId ?>" target="_self" title="product_01"><img src="<?= UP . $row->Image ?>"></a></div>

                              <header class="bt_bb_headline bt_bb_dash_top bt_bb_size_small bt_bb_superheadline bt_bb_subheadline">

                                 <div class="bt_bb_headline_superheadline_outside"><span class="bt_bb_headline_superheadline"><span><span class="btArticleCategories">
                                             <!-- <a href="#" class="btArticleCategory bag">Bag</a> --><a href="#" class="btArticleCategory merch"><?= $cate_details->CategoryTitle ?></a>
                                          </span></span></span></div>

                                 <h2><span class="bt_bb_headline_content"><span><a href="<?= base_url() ?>Products-Details/<?= url_title($row->ProductTitle) ?>/<?= $row->ProductId ?>"><?= word_limiter($row->ProductTitle, 2); ?></a></span></span></h2>

                                 <div class="bt_bb_headline_subheadline"><span class="btNoStarRating"></span></div>

                              </header>

                              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span></span>

                                 <a href="<?= base_url() ?>Products-Details/<?= url_title($row->ProductTitle) ?>/<?= $row->ProductId ?>" class="button product_type_external">View</a>

                           </div>

                        </li>

                     <?php endforeach ?>





                  </ul>

                  <nav class="woocommerce-pagination">

                     <!-- <ul class="page-numbers">

                        <li><span aria-current="page" class="page-numbers current">1</span></li>

                        <li><a class="page-numbers" href="#">2</a></li>

                        <li><a class="page-numbers current" href="#" ><b ><i class="fa-solid fa-right-long" ></i></b></a></li>

                       

                     </ul> -->

                     <?= $links ?>

                  </nav>

               </div>

            </div>

         </article>

      </div>

      <!-- /boldthemes_content -->

      <aside class="btSidebar">





         <div class="btBox woocommerce widget_product_categories">

            <h4><span>Product categories</span></h4>

            <ul class="product-categories">

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

   </div>

   <!-- /contentHolder -->

</div>

<?php include('include/footer.php') ?>



<script>
   $(document).ready(function() {



      $('body').addClass('archive post-type-archive post-type-archive-product theme-ippsum bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-shop woocommerce woocommerce-page woocommerce-js btHeadingStyle_default btHeadingWeight_bold btSupertitleWeight_bold btSubtitleWeight_normal btMenuWeight_normal btButtonWeight_bold btCurrentPage_dot btHasAltLogo btMenuRightEnabled btStickyEnabled btHideHeadline btLightSkin btBelowMenu noBodyPreloader btHardRoundedButtons btTransparentLightHeader btWithSidebar btSidebarRight btMenuRight btMenuHorizontal btRemovePreloader btMenuInitFinished');

   });
</script>