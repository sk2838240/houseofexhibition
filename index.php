<?php include "incl/header.php"; ?>

<style>
    /* Base Desktop Styles */
    .carousel-item {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    /* Mobile Fix */
    @media (max-width: 767px) {
        .carousel-item {
            /* 'contain' ensures the whole image is visible without cropping */
            background-size: contain !important;
            /* Adjust height to match the image aspect ratio on mobile */
            min-height: 120px !important;
            background-color: #000;
            /* Adds black bars if the image is too short */
        }

        /* Optional: Adjust the hero section height so there isn't a huge gap below the image */
        .hero {
            min-height: auto !important;
        }
    }
</style>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/home-page-banner-1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/home-page-banner-2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/home-page-banner-3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/home-page-banner-4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/home-page-banner-5.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/home-page-banner-6.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/home-page-banner-7.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/home-page-banner-8.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>



<!-- Scrolling Ticker Section Start -->
<div class="our-scrolling-ticker">
    <!-- Scrolling Ticker Start -->
    <div class="scrolling-ticker-box">
        <div class="scrolling-content">
            <span><img src="images/icon-asterisk.svg" alt="">Technology and IT</span>
            <span><img src="images/icon-asterisk.svg" alt="">Healthcare and pharmaceuticals</span>
            <span><img src="images/icon-asterisk.svg" alt="">Real Estate and Property</span>
            <span><img src="images/icon-asterisk.svg" alt="">Automotive</span>
            <span><img src="images/icon-asterisk.svg" alt="">Government and Public Sector</span>
            <span><img src="images/icon-asterisk.svg" alt="">Retail and FMCG</span>
            <span><img src="images/icon-asterisk.svg" alt="">Education and Training</span>
            <span><img src="images/icon-asterisk.svg" alt="">Technology and IT</span>
            <span><img src="images/icon-asterisk.svg" alt="">Healthcare and pharmaceuticals</span>
            <span><img src="images/icon-asterisk.svg" alt="">Real Estate and Property</span>
            <span><img src="images/icon-asterisk.svg" alt="">Automotive</span>
            <span><img src="images/icon-asterisk.svg" alt="">Government and Public Sector</span>
            <span><img src="images/icon-asterisk.svg" alt="">Retail and FMCG</span>
            <span><img src="images/icon-asterisk.svg" alt="">Education and Training</span>
        </div>

        <div class="scrolling-content">
            <span><img src="images/icon-asterisk.svg" alt="">Technology and IT</span>
            <span><img src="images/icon-asterisk.svg" alt="">Healthcare and pharmaceuticals</span>
            <span><img src="images/icon-asterisk.svg" alt="">Real Estate and Property</span>
            <span><img src="images/icon-asterisk.svg" alt="">Automotive</span>
            <span><img src="images/icon-asterisk.svg" alt="">Government and Public Sector</span>
            <span><img src="images/icon-asterisk.svg" alt="">Retail and FMCG</span>
            <span><img src="images/icon-asterisk.svg" alt="">Education and Training</span>
            <span><img src="images/icon-asterisk.svg" alt="">Technology and IT</span>
            <span><img src="images/icon-asterisk.svg" alt="">Healthcare and pharmaceuticals</span>
            <span><img src="images/icon-asterisk.svg" alt="">Real Estate and Property</span>
            <span><img src="images/icon-asterisk.svg" alt="">Automotive</span>
            <span><img src="images/icon-asterisk.svg" alt="">Government and Public Sector</span>
            <span><img src="images/icon-asterisk.svg" alt="">Retail and FMCG</span>
            <span><img src="images/icon-asterisk.svg" alt="">Education and Training</span>
        </div>

    </div>
    <!-- Scrolling Ticker End -->
</div>
<!-- Scrolling Ticker Section End -->

<!-- About Us Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <!-- About Us Image Box Start -->
                <div class="about-us-image-box wow fadeInUp">
                    <!-- About Image Cirlce Box Start -->
                    <div class="about-image-circle-box">
                        <!-- About Us Image Start -->
                        <div class="about-us-image">
                            <figure class="image-anime">
                                <img src="images/exhibition-stand3.png" alt="">
                            </figure>
                        </div>
                        <!-- About Us Image End -->

                        <!-- Years Experience Circle Start -->
                        <div class="years-experience-circle">
                            <!-- <figure>
                                    <img src="images/years-experience-circle.svg" alt="">
                                </figure> -->

                            <!-- Years Experience Counter Box Start -->
                            <!-- <div class="years-experience-counter-box">
                                    <h2><span class="counter">25</span>+</h2>
                                </div> -->
                            <!-- Years Experience Counter Box End -->
                        </div>
                        <!-- Years Experience Circle End -->
                    </div>
                    <!-- About Image Cirlce Box End -->

                    <!-- About Achievement Box Start -->
                    <div class="about-achievement-box">
                        <!-- About Achievement Box Header Start -->
                        <div class="about-achievement-box-header">
                            <!-- About Achievement Image Start -->
                            <div class="about-achievement-image">
                                <figure>
                                    <img src="images/black-logo.png" alt="">
                                </figure>
                            </div>
                            <!-- About Achievement Image End -->

                            <!-- About Achievement Content Start -->
                            <div class="about-achievement-content">
                                <h3>“Excellence Unveiled at the House of Exhibition”</h3>

                            </div>
                            <!-- About Achievement Content End -->
                        </div>
                        <!-- About Achievement Box Header End -->

                        <!-- About Achievement Box Body Start -->
                        <div class="about-achievement-box-body">
                            <!-- <h3>Celebrating Achievement with Pride</h3> -->
                        </div>
                        <!-- About Achievement Box Body End -->
                    </div>
                    <!-- About Achievement Box End -->
                </div>
                <!-- About Us Image Box End -->
            </div>

            <div class="col-xl-6">
                <!-- About Us Content Start -->
                <div class="about-us-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">10 years of turning blueprints into brand landmarks.</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">As a premier exhibition stand builder, we transform brand visions into immersive physical realities. Our mission is simple: to deliver end-to-end exhibition solutions that exceed industry standards and bring every detail of your design brief to life. With a powerhouse team spanning event strategy, bespoke manufacturing, and meticulous project management, we don’t just build stands—we engineer unique brand experiences that leave a lasting impression.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Us Body Start -->
                    <div class="about-us-body wow fadeInUp" data-wow-delay="0.4s">
                        <!-- About Vision-Mission Box Start -->
                        <div class="about-mission-vision-box tab-content wow fadeInUp" data-wow-delay="0.4s" id="AboutTab">
                            <!-- About Vision-Mission Nav start -->
                            <div class="about-mission-vision-nav">
                                <ul class="nav nav-tabs" id="mvTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-selected="true">Our Mission</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-selected="false">Our Vision</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="goal-tab" data-bs-toggle="tab" data-bs-target="#goal" type="button" role="tab" aria-selected="false">Our Goal</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- About Vision-Mission Nav End -->

                            <!-- About Mission Item Start -->
                            <div class="about-mission-vision-item tab-pane fade" id="mission" role="tabpanel">
                                <!-- Vision Mission Content Start -->
                                <div class="vision-mission-content">
                                    <p>We specialize in crafting bespoke exhibition environments that transform your unique vision into a tangible reality. Our mission is to deliver industry-leading, immersive designs that create unforgettable brand experiences and lasting connections. From initial conceptualization and 3D rendering to on-site installation and dismantling, our team handles every detail with surgical precision</p>
                                </div>
                                <!-- Vision Mission Content End -->
                            </div>
                            <!-- About Mission End -->

                            <!-- About Vision Item Start -->
                            <div class="about-mission-vision-item tab-pane fade show active" id="vision" role="tabpanel">
                                <!-- Vision Mission Content Start -->
                                <div class="vision-mission-content">
                                    <p>Our vision is to redefine the global standard for brand presentation through fearless, innovative design. We aspire to be the world leader in creating immersive, high-impact exhibition experiences that bridge the gap between architectural art and strategic marketing. Whether on an international stage or a local trade show, we provide scalable solutions that maintain premium quality across all borders.</p>
                                </div>
                                <!-- Vision Mission Content End -->
                            </div>
                            <!-- About Vision Item End -->

                            <!-- About Goal Item Start -->
                            <div class="about-mission-vision-item tab-pane fade" id="goal" role="tabpanel">
                                <!-- Vision Mission Content Start -->
                                <div class="vision-mission-content">
                                    <p>Our goal is to engineer industry-leading exhibition spaces that act as a primary catalyst for brand growth and market authority. We focus on delivering precise, high-quality results that consistently exceed every client’s expectations, regardless of the project's scale. Through a relentless pursuit of perfection and a deep understanding of visitor psychology, we build environments where brands and audiences connect seamlessly.</p>
                                </div>
                                <!-- Vision Mission Content End -->
                            </div>
                            <!-- About Goal Item End -->
                        </div>
                        <!-- About Vision-Mission Box End -->

                        <!-- About Us Item List Start -->
                        <div class="about-us-item-list wow fadeInUp" data-wow-delay="0.6s">
                        </div>
                        <!-- About Us Item Lis End -->
                    </div>
                    <!-- About Us Body End -->

                    <!-- About Us Footer Start -->
                    <div class="about-us-footer wow fadeInUp" data-wow-delay="0.8s">
                        <!-- About Us Button Start -->
                        <div class="about-us-btn">
                            <a href="contact.php" class="btn-default">Contact now</a>
                        </div>
                        <!-- About Us Button End -->

                        <!-- About Contact Box Start -->
                        <div class="about-contact-box">
                            <div class="icon-box">
                                <img src="images/icon-phone-white.svg" alt="">
                            </div>
                            <div class="about-contact-box-content">
                                <h3>Call Now!</h3>
                                <p><a href="tel:+971523426256">🇦🇪 +971 52 342 6256</a></p>
                            </div>
                        </div>
                        <!-- About Contact Box End -->
                    </div>
                    <!-- About Us Footer End -->
                </div>
                <!-- About Us Content End -->
            </div>
        </div>
    </div>
    <!-- About Us Section End -->
    <!-- Our Features Section Start -->
    <div class="our-features dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Services</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our services</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row feature-item-list">
                <div class="col-xl-4 col-md-6">
                    <!-- Feature Item Start -->
                    <div class="feature-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="images/icon-feature-item-1.svg" alt="">
                        </div>
                        <div class="feature-item-body">
                            <div class="feature-item-content">
                                <h3>Exhibition Stand Builders in Dubai</h3>
                                <p>Crafting bespoke, high-impact brand spaces with premium finishes and global expertise.</p>
                            </div>
                            <div class="feature-item-btn">
                                <a href="exhibition-stand-builders.php" class="readmore-btn">View More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Feature Item Start -->
                    <div class="feature-item active wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="images/icon-feature-item-2.svg" alt="">
                        </div>
                        <div class="feature-item-body">
                            <div class="feature-item-content">
                                <h3>Interior Fit Out Company in Dubai</h3>
                                <p>Transforming empty shells into functional, high-end, and turnkey luxury environments.</p>
                            </div>
                            <div class="feature-item-btn">
                                <a href="interior-fit-out-company.php" class="readmore-btn">View More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Feature Item Start -->
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="images/icon-feature-item-3.svg" alt="">
                        </div>
                        <div class="feature-item-body">
                            <div class="feature-item-content">
                                <h3>Audio Visual Rental Services in Dubai</h3>
                                <p>Empowering events with cutting-edge technology, immersive sound, and crystal-clear visual displays.</p>
                            </div>
                            <div class="feature-item-btn">
                                <a href="audio-visual-rental-services.php" class="readmore-btn">View More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-4 col-md-6">

                    <div class="feature-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="images/icon-feature-item-4.svg" alt="">
                        </div>
                        <div class="feature-item-body">
                            <div class="feature-item-content">
                                <h3>Stage Production Company in Dubai</h3>
                                <p>Designing dynamic stage setups with custom fabrication and professional lighting solutions.</p>
                            </div>
                            <div class="feature-item-btn">
                                <a href="stage-production.php" class="readmore-btn">View More</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <img src="images/icon-benefits-item-2.svg" alt="">
                        </div>
                        <div class="feature-item-body">
                            <div class="feature-item-content">
                                <h3>Event Management in Dubai</h3>
                                <p>Delivering seamless corporate events and large-scale exhibitions with precision planning and creative execution.</p>
                            </div>
                            <div class="feature-item-btn">
                                <a href="event-management.php" class="readmore-btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="feature-item wow fadeInUp" data-wow-delay="1.0s">
                        <div class="icon-box">
                            <img src="images/icon-benefits-item-1.svg" alt="">
                        </div>
                        <div class="feature-item-body">
                            <div class="feature-item-content">
                                <h3>Graphic Design & Printing in Dubai</h3>
                                <p>Bringing brands to life with high-resolution large format printing and bespoke visual identity solutions.</p>
                            </div>
                            <div class="feature-item-btn">
                                <a href="graphic-design-printing.php" class="readmore-btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                        <p>Join our team and help weave innovation, quality, and success together worldwide.</p>
                        <ul>
                            <li><span class="counter">4.1</span>/5</li>
                            <li>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li>Our 650 Review</li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Features Section End -->
    <!-- Our Benefits Section Start -->
    <div class="our-benefits">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Our Benefits Content Start -->
                    <div class="our-benefits-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Key Benefits</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Key advantages that ensure your events stand out</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Our Benefits Item List Start -->
                        <div class="benefits-item-list">
                            <!-- Our Benefits Item Start -->
                            <div class="benefits-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="images/icon-benefits-item-1.svg" alt="">
                                </div>
                                <div class="benefits-item-content">
                                    <h3>Bespoke Structural Engineering</h3>
                                    <p>We go beyond standard booths to build custom, high-end exhibition stands that perfectly reflect your brand identity and attract maximum foot traffic.</p>
                                </div>
                            </div>
                            <!-- Our Benefits Item End -->

                            <!-- Our Benefits Item Start -->
                            <div class="benefits-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="images/icon-benefits-item-2.svg" alt="">
                                </div>
                                <div class="benefits-item-content">
                                    <h3>Turnkey Project Management</h3>
                                    <p>From initial manufacturing to final onsite installation, our dedicated teams handle every technical detail to ensure a stress-free and professional experience.</p>
                                </div>
                            </div>
                            <!-- Our Benefits Item End -->
                        </div>
                        <!-- Our Benefits Item List End -->

                        <!-- Our Benefits Footer Start -->
                        <div class="our-benefits-footer wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Our Benefits Button Start -->
                            <!-- <div class="our-benefits-btn">
                                <a href="schedule.php" class="btn-default">View Our Schedule</a>
                            </div> -->
                            <!-- Our Benefits Button End -->

                            <!-- About Contact Box Start -->
                            <div class="about-benefits-footer d-flex flex-wrap gap-4 wow fadeInUp" data-wow-delay="0.6s">

                                <div class="about-contact-box">
                                    <div class="icon-box">
                                        <img src="images/icon-phone-white.svg" alt="Phone" class="img-fluid">
                                    </div>
                                    <div class="about-contact-box-content">
                                        <h3>Call Now!</h3>
                                        <p><a href="tel:+971523426256">🇦🇪 +971 52 342 6256</a></p>
                                    </div>
                                </div>

                                <div class="about-contact-box">
                                    <div class="icon-box" style="background:"> <img src="images/whatsapp.png" alt="WhatsApp" class="img-fluid" style="width: 25px; height: 25px;">
                                    </div>
                                    <div class="about-contact-box-content">
                                        <h3>WhatsApp</h3>
                                        <p><a href="https://wa.me/971555269397" target="_blank">🇦🇪 +971 55 526 9397</a></p>
                                    </div>
                                </div>

                            </div>

                            <style>
                                /* Responsive Fix for the container */
                                .about-benefits-footer {
                                    display: flex;
                                    flex-wrap: wrap;
                                    /* Allows stacking on small mobile screens */
                                    gap: 20px;
                                }

                                @media (max-width: 576px) {
                                    .about-contact-box {
                                        width: 100%;
                                        /* Full width on very small screens */
                                        margin-bottom: 10px;
                                    }
                                }
                            </style>

                            <!-- About Contact Box End -->
                        </div>
                        <!-- Our Benefits Footer End -->
                    </div>
                    <!-- Our Benefits Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Our Benefits Images Start -->
                    <div class="our-benefits-images">
                        <!-- Our Benefits Image Start -->
                        <div class="our-benefits-img image-1">
                            <figure class="image-anime reveal">
                                <img src="images/about-us-benefit-2.png" alt="">
                            </figure>
                        </div>
                        <!-- Our Benefits Image End -->

                        <!-- Our Benefits Image Start -->
                        <div class="our-benefits-img image-2">
                            <figure class="image-anime reveal">
                                <img src="images/about-us-benefit-1.png" alt="">
                            </figure>
                        </div>
                        <!-- Our Benefits Image End -->
                    </div>
                    <!-- Why Choose Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Benefits Section End -->

    <!-- <div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-xl-6">
                <div class="about-us-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Speakers</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Voices of Innovation & Industry Leadership</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We bring together a diverse lineup of visionaries, industry pioneers, and creative strategists. Our speakers don't just share knowledge; they spark the ideas that redefine how brands connect with their audiences in the modern exhibition landscape.</p>
                    </div>
                    <div class="about-us-body wow fadeInUp" data-wow-delay="0.4s">
                        <div class="about-mission-vision-box tab-content wow fadeInUp" data-wow-delay="0.4s" id="AboutTab">
                            <div class="about-mission-vision-nav">
                                <ul class="nav nav-tabs" id="mvTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-selected="true">Our Impact</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-selected="false">Expertise</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="about-mission-vision-item tab-pane fade show active" id="mission" role="tabpanel">
                                <div class="vision-mission-content">
                                    <p>Our speakers deliver actionable insights that bridge the gap between creative design and commercial success, ensuring your brand stays ahead of the curve.</p>
                                </div>
                            </div>

                            <div class="about-mission-vision-item tab-pane fade" id="vision" role="tabpanel">
                                <div class="vision-mission-content">
                                    <p>From sustainable booth architecture to the future of AI in exhibitions, our experts cover the topics that matter most to modern exhibitors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-us-item-list wow fadeInUp" data-wow-delay="0.6s">
                            <div class="about-us-item">
                                <div class="icon-box">
                                    <img src="images/icon-about-us-item-1.svg" alt="Icon">
                                </div>
                                <div class="about-us-item-content">
                                    <h3>Engage with global thought leaders.</h3>
                                </div>
                            </div>

                            <div class="about-us-item">
                                <div class="icon-box">
                                    <img src="images/icon-about-us-item-2.svg" alt="Icon">
                                </div>
                                <div class="about-us-item-content">
                                    <h3>Interactive Q&A and networking sessions.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-us-footer wow fadeInUp" data-wow-delay="0.8s">
                        <div class="about-us-btn">
                            <a href="speakers.php" class="btn-default">View All Speakers</a>
                        </div>

                        <div class="about-contact-box">
                            <div class="icon-box">
                                <img src="images/icon-phone-white.svg" alt="Phone">
                            </div>
                            <div class="about-contact-box-content">
                                <h3>Inquiry?</h3>
                                <p><a href="tel:+971523426256">🇦🇪 +971 52 342 6256</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="about-us-image-box wow fadeInUp">
                    <div class="about-image-circle-box">
                        <div class="about-us-image">
                            <figure class="image-anime">
                                <img src="images/exhibition-speaker.png" alt="Keynote Speaker">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> -->
    <!-- Our Achievements Section Start -->
    <div class="our-achievements dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Achievements Image Start -->
                    <div class="achievements-image wow fadeInUp">
                        <figure>
                            <img src="images/our-achievement.png" alt="">
                        </figure>
                    </div>
                    <!-- Achievements Image End -->
                </div>

                <div class="col-xl-6">
                    <div class="achievements-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our Achievements</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Our milestones achievement over the Years</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">As a premier event stand partner, House of Exhibitions focuses on turning your vision into a structural masterpiece. Our journey is marked by years of growth, innovation, and successful event experiences that have brought people together from around the world. We take pride in delivering durable, high-impact designs that serve as the perfect stage for global networking and business growth.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Achievements List Start -->
                        <!-- <div class="achievement-items-list wow fadeInUp" data-wow-delay="0.4s"> -->
                        <!-- Achievement Item Start -->
                        <!-- <div class="achievement-item">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/evenza/images/icon-our-achievement-1.svg" alt="">
                                </div>
                                <div class="achievement-item-content">
                                    <h3><span class="counter">500</span>+</h3>
                                    <p>Global Events Delivered</p>
                                </div>
                            </div> -->
                        <!-- Achievement Item End -->

                        <!-- Achievement Item Start -->
                        <!-- <div class="achievement-item">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/evenza/images/icon-our-achievement-2.svg" alt="">
                                </div>
                                <div class="achievement-item-content">
                                    <h3><span class="counter">100</span>K+</h3>
                                    <p>Attende Connect Worldwide</p>
                                </div>
                            </div> -->
                        <!-- Achievement Item End -->

                        <!-- Achievement Item Start -->
                        <!-- <div class="achievement-item">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/evenza/images/icon-our-achievement-3.svg" alt="">
                                </div>
                                <div class="achievement-item-content">
                                    <h3><span class="counter">150</span>+</h3>
                                    <p>Industry-Leading Speakers</p>
                                </div>
                            </div> -->
                        <!-- Achievement Item End -->

                        <!-- Achievement Item Start -->
                        <!-- <div class="achievement-item">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/evenza/images/icon-our-achievement-4.svg" alt="">
                                </div>
                                <div class="achievement-item-content">
                                    <h3><span class="counter">80</span>+</h3>
                                    <p>Citie Host Across 10+ Countrie</p>
                                </div>
                            </div> -->
                        <!-- Achievement Item End -->
                        <!-- </div> -->
                        <!-- Achievements List End -->

                        <!-- Achievements Content Button Start -->
                        <!-- <div class="achievements-content-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="schedule.php" class="btn-default btn-highlighted">Explore Schedule</a>
                        </div> -->
                        <!-- Achievements Content Button End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Achievements Section End -->
    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 order-2 order-xl-1">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Our Major Venues We Work With</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">House of Exhibitions has a proven track record of designing and executing high-impact stands across the world's most prestigious exhibition centers. We understand the unique logistics, technical requirements, and scale of these global hubs.</p>
                        </div>
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.4s">
                            <div class="about-mission-vision-box wow fadeInUp" data-wow-delay="0.4s">
                                <div class="about-mission-vision-nav">
                                    <ul class="nav nav-tabs" id="speakerTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="impact-link" data-bs-toggle="tab" data-bs-target="#impact-pane" type="button" role="tab" aria-controls="impact-pane" aria-selected="true">Dubai World Trade Centre</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="expert-link" data-bs-toggle="tab" data-bs-target="#expert-pane" type="button" role="tab" aria-controls="expert-pane" aria-selected="false">Dubai Exhibition Centre</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="festival-link" data-bs-toggle="tab" data-bs-target="#festival-pane" type="button" role="tab" aria-controls="festival-pane" aria-selected="false">Festival Arena</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="coca-cola-link" data-bs-toggle="tab" data-bs-target="#coca-cola-pane" type="button" role="tab" aria-controls="coca-cola-pane" aria-selected="false">Coca-Cola Arena</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="hotel-link" data-bs-toggle="tab" data-bs-target="#hotel-pane" type="button" role="tab" aria-controls="hotel-pane" aria-selected="false">Major Hotel Venues</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content mt-3" id="speakerTabContent">
                                    <div class="tab-pane fade show active" id="impact-pane" role="tabpanel" aria-labelledby="impact-link">
                                        <div class="vision-mission-content">
                                            <p>As the Middle East’s premier event destination, Dubai World Trade Centre requires a level of precision and scale that House of Exhibitions excels in. Our journey is marked by years of growth and innovation at this iconic venue, where we transform empty halls into immersive brand environments.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="expert-pane" role="tabpanel" aria-labelledby="expert-link">
                                        <div class="vision-mission-content">
                                            <p>Located in the visionary Expo City Dubai, the Dubai Exhibition Centre is the gold standard for modern, large-scale activations. At House of Exhibitions, we align our design philosophy with the DEC’s focus on sustainability and cutting-edge technology.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="festival-pane" role="tabpanel" aria-labelledby="festival-link">
                                        <div class="vision-mission-content">
                                            <p>The Festival Arena offers a unique, pillar-less expanse that allows for total creative freedom. House of Exhibitions leverages this versatile space to build grand-scale custom stands and immersive corporate events that require uninterrupted sightlines and massive floor-to-ceiling branding.</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="coca-cola-pane" role="tabpanel" aria-labelledby="coca-cola-link">
                                        <div class="vision-mission-content">
                                            <p>Navigating the complex infrastructure of the region's largest indoor multipurpose arena is a challenge we welcome. At the Coca-Cola Arena, we focus on high-spec technical integration and dynamic structures that match the energy of live entertainment and global corporate summits.</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="hotel-pane" role="tabpanel" aria-labelledby="hotel-link">
                                        <div class="vision-mission-content">
                                            <p>From the luxury ballrooms of Atlantis The Royal to the Madinat Jumeirah, we adapt our designs to fit the sophisticated aesthetics of Dubai’s five-star hotels. Our team specializes in "boutique" exhibition excellence—delivering premium, high-finish stands within the logistical constraints of luxury hospitality environments.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 order-1 order-xl-2 mb-4 mb-xl-0">
                    <div class="about-us-image-box wow fadeInUp">
                        <div class="about-image-circle-box">
                            <div class="about-us-image">
                                <figure class="image-anime">
                                    <img src="images/major-venue.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Faqs Section Start -->
    <?php include 'faq.php'; ?>
    <!-- Our Faqs Section End -->

    <div class="our-clients-section" style="margin-bottom: 60px;">
        <div class="clients-header" style="background-color: #734BDF; padding: 40px 0; margin-bottom: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 style="color: #fff; margin: 0; font-size: 42px; font-weight: 700;">Our Clients</h2>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .custom-logo-grid {
                display: grid;
                /* Mobile par 2 logos ek line mein */
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
                /* Logos ke beech ka space */
                align-items: center;
                justify-items: center;
            }

            /* Tablet View (5 logos per line) */
            @media (min-width: 768px) {
                .custom-logo-grid {
                    grid-template-columns: repeat(5, 1fr);
                }
            }

            /* Desktop View (10 logos per line) */
            @media (min-width: 992px) {
                .custom-logo-grid {
                    grid-template-columns: repeat(10, 1fr);
                }
            }

            .client-logo-item img {
                max-height: 60px;
                width: 100%;
                object-fit: contain;
            }
        </style>

        <div class="container logo-section-half">
            <div class="custom-logo-grid">
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.1s">
                    <img src="images/client-logo-1.png" alt="Client Logo 1">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.2s">
                    <img src="images/client-logo-2.png" alt="Client Logo 2">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.3s">
                    <img src="images/client-logo-3.png" alt="Client Logo 3">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.4s">
                    <img src="images/client-logo-4.png" alt="Client Logo 4">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.5s">
                    <img src="images/client-logo-5.png" alt="Client Logo 5">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.6s">
                    <img src="images/client-logo-6.png" alt="Client Logo 6">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.7s">
                    <img src="images/client-logo-7.png" alt="Client Logo 7">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.8s">
                    <img src="images/client-logo-8.png" alt="Client Logo 8">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.9s">
                    <img src="images/client-logo-9.png" alt="Client Logo 9">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="1.0s">
                    <img src="images/client-logo-10.png" alt="Client Logo 10">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.1s">
                    <img src="images/client-logo-11.png" alt="Client Logo 11">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.2s">
                    <img src="images/client-logo-12.png" alt="Client Logo 12">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.3s">
                    <img src="images/client-logo-13.png" alt="Client Logo 13">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.4s">
                    <img src="images/client-logo-14.png" alt="Client Logo 14">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.5s">
                    <img src="images/client-logo-15.png" alt="Client Logo 15">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.6s">
                    <img src="images/client-logo-16.png" alt="Client Logo 16">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.7s">
                    <img src="images/client-logo-17.png" alt="Client Logo 17">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.8s">
                    <img src="images/client-logo-18.png" alt="Client Logo 18">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.9s">
                    <img src="images/client-logo-19.png" alt="Client Logo 19">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="1.0s">
                    <img src="images/client-logo-20.png" alt="Client Logo 20">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.1s">
                    <img src="images/client-logo-21.png" alt="Client Logo 21">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.2s">
                    <img src="images/client-logo-22.png" alt="Client Logo 22">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.3s">
                    <img src="images/client-logo-23.png" alt="Client Logo 23">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.4s">
                    <img src="images/client-logo-24.png" alt="Client Logo 24">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.5s">
                    <img src="images/client-logo-25.png" alt="Client Logo 25">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.6s">
                    <img src="images/client-logo-26.png" alt="Client Logo 26">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.7s">
                    <img src="images/client-logo-27.png" alt="Client Logo 27">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.8s">
                    <img src="images/client-logo-28.png" alt="Client Logo 28">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.9s">
                    <img src="images/client-logo-29.png" alt="Client Logo 29">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="1.0s">
                    <img src="images/client-logo-30.png" alt="Client Logo 30">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.1s">
                    <img src="images/client-logo-31.png" alt="Client Logo 31">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.2s">
                    <img src="images/client-logo-32.png" alt="Client Logo 32">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.3s">
                    <img src="images/client-logo-33.png" alt="Client Logo 33">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.4s">
                    <img src="images/client-logo-34.png" alt="Client Logo 34">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.5s">
                    <img src="images/client-logo-35.png" alt="Client Logo 35">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.6s">
                    <img src="images/client-logo-36.png" alt="Client Logo 36">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.7s">
                    <img src="images/client-logo-37.png" alt="Client Logo 37">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.8s">
                    <img src="images/client-logo-38.png" alt="Client Logo 38">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="0.9s">
                    <img src="images/client-logo-39.png" alt="Client Logo 39">
                </div>
                <div class="client-logo-item wow fadeInUp" data-wow-delay="1.0s">
                    <img src="images/client-logo-40.png" alt="Client Logo 40">
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "incl/footer.php"; ?>
</div>