<?php include('include/header.php') ?>
<section class="breadcrum  bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-white"><?= $record->ProjectTitle ?>Our Blogs and News</h1>
                <nav class="d-flex">
                    <h6 class="mb-0 text-white text-decoration-none">
                        <a href="<?= base_url() ?>" class="text-white text-decoration-none">Home</a>
                        <span>/</span>
                        <a href="#" class="text-white text-decoration-none">Blog</a>

                    </h6>
                </nav>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container">
        <div class="row">
        <?php foreach ($records as $k => $row) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple ripple-surface-light" data-mdb-ripple-color="light" style="">
                        <img src="<?= UP . $row->Image ?>" class="img-fluid">
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $row->ProjectTitle ?></h5>
                        <p class="card-text">
                        <?= $row->ShortDescription ?>
                        </p>
                        <a href="<?= base_url('Blog-Details/') . url_title($row->ProjectTitle) . '/' . $row->ProjectId ?>" class="btn btn-dark bg-black w-100">Read More...</a>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php include('include/footer.php') ?>