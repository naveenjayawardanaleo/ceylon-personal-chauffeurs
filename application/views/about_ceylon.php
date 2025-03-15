<?php include 'include/header.php'; ?>

<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="breacumb-content">
                    <div class="breadcum-title">
                        <h4>History of Ceylon</h4>
                    </div>
                    <ul>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>/</li>
                        <li>History of Ceylon</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->


<!--==================================================-->
<div class="about-area pt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <img src="<?= base_url() ?>images/history_of_ceylon.jpg" class="w-100" alt="">

            </div>
            <div class="col-lg-6 col-md-12  upper">
                <div class="section-title two" data-cue="zoomIn">
                    <h4>From Ceylon to Sri Lanka:</h4>
                    <h1>Tracing the Island's <br> Rich History</h1>
                    <p class="section-desc-2">Welcome to Ceylon Personal Chauffeurs, where we not only traverse the vibrant landscapes of modern Sri Lanka but also delve into its captivating past. Our island nation, known today as Sri Lanka, boasts a history steeped in ancient civilizations, colonial rule, and a journey of cultural transformation. <br>

                        Formerly recognized as Ceylon, the island's historical narrative is a tapestry woven through time. The origins of human settlement here date back thousands of years, evidenced by archaeological finds that speak of early civilizations thriving along the island's coastlines. These ancient roots laid the foundation for the island's diverse cultural heritage. <br>






                    </p>
                </div>

              
            </div>
            <div class="col-lg-12 col-md-12  upper">
                <div class="section-title two" data-cue="zoomIn">

                    <p class="section-desc-2">
                        The name "Ceylon" was bestowed upon the island during the period of European colonialism. Portuguese explorers, followed by the Dutch and then the British, established control over different regions of the island for trade and colonial expansion. It was the British who, during their rule, officially named the island "Ceylon." <br>
                        Centuries later, as the country embarked on a journey towards independence, there emerged a desire to shed the colonial vestiges and embrace a new national identity. In 1972, the island nation chose to rebrand itself, adopting the name "Sri Lanka." This change marked a pivotal moment in the nation's history, signifying a renewed sense of sovereignty and cultural pride. <br>

                        "Sri Lanka," meaning "resplendent island" in the Sinhala language, encapsulates the allure and beauty of this diverse land. The transition to Sri Lanka heralded a new era, celebrating the rich tapestry of cultures, languages, and traditions that define this remarkable nation. <br>

                        At Ceylon Personal Chauffeurs, we honor this rich heritage as we guide you through the enchanting landscapes and historical landmarks of modern-day Sri Lanka. Our personalized tours offer a glimpse into the island's past, blending the echoes of ancient civilizations with the vibrancy of contemporary life. <br>

                        Join us on a journey through time, exploring the depths of history and the allure of a nation reborn as Sri Lanka. Experience the warmth of its people, the splendor of its landscapes, and the rich tapestry of its cultural heritage. <br>

                        Let Ceylon Personal Chauffeurs be your companion as you discover the treasures of this resplendent island, where history and modernity harmoniously converge. <br>


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