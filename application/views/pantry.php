<?php include('include/header.php') ?>
<div class="inner-pages-bnr">
    <img src="<?= base_url() ?>assets/html/images/pantry-cupboard-banner.jpg" class="img-responsive" alt="contact-banner-image">
    <div class="banner-caption">
        <h1>Pantry Cupboards</h1>
        <ul class="breadcumb">
            <li><a href="<?= base_url() ?>">Home</a> - </li>
            <li>Pantry Cupboards</li>
        </ul>
    </div>
</div>
<!--=========Banner end============-->
<section class="pad50-20-top-bottom demo3SupportSection">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 supportTextCol polymer">
                <h1>Pantry Cupboards</h1>
                <p>We Manufacture custom pantries using polymer and high-quality German fittings to meet individual needs. Apart from the pantry cupboards, our team of experts will make sure that you get the perfect finish for your pantry with the quartz countertop. Delivering our customers with exclusive quality products for a local price is our main target.</p>
                <p><strong>Features:</strong> </p>
                <ul>
                    <li>Materials: Polymer, Quartz</li>
                    <li>High quality German fittings </li>
                    <li>affordable and available in a wide range of colours</li>
                    <li>Customized designs</li>
                    <li>20 years Warranty</li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 supportVideoCol">
                <a href="#" class="play">
                    <img class="img-full img-responsive" src="<?= base_url() ?>assets/html/images/pantry-cupboards.jpg" alt="img">
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
                        <a href="<?= base_url('Pantry-Details/') . url_title($row->PantryTitle) . '/' . $row->PantryId ?>">
                            <img src="<?= UP . $row->Image ?>" class="img-responsive" alt="product-image">
                        </a>
                        <div class="shop-column-head">
                            <a href="<?= base_url('Pantry-Details/') . url_title($row->PantryTitle) . '/' . $row->PantryId ?>">
                                <h5><?= $row->PantryTitle ?></h5>
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