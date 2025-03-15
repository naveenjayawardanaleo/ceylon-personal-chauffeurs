<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ceylon Chauffeurs </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>favi/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>favi/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>favi/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>favi/site.webmanifest">
    <link rel="shortcut icon" href="<?= base_url() ?>favi/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?= base_url() ?>favi/browserconfig.xml">
    <meta name="theme-color" content="#000000">

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/bootstrap.min.css" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/owl.carousel.min.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/animate.css" type="text/css" media="all">
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/animated-text.css" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/all.min.css" type="text/css" media="all">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/flaticon.css" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/theme-default.css" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/meanmenu.min.css" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/owl.transitions.css" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/venobox/venobox.css" type="text/css" media="all">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/bootstrap-icons.css" type="text/css" media="all">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/style.css" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/responsive.css" type="text/css" media="all">
    <!-- ScrollCue CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/scrollCue.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url() ?>res/assets/css/dark.css" type="text/css" media="all">
    <!-- modernizr js -->
    <script src="<?= base_url() ?>res/assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body class="dar k">

    <!-- loder -->
    <!-- <div class="loader-wrapper">
        <span class="loader"></span>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div> -->


    <!--==================================================-->
    <!-- Start Royella Header Area -->
    <!--==================================================-->
    <div class="header-area" id="sticky-header">
        <div class="container-fulid">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>images/ceylon_chauffeurs.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header-menu">
                        <ul>
                            <li class=""> <a href="<?= base_url() ?>">Home</a> </li>
                            <li class=""> <a href="<?= base_url() ?>About-Us">About us</a> </li>
                            <!-- <li class=""> <a href="<?= base_url() ?>Gallery">Gallery</a> </li> -->
                            <li class=""> <a href="<?= base_url() ?>history_of_ceylon">History of Ceylon</a> </li>

                            <li class="menu-item-has-children"><a href="#">Day Tours</a>
                                <ul class="sub-menu">
                                    <?php foreach ($tours as $tour) : ?>
                                        <?php if ($tour->TourType == 1) : ?>
                                            <li>
                                                <a href="<?= base_url() ?>Blog-Details/<?= url_title($tour->ProjectTitle) ?>/<?= $tour->ProjectId ?>"><?= $tour->ProjectTitle ?></a>

                                            </li>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="#">Multi Day Tours</a>
                                <ul class="sub-menu">
                                    <?php foreach ($tours as $tour) : ?>
                                        <?php if ($tour->TourType == 2) : ?>
                                            <li>
                                                <a href="<?= base_url() ?>Blog-Details/<?= url_title($tour->ProjectTitle) ?>/<?= $tour->ProjectId ?>"><?= $tour->ProjectTitle ?></a>

                                            </li>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </ul>
                            </li>

                            <li class=""> <a href="<?= base_url() ?>Destinations">Destinations</a> </li>
                            <li class=""> <a href="<?= base_url() ?>Contact-Us">Contact us</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header-button text-right">
                        <a href="<?= base_url() ?>Tailor-Made-Tours-Sri-Lanka">Tailor-Made</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Royella Header Area -->
    <!--==================================================-->


    <style>
        @media only screen and (max-width: 600px) {

            .mean-container .mean-bar {
                background: #000000 !important;
                background-image: url(<?= base_url() ?>images/ceylon_chauffeurs.png) !important;

                background-size: 125px auto !important;
                background-repeat: no-repeat !important;
                background-position-x: 20px !important;
                min-height: 100px !important;
                background-position-y: 10px !important;


            }

            .mean-container .mean-nav {

                top: 45px;
                position: relative;
            }

            .mobile-menu.mean-container {
                overflow: visible;
                height: 100%;
            }


        }
    </style>

    <!--==================================================-->
    <!-- Start Main Menu Area -->
    <!--==================================================-->
    <div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
        <div class="row">
            <div class="col-md-12">
                <div id="google_translate_element"></div>

                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({
                            pageLanguage: 'en',
                            includedLanguages: 'de,nl,it,es,ru,zh-CN',
                        }, 'google_translate_element');
                    }
                </script>

                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            </div>
        </div>
        <div class="mobile-menu">
            <nav class="header-menu">
                <ul class="nav_scroll">
                    <li class=""> <a href="<?= base_url() ?>">Home</a> </li>
                    <li class=""> <a href="<?= base_url() ?>About-Us">About us</a> </li>
                    <li class=""> <a href="<?= base_url() ?>Gallery">Gallery</a> </li>
                    <li class="menu-item-has-children"><a href="#">Day Tours</a>
                        <ul class="sub-menu">
                            <?php foreach ($tours as $tour) : ?>
                                <?php if ($tour->TourType == 1) : ?>
                                    <li>
                                        <a href="<?= base_url() ?>Blog-Details/<?= url_title($tour->ProjectTitle) ?>/<?= $tour->ProjectId ?>"><?= $tour->ProjectTitle ?></a>

                                    </li>
                                <?php endif ?>
                            <?php endforeach ?>
                        </ul>
                    </li>

                    <li class="menu-item-has-children"><a href="#">Multi Day Tours</a>
                        <ul class="sub-menu">
                            <?php foreach ($tours as $tour) : ?>
                                <?php if ($tour->TourType == 2) : ?>
                                    <li>
                                        <a href="<?= base_url() ?>Blog-Details/<?= url_title($tour->ProjectTitle) ?>/<?= $tour->ProjectId ?>"><?= $tour->ProjectTitle ?></a>

                                    </li>
                                <?php endif ?>
                            <?php endforeach ?>
                        </ul>
                    </li>
                    <li class=""> <a href="<?= base_url() ?>Destinations">Destinations</a> </li>
                    <li class=""> <a href="<?= base_url() ?>Tailor-Made-Tours-Sri-Lanka">Tailor Made Tours Sri Lanka</a> </li>
                    <li class=""> <a href="<?= base_url() ?>history_of_ceylon">History of Ceylon</a> </li>
                    <li class=""> <a href="<?= base_url() ?>Contact-Us">Contact us</a> </li>

                </ul>
            </nav>
            <div id="google_translate_element"></div>

            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en',
                        includedLanguages: 'de,nl,it,es,ru,zh-CN',
                    }, 'google_translate_element');
                }
            </script>

            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        </div>
    </div>
    <!--==================================================-->
    <!-- End Main Menu Area -->
    <!--==================================================-->