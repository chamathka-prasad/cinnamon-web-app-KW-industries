<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>KW Industries</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/font-awesome5.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/shop.css">
    <link rel="icon" href="../assets/originalLogo.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Modernizr -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <style>
        /* Scrollbar Styling */
        html {
            overflow-y: scroll;
            scrollbar-width: thin;
            scrollbar-color: #A16207 #FFF8F0;
        }

        body {
            overflow-x: hidden;
            overflow-y: auto;
            min-height: 100vh;
        }

        /* Custom scrollbar for WebKit browsers */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #FFF8F0;
        }

        ::-webkit-scrollbar-thumb {
            background: #A16207;
            border-radius: 6px;
            border: 2px solid #FFF8F0;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #7B3F00;
        }

        /* Layout Fixes */
        #canvas,
        #box_wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header Styles */
        .page_header {
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        /* Content Area */
        .main-content {
            flex: 1;
        }
    </style>

    <style>
        /* Dark Color Palette */
        :root {
            --dark-bg: #28140A;
            --darker-bg: #1E0D05;
            --cinnamon-dark: #3C1E0F;
            --cinnamon-gold: #D4A76A;
            --cinnamon-light: #A16207;
            --text-gold: #D4A76A;
            --text-light: rgba(255, 255, 255, 0.9);
        }

        /* Dark Glow Effect */
        .dark-glow-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, rgba(212, 167, 106, 0.1) 0%, transparent 70%);
            animation: pulseGlow 8s infinite alternate;
            z-index: 1;
        }

        @keyframes pulseGlow {
            0% {
                opacity: 0.3;
            }

            100% {
                opacity: 0.7;
            }
        }

        /* Title Effects */
        .title-text {
            position: relative;
            display: inline-block;
        }

        .title-glow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 167, 106, 0.3), transparent);
            transform: translateX(-100%);
            animation: titleShine 6s infinite 2s;
        }

        @keyframes titleShine {
            0% {
                transform: translateX(-100%) skewX(-25deg);
            }

            20% {
                transform: translateX(100%) skewX(-25deg);
            }

            100% {
                transform: translateX(100%) skewX(-25deg);
            }
        }

        /* Dark Breadcrumbs */
        .dark-breadcrumb {
            background: rgba(30, 15, 5, 0.7);
            padding: 12px 20px;
            border-radius: 30px;
            display: inline-block;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(212, 167, 106, 0.1);
        }

        .dark-breadcrumb .breadcrumb-item {
            position: relative;
            padding: 0 8px;
        }

        .dark-breadcrumb .breadcrumb-item::before {
            content: '/';
            color: rgba(212, 167, 106, 0.5);
            padding: 0 10px 0 5px;
        }

        .dark-breadcrumb .breadcrumb-item:first-child::before {
            display: none;
        }

        .dark-breadcrumb .breadcrumb-item a {
            color: var(--text-gold);
            transition: all 0.3s ease;
            position: relative;
        }

        .dark-breadcrumb .breadcrumb-item a:hover {
            color: white;
            text-shadow: 0 0 8px rgba(212, 167, 106, 0.7);
        }

        .dark-breadcrumb .breadcrumb-item.active .text-gold {
            position: relative;
        }

        .dark-breadcrumb .breadcrumb-item.active .text-gold::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 1px;
            background: var(--text-gold);
            animation: pulseUnderline 2s infinite;
        }

        @keyframes pulseUnderline {
            0% {
                opacity: 0.3;
                transform: scaleX(0.8);
            }

            50% {
                opacity: 1;
                transform: scaleX(1);
            }

            100% {
                opacity: 0.3;
                transform: scaleX(0.8);
            }
        }

        /* Cinnamon Dust Animation */
        .cinnamon-dust {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            pointer-events: none;
        }

        .cinnamon-dust::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%23D4A76A" opacity="0.5"/></svg>');
            background-size: 20px 20px;
            animation: dustMove 100s linear infinite;
        }

        @keyframes dustMove {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 1000px 1000px;
            }
        }

        /* Cinnamon Swirl Animation */
        .cinnamon-swirl {
            position: absolute;
            top: 50%;
            right: 10%;
            width: 150px;
            height: 150px;
            transform: translateY(-50%);
            opacity: 0.2;
        }

        .swirl-svg {
            width: 100%;
            height: 100%;
        }

        .swirl-path {
            stroke-dasharray: 200;
            stroke-dashoffset: 200;
            animation: swirlDraw 6s ease-in-out infinite;
        }

        @keyframes swirlDraw {
            0% {
                stroke-dashoffset: 200;
                opacity: 0;
            }

            30% {
                opacity: 0.3;
            }

            70% {
                stroke-dashoffset: 0;
                opacity: 0.3;
            }

            100% {
                stroke-dashoffset: 0;
                opacity: 0;
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .cinnamon-swirl {
                display: none;
            }

            .dark-breadcrumb {
                padding: 8px 15px;
            }

            h1 {
                font-size: 2.2rem !important;
            }
        }
    </style>
    <style>
        /* Ensure the wrapper takes proper space */
        .about-image-wrapper {
            min-height: 300px;
            /* Minimum height */
            border-radius: 8px;
            overflow: hidden;
            /* Keeps rounded corners on child elements */
        }

        /* Image styling - fills container while maintaining aspect ratio */
        .about-image {
            transition: transform 0.3s ease;
        }

        .about-image:hover {
            transform: scale(1.02);
        }

        /* Overlay styling */
        .image-overlay {
            background: linear-gradient(135deg, rgba(92, 51, 23, 0.1) 0%, transparent 100%);
            pointer-events: none;
            /* Allows clicking through overlay */
        }

        /* Cinnamon sticks decoration */
        .cinnamon-sticks-decoration {
            bottom: -15px;
            right: -15px;
            width: 100px;
            height: 100px;
            background-image: url('../assets/cinnamon-sticks.png');
            background-size: contain;
            background-repeat: no-repeat;
            z-index: 2;
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .about-image-wrapper {
                margin-top: 30px;
                margin-bottom: 40px;
                min-height: 250px;
            }

            .cinnamon-sticks-decoration {
                width: 80px;
                height: 80px;
                right: -10px;
            }
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader_image"></div>
    </div>

    <!-- Search Modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="widget widget_search">
            <form method="get" class="searchform search-form" action="/">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                </div>
                <button type="submit" class="btn">Search</button>
            </form>
        </div>
    </div>

    <!-- Contact Form Modal -->
    <div id="team-form" class="ds modal">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="header title">
                                <h4>Contact Me</h4>
                                <p>Have You any Questions? Ask Me!</p>
                            </div>
                        </div>
                        <a href="javascript:void(0)" data-dismiss="modal" aria-label="Close" class="remove">×</a>
                    </div>
                    <form class="contact-form c-mb-25 c-gutter-20" method="post" action="/">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group has-placeholder">
                                    <label for="name3">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name3" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-placeholder">
                                    <label for="email3">Email address<span class="required">*</span></label>
                                    <input type="email" aria-required="true" size="30" value="" name="email3" id="email3" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group has-placeholder">
                                    <label for="message3">Message</label>
                                    <textarea aria-required="true" rows="6" cols="45" name="message" id="message3" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="form-group">
                                    <input class="btn btn-maincolor" type="submit" value="Send Message">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Login/Signup Modals -->
    <div id="login-form" class="ls modal c-gutter-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ds column-overlay">
                    <img src="images/signup.jpg" alt="">
                </div>
                <div class="col-md-6 ls">
                    <div class="divider-65 hidden-below-md"></div>
                    <div class="divider-60 hidden-above-md"></div>
                    <h4 class="special-heading text-center text-capitalize">Sign Up</h4>
                    <form class="contact-form c-mb-30 c-gutter-20" method="post" action="/">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group has-placeholder">
                                    <label for="name">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-placeholder">
                                    <label for="email">Email address<span class="required">*</span></label>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-placeholder">
                                    <label for="password">Password<span class="required">*</span></label>
                                    <input type="password" aria-required="true" size="30" value="" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="checkbox" id="agree" name="agree" checked>
                                    <label for="agree">I agree with all the text in the agreement</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <a href="#" class="btn btn-with-border sign-in">I am already Member</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="form-group">
                                    <input class="btn btn-maincolor" type="submit" value="Learn more">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Wrapper -->
    <div id="canvas">
        <div id="box_wrapper">
            <!-- Header -->
            <header class="page_header" style="background-color: #f3e8d3; border-bottom: 1px solid #F0E0D0;">
                <div class="container">
                    <div class="header-container">
                        <!-- Logo -->
                        <div class="logo-container">
                            <a href="../" class="logo">

                                <img src="../assets/KWnamelogo.png" alt="Premium Cinnamon" style="height: 60px; width: auto; object-fit: contain;margin-left: 10px;">
                            </a>
                        </div>

                        <!-- Desktop Navigation -->
                        <nav class="desktop-nav">
                            <ul class="nav-menu">
                                <li>
                                    <a href="../">Home</a>
                                </li>
                                <li>
                                    <a href="../about/">About</a>
                                </li>
                                <li>
                                    <a href="../product/">Products</a>
                                </li>
                                <li>
                                    <a href="../export/">Export</a>
                                </li>
                                <li>
                                    <a href="../quality/">Quality</a>
                                </li>
                                <li class="active">
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Mobile Navigation Toggle -->
                        <div class="mobile-nav-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>

                <!-- Mobile Navigation -->
                <nav class="mobile-nav">
                    <ul>
                        <li>
                            <a href="../">
                                <span>Home</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="#5C3317" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="../about/">
                                <span>About</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="#5C3317" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="../product/">
                                <span>Products</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="#5C3317" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="../quality/">
                                <span>Quality</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="#5C3317" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="../export/">
                                <span>Export</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="#5C3317" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                <span>Contact</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="#5C3317" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>

            <style>
                /* Base Styles */
                .page_header {
                    position: relative;
                    padding: 15px 0;
                    min-height: auto;
                    width: 100%;
                    z-index: 1000;
                }

                .container {
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 0 15px;
                }

                .header-container {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    width: 100%;
                }

                .logo-container {
                    flex: 0 0 auto;
                }

                .logo img {
                    height: 60px;
                    width: auto;
                    max-height: 60px;
                    object-fit: contain;
                }

                /* Desktop Navigation */
                .desktop-nav {
                    display: block;
                }

                .nav-menu {
                    display: flex;
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    gap: 25px;
                }

                .nav-menu li {
                    margin: 0;
                    position: relative;
                }

                .nav-menu li a {
                    color: #5C3317;
                    text-decoration: none;
                    font-size: 16px;
                    font-weight: 500;
                    padding: 5px 0;
                    position: relative;
                    transition: color 0.3s ease;
                }

                .nav-menu li a:after {
                    content: '';
                    position: absolute;
                    bottom: -2px;
                    left: 0;
                    width: 0;
                    height: 2px;
                    background: #A16207;
                    transition: width 0.3s ease;
                }

                .nav-menu li a:hover,
                .nav-menu li.active a {
                    color: #A16207;
                }

                .nav-menu li a:hover:after,
                .nav-menu li.active a:after {
                    width: 100%;
                }

                /* Mobile Navigation Toggle */
                .mobile-nav-toggle {
                    display: none;
                    cursor: pointer;
                    width: 30px;
                    height: 24px;
                    flex-direction: column;
                    justify-content: space-between;
                    z-index: 1001;
                }

                .mobile-nav-toggle span {
                    display: block;
                    height: 3px;
                    width: 100%;
                    background: #5C3317;
                    transition: all 0.3s ease;
                }

                /* Mobile Navigation */
                .mobile-nav {
                    display: none;
                    position: absolute;
                    top: 100%;
                    left: 0;
                    width: 100%;
                    background: #f3e8d3;
                    border-top: 1px solid #F0E0D0;
                    padding: 10px 0;
                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                    z-index: 1000;
                }

                .mobile-nav ul {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                }

                .mobile-nav li {
                    margin: 0;
                    border-bottom: 1px solid #F0E0D0;
                }

                .mobile-nav li:last-child {
                    border-bottom: none;
                }

                .mobile-nav li a {
                    color: #5C3317;
                    text-decoration: none;
                    font-size: 16px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 12px 20px;
                    transition: background-color 0.3s ease;
                }

                .mobile-nav li a span {
                    flex-grow: 1;
                }

                .mobile-nav li a svg {
                    transition: transform 0.3s ease;
                }

                .mobile-nav li a:hover {
                    background-color: rgba(161, 98, 7, 0.1);
                }

                .mobile-nav li a:hover svg {
                    transform: translateX(5px);
                }

                .mobile-nav li.active a {
                    color: #A16207;
                    font-weight: 500;
                    background-color: rgba(161, 98, 7, 0.05);
                }

                /* Responsive Styles */
                @media (max-width: 992px) {
                    .desktop-nav {
                        display: none;
                    }

                    .mobile-nav-toggle {
                        display: flex;
                    }

                    .mobile-nav.active {
                        display: block;
                    }
                }

                @media (max-width: 576px) {
                    .logo img {
                        height: 50px;
                    }

                    .mobile-nav li a {
                        padding: 15px 20px;
                        font-size: 17px;
                    }
                }
            </style>

            <script>
                // Mobile Navigation Toggle
                document.addEventListener('DOMContentLoaded', function() {
                    const toggle = document.querySelector('.mobile-nav-toggle');
                    const mobileNav = document.querySelector('.mobile-nav');

                    toggle.addEventListener('click', function() {
                        this.classList.toggle('active');
                        mobileNav.classList.toggle('active');

                        // Animate hamburger to X
                        const spans = this.querySelectorAll('span');
                        if (this.classList.contains('active')) {
                            spans[0].style.transform = 'translateY(10px) rotate(45deg)';
                            spans[1].style.opacity = '0';
                            spans[2].style.transform = 'translateY(-10px) rotate(-45deg)';
                        } else {
                            spans[0].style.transform = '';
                            spans[1].style.opacity = '';
                            spans[2].style.transform = '';
                        }
                    });

                    // Close mobile menu when clicking a link
                    const mobileLinks = document.querySelectorAll('.mobile-nav a');
                    mobileLinks.forEach(link => {
                        link.addEventListener('click', function() {
                            toggle.classList.remove('active');
                            mobileNav.classList.remove('active');

                            // Reset hamburger animation
                            const spans = toggle.querySelectorAll('span');
                            spans[0].style.transform = '';
                            spans[1].style.opacity = '';
                            spans[2].style.transform = '';
                        });
                    });
                });
            </script>




            <section id="contact-page" class="position-relative">
                <!-- Full-width header image -->

                <div class="container py-5">
                    <div class="row">
                        <!-- Left Column - Contact Info -->
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="pe-lg-4">
                                <h2 class="h3 font-weight-bold mb-4" style="color: #5C3317; font-family: 'Playfair Display', serif;">Get in Touch</h2>
                                <p class="lead mb-4" style="color: #3a2615;">We'd love to hear from you! Whether you're interested in our products, have questions about Ceylon cinnamon, or want to discuss export opportunities, our team is ready to assist you.</p>

                                <div class="contact-info mb-5">
                                    <!-- Office Address -->
                                    <div class="media mb-4">
                                        <div class="icon-circle mr-4" style="background-color: #A16207;">
                                            <i class="fas fa-map-marked-alt text-white"></i>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="h5 font-weight-bold mb-2" style="color: #5C3317;">Our Office</h3>
                                            <p class="mb-0" style="color: #3a2615;">33/4 Mudduwa Road, Ratnapura, Sri Lanka</p>
                                        </div>
                                    </div>

                                    <!-- Phone Numbers -->
                                    <div class="media mb-4">
                                        <div class="icon-circle mr-4" style="background-color: #A16207;">
                                            <i class="fas fa-phone-volume text-white"></i>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="h5 font-weight-bold mb-2" style="color: #5C3317;">Phone</h3>
                                            <p class="mb-1" style="color: #3a2615;">+94 771099361 (Mobile/WhatsApp)</p>
                                            <p class="mb-0" style="color: #3a2615;">+94 728485587 (Mobile/WhatsApp)</p>
                                        </div>
                                    </div>

                                    <!-- Email Addresses -->
                                    <div class="media mb-4">
                                        <div class="icon-circle mr-4" style="background-color: #A16207;">
                                            <i class="fas fa-envelope-open-text text-white"></i>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="h5 font-weight-bold mb-2" style="color: #5C3317;">Email</h3>
                                            <p class="mb-1" style="color: #3a2615;">Industrieskw@gmail.com</p>
                                        </div>
                                    </div>

                                    <!-- Business Hours -->
                                    <div class="media">
                                        <div class="icon-circle mr-4" style="background-color: #A16207;">
                                            <i class="fas fa-calendar-alt text-white"></i>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="h5 font-weight-bold mb-2" style="color: #5C3317;">Business Hours</h3>
                                            <p class="mb-1" style="color: #3a2615;">Monday - Friday: 8:30 AM - 5:00 PM (IST)</p>
                                            <p class="mb-1" style="color: #3a2615;">Saturday: 9:00 AM - 1:00 PM (IST)</p>
                                            <p class="mb-0" style="color: #3a2615;">Sunday: Closed</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Social Media Links -->
                                <div class="social-links">
                                    <h3 class="h5 font-weight-bold mb-3" style="color: #5C3317;">Follow Us</h3>
                                    <div class="d-flex">
                                        <a href="#" class="social-icon mr-3" style="background-color: #f3e8d3; color: #5C3317;">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#" class="social-icon mr-3" style="background-color: #f3e8d3; color: #5C3317;">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="social-icon mr-3" style="background-color: #f3e8d3; color: #5C3317;">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="#" class="social-icon" style="background-color: #f3e8d3; color: #5C3317;">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column - Image -->
                        <div class="col-lg-6">
                            <div class="h-100 rounded-lg overflow-hidden">
                                <img src="../assets/cinnamonpeeling.png"
                                    alt="Cinnamon Production"
                                    class="img-fluid w-100 h-100 object-cover"
                                    style="min-height: 600px;">
                                <div class="image-overlay d-flex align-items-center justify-content-center p-4">
                                    <div class="text-center text-white">
                                        <h3 class="h4 font-weight-bold mb-3">Visit Our Cinnamon Plantation</h3>
                                        <p class="mb-4">Experience the authentic process of Ceylon cinnamon production</p>
                                        <a href="#" class="btn btn-outline-light px-4 py-2" style="border-radius: 20px;">Schedule a Visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        /* Custom Styles */
                        .icon-circle {
                            width: 50px;
                            height: 50px;
                            border-radius: 50%;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            flex-shrink: 0;
                        }

                        .social-icon {
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            transition: all 0.3s ease;
                        }

                        .social-icon:hover {
                            background-color: #A16207 !important;
                            color: white !important;
                            transform: translateY(-3px);
                        }

                        .rounded-lg {
                            border-radius: 12px;
                        }

                        .image-overlay {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(92, 51, 23, 0.3);
                        }

                        @media (max-width: 991.98px) {
                            .pe-lg-4 {
                                padding-right: 0 !important;
                            }
                        }
                    </style>


                    <!-- Map Section -->
                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="h3 font-weight-bold mb-4" style="color: #5C3317;">Our Location</h2>
                            <div class="map-container" style="background-color: #f3e8d3; padding: 20px; border-radius: 8px;">
                                <iframe src="https://www.google.com/maps?q=No.33/4+Mudduwa+Road,+Rathnapura,+Sri+Lanka&output=embed"
                                    width="100%"
                                    height="450"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    class="rounded"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <style>
                /* Custom Styles */
                .contact-header-image {
                    position: relative;
                }

                .contact-header-image .overlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(92, 51, 23, 0.5);
                }

                .icon-circle {
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    background-color: #A16207;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-shrink: 0;
                }

                .social-icon {
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    background-color: #f3e8d3;
                    color: #5C3317;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: all 0.3s ease;
                }

                .social-icon:hover {
                    background-color: #A16207;
                    color: white;
                    text-decoration: none;
                }

                .form-control {
                    border: 1px solid #e0d6c2;
                    padding: 10px 15px;
                }

                .form-control:focus {
                    border-color: #A16207;
                    box-shadow: 0 0 0 0.2rem rgba(161, 98, 7, 0.25);
                }

                .btn-primary:hover {
                    background-color: #8a5306 !important;
                }

                @media (max-width: 767.98px) {
                    .contact-header-image {
                        height: 300px;
                    }
                }
            </style>

            <script>
                // Form validation
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        var form = document.getElementById('contact-form');
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    }, false);
                })();
            </script>





            <section class="ls s-py-0 c-gutter-0 container-px-0 text-center text-sm-left mt-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="special-heading sub-title text-center"><span>KW INDUSTRIES</span></h6>
                            <h2 class="special-heading text-center" id="faq-title"> KW Industries FAQ</h2>
                            <div class="divider-30"></div>
                        </div>
                    </div>
                    <div class="row" id="faq">
                        <div class="col-lg-6 py-60 ls ms">
                            <div class="content-center">
                                <div id="accordion01" role="tablist">
                                    <h6 class="title-accordion">What is Cinnamon?</h6>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse01_header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                                    What is Ceylon cinnamon and how is it different from other types?
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapse01" class="collapse" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                                            <div class="card-body">
                                                <p>Ceylon cinnamon, also known as "true cinnamon," is derived from the inner bark of the Cinnamomum verum tree, mainly grown in Sri Lanka. It is milder and sweeter in flavor compared to Cassia cinnamon, and contains much less coumarin, making it safer for regular consumption</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse02_header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                                    How do I store cinnamon to keep it fresh?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                                            <div class="card-body">
                                                Store cinnamon sticks or powder in an airtight container in a cool, dry place away from direct sunlight. Ground cinnamon should be used within 6 months to a year for the best flavor, while sticks can last up to 2–3 years
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse04_header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                                    Where is your cinnamon sourced from?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                                            <div class="card-body">
                                                Our cinnamon is sourced directly from Sri Lanka, the home of authentic Ceylon cinnamon, ensuring the highest quality and freshness in every batch
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse05_header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse05" aria-expanded="false" aria-controls="collapse05">
                                                    What is the recommended daily amount of cinnamon?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse05" class="collapse" role="tabpanel" aria-labelledby="collapse05_header" data-parent="#accordion01">
                                            <div class="card-body">
                                                For adults, about 0.5 to 2 teaspoons (2–5 grams) of Ceylon cinnamon per day is considered safe. Avoid excessive consumption, especially of Cassia cinnamon, due to its higher coumarin content
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordion02" role="tablist">
                                    <h6 class="title-accordion">What is Cinnamon used for?</h6>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse10_header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                                    What are the main health benefits of cinnamon?
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="collapse10_header" data-parent="#accordion02">
                                            <div class="card-body">
                                                <p>Cinnamon is rich in antioxidants, which help protect the body from oxidative damage caused by free radicals. It also has anti-inflammatory, antibacterial, and antifungal properties, making it beneficial for overall health and immune support</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse11_header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                                    Can cinnamon help manage blood sugar levels?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="collapse11_header" data-parent="#accordion02">
                                            <div class="card-body">
                                                Yes, cinnamon has been shown to improve insulin sensitivity and lower blood sugar levels. It can slow the breakdown of carbohydrates in the digestive tract, which helps prevent spikes in blood sugar after meals. This makes it especially useful for people with type 2 diabetes
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse12_header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                                    Is cinnamon good for heart health?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="collapse12_header" data-parent="#accordion02">
                                            <div class="card-body">
                                                Cinnamon may help reduce the risk of heart disease by lowering levels of LDL (bad) cholesterol and triglycerides, while maintaining or improving HDL (good) cholesterol. Its anti-inflammatory properties also contribute to cardiovascular health
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="collapse13_header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                                    How does cinnamon support digestive health?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="collapse13_header" data-parent="#accordion02">
                                            <div class="card-body">
                                                Cinnamon has prebiotic properties that help restore the balance of good bacteria in the gut. It can also help ease digestive discomfort, reduce bloating, and is sometimes used to treat symptoms of irritable bowel syndrome
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="ds col-lg-6 py-60 faq-contact column-overlay d-flex align-items-center" id="bg-contact">
						<div class="content-center">
							<h4 class="special-heading text-center text-capitalize">Contact us</h4>
							<p id="question-p" class="special-heading text-center">Have any Questions? Ask Us!</p>
							<div class="divider-30"></div>

							<div class="container">
								<form id="contactForm" action="send_email.php" method="POST">
									<div class="form-group">
										<label for="name">Name:</label>
										<input type="text" id="name" name="name" required>
										<div class="error-message" id="nameError"></div>
									</div>
									<div class="form-group">
										<label for="email">Email:</label>
										<input type="email" id="email" name="email" required>
										<div class="error-message" id="emailError"></div>
									</div>
									<div class="form-group">
										<label for="message">Message:</label>
										<textarea id="message" name="message" required></textarea>
										<div class="error-message" id="messageError"></div>
									</div>
									<div class="contact-submit">
										<button type="submit">Send Message</button>
									</div>
								</form>
								<div id="formResponse"></div>
							</div>
						</div>
					</div> -->


                        <!-- <div class="ds col-lg-6 py-60 faq-contact column-overlay d-flex align-items-center" id="bg-contact" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('cinnamon-bark-texture.jpg'); background-size: cover; color: #fff; border-radius: 12px; box-shadow: 0 10px 30px rgba(123, 63, 0, 0.2);">
						<div class="content-center" style="width: 100%; padding: 0 30px;">
							<h4 class="special-heading text-center text-capitalize" style="font-size: 2.2rem; margin-bottom: 10px; color: #FFA726; font-weight: 600;">Contact Us</h4>
							<p id="question-p" class="special-heading text-center" style="font-size: 1.1rem; opacity: 0.9; margin-bottom: 30px;">Have any questions? We’d love to hear from you!</p>
							<div class="divider-30"></div>

							<div class="container" style="max-width: 600px; margin: 0 auto;">
								<form id="contactForm" action="send_email.php" method="POST" class="modern-form">
									<div class="form-group" style="margin-bottom: 25px;">
										<label for="name" style="display: block; margin-bottom: 8px; font-weight: 500; color: #FFA726;">Your Name</label>
										<input type="text" id="name" name="name" required
											style="width: 100%; padding: 12px 15px; border: 2px solid #7B3F00; border-radius: 8px; background: rgba(255,255,255,0.1); color: #fff; font-size: 1rem; transition: all 0.3s ease;">
										<div class="error-message" id="nameError" style="color: #FF6B6B; font-size: 0.9rem; margin-top: 5px;"></div>
									</div>
									<div class="form-group" style="margin-bottom: 25px;">
										<label for="email" style="display: block; margin-bottom: 8px; font-weight: 500; color: #FFA726;">Email Address</label>
										<input type="email" id="email" name="email" required
											style="width: 100%; padding: 12px 15px; border: 2px solid #7B3F00; border-radius: 8px; background: rgba(255,255,255,0.1); color: #fff; font-size: 1rem; transition: all 0.3s ease;">
										<div class="error-message" id="emailError" style="color: #FF6B6B; font-size: 0.9rem; margin-top: 5px;"></div>
									</div>
									<div class="form-group" style="margin-bottom: 30px;">
										<label for="message" style="display: block; margin-bottom: 8px; font-weight: 500; color: #FFA726;">Your Message</label>
										<textarea id="message" name="message" required rows="5"
											style="width: 100%; padding: 12px 15px; border: 2px solid #7B3F00; border-radius: 8px; background: rgba(255,255,255,0.1); color: #fff; font-size: 1rem; resize: vertical; transition: all 0.3s ease;"></textarea>
										<div class="error-message" id="messageError" style="color: #FF6B6B; font-size: 0.9rem; margin-top: 5px;"></div>
									</div>
									<div class="contact-submit" style="text-align: center;">
										<button type="submit"
											style="background: linear-gradient(135deg, #7B3F00, #A16207); color: #fff; border: none; padding: 14px 30px; font-size: 1rem; border-radius: 8px; cursor: pointer; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(123, 63, 0, 0.3);">
											Send Message <i class="fas fa-paper-plane" style="margin-left: 8px;"></i>
										</button>
									</div>
								</form>
								<div id="formResponse" style="margin-top: 20px; text-align: center; font-size: 0.95rem;"></div>
							</div>
						</div>
					</div> -->

                        <div class="ds col-lg-6 py-60 faq-contact column-overlay d-flex align-items-center" style="background: #f3e8d3; border-radius: 10px; box-shadow: 0 5px 15px rgba(123, 63, 0, 0.1);">
                            <div class="content-center" style="width: 100%; padding: 0 30px;">
                                <h3 class="special-heading text-center" style="color: #5c3317; margin-bottom: 20px; font-size: 28px;">Contact Us</h3>
                                <p id="question-p" class="special-heading text-center" style="color: #7b3f00; margin-bottom: 30px;">Have questions? We're here to help!</p>
                                <div class="divider-30"></div>

                                <form id="contactForm" action="send_email.php" method="POST" style="font-family: Arial, sans-serif;">
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label for="name" style="display: block; color: #5c3317; margin-bottom: 8px;">Name</label>
                                        <input type="text" id="name" name="name" required
                                            style="width: 100%; padding: 12px; border: 1px solid #d4a373; border-radius: 6px; background: #fff9f0; color: #5c3317;">
                                    </div>

                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label for="email" style="display: block; color: #5c3317; margin-bottom: 8px;">Email</label>
                                        <input type="email" id="email" name="email" required
                                            style="width: 100%; padding: 12px; border: 1px solid #d4a373; border-radius: 6px; background: #fff9f0; color: #5c3317;">
                                    </div>

                                    <div class="form-group" style="margin-bottom: 25px;">
                                        <label for="message" style="display: block; color: #5c3317; margin-bottom: 8px;">Message</label>
                                        <textarea id="message" name="message" required rows="5"
                                            style="width: 100%; padding: 12px; border: 1px solid #d4a373; border-radius: 6px; background: #fff9f0; color: #5c3317;"></textarea>
                                    </div>

                                    <div class="contact-submit" style="text-align: center;">
                                        <button type="submit"
                                            style="background: #7b3f00; color: white; border: none; padding: 12px 25px; border-radius: 6px; cursor: pointer; font-size: 16px; width: 100%; transition: background 0.3s;">
                                            Send Message
                                        </button>
                                    </div>
                                </form>
                                <div id="formResponse" style="margin-top: 20px; text-align: center;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="ds s-overlay section-subscribe s-pt-50 s-pb-50 text-center" style="background: linear-gradient(135deg, #7B3F00 0%, #A16207 100%);">
                <div class="container">
                    <h4 class="cnct mb-3" style="font-size: 2.2rem; color: #FFF; font-weight: 600; letter-spacing: 1px;">Connect With Us!</h4>
                    <p class="follow-color mb-4" style="font-size: 1.1rem; color: rgba(255,255,255,0.8);">Follow us for the latest updates & cinnamon insights</p>

                    <div class="social-icons-wrapper" style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
                        <a href="#" class="social-icon"
                            style="width: 50px; height: 50px; border-radius: 12px; background: rgba(255,255,255,0.1); 
                      display: flex; align-items: center; justify-content: center; 
                      color: #FFF; font-size: 20px; text-decoration: none;
                      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                      transform: translateY(0);"
                            onmouseover="this.style.transform='translateY(-5px)'; this.style.background='rgba(255,167,38,0.3)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.1)';">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="#" class="social-icon"
                            style="width: 50px; height: 50px; border-radius: 12px; background: rgba(255,255,255,0.1); 
                      display: flex; align-items: center; justify-content: center; 
                      color: #FFF; font-size: 20px; text-decoration: none;
                      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                      transform: translateY(0);"
                            onmouseover="this.style.transform='translateY(-5px)'; this.style.background='rgba(0,172,238,0.3)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.1)';">
                            <i class="fab fa-telegram-plane"></i>
                        </a>

                        <a href="#" class="social-icon"
                            style="width: 50px; height: 50px; border-radius: 12px; background: rgba(255,255,255,0.1); 
                      display: flex; align-items: center; justify-content: center; 
                      color: #FFF; font-size: 20px; text-decoration: none;
                      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                      transform: translateY(0);"
                            onmouseover="this.style.transform='translateY(-5px)'; this.style.background='rgba(10,102,194,0.3)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.1)';">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                        <a href="#" class="social-icon"
                            style="width: 50px; height: 50px; border-radius: 12px; background: rgba(255,255,255,0.1); 
                      display: flex; align-items: center; justify-content: center; 
                      color: #FFF; font-size: 20px; text-decoration: none;
                      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                      transform: translateY(0);"
                            onmouseover="this.style.transform='translateY(-5px)'; this.style.background='rgba(225,48,108,0.3)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.1)';">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="#" class="social-icon"
                            style="width: 50px; height: 50px; border-radius: 12px; background: rgba(255,255,255,0.1); 
                      display: flex; align-items: center; justify-content: center; 
                      color: #FFF; font-size: 20px; text-decoration: none;
                      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                      transform: translateY(0);"
                            onmouseover="this.style.transform='translateY(-5px)'; this.style.background='rgba(255,0,0,0.3)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.1)';">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>

                    <!-- Subtle floating animation for the whole section -->
                    <style>
                        @keyframes float {

                            0%,
                            100% {
                                transform: translateY(0);
                            }

                            50% {
                                transform: translateY(-10px);
                            }
                        }

                        .social-icon {
                            animation: float 4s ease-in-out infinite;
                        }

                        .social-icon:nth-child(2) {
                            animation-delay: 0.2s;
                        }

                        .social-icon:nth-child(3) {
                            animation-delay: 0.4s;
                        }

                        .social-icon:nth-child(4) {
                            animation-delay: 0.6s;
                        }

                        .social-icon:nth-child(5) {
                            animation-delay: 0.8s;
                        }
                    </style>
                </div>
            </section>
        </div>






        <footer class="py-5" style="background-color: #f3e8d3; color: #3a2615;">
            <div class="container">
                <div class="row">
                    <!-- Logo and Company Info -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-center text-md-start">
                        <div class="d-flex flex-column align-items-center align-items-md-start mb-3">
                            <div class=" align-items-center mb-3">

                                <div>
                                    <h3 class="h5 mb-0 fw-bold">KW INDUSTRIES</h3>
                                    <p class="big" style="color: #d17d2a;">Pure Cinnamon, Pure Goodness</p>
                                </div>
                            </div>
                        </div>
                        <p class="mb-3 text-center text-md-start">Premium exporters of Ceylon cinnamon from Sri Lanka to the world.</p>

                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center text-md-start">
                        <h3 class="h5 fw-bold mb-3" style="font-weight: bolder;">Quick Links</h3>
                              <ul class="list-unstyled">
                                <li class="mb-2"><a href="../" class="text-decoration-none footer-link" style="color: #3a2615;">Home</a></li>
                                <li class="mb-2"><a href="../about/" class="text-decoration-none footer-link" style="color: #3a2615;">About Us</a></li>
                                <li class="mb-2"><a href="../product/" class="text-decoration-none footer-link" style="color: #3a2615;">Products</a></li>
                                <li class="mb-2"><a href="../quality/" class="text-decoration-none footer-link" style="color: #3a2615;">Quality Assurance</a></li>
                                <li class="mb-2"><a href="../export/" class="text-decoration-none footer-link" style="color: #3a2615;">Export Information</a></li>
                                <li class="mb-2"><a href="../contact/" class="text-decoration-none footer-link" style="color: #3a2615;">Contact Us</a></li>
                            </ul>
                    </div>

                    <!-- Products -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center text-md-start">
                        <h3 class="h5 fw-bold mb-3" style="font-weight: bolder;">Products</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="text-decoration-none footer-link" style="color: #3a2615;">Cinnamon Alba Quills</a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none footer-link" style="color: #3a2615;">Cinnamon C5 Special</a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none footer-link" style="color: #3a2615;">Cinnamon Powder</a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none footer-link" style="color: #3a2615;">Cinnamon Chips</a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none footer-link" style="color: #3a2615;">Cinnamon Essential Oil</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-3 col-md-6 text-center text-md-start">
                        <h3 class="h5 fw-bold mb-3" style="font-weight: bolder;">Contact Info</h3>
                        <address class="not-italic">
                            <p class="mb-2">33/4 Mudduwa Road</p>
                            <p class="mb-2">Ratnapura, Sri Lanka</p>
                          	<p class="mb-2">Phone: +94 771099361</p><p class="mb-2">Phone: +94 728485587</p>
                            <p class="mb-2">Email: Industrieskw@gmail.com</p>
                        </address>
                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="border-top mt-5 pt-4 text-center" style="border-color: #d17d2a !important;">
                    <p class="mb-2" style="color: #3a2615;">&copy; 2025 KW INDUSTRIES. All Rights Reserved.
                        <a href="#" class="text-decoration-none footer-link" style="color: #3a2615;">Privacy Policy</a> |
                        <a href="#" class="text-decoration-none footer-link" style="color: #3a2615;">Terms of Service</a>
                    </p>
                    <p class="small" style="color: #3a2615;">Website Designed & Developed by <span style="cursor: pointer;" onclick="window.location='https://100-international.com/'">100-international.com</span></p>
                </div>
            </div>
        </footer>

        <style>
            .footer-link {
                transition: color 0.3s ease;
            }

            .footer-link:hover {
                color: #d17d2a !important;
            }

            .fa-linkedin-in:hover,
            .fa-facebook-f:hover,
            .fa-instagram:hover,
            .fa-twitter:hover {
                color: #d17d2a !important;
                transform: translateY(-2px);
                transition: all 0.3s ease;
            }

            /* Center align all content on mobile */
            @media (max-width: 767.98px) {
                .text-md-start {
                    text-align: center !important;
                }

                .justify-content-md-start {
                    justify-content: center !important;
                }

                .align-items-md-start {
                    align-items: center !important;
                }

                ul.list-unstyled {
                    display: inline-block;
                    text-align: left;
                }
            }
        </style>
    </div>
    </div>

    <!-- JavaScript -->
    <script src="../js/compressed.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/script.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Update copyright year automatically
            document.querySelector('.copyright_year').textContent = new Date().getFullYear();

            // Add smooth scrolling to all links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Initialize AOS animation library
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out',
                    once: true
                });
            }

            // Menu hover effects
            const menuItems = document.querySelectorAll('.sf-menu li a');
            menuItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    const span = this.querySelector('span');
                    if (span) {
                        span.style.width = '100%';
                    }
                });

                item.addEventListener('mouseleave', function() {
                    if (!this.parentElement.classList.contains('active')) {
                        const span = this.querySelector('span');
                        if (span) {
                            span.style.width = '0';
                        }
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Create dynamic cinnamon dust particles
            const dustContainer = document.querySelector('.cinnamon-dust');
            const particleCount = 30;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'dust-particle';

                // Random properties
                const size = Math.random() * 4 + 1;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const duration = Math.random() * 20 + 10;
                const delay = Math.random() * 10;
                const opacity = Math.random() * 0.3 + 0.1;

                particle.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${posX}%;
                top: ${posY}%;
                background: #D4A76A;
                border-radius: 50%;
                opacity: ${opacity};
                filter: blur(0.5px);
                animation: floatParticle ${duration}s linear infinite ${delay}s;
            `;

                dustContainer.appendChild(particle);
            }

            // Define particle animation
            const style = document.createElement('style');
            style.textContent = `
            @keyframes floatParticle {
                0% {
                    transform: translate(0, 0) scale(1);
                    opacity: 0;
                }
                10% {
                    opacity: ${Math.random() * 0.3 + 0.1};
                }
                90% {
                    opacity: ${Math.random() * 0.3 + 0.1};
                }
                100% {
                    transform: translate(${Math.random() * 100 - 50}px, -100px) scale(0.5);
                    opacity: 0;
                }
            }
        `;
            document.head.appendChild(style);
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Register ScrollTrigger plugin
            gsap.registerPlugin(ScrollTrigger);

            // Initial loading animation
            const loadingAnimation = () => {
                const tl = gsap.timeline();

                // Animate the logo
                tl.from('.navbar-brand img', {
                    duration: 1.2,
                    y: -100,
                    opacity: 0,
                    ease: "power4.out"
                });

                // Animate the hero section with text reveal
                tl.from('.hero-section h1', {
                    duration: 1,
                    y: 50,
                    opacity: 0,
                    stagger: 0.2,
                    ease: "power3.out"
                }, "-=0.5");

                tl.from('.hero-section p', {
                    duration: 0.8,
                    y: 30,
                    opacity: 0,
                    ease: "power3.out"
                }, "-=0.3");

                // Animate the CTA button with a bounce effect
                tl.from('.hero-section .btn', {
                    duration: 0.8,
                    scale: 0.5,
                    opacity: 0,
                    ease: "back.out(1.7)"
                }, "-=0.4");

                // Animate the background image with a fade-in zoom effect
                tl.from('.hero-section .bg-image', {
                    duration: 2,
                    scale: 1.1,
                    opacity: 0.8,
                    ease: "power2.out"
                }, 0);

                return tl;
            };

            // Call the loading animation
            loadingAnimation();

            // Spice product animations
            const spiceItems = document.querySelectorAll('.product-item, .spice-card');

            if (spiceItems.length > 0) {
                gsap.from(spiceItems, {
                    scrollTrigger: {
                        trigger: spiceItems[0].parentElement,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    },
                    duration: 0.6,
                    y: 100,
                    opacity: 0,
                    stagger: 0.15,
                    ease: "power3.out"
                });
            }

            // Create a floating spice effect on hover
            spiceItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    gsap.to(item, {
                        y: -10,
                        duration: 0.4,
                        ease: "power2.out"
                    });

                    // Add a subtle glow effect
                    gsap.to(item, {
                        boxShadow: '0 10px 25px rgba(184, 98, 54, 0.3)',
                        duration: 0.4
                    });
                });

                item.addEventListener('mouseleave', () => {
                    gsap.to(item, {
                        y: 0,
                        duration: 0.4,
                        ease: "power2.in"
                    });

                    // Remove the glow effect
                    gsap.to(item, {
                        boxShadow: '0 5px 15px rgba(0, 0, 0, 0.1)',
                        duration: 0.4
                    });
                });
            });

            // Create scroll animations for sections
            const sections = document.querySelectorAll('section');

            sections.forEach(section => {
                // Headers animation
                const header = section.querySelector('h2, h3');
                if (header) {
                    gsap.from(header, {
                        scrollTrigger: {
                            trigger: header,
                            start: "top 85%",
                            toggleActions: "play none none none"
                        },
                        duration: 0.8,
                        x: -50,
                        opacity: 0,
                        ease: "power3.out"
                    });
                }

                // Paragraph animations
                const paragraphs = section.querySelectorAll('p');
                if (paragraphs.length > 0) {
                    gsap.from(paragraphs, {
                        scrollTrigger: {
                            trigger: paragraphs[0],
                            start: "top 85%",
                            toggleActions: "play none none none"
                        },
                        duration: 0.6,
                        y: 30,
                        opacity: 0,
                        stagger: 0.2,
                        ease: "power3.out"
                    });
                }
            });

            // Create a cinnamon stick subtle rotation animation
            const cinnamonElements = document.querySelectorAll('.cinnamon-image, .spice-icon');

            if (cinnamonElements.length > 0) {
                cinnamonElements.forEach(element => {
                    gsap.to(element, {
                        rotation: 5,
                        duration: 3,
                        repeat: -1,
                        yoyo: true,
                        ease: "sine.inOut"
                    });
                });
            }

            // Add particle effects for the spice theme
            const createSpiceParticles = () => {
                const particleContainer = document.createElement('div');
                particleContainer.className = 'particle-container';
                particleContainer.style.cssText = `
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            z-index: 1;
        `;



                // Create 20 particles
                for (let i = 0; i < 20; i++) {
                    const particle = document.createElement('div');
                    particle.className = 'spice-particle';

                    // Randomly choose a spice type
                    const spiceType = Math.floor(Math.random() * 3);
                    let color;

                    if (spiceType === 0) {
                        color = 'rgba(184, 98, 54, 0.8)'; // Cinnamon color
                    } else if (spiceType === 1) {
                        color = 'rgba(216, 145, 71, 0.8)'; // Lighter cinnamon
                    } else {
                        color = 'rgba(160, 82, 45, 0.8)'; // Darker cinnamon
                    }

                    particle.style.cssText = `
                position: absolute;
                background-color: ${color};
                border-radius: 50%;
                width: ${Math.random() * 8 + 2}px;
                height: ${Math.random() * 8 + 2}px;
                opacity: ${Math.random() * 0.6 + 0.2};
                pointer-events: none;
            `;

                    particleContainer.appendChild(particle);

                    // Animate each particle
                    gsap.set(particle, {
                        x: Math.random() * window.innerWidth,
                        y: Math.random() * window.innerHeight
                    });

                    gsap.to(particle, {
                        duration: Math.random() * 20 + 10,
                        x: '+=' + (Math.random() * 200 - 100),
                        y: '-=' + Math.random() * 200,
                        repeat: -1,
                        yoyo: true,
                        ease: "sine.inOut"
                    });

                    // Add subtle pulsating effect
                    gsap.to(particle, {
                        duration: Math.random() * 3 + 2,
                        scale: Math.random() * 0.5 + 0.5,
                        opacity: Math.random() * 0.3 + 0.2,
                        repeat: -1,
                        yoyo: true,
                        ease: "sine.inOut"
                    });
                }
            };

            // Call the particle effect
            createSpiceParticles();

            // Scroll-triggered parallax effect for background images
            document.querySelectorAll('.bg-image, .parallax-section').forEach(element => {
                gsap.to(element, {
                    scrollTrigger: {
                        trigger: element,
                        start: "top bottom",
                        end: "bottom top",
                        scrub: true
                    },
                    y: (i, target) => -ScrollTrigger.maxScroll(window) * target.dataset.speed || -150,
                    ease: "none"
                });
            });

            // Add a spice trail animation to follow the cursor
            const createSpiceTrail = () => {
                const trailContainer = document.createElement('div');
                trailContainer.className = 'trail-container';
                trailContainer.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
        `;

                document.body.appendChild(trailContainer);

                // Track mouse movement
                document.addEventListener('mousemove', function(e) {
                    // Create a trail particle at mouse position
                    if (Math.random() > 0.7) { // Only create particles occasionally
                        const trail = document.createElement('div');
                        trail.className = 'spice-trail';

                        trail.style.cssText = `
                    position: absolute;
                    width: ${Math.random() * 8 + 3}px;
                    height: ${Math.random() * 8 + 3}px;
                    background-color: rgba(184, 98, 54, ${Math.random() * 0.5 + 0.3});
                    border-radius: 50%;
                    top: ${e.clientY}px;
                    left: ${e.clientX}px;
                    pointer-events: none;
                `;

                        trailContainer.appendChild(trail);

                        // Animate and remove the trail particle
                        gsap.to(trail, {
                            duration: Math.random() * 1 + 0.5,
                            opacity: 0,
                            y: Math.random() * 40 - 20,
                            x: Math.random() * 40 - 20,
                            scale: 0,
                            onComplete: function() {
                                trail.remove();
                            }
                        });
                    }
                });
            };

            // Call the spice trail animation
            createSpiceTrail();

            // Add a surprise spice burst animation on click
            document.addEventListener('click', function(e) {
                // Create a burst container
                const burstContainer = document.createElement('div');
                burstContainer.className = 'burst-container';
                burstContainer.style.cssText = `
            position: absolute;
            top: ${e.clientY}px;
            left: ${e.clientX}px;
            width: 0;
            height: 0;
            pointer-events: none;
            z-index: 9999;
        `;

                document.body.appendChild(burstContainer);

                // Create multiple particles for the burst
                for (let i = 0; i < 20; i++) {
                    const particle = document.createElement('div');
                    particle.className = 'burst-particle';

                    // Randomly choose a spice color
                    const colors = [
                        'rgba(184, 98, 54, 0.9)',
                        'rgba(216, 145, 71, 0.9)',
                        'rgba(160, 82, 45, 0.9)',
                        'rgba(143, 77, 43, 0.9)'
                    ];

                    const color = colors[Math.floor(Math.random() * colors.length)];

                    particle.style.cssText = `
                position: absolute;
                background-color: ${color};
                width: ${Math.random() * 10 + 5}px;
                height: ${Math.random() * 10 + 5}px;
                border-radius: 50%;
                transform: translate(-50%, -50%);
            `;

                    burstContainer.appendChild(particle);

                    // Animate each particle in the burst
                    gsap.to(particle, {
                        duration: Math.random() * 0.8 + 0.6,
                        x: (Math.random() - 0.5) * 100,
                        y: (Math.random() - 0.5) * 100,
                        opacity: 0,
                        scale: Math.random() * 0.5 + 0.5,
                        ease: "power2.out",
                        onComplete: function() {
                            if (i === 19) { // Remove the container when last particle animation completes
                                burstContainer.remove();
                            }
                        }
                    });
                }
            });

            // Add a text scramble effect for specified elements
            class TextScramble {
                constructor(el) {
                    this.el = el;
                    this.chars = '!<>-_\\/[]{}—=+*^?#________';
                    this.update = this.update.bind(this);
                }

                setText(newText) {
                    const oldText = this.el.innerText;
                    const length = Math.max(oldText.length, newText.length);
                    const promise = new Promise((resolve) => this.resolve = resolve);
                    this.queue = [];

                    for (let i = 0; i < length; i++) {
                        const from = oldText[i] || '';
                        const to = newText[i] || '';
                        const start = Math.floor(Math.random() * 40);
                        const end = Math.floor(Math.random() * 40) + start;
                        this.queue.push({
                            from,
                            to,
                            start,
                            end
                        });
                    }

                    cancelAnimationFrame(this.frameRequest);
                    this.frame = 0;
                    this.update();
                    return promise;
                }

                update() {
                    let output = '';
                    let complete = 0;

                    for (let i = 0, n = this.queue.length; i < n; i++) {
                        let {
                            from,
                            to,
                            start,
                            end,
                            char
                        } = this.queue[i];

                        if (this.frame >= end) {
                            complete++;
                            output += to;
                        } else if (this.frame >= start) {
                            if (!char || Math.random() < 0.28) {
                                char = this.randomChar();
                                this.queue[i].char = char;
                            }
                            output += `<span class="dud">${char}</span>`;
                        } else {
                            output += from;
                        }
                    }

                    this.el.innerHTML = output;

                    if (complete === this.queue.length) {
                        this.resolve();
                    } else {
                        this.frameRequest = requestAnimationFrame(this.update);
                        this.frame++;
                    }
                }

                randomChar() {
                    return this.chars[Math.floor(Math.random() * this.chars.length)];
                }
            }

            // Apply the text scramble effect to headings
            const phrases = [
                'Premium Cinnamon',
                'Organic Spices',
                'Exceptional Flavor',
                'Pure Quality',
                'Natural Goodness'
            ];

            const textElements = document.querySelectorAll('.scramble-text');

            if (textElements.length > 0) {
                textElements.forEach(el => {
                    const originalText = el.innerText;
                    const fx = new TextScramble(el);

                    // Scramble on scroll into view
                    ScrollTrigger.create({
                        trigger: el,
                        start: "top 80%",
                        onEnter: () => fx.setText(originalText),
                        once: true
                    });
                });
            } else {
                // If no elements with .scramble-text class, apply to main heading
                const mainHeading = document.querySelector('.hero-section h1');
                if (mainHeading) {
                    const fx = new TextScramble(mainHeading);
                    let counter = 0;

                    const next = () => {
                        fx.setText(phrases[counter]).then(() => {
                            setTimeout(next, 3000);
                        });
                        counter = (counter + 1) % phrases.length;
                    };

                    next();
                }
            }
        });
    </script>
</body>

</html>