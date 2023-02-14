<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Mongotexh" content="MongoTech is a Software Company">
    <title>MongoTech &#8211; Software & Digital Agency</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/fa.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="mouse-cursor"></div>
    <div class="mouse-cursor-inner"></div>

    <div class="preloaderBg" id="preloader" onload="preloader()">
        <div class="preloader"></div>
        <div class="preloader2"></div>
    </div>

    <header class="header">
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <div class="mobile-menu-list">
                            <a href="#" class="mobile-menu-link search-box-outer"><i class="fa fa-search"></i></a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fa fa-stream"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown"> <a class="nav-link " href="index.php">Home</a> </li>
                            <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                        </ul>
                        <div class="header-nav-right">
                            <div class="header-nav-search">
                                <a href="#" class="header-nav-link search-box-outer"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="header-btn">
                                <a class="main-btn">
                                    <span class="circle" aria-hidden="true">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Get Quote</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>

    <main class="main">

        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>


        <div class="contact-area py-120">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-lg-8 align-self-center">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                    <h2>Get In Touch</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page randomised words which don't look even slightly when looking
                                        at its layout. </p>
                                </div>
                                <form method="post" action="assets/php/contact.php" id="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Your Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="5" class="form-control"
                                            placeholder="Write Your Message"></textarea>
                                    </div>
                                    <a class="main-btn" href="about.php">
                                        <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text ps-3   ">Send
                                            Message </span>
                                    </a>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-messege text-success"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-content">
                                <div class="contact-info">
                                    <div class="contact-info-icon contact-icon-1">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Office Address</h5>
                                        <p>landmark plaza, Office No.706, 7th Floor, I.I
                                            Chundrigar Rd, Karachi, Karachi City, Sindh 74000</p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon contact-icon-2">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Call Us</h5>
                                        <p>
                                            +92 320 6664670

                                        </p>
                                        <p>
                                            +44 7360 231902
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon contact-icon-3">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Email Us</h5>
                                        <p><a href="mailto:info@mongotech.net" class="__cf_email__">info@mongotech.net
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon contact-icon-4">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Office Open</h5>
                                        <p>24/7 (00AM - 00AM)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14481.49739618801!2d67.0159819!3d24.851061!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x190c48996435df53!2sMongo%20Tech!5e0!3m2!1sen!2s!4v1664111548322!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="assets/img/logo/logo.png" alt="">
                            </a>
                            <p class="mb-3">
                                We are many variations of passages available but the majority have suffered alteration
                                in some form by injected humour words believable.
                            </p>
                            <ul class="footer-contact">
                                <li><a href="tel:+21236547898"><i class="fa fa-phone"></i>+92 320 6664670</a></li>
                                <li><a href="tel:+21236547898"><i class="fa fa-phone"></i>+44 7360 231902</a></li>
                                <li><i class="fa fa-map-marker-alt"></i> landmark plaza, Office No.706, 7th Floor, I.I
                                    Chundrigar Rd, Karachi, Karachi City, Sindh 74000</li>
                                <li><a href="mailto:info@mongotech.net"><i
                                            class="fa fa-envelope"></i>info@mongotech.net</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="#home"><i class="fas fa-caret-right"></i> Home</a></li>
                                <li><a href="#projects"><i class="fas fa-caret-right"></i> Projects</a></li>
                                <li><a href="#services"><i class="fas fa-caret-right"></i> Services</a></li>
                                <li><a href="#about"><i class="fas fa-caret-right"></i> About Us</a></li>
                                <li><a href="contact.php"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Our Services</h4>
                            <ul class="footer-list">
                                <li><a href="Webdevelopment.php"><i class="fas fa-caret-right"></i> Web Design &
                                        Development</a></li>
                                <li><a href="Wordpress.php"><i class="fas fa-caret-right"></i> WordPress
                                        Development</a></li>
                                <li><a href="php.php"><i class="fas fa-caret-right"></i> PHP Development</a></li>
                                <li><a href="services.php"><i class="fas fa-caret-right"></i> Logo Designing</a></li>
                                <li><a href="Webdevelopment.php"><i class="fas fa-caret-right"></i> Domain &
                                        Hosting</a></li>
                                <li><a href="services.php"><i class="fas fa-caret-right"></i> Digital Merketing</a>
                                </li>
                                <li><a href="seo.php"><i class="fas fa-caret-right"></i> SEO</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Newsletter</h4>
                            <div class="footer-newsletter">
                                <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                        <!-- <button class="theme-btn" type="submit">
                                            <span class="fa fa-envelope"></span> Subscribe Now
                                        </button> -->
                                        <a class="main-btn mt-4">
                                            <span class="circle" aria-hidden="true">
                                                <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Subscribe</span>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="https://mongotech.net/"> MongoTech </a>
                            All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="http://facebook.com/mongo.tech" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="//twitter.com/mongo.tech"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a target="_blank" href="//linkedin.com/mongo.tech"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="//youtube.com/mongo.tech"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>