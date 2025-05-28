<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>KW Industries</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../assets/originalLogo.png">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/font-awesome5.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/shop.css">
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
        /* Internal CSS */
        :root {
            --dark-brown: #6b4423;
            --cream: #f8f3e9;
            --light-cream: #fdfaf4;
            --text-color: #4a4a4a;
        }


        .section-padding {
            padding: 80px 0;
        }

        .content-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .bg-cream {
            background-color: var(--cream);
        }

        .bg-light-cream {
            background-color: var(--light-cream);
        }

        .text-dark-brown {
            color: var(--dark-brown);
        }

        .bg-dark-brown {
            background-color: var(--dark-brown);
        }

        .border-cream {
            border-color: var(--cream) !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--dark-brown);
            font-weight: 700;
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 2.75rem;
            margin-bottom: 2rem;
            position: relative;
        }

        h1:after {
            content: "";
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--dark-brown);
            margin: 15px auto 0;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .section-title {
            margin-bottom: 2.5rem;
        }

        p {
            margin-bottom: 1.25rem;
        }

        .card {
            border-radius: 0.75rem;
            overflow: hidden;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 1.5rem;
        }

        .list-group-item {
            padding: 0.75rem 0;
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .list-group-item:last-child {
            border-bottom: none;
        }

        .check-icon {
            color: var(--dark-brown);
            margin-right: 10px;
        }

        /* Images */
        .img-container {
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .img-fluid {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Table */
        .table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            margin-bottom: 1.5rem;
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .table th {
            background-color: var(--dark-brown);
            color: white;
            font-weight: 600;
            text-align: left;
            padding: 15px;
            border: none;
        }

        .table td {
            padding: 15px;
            border: none;
            border-bottom: 1px solid var(--cream);
        }

        .table tr:nth-of-type(odd) {
            background-color: var(--light-cream);
        }

        .table tr:nth-of-type(even) {
            background-color: white;
        }

        .table tr:last-child td {
            border-bottom: none;
        }

        /* Logo containers */
        /* .logo-container {
            background-color: var(--cream);
            border-radius: 0.5rem;
            padding: 15px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }
        
        .logo-container:hover {
            transform: scale(1.05);
        }
         */
        .certification-logo {
            max-height: 80px;
            max-width: 100%;
            object-fit: contain;
        }

        /* Content blocks */
        .content-block {
            margin-bottom: 5rem;
        }

        .content-block:last-child {
            margin-bottom: 0;
        }

        /* Animations */
        .slide-up {
            animation: slideUp 1s ease-out;
        }

        .fade-in {
            animation: fadeIn 1.5s ease-out;
        }

        .flip-in {
            animation: flipIn 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes flipIn {
            from {
                transform: rotateY(90deg);
                opacity: 0;
            }

            to {
                transform: rotateY(0);
                opacity: 1;
            }
        }

        /* Testing cards */
        .testing-card {
            background-color: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            height: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .testing-card:hover {
            transform: translateY(-5px);
        }

        /* Testing section container */
        .testing-container {
            background-color: var(--cream);
            border-radius: 0.75rem;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        /* Certifications container */
        .certifications-container {
            background-color: white;
            border-radius: 0.75rem;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--cream);
        }

        /* Vertical alignment fixes */
        .align-items-stretch {
            display: flex;
            flex-wrap: wrap;
        }

        .align-items-stretch>[class*="col-"] {
            display: flex;
            flex-direction: column;
        }

        /* Responsive fixes */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.25rem;
            }

            h2 {
                font-size: 1.75rem;
            }

            .section-padding {
                padding: 50px 0;
            }

            .content-block {
                margin-bottom: 3rem;
            }

            .row.align-items-center {
                row-gap: 2rem;
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
                                <li class="active">
                                    <a href="#">Quality</a>
                                </li>
                                <li>
                                    <a href="../contact/">Contact</a>
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
                        <li class="active">
                            <a href="#">
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
                        <li>
                            <a href="../contact/">
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


            <section id="quality-page" class="page">
                <style>
                    /* Quality Page Specific Styles - Scoped to this section */
                    #quality-page {
                        --dark-brown: #5a3921;
                        --medium-brown: #8c6a4f;
                        --light-brown: #b99d82;
                        --cream: #f5f0e6;
                        --light-cream: #faf8f3;
                        --text-color: #333333;
                        --light-text: #777777;
                    }

                    #quality-page .bg-cream {
                        background-color: var(--cream);
                    }

                    #quality-page .text-dark-brown {
                        color: var(--dark-brown);
                    }

                    #quality-page .text-medium-brown {
                        color: var(--medium-brown);
                    }

                    #quality-page .border-cream {
                        border-color: var(--cream);
                    }

                    #quality-page h1,
                    #quality-page h2,
                    #quality-page h3,
                    #quality-page h4 {
                        font-family: 'Playfair Display', serif;
                        font-weight: 600;
                        color: var(--dark-brown);
                        line-height: 1.3;
                    }

                    #quality-page h1 {
                        font-size: 2.8rem;
                        margin-bottom: 1.5rem;
                        position: relative;
                        letter-spacing: -0.5px;
                    }

                    #quality-page h1:after {
                        content: "";
                        display: block;
                        width: 100px;
                        height: 4px;
                        background-color: var(--light-brown);
                        margin: 25px auto 0;
                    }

                    #quality-page h2 {
                        font-size: 2.2rem;
                        margin-bottom: 1.5rem;
                    }

                    #quality-page h3 {
                        font-size: 1.8rem;
                        margin-bottom: 1.2rem;
                    }

                    #quality-page h4 {
                        font-size: 1.4rem;
                        margin-bottom: 1rem;
                    }

                    #quality-page p,
                    #quality-page li {
                        font-family: 'Roboto', sans-serif;
                        color: var(--text-color);
                        font-size: 1.1rem;
                        line-height: 1.7;
                    }

                    #quality-page .lead {
                        font-size: 1.25rem;
                        color: var(--text-color);
                    }

                    #quality-page .text-highlight {
                        color: var(--medium-brown);
                        font-weight: 500;
                    }

                    #quality-page .img-container {
                        border-radius: 8px;
                        overflow: hidden;
                        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
                    }

                    #quality-page .img-container img {
                        transition: transform 0.5s ease;
                    }

                    #quality-page .img-container:hover img {
                        transform: scale(1.03);
                    }

                    #quality-page .testing-card {
                        background-color: white;
                        border-radius: 8px;
                        padding: 1.5rem;
                        height: 100%;
                        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                        transition: all 0.3s ease;
                        border: 1px solid var(--cream);
                    }

                    #quality-page .testing-card:hover {
                        transform: translateY(-8px);
                        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
                    }

                    #quality-page .logo-container {
                        background-color: white;
                        border-radius: 8px;
                        padding: 1.5rem;
                        height: 120px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        transition: all 0.3s ease;
                        border: 1px solid var(--cream);
                    }

                    #quality-page .logo-container:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
                    }

                    #quality-page .certification-logo {
                        max-height: 80px;
                        max-width: 100%;
                        object-fit: contain;
                        filter: grayscale(30%);
                        transition: filter 0.3s ease;
                    }

                    #quality-page .logo-container:hover .certification-logo {
                        filter: grayscale(0%);
                    }

                    #quality-page table {
                        width: 100%;
                        border-collapse: separate;
                        border-spacing: 0;
                        border-radius: 8px;
                        overflow: hidden;
                        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                    }

                    #quality-page table th {
                        background-color: var(--dark-brown);
                        color: white;
                        font-weight: 500;
                        text-align: left;
                        padding: 1rem;
                        font-family: 'Roboto', sans-serif;
                    }

                    #quality-page table td {
                        padding: 1rem;
                        border-bottom: 1px solid var(--cream);
                        vertical-align: middle;
                    }

                    #quality-page table tr:nth-of-type(odd) {
                        background-color: var(--light-cream);
                    }

                    #quality-page table tr:nth-of-type(even) {
                        background-color: white;
                    }

                    #quality-page table tr:last-child td {
                        border-bottom: none;
                    }

                    #quality-page .section-divider {
                        width: 100px;
                        height: 4px;
                        background-color: var(--light-brown);
                        margin: 2rem auto;
                        opacity: 0.7;
                    }

                    /* Animation classes */
                    #quality-page .fade-in {
                        animation: fadeIn 1s ease-out both;
                    }

                    #quality-page .slide-up {
                        animation: slideUp 0.8s ease-out both;
                    }

                    #quality-page .flip-in {
                        animation: flipIn 0.6s ease-out both;
                    }

                    #quality-page .delay-1 {
                        animation-delay: 0.2s;
                    }

                    #quality-page .delay-2 {
                        animation-delay: 0.4s;
                    }

                    #quality-page .delay-3 {
                        animation-delay: 0.6s;
                    }

                    @keyframes fadeIn {
                        from {
                            opacity: 0;
                        }

                        to {
                            opacity: 1;
                        }
                    }

                    @keyframes slideUp {
                        from {
                            transform: translateY(30px);
                            opacity: 0;
                        }

                        to {
                            transform: translateY(0);
                            opacity: 1;
                        }
                    }

                    @keyframes flipIn {
                        from {
                            transform: perspective(400px) rotateY(90deg);
                            opacity: 0;
                        }

                        to {
                            transform: perspective(400px) rotateY(0);
                            opacity: 1;
                        }
                    }

                    /* Responsive adjustments */
                    @media (max-width: 1024px) {
                        #quality-page h1 {
                            font-size: 2.5rem;
                        }

                        #quality-page h2 {
                            font-size: 2rem;
                        }

                        #quality-page h3 {
                            font-size: 1.6rem;
                        }
                    }

                    @media (max-width: 768px) {
                        #quality-page h1 {
                            font-size: 2.2rem;
                        }

                        #quality-page h2 {
                            font-size: 1.8rem;
                        }

                        #quality-page h3 {
                            font-size: 1.4rem;
                        }

                        #quality-page .testing-card,
                        #quality-page .logo-container {
                            padding: 1.2rem;
                        }
                    }

                    @media (max-width: 576px) {
                        #quality-page h1 {
                            font-size: 2rem;
                        }

                        #quality-page h1:after {
                            width: 80px;
                            margin: 20px auto 0;
                        }

                        #quality-page table {
                            font-size: 0.95rem;
                        }

                        #quality-page table th,
                        #quality-page table td {
                            padding: 0.75rem;
                        }
                    }
                </style>



                <div id="quality-page">
                    <section class="section-padding">
                        <div class="container">
                            <div class="row justify-content-center">

                                <div class="col-lg-10">
                                    <h1 class="text-center text-dark-brown slide-up">Quality Assurance</h1>

                                    <!-- Quality Commitment -->
                                    <div class="content-block fade-in">
                                        <h2 class="text-dark-brown section-title">Our Quality Commitment</h2>
                                        <p class="fs-5">At KW INDUSTRIES, quality is not just a process—it's a promise. From the selection of raw materials to the final packaging, every step of our production is governed by stringent quality control measures.</p>
                                        <p class="fs-5">We take pride in delivering Ceylon cinnamon that meets and exceeds international standards, ensuring our customers receive only the finest products.</p>
                                    </div>



                                    <!-- Cultivation & Sourcing -->
                                    <div class="content-block fade-in">
                                        <h2 class="text-dark-brown section-title">Cultivation & Sourcing</h2>
                                        <div class="row align-items-center gx-5 gy-4">
                                            <div class="col-md-6">
                                                <h3 class="text-dark-brown">Sustainable Farming Practices</h3>
                                                <p>Our cinnamon is sourced from carefully selected farms in Sri Lanka's cinnamon-growing regions, where traditional cultivation methods are combined with modern sustainable practices.</p>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item bg-transparent"><i class="fas fa-check check-icon"></i>Chemical-free cultivation</li>
                                                    <li class="list-group-item bg-transparent"><i class="fas fa-check check-icon"></i>Ethical labor practices</li>
                                                    <li class="list-group-item bg-transparent"><i class="fas fa-check check-icon"></i>Biodiversity preservation</li>
                                                    <li class="list-group-item bg-transparent"><i class="fas fa-check check-icon"></i>Water conservation</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="img-container">
                                                    <img src="../assets/cultivation.png" alt="Cinnamon plantation" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Processing Standards -->
                                    <div class="content-block fade-in">
                                        <h2 class="text-dark-brown section-title">Processing Standards</h2>
                                        <div class="row align-items-center gx-5 gy-4">
                                            <div class="col-md-6 order-md-2">
                                                <h3 class="text-dark-brown">Traditional Meets Modern</h3>
                                                <p>While we honor traditional cinnamon processing techniques passed down through generations, we've implemented modern quality control measures at every stage:</p>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item bg-transparent"><i class="fas fa-check check-icon"></i>Hygienic processing facilities</li>
                                                    <li class="list-group-item bg-transparent"><i class="fas fa-check check-icon"></i>Temperature and humidity control</li>
                                                    <li class="list-group-item bg-transparent"><i class="fas fa-check check-icon"></i>Color and aroma preservation techniques</li>
                                                    <li class="list-group-item bg-transparent"><i class="fas fa-check check-icon"></i>Metal detection and foreign material control</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 order-md-1">
                                                <div class="img-container">
                                                    <img src="../assets/processing.png" alt="Cinnamon processing" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mb-3">
                                        <img src="../assets/qualityLab.png" alt="Description" class="img-fluid" />
                                    </div>

                                    <!-- Quality Testing & Certification -->
                                    <div class="content-block fade-in">
                                        <h2 class="text-dark-brown section-title">Quality Testing & Certification</h2>

                                        <!-- Laboratory Testing -->
                                        <div class="testing-container mb-4">
                                            <h3 class="text-dark-brown mb-4">Laboratory Testing</h3>
                                            <p class="mb-4">Every batch of our cinnamon undergoes rigorous laboratory testing to ensure it meets our high standards and complies with international regulations.</p>

                                            <div class="row row-cols-1 row-cols-sm-2 g-4 align-items-stretch">
                                                <div class="col-12 col-md-6 col-lg-3">
                                                    <div class="testing-card flip-in">
                                                        <h4 class="fs-5 fw-bold text-dark-brown mb-3">Microbiological Testing</h4>
                                                        <p class="mb-0">Total plate count, yeast & mold, E.coli, Salmonella, etc.</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-3">
                                                    <div class="testing-card flip-in">
                                                        <h4 class="fs-5 fw-bold text-dark-brown mb-3">Chemical Analysis</h4>
                                                        <p class="mb-0">Coumarin content, volatile oil content, moisture content, etc.</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-3">
                                                    <div class="testing-card flip-in">
                                                        <h4 class="fs-5 fw-bold text-dark-brown mb-3">Physical Inspection</h4>
                                                        <p class="mb-0">Color, aroma, taste, texture, foreign matter detection.</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-3">
                                                    <div class="testing-card flip-in">
                                                        <h4 class="fs-5 fw-bold text-dark-brown mb-3">Heavy Metals</h4>
                                                        <p class="mb-0">Lead, arsenic, cadmium, mercury testing.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Certifications & Compliance -->
                                        <div class="certifications-container">
                                            <h3 class="text-dark-brown mb-4">Certifications & Compliance</h3>
                                            <p class="mb-4">We maintain the following certifications to ensure our products meet global standards:</p>

                                            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 g-4">
                                                <div class="col flip-in">
                                                    <div class="logo-container">
                                                        <img src="/api/placeholder/150/80" alt="ISO" class="certification-logo">
                                                    </div>
                                                </div>
                                                <div class="col flip-in">
                                                    <div class="logo-container">
                                                        <img src="/api/placeholder/150/80" alt="HACCP" class="certification-logo">
                                                    </div>
                                                </div>
                                                <div class="col flip-in">
                                                    <div class="logo-container">
                                                        <img src="/api/placeholder/150/80" alt="USDA Organic" class="certification-logo">
                                                    </div>
                                                </div>
                                                <div class="col flip-in">
                                                    <div class="logo-container">
                                                        <img src="/api/placeholder/150/80" alt="EU Organic" class="certification-logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ceylon Cinnamon vs. Cassia -->
                                    <div class="content-block fade-in">
                                        <h2 class="text-dark-brown section-title">Ceylon Cinnamon vs. Cassia</h2>
                                        <p class="fs-5 mb-4">Ceylon cinnamon (Cinnamomum zeylanicum) is distinctly different from Cassia cinnamon (Cinnamomum cassia) in several important ways:</p>

                                        <div class="table-responsive mb-4">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th width="30%">Characteristic</th>
                                                        <th width="35%">Ceylon Cinnamon</th>
                                                        <th width="35%">Cassia Cinnamon</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-semibold">Scientific Name</td>
                                                        <td>Cinnamomum zeylanicum</td>
                                                        <td>Cinnamomum cassia</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">Origin</td>
                                                        <td>Sri Lanka</td>
                                                        <td>China, Indonesia, Vietnam</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">Appearance</td>
                                                        <td>Thin, fragile layers; light brown</td>
                                                        <td>Thick, hard bark; dark reddish-brown</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">Taste</td>
                                                        <td>Delicate, sweet, complex</td>
                                                        <td>Strong, pungent, slightly bitter</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">Coumarin Content</td>
                                                        <td>0.004% (very low)</td>
                                                        <td>Up to 5% (potentially harmful)</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">Price</td>
                                                        <td>Higher (premium product)</td>
                                                        <td>Lower (common in supermarkets)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <p class="fs-5">Our commitment to quality ensures you receive authentic Ceylon cinnamon with all its natural benefits and none of the potential risks associated with Cassia varieties.</p>
                                    </div>
                                </div>
                            </div>
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