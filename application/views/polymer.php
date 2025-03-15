<?php include('include/header.php') ?>
<div class="inner-pages-bnr">
    <img src="<?= base_url() ?>assets/html/images/polymer-boards-banner.jpg" class="img-responsive" alt="contact-banner-image">

    <div class="banner-caption">
        <h1>Polymer Boards</h1>
        <ul class="breadcumb">
            <li><a href="<?= base_url() ?>">Home</a> -</li>
            <li>Polymer Boards</li>
        </ul>
    </div>
</div>
<!--=========Banner end============-->
<section class="pad50-20-top-bottom demo3SupportSection">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 supportTextCol polymer">
                <h1>Polymer Boards</h1>

                <p>Polymer boards should have a functional life span of at least 50 years equivalent to other materials in the building, its lifetime investment for polymer board pantry cupboards. Polymer-based tops can be easily kept clean and disinfected since they can be washed or scrubbed easily. This is an important consideration for health care projects like hospitals and labs since the spread of germs and bacteria must be minimized compared to other wood Boards. Do not require painting or the use of special cleaning products. Long-lasting, can reduce maintenance and repair costs, and is often cost-effective from a life cycle perspective. </p>

                <p>Throughout the 1990 s Polymer-based building materials widely used in the construction industry, their superior straight in weight performance, corrosion resistance, environmental stability, insulation proportion, lower cost are the main properties of polymer Boards.</p>

                <p><strong>Features:</strong> </p>
                <ul>
                    <li>Material - PVC</li>
                    <li>Water Absorption - <0.01%</li>
                    <li>Contraction Percentage - <0.04%</li>
                    <li>Tensile Strength - (81~130) MPa</li>
                    <li>Thickness - 5mm, 8mm, 10mm, 12mm, 15mm, 18mm</li>
                    <li>Size: 2400mm x 1200mm (8 feet x 4 feet)</li>
                    <li>Maintain: Less Maintaining</li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 supportVideoCol">
                <a href="#" class="play">
                    <img class="img-full img-responsive" src="<?= base_url() ?>assets/html/images/polymer-boards.jpg"
                         alt="img">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="pad100-top-bottom">
    <div class="container">
        <div class="row">
            <!--=========Shop Right Start============-->
            <div class="col-md-12">
                <?php foreach ($records as $k => $row) : ?>
                    <div class="shop-column">
                        <a href="<?= base_url('Polymer-Details/') . url_title($row->PolymerTitle) . '/' . $row->PolymerId ?>">
                            <img src="<?= UP . $row->Image ?>" class="img-responsive" alt="product-image">
                        </a>

                        <div class="shop-column-head">
                            <a href="<?= base_url('Polymer-Details/') . url_title($row->PolymerTitle) . '/' . $row->PolymerId ?>">
                                <h5><?= $row->PolymerTitle ?></h5>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="pagination">
                    <?= $links ?>
                </div>
            </div>
            <!--=========Shop Right end============-->
        </div>
    </div>
</section>
<?php include('include/footer.php') ?>


