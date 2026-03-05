<?php include "incl/header.php"; ?>
    <!-- Page Header Section Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">home </a></li>
                                <i class="fa-solid fa-angles-right" style="color: #fff !important;padding: 3px 25px 0px 20px;"></i>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Contact Image Form Box Start -->
                    <div class="contact-image-form-box">                        
                        <div class="contact-image-box">
                            <!-- Contact Us Image Start -->
                            <div class="contact-us-image">
                                <figure>
                                    <img src="images/contact-us-image.png" alt="">
                                </figure>
                            </div>
                            <!-- Contact Us Image End -->

                            <!-- Contact Info List Start -->
                            <div class="contact-info-list wow fadeInUp">
                                <!-- Conatct Info Item Start -->
                                <div class="contact-info-item">
                                    <div class="icon-box">
                                        <img src="images/icon-phone-white.svg" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <h3>Call Now</h3>
                                        <p><a href="tel:+971523426256">🇦🇪 +971 52 342 6256</a></p>
                                    </div>
                                </div>
                                <!-- Conatct Info Item End -->

                                <!-- Conatct Info Item Start -->
                                <div class="contact-info-item">
                                    <div class="icon-box">
                                        <img src="images/icon-mail-white.svg" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <h3>E-mail Us!</h3>
                                        <p><a href="mailto:info@houseofexhibitions.com">info@houseofexhibitions.com</a></p>
                                    </div>
                                </div>
                                <!-- Conatct Info Item End -->

                                <!-- Conatct Info Item Start -->
                                <div class="contact-info-item location-item">
                                    <div class="icon-box">
                                        <img src="images/icon-location-white.svg" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <h3>Our Location!</h3>
                                        <p>Warehouse no 13 Ras al Khor Industrial area 1, Dubai, United Arab Emirates</p>
                                    </div>
                                </div>
                                <!-- Conatct Info Item End -->
                            </div>
                            <!-- Contact Info List End -->
                        </div>

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Contact Us</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch with our team anytime today</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Our team is always here to listen, support, and guide you. Whether you have questions, need assistance, or want to discuss your next project or event.</p>  
                            </div>
                            <!-- Section Title End -->
                            
                            <!-- Contact Form Start -->
                            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
            
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Mobile Number" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
            
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="E-mail Address" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
            
                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Write your message here..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
            
                                    <div class="col-lg-12">
                                        <div class="contact-form-btn">
                                            <button type="submit" class="btn-default"><span>Send a Message</span></button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form End -->
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Image Form Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps?q=25.17247200012207,55.3381233215332&z=17&hl=en&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->
<?php include "incl/footer.php"; ?>