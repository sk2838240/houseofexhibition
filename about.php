<?php include "incl/header.php"; ?>

<!-- Page Header Section Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">About us</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">home</a></li>
                            <i class="fa-solid fa-angles-right" style="color: #fff !important;padding: 3px 25px 0px 20px;"></i>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- About Us Section Start -->
 <style>
    @media (max-width: 991px) {
    /* Ensure the column takes full width and removes any extra padding */
    .about-us .col-xl-6 {
        padding-left: 0;
        padding-right: 0;
    }

    /* Force the image container to span 100% of the screen width */
    .about-us-image, 
    .image-anime, 
    .about-image-circle-box {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 auto !important;
        border-radius: 0 !important; /* Removes circular clipping if present */
    }

    /* Make the image itself fill the container */
    .about-us-image img {
        width: 100% !important;
        height: auto !important;
        display: block;
    }

    /* Keeps the CEO text centered */
    .ceo-details {
        text-align: center;
        padding: 0 15px; /* Adds a little breathing room for the text */
    }
}
/* Ensure left padding looks good on desktop but resets on mobile */
@media (min-width: 992px) {
    .section-title.ps-md-5 {
        padding-left: 3rem !important; /* Adjust this value for more/less space */
    }
}

@media (max-width: 991px) {
    /* Reset padding for mobile so text isn't pushed too far right */
    .section-title {
        padding-left: 15px !important; 
        padding-right: 15px !important;
        text-align: left; /* Optional: centers text on mobile */
    }

    /* Make image cover the area and center */
    .about-us-image-box, 
    .about-image-circle-box, 
    .about-us-image {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 auto;
    }

    .about-us-image img {
        width: 100%;
        height: auto;
        border-radius: 0; /* Use this if the "circle" box is clipping your image */
    }
}

/* Clean up the inline styles for the CEO text */
.ceo-details h4 {
    font-size: 26px;
    color: #1a1a1a;
    margin: 0;
    font-weight: 700;
}

.ceo-details p {
    color: #666;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: 2px;
    margin-top: 5px;
}
 </style>
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-xl-6 order-last order-xl-first">
                <div class="about-us-content">
                    <div class="section-title ps-md-5">
                        <h3 class="wow fadeInUp">About Us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Defining Excellence with House of Exhibitions</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            At House of Exhibitions, we transform temporary spaces into enduring brand landmarks. Our expertise lies in crafting high-impact exhibition environments that transcend traditional booth design to become immersive brand experiences.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                            Our methodology is rooted in a structured technical chronology: starting with strategic consultation to define your commercial goals, followed by bespoke 3D conceptualization to bring your vision to life. From precision engineering and in-house fabrication to flawless on-site installation, we manage every detail. The result is a captivating, high-performance space that commands the exhibition floor and maximizes meaningful attendee engagement.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 order-first order-xl-last">
                <div class="about-us-image-box wow fadeInUp text-center">
                    <div class="about-image-circle-box">
                        <div class="about-us-image">
                            <figure class="image-anime">
                                <img src="images/our-speaker.png" alt="Nikhil Thakur">
                            </figure>
                        </div>
                    </div>

                    <div class="ceo-details" style="position: relative; z-index: 99; margin-top: 25px; clear: both; display: inline-block; width: 100%;">
                        <h4 style="font-size: 26px; color: #1a1a1a; margin: 0; font-weight: 700;">Nikhil Thakur</h4>
                        <p style="color: #666; font-weight: 600; text-transform: uppercase; font-size: 14px; letter-spacing: 2px; margin-top: 5px;">CEO</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>



