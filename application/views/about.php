<?php include 'include/header.php'; ?>

<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="breacumb-content">
                    <div class="breadcum-title">
                        <h4>About Us</h4>
                    </div>
                    <ul>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>/</li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->


<!--==================================================-->
<div class="about-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-thumb">

                    <img src="<?= base_url() ?>images/about-ceylon-chauffeurs.png" alt="">


                </div>
            </div>
            <div class="col-lg-6 col-md-12  upper">
                <div class="section-title two" data-cue="zoomIn">
                    <h4>Welcome to the</h4>
                    <h1>Ceylon Personal Chauffeurs</h1>
                    <p class="section-desc-2">CEYLON PERSONAL CHAUFFEURS is your best choice for exploring the beautiful island of Sri Lanka. We are a company that specializes in providing transportation and travel solutions for both local and foreign travelers. Whether you need a car and driver for a day, a week, or a month, we have the perfect vehicle and chauffeur for you. Our chauffeurs are friendly, professional, and knowledgeable about the country and its culture. They will take you to the best places and attractions, and make sure you have a memorable experience. <br>

                        We also own two other companies that cater to your travel needs: Travel Hub Sri Lanka and Sri Lanka Personal Chauffeurs. Travel Hub Sri Lanka is a tour operator that can help you plan and book your dream holiday in Sri Lanka. We offer tailor-made packages that suit your budget, preferences, and interests. You can choose from a variety of options, such as wildlife safaris, beach resorts, cultural tours, adventure sports, and more. Sri Lanka Personal Chauffeurs is a chauffeur service that can provide you with comfortable and reliable cars for hire. You can choose from a range of vehicles, such as cars, SUVs, vans, and minibuses. Our cars are well-maintained, air-conditioned, and equipped with modern amenities. Our drivers are licensed, insured, and trained to ensure your safety and comfort. <br>
                    
                        
                    </p>
                </div>

                <div class="animation-bar" data-cue="zoomIn">
                </div>
            </div>
          
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Royella About Area -->

<!--==================================================-->
<div class="call-do-action-area inner">
    <div class="container">
        <div class="row align-items-center call-do-action-bg" style="background-image: url(<?= base_url() ?>images/chairmans-photo.jpg);">
            <div class="col-lg-6 col-md-12">
                <!-- <img src="<?= base_url() ?>images/chairmans-photo.jpg" alt=""> -->
            </div>
            <div class="col-lg-6 col-md-12 matha-ta-ghurlo" data-cue="zoomIn">
                <div class="section-title two">

                    <h1>Chairman's Message</h1>


                </div>
                <div class="call-do-action-text">
                    <p class="section-desc-2">Dear Valued Guests and Partners, <br> <br>

                        I am honored to extend my heartfelt greetings to you all on behalf of Ceylon Personal Chauffeurs. Since our establishment, our unwavering commitment has been to curate exceptional travel experiences marked by sophistication and unparalleled service. <br>

                        At Ceylon Personal Chauffeurs, we take great pride in our dedicated team, striving relentlessly to ensure your safety, comfort, and satisfaction throughout your journey with us. <br>

                        Our dedication to innovation, sustainability, and personalized service continues to be the cornerstone of our endeavors. We aspire to maintain our position as the hallmark of excellence in chauffeur-driven services in Sri Lanka. <br>

                        We extend our deepest gratitude for choosing Ceylon Personal Chauffeurs. Your faith in us inspires our continuous efforts to enhance our services and provide you with memorable experiences.</p>
                </div>
                <div class="call-do-action-author">

                    <div class="call-do-action-content">
                        <h4>Thilak</h4>
                        <p>Chairman, Ceylon Personal Chauffeurs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->

<!--==================================================-->
<div class="testimonial-area home-two">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title center home-two" data-cue="zoomIn">
                    <h4>Our Testimonials</h4>
                    <h1>Feedback from our Guests</h1>
                    <p class="section-desc-2 home-two">We greatly value and appreciate the feedback from our guests, <br> which continuously helps us improve and enhance our services.</p>
                </div>
            </div>
        </div>
        <div class="row" data-cue="zoomIn">
            <div class="testi-list owl-carousel">

                <?php foreach ($testimonials as  $roo) : ?>

                    <div class="col-lg-12">
                        <div class="single-testimonial-box-two">
                            <div class="testi-content-two">
                                <div class="testi-thumb-two">
                                    <img src="<?= UP ?><?= $roo->Image ?>" alt="">
                                </div>
                                <div class="testi-title">
                                    <h4><?= $roo->Name ?></h4>
                                    <p><?= $roo->Designation ?></p>
                                </div>
                            </div>
                            <div class="testi-decs-two">
                                <p><?= $roo->Description ?>”</p>
                            </div>
                            <div class="testi-author-rating">
                                <ul>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>