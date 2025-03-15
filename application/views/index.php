<?php include('include/header.php') ?>


<!--==================================================-->
<!-- Start Royella Hero Area -->
<!--==================================================-->
<div class="hero-slider owl-carousel">

    <?php
    $sl_count = 1;
    foreach ($brands as $bra) {
    ?>



        <div class="hero-area home-style-<?= $sl_count ?> align-items-center d-flex" style="background: url(<?= UP ?><?= $bra->Image ?>);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="hotel-rating">
                            <ul>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                            </ul>
                        </div>
                        <div class="hero-content">
                            <h4><?= $bra->Title1 ?></h4>
                            <h1><?= $bra->Title2 ?></h1>
                            <h1><?= $bra->Title3 ?></h1>
                        </div>
                        <div class="luxury-button">
                            <a href="<?= base_url() ?>About-Us">Discover More</a>
                        </div>
                        <div class="hero-contact">
                            <a href="tel:+94 77 720 9813"><i class="bi bi-telephone-fill"></i>+94 77 720 9813</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        $sl_count++;
    }

    ?>
</div>

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
                    <p class="section-desc-2">Ceylon Personal Chauffeurs is your best choice for exploring the beautiful island of Sri Lanka. We are a company that specializes in providing transportation and travel solutions for both local and foreign travelers. Whether you need a car and driver for a day, a week, or a month, we have the perfect vehicle and chauffeur for you. Our chauffeurs are friendly, professional, and knowledgeable about the country and its culture. They will take you to the best places and attractions, and make sure you have a memorable experience. <br>

                    We also own two other companies that cater to your travel needs: Travel Hub Sri Lanka and Sri Lanka Personal Chauffeurs. Travel Hub Sri Lanka is a tour operator that can help you plan and book your dream holiday in Sri Lanka. We offer tailor-made packages that suit your budget, preferences, and interests. 

                    </p>


                </div>

                <div class="animation-bar" data-cue="zoomIn">
                </div>
                <div class="luxury-button" data-cue="zoomIn">
                    <a href="<?= base_url() ?>About-Us">About More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-thumb">
                    <img src="<?= base_url() ?>images/OUR PROFESSIONAL AND EXPERIENCED CHAUFFEURS.jpg" class="w-100" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12  upper">
                <div class="section-title two" data-cue="zoomIn">

                    <h1>Our Professional And Experienced Chauffeurs.</h1>
                    <p class="section-desc-2">Our Team Consists Of Skilled And Experienced Drivers Who Possess Extensive Knowledge Of Sri Lanka's Roads And Destinations. They Ensure A Safe, Comfortable, And Enjoyable Journey For Our Guests. They Are Approved By Tourist Board And Fluent In English. They Are So Flexible To Guest's Quick Change In Itinerary Too. With That You Can Make Your Holiday A Comfortable One With Our Chauffeurs (Drivers).</p>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="facilities-area home-three">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title center" data-cue="zoomIn">
                    <h4>Services</h4>
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-facilities-box" data-cue="zoomIn">
                    <div class="facilities-icon">
                        <img src="assets/images/home3/facilities-icon-1.png" alt="">
                    </div>
                    <div class="facilities-content">
                        <h4>Airport Transfers</h4>
                        <p class="w-100">
                            Ceylon Personal Chauffeurs provides top-notch airport transfer services in Sri Lanka, offering a fleet of luxury vehicles and skilled drivers for seamless and comfortable travel experiences.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-facilities-box" data-cue="zoomIn">
                    <div class="facilities-icon">
                        <img src="assets/images/home3/facilities-icon-2.png" alt="">
                    </div>
                    <div class="facilities-content">
                        <h4>Corporate Transportations</h4>
                        <p class="w-100">Ceylon Personal Chauffeurs excels in corporate transport, providing elite vehicles and experienced drivers, guaranteeing reliable and professional travel experiences for businesses in Sri Lanka.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-facilities-box" data-cue="zoomIn">
                    <div class="facilities-icon">
                        <img src="assets/images/home3/facilities-icon-3.png" alt="">
                    </div>
                    <div class="facilities-content">
                        <h4>Point-To-Ppint Transportation</h4>
                        <p class="w-100">
                            Ceylon Personal Chauffeurs specializes in efficient point-to-point transportation, ensuring swift and reliable travel experiences tailored to your destination needs in Sri Lanka. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-facilities-box" data-cue="zoomIn">
                    <div class="facilities-icon">
                        <img src="assets/images/home3/facilities-icon-4.png" alt="">
                    </div>
                    <div class="facilities-content">
                        <h4>Vip and Personal Tours</h4>
                        <p class="w-100">Ceylon Personal Chauffeurs offers VIP tours and personalized transportation, ensuring exclusive and comfortable travel experiences tailored to individual needs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-facilities-box" data-cue="zoomIn">
                    <div class="facilities-icon">
                        <img src="assets/images/home3/facilities-icon-5.png" alt="">
                    </div>
                    <div class="facilities-content">
                        <h4>Tailor Made Tour</h4>
                        <p class="w-100">Ceylon Personal Chauffeurs crafts bespoke tours, curating personalized travel experiences in Sri Lanka, ensuring a tailored journey that meets individual preferences and interests.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-facilities-box" data-cue="zoomIn">
                    <div class="facilities-icon">
                        <img src="assets/images/home3/facilities-icon-6.png" alt="">
                    </div>
                    <div class="facilities-content">
                        <h4>Carry Surfboards</h4>
                        <p class="w-100">Ceylon Personal Chauffeurs offers facilitates surfboard transportation, ensuring hassle-free conveyance of surfboards during your travels and tours in Sri Lanka.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="facilities-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-title two" data-cue="zoomIn">
                    <h4>Vehicles</h4>
                    <h1>Enjoy comfortable & Best</h1>
                    <h1>Quality Vehicles</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="luxury-button" data-cue="zoomIn">
                    <a href="<?= base_url() ?>Vehicles">View More item</a>
                </div>
            </div>
        </div>


        <div class="row add-boder">
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-images-box" data-cue="zoomIn">
                    <div class="facilities-thumb">
                        <img src="<?= base_url() ?>images/toyota prius ceylon chauffeurs.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-box" data-cue="zoomIn">
                    <div class="facilities-content">
                        <h4>Budget Car</h4>
                        <h1>Toyota Prius</h1>

                        <p>Number of seats : Driver + 3 <br>
                            Best for :
                            1 - 2 passengers + Luggage & Bags <br>
                            The Toyota Prius proves advantageous for tourism primarily due to its outstanding fuel efficiency and eco-friendly nature. Renowned for its hybrid technology, it consumes less fuel compared to conventional cars, making it cost-effective for travelers covering long distances. Its reduced emissions align with eco-conscious travel trends, appealing to tourists seeking environmentally friendly transportation. The Prius also offers comfort, reliability, and adequate space for passengers and luggage, making it a practical choice for exploring various destinations during trips.</p>
                        <a class="facilities-button" href="<?= base_url() ?>Vehicles"><i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="facilities-number">
                        <h1>01</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="row add-boder">
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-box two" data-cue="zoomIn">
                    <div class="facilities-content">
                        <h4>Normal Car</h4>
                        <h1>Toyota Premio / Toyota Allion / Honda Fit Shuttle</h1>
                        <p>
                            Number of seats: Driver + 3 <br> Best for : 1 - 3 passengers + Luggage's & Bags <br>

                            The Toyota Premio and Toyota Allion, mid-size sedans, offer reliability, comfort, and fuel efficiency, appealing to families and daily commuters. Known for sleek designs and advanced features, they balance performance and practicality. In contrast, the Honda Fit Shuttle, a compact wagon, prioritizes versatility and ample interior space, catering to those seeking functionality in a smaller vehicle. Each model caters to diverse preferences for dependable, comfortable, and efficient transportation.</p>
                        <a class="facilities-button" href="<?= base_url() ?>Vehicles"><i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="facilities-number two">
                        <h1>02</h1>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-images-box" data-cue="zoomIn">
                    <div class="facilities-thumb">
                        <img src="<?= base_url() ?>images/toyota-premio-ceylon-chauffeurs.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row add-boder">
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-images-box" data-cue="zoomIn">
                    <div class="facilities-thumb">
                        <img src="<?= base_url() ?>images/honda-vezel-ceylon-chauffeurs.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-box" data-cue="zoomIn">
                    <div class="facilities-content">
                        <h4>SUV </h4>
                        <h1>Honda Vezel</h1>
                        <p>
                            Number of seats: Driver + 3 <br> Best for : 1-3 passengers + Luggage's & Bags <br>
                            The Honda Vezel, also marketed as the HR-V in some regions, is a popular subcompact crossover SUV known for its versatility and practicality. Renowned for its sleek design and fuel efficiency, the Vezel blends the attributes of a compact car with those of an SUV, offering a comfortable driving experience suitable for urban environments. Its adaptable seating configurations, ample cargo space, and innovative features make it an attractive choice for individuals or small families seeking a blend of style, efficiency, and versatility in a compact vehicle. The Vezel stands out for its reliability, appealing design, and suitability for diverse driving needs.</p>
                        <a class="facilities-button" href="<?= base_url() ?>Vehicles"><i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="facilities-number">
                        <h1>03</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row add-boder">
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-box two" data-cue="zoomIn">
                    <div class="facilities-content">
                        <h4>Mini Van</h4>
                        <h1>Toyota KDH</h1>
                        <p>
                            Number of seats: Driver + 6 <br> Best for 4-5 passengers (Use for last lows eats, luggage's and bags) <br>
                            The Toyota KDH, commonly known as the Toyota HiAce in some markets, is a popular mini-van renowned for its reliability, versatility, and spacious interior. It's a preferred choice for various purposes, including commercial use, passenger transportation, and family trips. The KDH's robust build, comfortable seating arrangements, and ample cargo space make it suitable for accommodating passengers or cargo, making it an ideal vehicle for businesses, group travel, or individuals requiring a versatile and durable transportation solution. Its reputation for durability, efficiency, and adaptability has solidified its position as a go-to choice in the realm of mini-vans.</p>
                        <a class="facilities-button" href="<?= base_url() ?>Vehicles"><i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="facilities-number two">
                        <h1>04</h1>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-images-box" data-cue="zoomIn">
                    <div class="facilities-thumb">
                        <img src="<?= base_url() ?>images/toyota-kdh-ceylon-chauffeurs.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row add-boder">
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-images-box" data-cue="zoomIn">
                    <div class="facilities-thumb">
                        <img src="<?= base_url() ?>images/toyota-kdh-high-roof-ceylon-chauffeurs.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-box" data-cue="zoomIn">
                    <div class="facilities-content">
                        <h4>Van </h4>
                        <h1>Toyota KDH High Roof</h1>
                        <p>
                            Number of seats: Driver +12 <br> Best for 5-8 Passengers. (Use for last low seats, luggage's and bags)<br>

                            Traveling in the Toyota KDH High Roof is a seamless experience defined by comfort and reliability. Its spacious interior accommodates passengers and luggage effortlessly, ensuring a smooth and enjoyable journey. The vehicle's efficient performance on diverse terrains, coupled with its safety features, instills confidence on the road. Whether navigating city streets or exploring scenic routes, the KDH High Roof offers a blend of comfort, convenience, and dependability, enhancing the overall travel experience for both drivers and passengers alike.</p>
                        <a class="facilities-button" href="<?= base_url() ?>Vehicles"><i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="facilities-number">
                        <h1>05</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row add-boder">
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-box two" data-cue="zoomIn">
                    <div class="facilities-content">
                        <h4>Mini Bus</h4>
                        <h1>Toyota Coaster </h1>
                        <p>
                            Number of seats: Driver +21 <br> Best for 10-14 Passangers. (Use for last low seats, luggage's and bags) <br>

                            The Toyota Coaster is a widely acclaimed and sturdy minibus designed primarily for passenger transportation purposes. Renowned for its durability, reliability, and spacious interior, the Coaster is often utilized for public transportation, tour operations, and corporate shuttles. Its comfortable seating arrangements, robust build, and ample interior space cater to both passenger comfort and safety. With a reputation for being dependable and efficient, the Toyota Coaster is a popular choice for businesses, institutions, and tourism sectors seeking a reliable and versatile minibus to transport groups of people in a safe and comfortable manner.</p>
                        <a class="facilities-button" href="<?= base_url() ?>Vehicles"><i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="facilities-number two">
                        <h1>06</h1>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-facilities-images-box" data-cue="zoomIn">
                    <div class="facilities-thumb">
                        <img src="<?= base_url() ?>images/toyota-Toyota-Coaster-ceylon-chauffeurs.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="offers-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title two" data-cue="zoomIn">
                    <h4>Destinations</h4>
                    <h1>Sri Lanka's</h1>
                    <h1>Top Destinations</h1>
                </div>
            </div>
        </div>
        <div class="row" data-cue="zoomIn">
            <div class="offers-list owl-carousel">


                <!-- Destination Data -->
                <div class="col-md-12">
                    <div class="single-offers-box">
                        <div class="offers-thumb">
                            <img src="<?= base_url() ?>images/colombo.jpg" alt="">
                        </div>
                        <div class="offers-content">
                            <a href="#">Colombo</a>
                        </div>
                        <div class="offers-dollar">
                            <!-- Add Rating or Additional Information Here -->
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="single-offers-box">
                        <div class="offers-thumb">
                            <img src="<?= base_url() ?>images/kandy.jpg" alt="">
                        </div>
                        <div class="offers-content">
                            <a href="#">Kandy</a>
                        </div>
                        <div class="offers-dollar">
                            <!-- Add Rating or Additional Information Here -->
                        </div>
                    </div>
                </div>

                <!-- Newly Added Destinations -->
                <div class="col-md-12">
                    <div class="single-offers-box">
                        <div class="offers-thumb">
                            <img src="<?= base_url() ?>images/galle.jpg" alt="">
                        </div>
                        <div class="offers-content">
                            <a href="#">Galle</a>
                        </div>
                        <div class="offers-dollar">
                            <!-- Add Rating or Additional Information Here -->
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="single-offers-box">
                        <div class="offers-thumb">
                            <img src="<?= base_url() ?>images/nuwara-eliya.jpg" alt="">
                        </div>
                        <div class="offers-content">
                            <a href="#">Nuwara Eliya</a>
                        </div>
                        <div class="offers-dollar">
                            <!-- Add Rating or Additional Information Here -->
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="single-offers-box">
                        <div class="offers-thumb">
                            <img src="<?= base_url() ?>images/Anuradhapura.jpg" alt="">
                        </div>
                        <div class="offers-content">
                            <a href="#">Anuradhapura</a>
                        </div>
                        <div class="offers-dollar">
                            <!-- Add Rating or Additional Information Here -->
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="single-offers-box">
                        <div class="offers-thumb">
                            <img src="<?= base_url() ?>images/sigiriya.jpg" alt="">
                        </div>
                        <div class="offers-content">
                            <a href="#">Sigiriya</a>
                        </div>
                        <div class="offers-dollar">
                            <!-- Add Rating or Additional Information Here -->
                        </div>
                    </div>
                </div>
                <!-- End of Newly Added Destinations -->

            </div>
        </div>
    </div>
</div>



<div class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" data-cue="zoomIn">
                <div class="section-title text-center">

                    <h1>Tour Packages</h1>
                    <p class="section-desc-1">Explore diverse landscapes with our curated tour packages, blending adventure, culture, and relaxation for an unforgettable travel experience.</p>
                </div>
            </div>
        </div>


        <div class="row">

            <?php foreach ($projects as $paaa) : ?>

                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="single-blog-box" data-cue="zoomIn">
                        <div class="single-blog-thumb">
                            <img src="<?= UP ?><?= $paaa->Image ?>" class="w-100" alt="">
                        </div>
                        <div class="blog-content">

                            <a href="<?= base_url() ?>Blog-Details/<?= url_title($paaa->ProjectTitle) ?>/<?= $paaa->ProjectId ?>"><?= $paaa->ProjectTitle ?></a>

                            <p><?= $paaa->ShortDescription ?></p>
                        </div>
                        <div class="blog-button">
                            <a href="<?= base_url() ?>Blog-Details/<?= url_title($paaa->ProjectTitle) ?>/<?= $paaa->ProjectId ?>">Read More<span><i class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Royella Blog Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Royella Testimonial Area -->
<!--==================================================-->
<div class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title center" data-cue="zoomIn">
                    <div class="section-thumb">
                        <img src="assets/images/home-1/section-shape1.png" alt>
                    </div>
                    <h1>Customer’s TestimonialL</h1>
                    <p class="section-desc-1">Ceylon Personal Chauffeurs: Exceptional service, expert drivers, luxurious vehicles. A reliable choice for seamless travel experiences in Sri Lanka.</p>
                </div>
            </div>
        </div>
        <div class="row" data-cue="zoomIn">
            <div class="testi-list owl-carousel">

                <?php foreach ($testimonials as  $roo) : ?>



                    <div class="col-lg-12">
                        <div class="single-testi-box">
                            <div class="testi-quote-icon">
                                <img src="<?= UP ?><?= $roo->Image ?>" alt>
                            </div>
                            <div class="testi-rating">
                                <ul>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star"></i></li>
                                </ul>
                            </div>
                            <div class="testi-content">
                                <h6><?= $roo->Designation ?></h6>

                                <p>“<?= $roo->Description ?>”</p>
                            </div>
                            <div class="testi-author">
                                <div class="testi-author-thumb">
                                    <img src="assets/images/home-1/testi-author.png" alt>
                                </div>
                                <div class="testi-author-title">
                                    <p><?= $roo->Name ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>
<!--==================================================-->

<!--==================================================-->
<div class="contact-area style-two inner">
    <div class="container">
        <div class="row add-backgroun">
            <div class="col-lg-6">
                <div class="section-title two">
                    <h4>Contact us</h4>
                    <h1>Contact With Us</h1>
                    <p class="section-desc-2">Travel with Ceylon Personal Chauffeurs and enjoy Sri Lanka’s amazing sights and sounds.
                    </p>
                </div>
                <div class="single-contact-box">
                    <div class="contact-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="contact-title">
                        <h4>Call Us Now</h4>
                        <p>+94 76 259 0457</p>
                    </div>
                </div>
                <div class="single-contact-box">
                    <div class="contact-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="contact-title">
                        <h4>Sent Email</h4>
                        <p>srilankapersonalchauffeurs@gmail.com</p>
                    </div>
                </div>
                <div class="single-contact-box">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="contact-title">
                        <h4>Our Locations</h4>
                        <p>Colombo, Negombo, Galle</p>
                    </div>
                </div>


            </div>
            <div class="col-lg-6">
                <form action="#" method="POST" id="dreamit-form">
                    <div class="single-contact-form">
                        <div class="contact-content">
                            <h4>Get In Touch</h4>
                        </div>
                        <div class="single-input-box">
                            <input type="text" name="Name" placeholder="Your Name" required="">
                        </div>
                        <div class="single-input-box">
                            <input type="text" name="Email" placeholder="Enter Your Email" required="">
                        </div>
                        <div class="single-input-box">
                            <input type="text" name="subject" placeholder="Subject" required="">
                        </div>
                        <div class="single-input-box">
                            <textarea name="Message" id="Message" placeholder="Write Message"></textarea>
                        </div>
                        <div class="single-input-box">
                            <button type="submit">Sent Message</button>
                        </div>
                    </div>
                </form>
                <div id="status"></div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63339.15449198491!2d79.85322270348253!3d7.160967317872765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2efd7f3f7894f%3A0xbce244fafe80bdf1!2sKatunayake!5e0!3m2!1sen!2slk!4v1703754410091!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php include('include/footer.php') ?>