<!-- About Us Section End -->
<div class="core-values-section" style="padding: 80px 0; background-color: #f9f9f9;">
    <div class="container">

        <div class="row align-items-center mb-5 pb-lg-4">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="core-value-image">
                    <figure class="image-anime reveal">
                        <img src="images/our-mission.png" alt="Our Mission" class="img-fluid rounded shadow-sm">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="core-value-content ps-lg-5">
                    <div class="section-title mb-3">
                        <h2 style="font-size: 36px; margin-bottom: 20px; margin-top:20px;">Our Mission</h2>
                    </div>
                    <p>We craft bespoke exhibition environments that turn your vision into reality. Our mission is to deliver industry-leading designs that foster unforgettable brand experiences and create physical landmarks that command attention on any exhibition floor. Our passion lies in the intersection of art and engineering, transforming raw space into a powerful marketing tool that captures your brand’s essence and delivers measurable success at every event.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5 pb-lg-4">
            <div class="col-lg-6 order-lg-1 order-2 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="core-value-content pe-lg-5">
                    <div class="section-title mb-3">
                        <h2 style="font-size: 36px; margin-bottom: 20px;  margin-top:20px;">Our Vision</h2>
                    </div>
                    <p>Our vision is to redefine brand presentation through innovative design. We aim to be the global leader in creating immersive and impactful exhibition experiences that set new standards for engagement, aesthetics, and architectural excellence. We envision a future where every event space is an interactive journey, seamlessly blending digital technology with physical craftsmanship. By constantly pushing the boundaries of what is possible on the exhibition floor, we strive to transform temporary installations into timeless brand legacies that resonate across borders and industries.</p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 wow fadeInRight" data-wow-delay="0.4s">
                <div class="core-value-image">
                    <figure class="image-anime reveal">
                        <img src="images/our-vision.png" alt="Our Vision" class="img-fluid rounded shadow-sm">
                    </figure>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.5s">
                <div class="core-value-image">
                    <figure class="image-anime reveal">
                        <img src="images/our-goal.png" alt="Our Goal" class="img-fluid rounded shadow-sm">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.6s">
                <div class="core-value-content ps-lg-5">
                    <div class="section-title mb-3">
                        <h2 style="font-size: 36px; margin-bottom: 20px;  margin-top:20px;">Our Goal</h2>
                    </div>
                    <p>Our goal is to build industry-leading exhibition spaces that drive brand growth. We focus on delivering precise, high-quality results that exceed expectations while maintaining a seamless, turnkey process from initial fabrication to final installation. Ultimately, we measure our success by the success of our clients; we aim to maximize your return on investment by creating high-traffic environments that facilitate meaningful networking and lead generation. We are committed to operational excellence, ensuring that every project is delivered on time, within budget, and with the uncompromising quality that has become the hallmark of House of Exhibitions.</p>
                </div>
            </div>
        </div>

    </div>
</div>

    

<!-- Our Approach Section Start -->
<div class="our-approach dark-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Our Approach</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Our innovative strategy for seamless event execution.</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <!-- Approach Item Start -->
                <a href="contact.php">
                    <div class="approach-item wow fadeInUp">
                        <!-- Approach Item Image Start -->
                        <div class="approach-item-image">
                            <figure>
                                <img src="images/about-us-Precision-Fabrication.png" alt="">
                            </figure>
                        </div>
                        <!-- Approach Item Image End -->

                        <!-- Approach Item Body Start -->
                        <div class="approach-item-body">
                            <div class="icon-box">
                                <img src="images/icon-approach-1.svg" alt="">
                            </div>
                            <div class="approach-item-content">
                                <h3>Precision Fabrication</h3>
                                <p>Expert manufacturing ensures every structural component is built to perfection, meeting high-quality safety and design standards.</p>
                            </div>
                        </div>
                        <!-- Approach Item Body End -->
                    </div>
                </a>
                <!-- Approach Item End -->
            </div>

            <div class="col-xl-4 col-md-6">
                <!-- Approach Item Start -->
                <a href="contact.php">
                    <div class="approach-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Approach Item Image Start -->
                        <div class="approach-item-image">
                            <figure>
                                <img src="images/about-us-Tailored-Structural-Design.png" alt="">
                            </figure>
                        </div>
                        <!-- Approach Item Image End -->

                        <!-- Approach Item Body Start -->
                        <div class="approach-item-body">
                            <div class="icon-box">
                                <img src="images/icon-approach-2.svg" alt="">
                            </div>
                            <div class="approach-item-content">
                                <h3>Tailored Structural Design</h3>
                                <p>Custom-built layouts ensure your booth isn't just a standard box, but a unique environment that reflects your specific brand identity.</p>
                            </div>
                        </div>
                        <!-- Approach Item Body End -->
                    </div>
                </a>
                <!-- Approach Item End -->
            </div>

            <div class="col-xl-4 col-md-6">
                <!-- Approach Item Start -->
                <a href="contact.php">
                    <div class="approach-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Approach Item Image Start -->
                        <div class="approach-item-image">
                            <figure>
                                <img src="images/about-us-Strategic-Onsite-Coordination.png" alt="">
                            </figure>
                        </div>
                        <!-- Approach Item Image End -->

                        <!-- Approach Item Body Start -->
                        <div class="approach-item-body">
                            <div class="icon-box">
                                <img src="images/icon-approach-3.svg" alt="">
                            </div>
                            <div class="approach-item-content">
                                <h3>Strategic Onsite Coordination</h3>
                                <p>Professional project management ensures the entire build, from logistics to final installation, is handled with total efficiency.</p>
                            </div>
                        </div>
                        <!-- Approach Item Body End -->
                    </div>
                </a>
                <!-- Approach Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Approach Section End -->

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

