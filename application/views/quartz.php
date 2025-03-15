<?php include('include/header.php') ?>
<div class="inner-pages-bnr">
    <img src="<?= base_url() ?>assets/html/images/quartz-banner.jpg" class="img-responsive" alt="contact-banner-image">
    <div class="banner-caption">
        <h1>Quartz Stones</h1>
        <ul class="breadcumb">
            <li><a href="<?= base_url() ?>">Home</a> - </li>
            <li>Quartz Stones</li>
        </ul>
    </div>
</div>
<!--=========Banner end============-->
<section class="pad50-20-top-bottom demo3SupportSection">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 supportTextCol polymer">
                <h1>Quartz Stones</h1>
                <p>Quartz is a manufactured product and can be very attractive. The manufacturing process allows a much wider range of colors than you'll find in natural stones such as marble or granite. The appearance of the finished engineered stone is rich, even luxurious. </p>
                <p>Liquids or moisture placed on the surface of a quartz countertop is not absorbed. This makes a quartz countertop more hygienic than countertops which do absorb moisture. Quartz countertops are non-porous and easy to clean. They won't trap and harbor bacteria the way that other countertops might. If you want to help keep a cleaner, more hygienic kitchen in your home, consider quartz countertops to help do the job. </p>
                <p>Like other hard surface countertop materials, quartz is non-porous so it resists stains much better than granite, marble, and concrete. It stands up to juice, oil, wine, tomato, coffee, and other sources of stains in the kitchen. For cleanliness, a non-porous surface means that it will not harbor bacteria or viruses. You can always be confident that you are getting your quartz countertop clean, and that's a great benefit in both the kitchen and the bathroom.</p>
                <p><strong>Features:</strong> </p>
                <ul>
                    <li>Fungus & Bacteria Resistance </li>
                    <li>Tensile Strength - 17.8MPa</li>
                    <li>Water Absorption - <0.01%</li>
                    <li>Stain Resistance </li>
                    <li>Density: - 2.3~ 2.4g/cm3</li>
                    <li>Thickness - 15mm, 20mm, 30mm.</li>
                    <li>Size: 3000mm x 1500mm (10 feet x 5 feet)</li>
                    <li>Highly Durable</li>
                    <li>Easy maintenance</li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 supportVideoCol">
                <a href="#" class="play">
                    <img class="img-full img-responsive" src="<?= base_url() ?>assets/html/images/quartz-stones.jpg" alt="img">
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
                        <a href="<?= base_url('Quartz-Details/') . url_title($row->QuartzTitle) . '/' . $row->QuartzId ?>">
                            <img src="<?= UP . $row->Image ?>" class="img-responsive" alt="product-image">
                        </a>
                        <div class="shop-column-head">
                            <a href="<?= base_url('Quartz-Details/') . url_title($row->QuartzTitle) . '/' . $row->QuartzId ?>">
                                <h5><?= $row->QuartzTitle ?></h5>
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