<!-- Our Skills Section Start -->
<div class="our-skills">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <!-- Skills Image Box Start -->
                <div class="skills-image-box">
                    <!-- Skills Image Box 1 Start -->
                    <div class="skills-image-box-1">
                        <!-- Skills Image Start -->
                        <div class="skills-image image-1">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-image-1.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Skills Image End -->

                        <!-- Skills Image Start -->
                        <div class="skills-image image-2">
                            <figure class="image-anime reveal">
                                <img src="images/event-schedule-image-4.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Skills Image End -->
                    </div>
                    <!-- Skills Image Box 1 End -->

                    <!-- Skills Image Box 2 Start -->
                    <div class="skills-image-box-2">
                        <!-- Skills Image Start -->
                        <div class="skills-image image-3">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-image-3.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Skills Image End -->

                        <!-- Skills Image Start -->
                        <div class="skills-image image-4">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-image-4.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Skills Image End -->
                    </div>
                    <!-- Skills Image Box 1 End -->

                    <!-- Skills Schedule Circle Start -->
                    <div class="skills-schedule-circle">
                        <a href="contact.php">
                            <img src="images/schedule.png" alt="">
                        </a>
                    </div>
                    <!-- Skills Schedule Circle End -->
                </div>
                <!--  Skills Image Box End -->
            </div>

            <div class="col-xl-6">
                <!-- Skills Content Start -->
                <div class="skills-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Expert Skill</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Highlighting the specialized skills our experts offer</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Our team brings together a refined blend of technical expertise, creative thinking, and hands-on experience to deliver work that actually makes a difference. By bridging the gap between complex technology and user-centric design, we transform challenges into scalable solutions that drive measurable growth.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Skills Content Body Start -->
                    <div class="skills-content-body">
                        <!-- Skills Box Start -->
                        <div class="expert-skills-box">
                            <!-- Our Skills List Start -->
                            <div class="skills-progress-list">
                                <!-- Skills Progress Bar Start -->
                                <div class="skills-progress-bar">
                                    <!-- Skill Item Start -->
                                    <div class="skillbar" data-percent="91%">
                                        <div class="skill-data">
                                            <div class="skill-title">Skilled Worker</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar"></div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                </div>
                                <!-- Skills Progress Bar End -->

                                <!-- Skills Progress Bar Start -->
                                <div class="skills-progress-bar">
                                    <!-- Skill Item Start -->
                                    <div class="skillbar" data-percent="86%">
                                        <div class="skill-data">
                                            <div class="skill-title">Highly Skilled Team</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar"></div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                </div>
                                <!-- Skills Progress Bar End -->

                                <!-- Skills Progress Bar Start -->
                                <div class="skills-progress-bar">
                                    <!-- Skill Item Start -->
                                    <div class="skillbar" data-percent="66%">
                                        <div class="skill-data">
                                            <div class="skill-title">Technical & IT Expertise</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar"></div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                </div>
                                <!-- Skills Progress Bar End -->
                            </div>
                            <!-- Skills List End -->

                            <!-- Skills Button Start -->
                            <div class="our-skills-btn wow fadeInUp" data-wow-delay="0.2s">
                                <a href="contact.php" class="btn-default">Contact Us</a>
                            </div>
                            <!-- Skills Button End -->
                        </div>
                        <!-- Skills Box End -->

                        <!-- Skills Achievement Box Start -->
                        <div class="skills-achievement-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="skills-achievement-box-image">
                                <figure>
                                    <img src="images/black-logo.png" alt="">
                                </figure>
                            </div>
                            <div class="skills-achievement-box-content">
                                <h3>"Excellence Unveiled at the House of Exhibition"</h3>
                            </div>
                        </div>
                        <!-- Skills Achievement Box End -->
                    </div>
                    <!-- Skills Content Body End -->
                </div>
                <!-- Skills Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Skills Section End -->



<!-- Our Faqs Section Start -->
<?php include "faq.php"; ?>
<!-- Our Faqs Section End -->
<?php include "incl/footer.php"; ?>