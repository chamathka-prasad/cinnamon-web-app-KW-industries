<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<!-- <html class="no-js"> -->
<!--<![endif]-->

<head>
	<title>KW Industries</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="assets/originalLogo.png">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome5.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" href="style.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>



	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->



	<style>
		.video-container {
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			position: relative;
		}

		.sound-indicator {
			position: absolute;
			top: 20px;
			right: 20px;
			background-color: rgba(0, 0, 0, 0.6);
			color: white;
			padding: 8px 16px;
			border-radius: 20px;
			font-size: 14px;
			transition: opacity 0.3s;
		}

		.sound-controls {
			position: absolute;
			bottom: 20px;
			left: 50%;
			transform: translateX(-50%);
			background-color: rgba(0, 0, 0, 0.6);
			color: white;
			padding: 8px 16px;
			border-radius: 20px;
			display: flex;
			gap: 10px;
		}

		.user-making-video-container {
			height: auto;
			display: flex;
			align-items: center;
			justify-content: center;
			position: relative;
		}

		.user-making-video {
			width: 100%;
			height: auto;
			max-height: 90vh;
			object-fit: cover;
		}

		.user-making-progress-container {
			position: absolute;
			bottom: 70px;
			left: 0;
			right: 0;
			height: 10px;
			background-color: rgba(0, 0, 0, 0.3);
			opacity: 0;
			transition: opacity 0.3s ease;
			margin: 0 20px;
			border-radius: 5px;
		}

		.user-making-video-container:hover .user-making-progress-container {
			opacity: 1;
		}

		.user-making-progress-bar {
			height: 100%;
			background-color: #ff5722;
			width: 0;
			border-radius: 5px;
			transition: width 0.1s linear;
		}

		.user-making-progress-handle {
			position: absolute;
			right: -10px;
			top: 50%;
			transform: translateY(-50%);
			width: 20px;
			height: 20px;
			background-color: #fff;
			border-radius: 50%;
			cursor: pointer;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
		}

		.user-making-sound-indicator {
			position: absolute;
			top: 20px;
			right: 20px;
			background-color: rgba(0, 0, 0, 0.6);
			color: white;
			padding: 8px 16px;
			border-radius: 20px;
			font-size: 14px;
			transition: opacity 0.3s;
		}

		.user-making-sound-controls {
			position: absolute;
			bottom: 20px;
			left: 50%;
			transform: translateX(-50%);
			background-color: rgba(0, 0, 0, 0.6);
			color: white;
			padding: 8px 16px;
			border-radius: 20px;
			display: flex;
			gap: 10px;
		}

		.user-making-button {
			background-color: transparent;
			border: 1px solid white;
			color: white;
			padding: 5px 10px;
			border-radius: 4px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		.user-making-button:hover {
			background-color: rgba(255, 255, 255, 0.2);
		}

		.user-making-volume-slider {
			width: 100px;
		}
	</style>

	<style>
		/* Modern Cinnamon Grades Section */
		.cinnamon-grades-section {
			position: relative;
			padding: 100px 20px;
			background-image: url('assets/raw-cinnamon-sticks-background.webp');
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			color: white;
			overflow: hidden;
		}

		.bg-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(30, 20, 15, 0.85);
			backdrop-filter: blur(2px);
		}

		.section-content {
			position: relative;
			max-width: 1200px;
			margin: 0 auto;
			z-index: 2;
		}

		.section-title {
			font-size: 3rem;
			font-weight: 700;
			margin-bottom: 20px;
			background: linear-gradient(90deg, #f8d49a, #d4a373);
			-webkit-background-clip: text;
			background-clip: text;
			color: transparent;
			opacity: 0;
			transform: translateY(30px);
			animation: fadeInUp 0.8s 0.2s forwards;
		}

		.section-description {
			font-size: 1.2rem;
			max-width: 700px;
			margin: 0 auto 60px;
			line-height: 1.6;
			color: rgba(255, 255, 255, 0.9);
			opacity: 0;
			transform: translateY(30px);
			animation: fadeInUp 0.8s 0.4s forwards;
		}

		.divider-container {
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 40px 0 60px;
			opacity: 0;
			animation: fadeIn 1s 0.6s forwards;
		}

		.divider-line {
			height: 1px;
			background: linear-gradient(90deg, transparent, rgba(248, 212, 154, 0.5), transparent);
			flex-grow: 1;
			max-width: 100px;
		}

		.divider-icon {
			margin: 0 25px;
			width: 50px;
			height: auto;
			filter: drop-shadow(0 0 5px rgba(248, 212, 154, 0.5));
		}

		.grades-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
			gap: 30px;
			margin-bottom: 60px;
		}

		.grade-card {
			position: relative;
			height: 350px;
			border-radius: 12px;
			overflow: hidden;
			box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
			transform: scale(0.95);
			opacity: 0;
			animation: cardEntrance 0.6s forwards;
		}

		.grade-card:nth-child(1) {
			animation-delay: 0.8s;
		}

		.grade-card:nth-child(2) {
			animation-delay: 0.9s;
		}

		.grade-card:nth-child(3) {
			animation-delay: 1.0s;
		}

		.grade-card:nth-child(4) {
			animation-delay: 1.1s;
		}

		.grade-card:nth-child(5) {
			animation-delay: 1.2s;
		}

		.grade-card:nth-child(6) {
			animation-delay: 1.3s;
		}

		.card-bg {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-size: cover;
			background-position: center;
			transition: transform 1.2s cubic-bezier(0.16, 1, 0.3, 1);
			z-index: 1;
		}

		.grade-card:hover .card-bg {
			transform: scale(1.1);
		}

		.card-content {
			position: relative;
			width: 100%;
			height: 100%;
			display: flex;
			flex-direction: column;
			justify-content: flex-end;
			padding: 30px;
			background: linear-gradient(0deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%);
			z-index: 2;
		}

		.card-content h3 {
			font-size: 2rem;
			margin-bottom: 15px;
			color: #f8d49a;
			transform: translateY(20px);
			transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
		}

		.card-details {
			transform: translateY(30px);
			opacity: 0;
			transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
		}

		.card-details p {
			font-size: 1rem;
			line-height: 1.6;
			margin-bottom: 15px;
			color: rgba(255, 255, 255, 0.9);
		}

		.grade-number {
			position: absolute;
			top: 30px;
			right: 30px;
			font-size: 3rem;
			font-weight: 700;
			color: rgba(248, 212, 154, 0.15);
		}

		.grade-card:hover .card-content h3 {
			transform: translateY(0);
		}

		.grade-card:hover .card-details {
			transform: translateY(0);
			opacity: 1;
		}

		.cta-button {
			display: inline-flex;
			align-items: center;
			padding: 16px 40px;
			background: transparent;
			color: #f8d49a;
			border: 2px solid #f8d49a;
			border-radius: 50px;
			font-size: 1.1rem;
			font-weight: 600;
			text-decoration: none;
			transition: all 0.4s ease;
			opacity: 0;
			transform: translateY(20px);
			animation: fadeInUp 0.6s 1.4s forwards;
		}

		.cta-button svg {
			margin-left: 10px;
			transition: transform 0.3s ease;
		}

		.cta-button:hover {
			background: rgba(248, 212, 154, 0.1);
			transform: translateY(-3px);
			box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
		}

		.cta-button:hover svg {
			transform: translateX(5px);
		}

		/* Animations */
		@keyframes fadeInUp {
			from {
				opacity: 0;
				transform: translateY(30px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
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

		@keyframes cardEntrance {
			from {
				opacity: 0;
				transform: scale(0.95) translateY(20px);
			}

			to {
				opacity: 1;
				transform: scale(1) translateY(0);
			}
		}

		/* Responsive Design */
		@media (max-width: 768px) {
			.section-title {
				font-size: 2.2rem;
			}

			.section-description {
				font-size: 1rem;
			}

			.grade-card {
				height: 300px;
			}
		}

		@media (max-width: 480px) {
			.cinnamon-grades-section {
				padding: 60px 20px;
			}

			.section-title {
				font-size: 1.8rem;
			}

			.grades-grid {
				grid-template-columns: 1fr;
			}
		}
	</style>

	<style>
		/* Optional: Add some styling if needed */
		.full-width-img {
			width: 100%;
			height: auto;
			/* Maintain aspect ratio */
			display: block;
			/* Remove any extra space below the image */
		}

		/* If you want the image to cover the full viewport height as well */
		.full-cover-img {
			width: 100%;
			height: 100vh;
			object-fit: cover;
		}
	</style>

</head>

<body>
	<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
	<!-- <div class="preloader">
		<div class="preloader_image"></div>
	</div> -->

	<!-- search modal -->
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

	<div id="login-form2" class="ls modal c-gutter-0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ds column-overlay">
					<img src="images/signup.jpg" alt="">
				</div>
				<div class="col-md-6 align-items-center d-flex flex-column justify-content-center ls">
					<div class="divider-65 hidden-below-md"></div>
					<div class="divider-60 hidden-above-md"></div>
					<h4 class="special-heading text-center text-capitalize">Sign in</h4>

					<form class="contact-form c-mb-30 c-gutter-20" method="post" action="/">

						<div class="row">
							<div class="col-sm-12">
								<div class="form-group has-placeholder">
									<label for="name2">Full Name <span class="required">*</span></label>

									<input type="text" aria-required="true" size="30" value="" name="name" id="name2" class="form-control" placeholder="Name">
								</div>
							</div>

							<div class="col-sm-12">
								<div class="form-group has-placeholder">
									<label for="password2">Password<span class="required">*</span></label>

									<input type="password" aria-required="true" size="30" value="" name="password2" id="password2" class="form-control" placeholder="Password">
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-sm-12">
								<a href="#" class="btn btn-with-border">Forgot Password?</a>
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


	<!-- <div id="years" class="ls s-py-md-70 s-py-60 years modal text-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4 class="special-heading text-center">Are you over 21 years old?</h4>
					<div class="divider-70 hidden-below-md"></div>
					<div class="divider-30 hidden-above-md"></div>
					<div class="years-btn">
						<a href="#" class="btn btn-maincolor2 btn-yes">Yes</a>
						<a href="index.html" class="btn btn-maincolor btn-no">no</a>
					</div>

				</div>
			</div>
		</div>
	</div> -->


	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->


			<!--eof topline-->

			<header class="page_header" style="background-color: #f3e8d3; border-bottom: 1px solid #F0E0D0;">
				<div class="container">
					<div class="header-container">
						<!-- Logo -->

						<div class="logo-container">
							<a href="#" class="logo">

								<img src="assets/KWnamelogo.png" alt="Premium Cinnamon" style="height: 60px; width: auto; object-fit: contain;margin-left: 10px;">
							</a>
						</div>

						<!-- Desktop Navigation -->
						<nav class="desktop-nav">
							<ul class="nav-menu">
								<li class="active">
									<a href="index.html">Home</a>
								</li>
								<li>
									<a href="about/">About</a>
								</li>
								<li>
									<a href="product/">Products</a>
								</li>
								<li>
									<a href="export/">Export</a>
								</li>
								<li>
									<a href="quality/">Quality</a>
								</li>
								<li>
									<a href="contact/">Contact</a>
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
						<li class="active">
							<a href="index.html">
								<span>Home</span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9 18L15 12L9 6" stroke="#5C3317" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</a>
						</li>
						<li>
							<a href="about/">
								<span>About</span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9 18L15 12L9 6" stroke="#5C3317" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</a>
						</li>
						<li>
							<a href="product/">
								<span>Products</span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9 18L15 12L9 6" stroke="#5C3317" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</a>
						</li>
						<li>
							<a href="quality/">
								<span>Quality</span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9 18L15 12L9 6" stroke="#5C3317" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</a>
						</li>
						<li>
							<a href="export/">
								<span>Export</span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9 18L15 12L9 6" stroke="#5C3317" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</a>
						</li>
						<li>
							<a href="contact/">
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




			<section class="page_slider vslider-fullwidth">
				<div class="mouse_down">
					<!-- Optional mouse down indicator -->
				</div>
				<div class="flexslider">
					<ul class="slides">
						<!-- Slide 1 -->
						<li class="ds cover-image text-left active slide">
							<div class="vslider-video-container">
								<video class="slider-video" preload="none" src="assets/cinnamon-powder-falling.mp4" autoplay muted loop playsinline></video>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer">
													<h2 class="text-capitalize intro_featured_word">
														<span class="gold">We provide</span>
														<span class="white">True Cinnamon</span>
														<span class="gold-small">to the whole world!</span>
													</h2>
													<a href="product/" class="btn btn-maincolor2 medium-btn" id="gradient-background-button">Explore our Products</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>

						<!-- Slide 2 -->
						<li class="ds cover-image text-left slide">
							<div class="vslider-video-container">
								<video class="slider-video" preload="none" src="videos/p3.mp4" autoplay muted loop playsinline></video>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer">
													<h2 class="text-capitalize intro_featured_word">
														<span class="gold">Pure Cinnamon,</span>
														<span class="white"> Pure Goodness</span>

													</h2>
													<a href="product/" class="btn btn-maincolor2 medium-btn" id="gradient-background-button">Explore our Products</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>

						<!-- Slide 3 -->
						<li class="ds cover-image text-left slide">
							<div class="vslider-video-container">
								<video class="slider-video" preload="none" src="home/assets/cinnamon-flying.mp4" autoplay muted loop playsinline></video>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer">
													<h2 class="text-capitalize intro_featured_word">
														<span class="gold">We Are</span>
														<span class="white">Panagolish</span>

													</h2>
													<a href="product/" class="btn btn-maincolor2 medium-btn" id="gradient-background-button">Explore our Products</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>

			<style>
				/* Full-width video slider styles */
				.vslider-fullwidth {
					width: 100%;
					overflow: hidden;
					position: relative;
				}

				.vslider-fullwidth .flexslider,
				.vslider-fullwidth .slides,
				.vslider-fullwidth .slides>li {
					height: 100vh;
					width: 100%;
					margin: 0;
					padding: 0;
				}

				.vslider-video-container {
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					overflow: hidden;
				}

				.vslider-fullwidth .slider-video {
					position: absolute;
					top: 50%;
					left: 50%;
					min-width: 100%;
					min-height: 100%;
					width: auto;
					height: auto;
					transform: translate(-50%, -50%);
					object-fit: cover;
				}

				/* Maintain responsive behavior */
				@media (max-width: 991px) {

					.vslider-fullwidth .flexslider,
					.vslider-fullwidth .slides,
					.vslider-fullwidth .slides>li {
						height: 85vh;
						/* Increased from 70vh for better viewing on medium screens */
					}
				}

				@media (max-width: 767px) {

					.vslider-fullwidth .flexslider,
					.vslider-fullwidth .slides,
					.vslider-fullwidth .slides>li {
						height: 100vh;
						/* Full viewport height on small screens */
					}

					/* Ensure content is visible over video on small screens */
					.vslider-fullwidth .intro_layers_wrapper {
						padding-top: 2rem;
						padding-bottom: 2rem;
					}
				}
			</style>


			<section id="about" class="section-about s-pt-0 s-pb-0" style="background-color:rgb(255, 255, 255);">
				<div class="about-container">
					<div class="about-left">
						<h6 class="sub-title special-heading sub-title" style="color: #A16207;"><span>Who We Are?</span></h6>
						<h2 class="special-heading" style="color: #5C3317; font-family: 'Playfair Display', serif;">History About Factory</h2>
						<p class="smallp  mt-5" style="color: #3a2615;">We are KW Industries - From the Island of Cinnamon - Sri Lanka.</p>
						<p class="longp mt-3" style="color: #3a2615;">
							<!-- <b>Sri Lankan true cinnamon</b>, also called Ceylon cinnamon, is the real kind of cinnamon. It <b>comes only from Sri Lanka</b>, has a <b>sweet, soft taste</b>, and is <b>better and safer</b> than the common kind (called Cassia). People like it for <b>health and cooking</b> because it's uniqueness and significance in the world of medicine and food science.
							The story of <i>Panagolish</i> begins with the island's rich cinnamon history. For centuries, Sri
							Lanka has been the home of the world's finest cinnamon, treasured for its aroma,
							health benefits, and natural purity.
							KW Industries honors this legacy, but goes a step further.. -->

							Sri Lankan true cinnamon, also called <b>Ceylon cinnamon</b> , is the original and best cinnamon that comes only from Sri Lanka. 
							It has a <b>sweet, mild taste and is healthier</b> and safer than common cinnamon (Cassia).  <br><br>
							People value it for <b>cooking</b> and <b>health</b> because of its unique qualities. 
							<b>Panagolish’s</b> story is linked to Sri Lanka’s long history of producing the finest cinnamon. 
							KW Industries respects this tradition and adds extra care to keep its quality high.
						</p>
					</div>
					<div class="about-right">
						<div class="about-image-wrapper">
							<img src="home/assets/about.jpg" alt="Cinnamon rolls">
						</div>
					</div>
				</div>

				<div class="about-container mt-4">
					<h6 class="sub-title special-heading sub-title text-center" style="color: #A16207; letter-spacing: 2px; font-size: 1rem; margin-bottom: 10px;"><span>Pure Cinnamon, Pure Goodness</span></h6>
					<p class="longp" style="color: #3a2615;">
						KW INDUSTRIES is a premier exporter of Ceylon cinnamon, directly sourced from the lush plantations of Sri Lanka. Our commitment to quality and authenticity ensures that every batch of cinnamon meets the highest international standards.  <br>
						With generations of experience in cinnamon cultivation and processing, we bring you the true taste of Sri Lanka's most prized spice..
					</p>
					<div class="about-buttons">
						<a href="about/" class="btn-maincolor">OUR STORY</a>
					</div>
				</div>

				<style>
					@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap');

					/* Original button styles from your second example are preserved */
					.btn-maincolor {
						/* Keep original button styles */
						background-color: #A16207;
						color: white;
					}

					/* Original sub-title styles from your second example are preserved */
					.sub-title {
						/* Keep original sub-title styles */
						letter-spacing: 2px;
						font-size: 1rem;
					}

					/* Original special-heading styles from your second example are preserved */
					.special-heading {
						/* Keep original heading styles */
						font-size: 2.5rem;
						font-weight: 700;
					}
				</style>
			</section>

			<div class="user-making-video-container" id="videoSection">
				<video
					class=""
					src="videos/cinnamonProcessingNew.mp4"
					loop
					playsinline
					controls
					id="cinnamonVideo"
					style="width:100%;height:auto;object-fit:cover;filter: none">
					Your browser does not support the video tag.
				</video>
				<div class="user-making-progress-container d-none" id="progressContainer">
					<div class="user-making-progress-bar" id="progressBar">
						<div class="user-making-progress-handle"></div>
					</div>
				</div>
				<div class="user-making-sound-indicator d-none" id="soundStatus">Sound: On</div>
				<div class="user-making-sound-controls d-none">
					<button class="user-making-button" id="toggleSound">Mute</button>
					<input type="range" min="0" max="1" step="0.1" value="0.5" class="user-making-volume-slider" id="volumeControl">
				</div>
			</div>



			<section style="padding: 4rem 0; background-color: #f3e8d3;">
				<div class="container px-4 mx-auto ">
					<h2 class="text-center mb-5" style="font-size: 1.875rem; font-weight: 700; color: #5c3d2e;">Our Premium Cinnamon Products</h2>

					<div class="row">
						<!-- Product 1 -->
						<div class="col-md-4 mb-4">
							<div class="card h-100" style="border-radius: 0.5rem; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
								<div style="position: relative;">
									<img src="assets/alba.png"
										alt="Cinnamon Alba"
										class="card-img-top"
										style="width: 100%; height: 16rem; object-fit: cover;">
									<div style="position: absolute; top: 0.5rem; right: 0.5rem; background-color: #e67a00; color: white; width: 2rem; height: 2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
										<i class="fas fa-award"></i>
									</div>
								</div>
								<div class="card-body" style="padding: 1.5rem;">
									<h3 class="card-title" style="font-size: 1.25rem; font-weight: 700; color: #5c3d2e; margin-bottom: 0.5rem;">Cinnamon ALBA</h3>
									<p class="card-text" style="font-size: 0.875rem; color: #b38b6d; margin-bottom: 1rem;">Grade: ALBA (Export Quality)</p>
									<p class="card-text" style="color: #4a5568; margin-bottom: 1rem;">The highest and most prized grade of Ceylon cinnamon. Characterized by its very thin, smooth, and pale tan quills with an exquisite, sweet, and delicate floral aroma and a subtle flavor.</p>
									<a href="product/" class="card-link" style="color: #d35400; font-weight: 600; text-decoration: none;">View Details</a>
								</div>
							</div>
						</div>

						<!-- Product 2 -->
						<div class="col-md-4 mb-4">
							<div class="card h-100" style="border-radius: 0.5rem; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
								<div style="position: relative;">
									<img src="assets/C5 special.png"
										alt="Cinnamon C5 Special"
										class="card-img-top"
										style="width: 100%; height: 16rem; object-fit: cover;">
									<div style="position: absolute; top: 0.5rem; right: 0.5rem; background-color: #e67a00; color: white; width: 2rem; height: 2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
										<i class="fas fa-award"></i>
									</div>
								</div>
								<div class="card-body" style="padding: 1.5rem;">
									<h3 class="card-title" style="font-size: 1.25rem; font-weight: 700; color: #5c3d2e; margin-bottom: 0.5rem;">Cinnamon C5 Special</h3>
									<p class="card-text" style="font-size: 0.875rem; color: #b38b6d; margin-bottom: 1rem;">Grade: C5 Special (Export Quality)</p>
									<p class="card-text" style="color: #4a5568; margin-bottom: 1rem;">A high-quality grade, second only to Alba. Features thin quills with a rich golden-brown color, excellent aroma, and a distinctively sweet flavor. Ideal for culinary and medicinal uses.</p>
									<a href="product/" class="card-link" style="color: #d35400; font-weight: 600; text-decoration: none;">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-4">
							<div class="card h-100" style="border-radius: 0.5rem; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
								<div style="position: relative;">
									<img src="assets/c5.png"
										alt="Cinnamon C5 Special"
										class="card-img-top"
										style="width: 100%; height: 16rem; object-fit: cover;">
									<div style="position: absolute; top: 0.5rem; right: 0.5rem; background-color: #e67a00; color: white; width: 2rem; height: 2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
										<i class="fas fa-award"></i>
									</div>
								</div>
								<div class="card-body" style="padding: 1.5rem;">
									<h3 class="card-title" style="font-size: 1.25rem; font-weight: 700; color: #5c3d2e; margin-bottom: 0.5rem;">Cinnamon C5 </h3>
									<p class="card-text" style="font-size: 0.875rem; color: #b38b6d; margin-bottom: 1rem;">Grade: C5 (Export Quality)</p>
									<p class="card-text" style="color: #4a5568; margin-bottom: 1rem;">A popular export grade of good quality. The quills are slightly thicker than C5 Special, with a good aroma and sweet taste. Widely used in cooking and for its health benefits.</p>
									<a href="product/" class="card-link" style="color: #d35400; font-weight: 600; text-decoration: none;">View Details</a>
								</div>
							</div>
						</div>

						<!-- Product 3 -->
						<div class="col-md-4 mb-4">
							<div class="card h-100" style="border-radius: 0.5rem; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
								<div style="position: relative;">
									<img src="assets/h1.png"
										alt="Cinnamon Powder"
										class="card-img-top"
										style="width: 100%; height: 16rem; object-fit: cover;">
									<div style="position: absolute; top: 0.5rem; right: 0.5rem; background-color: #e67a00; color: white; width: 2rem; height: 2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
										<i class="fas fa-award"></i>
									</div>
								</div>
								<div class="card-body" style="padding: 1.5rem;">
									<h3 class="card-title" style="font-size: 1.25rem; font-weight: 700; color: #5c3d2e; margin-bottom: 0.5rem;">Cinnamon H1</h3>
									<p class="card-text" style="font-size: 0.875rem; color: #b38b6d; margin-bottom: 1rem;">Grade: H1 (Export Quality)</p>
									<p class="card-text" style="color: #4a5568; margin-bottom: 1rem;">Comprises the thicker sections of cinnamon bark (rough bark). It has a stronger, more intense flavor compared to finer grades. Often used for grinding or in robust culinary applications.</p>
									<a href="product/" class="card-link" style="color: #d35400; font-weight: 600; text-decoration: none;">View Details</a>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4">
							<div class="card h-100" style="border-radius: 0.5rem; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
								<div style="position: relative;">
									<img src="assets/h2-2.png"
										alt="Cinnamon C5 Special"
										class="card-img-top"
										style="width: 100%; height: 16rem; object-fit: cover;">
									<div style="position: absolute; top: 0.5rem; right: 0.5rem; background-color: #e67a00; color: white; width: 2rem; height: 2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
										<i class="fas fa-award"></i>
									</div>
								</div>
								<div class="card-body" style="padding: 1.5rem;">
									<h3 class="card-title" style="font-size: 1.25rem; font-weight: 700; color: #5c3d2e; margin-bottom: 0.5rem;">Cinnamon H2</h3>
									<p class="card-text" style="font-size: 0.875rem; color: #b38b6d; margin-bottom: 1rem;">Grade: H2 (Export Quality)</p>
									<p class="card-text" style="color: #4a5568; margin-bottom: 1rem;">Consists of thicker and rougher bark pieces than H1, often from older branches. Offers a very strong, pungent flavor and aroma. Suitable for oil extraction or when a very potent cinnamon taste is desired.</p>
									<a href="product/" class="card-link" style="color: #d35400; font-weight: 600; text-decoration: none;">View Details</a>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4">
							<div class="card h-100" style="border-radius: 0.5rem; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
								<div style="position: relative;">
									<img src="assets/c4.png"
										alt="Cinnamon C5 Special"
										class="card-img-top"
										style="width: 100%; height: 16rem; object-fit: cover;">
									<div style="position: absolute; top: 0.5rem; right: 0.5rem; background-color: #e67a00; color: white; width: 2rem; height: 2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
										<i class="fas fa-award"></i>
									</div>
								</div>
								<div class="card-body" style="padding: 1.5rem;">
									<h3 class="card-title" style="font-size: 1.25rem; font-weight: 700; color: #5c3d2e; margin-bottom: 0.5rem;">Cinnamon C4</h3>
									<p class="card-text" style="font-size: 0.875rem; color: #b38b6d; margin-bottom: 1rem;">Grade: C4 (Export Quality)</p>
									<p class="card-text" style="color: #4a5568; margin-bottom: 1rem;">A good quality cinnamon grade, slightly thicker and rougher than C5. It offers a pleasant aroma and sweet flavor, making it versatile for various culinary applications.</p>
									<a href="product/" class="card-link" style="color: #d35400; font-weight: 600; text-decoration: none;">View Details</a>
								</div>
							</div>
						</div>


					</div>

					<div class="text-center mt-5">
						<a href="product/" class="btn" style="display: inline-block; padding: 0.75rem 2rem; border-radius: 9999px; font-size: 1.125rem; font-weight: 600; background-color: #d35400; color: white; text-decoration: none; animation: pulse 2s infinite;">View All Products</a>
					</div>
				</div>
			</section>

			<style>
				@keyframes pulse {
					0% {
						transform: scale(1);
					}

					50% {
						transform: scale(1.05);
					}

					100% {
						transform: scale(1);
					}
				}
			</style>

			<!-- <video
				class="video"
				src="videos/Cinnamonmaking.mp4"
				autoplay
				muted
				loop
				id="cinamonVideo"

				style="width:100%;height:auto;object-fit:cover;filter: none">
				Your browser does not support the video tag.
			</video> -->










			<div id="process-unique" class="s-pt-50 s-pb-50 mb-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12 text-center">
							<div class="unique-features">
								<h4>Uniqueness of Our Cinnamon</h4>
							</div>
						</div>
					</div>

					<div class="row feature-row-center justify-content-center g-4">
						<!-- Feature 1 -->
						<div class="col-12 col-sm-10 col-md-6 col-lg-3 mt-2">
							<div class="feature-box-item h-100 mx-auto mx-md-0">
								<div class="feature-box text-center h-100 p-4">
									<div class="icon-styled fs-60 color-main2 mb-3">
										<i class="fas fa-gem"></i>
									</div>
									<h6 class="text-uppercase">Technologically advanced</h6>
									<p>
										Uniquely designed for true cinnamon processings.
									</p>
								</div>
							</div>
						</div>

						<!-- Feature 2 -->
						<div class="col-12 col-sm-10 col-md-6 col-lg-3 mt-2">
							<div class="feature-box-item h-100 mx-auto mx-md-0">
								<div class="feature-box text-center h-100 p-4">
									<div class="icon-styled fs-60 color-main2 mb-3">
										<i class="fas fa-globe"></i>
									</div>
									<h6 class="text-uppercase">Global standard</h6>
									<p>
										Our facility maintains hygiene and purity standards that meet global export demands.
									</p>
								</div>
							</div>
						</div>

						<!-- Feature 3 -->
						<div class="col-12 col-sm-10 col-md-6 col-lg-3 mt-2">
							<div class="feature-box-item h-100 mx-auto mx-md-0">
								<div class="feature-box text-center h-100 p-4">
									<div class="icon-styled fs-60 color-main2 mb-3">
										<i class="fas fa-shield-alt"></i>
									</div>
									<h6 class="text-uppercase">Expertly Processed</h6>
									<p>
										Every step, from cultivation to packing, is monitored with years of experience.
									</p>
								</div>
							</div>
						</div>

						<!-- Feature 4 -->
						<div class="col-12 col-sm-10 col-md-6 col-lg-3 mt-2">
							<div class="feature-box-item h-100 mx-auto mx-md-0">
								<div class="feature-box text-center h-100 p-4">
									<div class="icon-styled fs-60 color-main2 mb-3">
										<i class="fas fa-leaf"></i>
									</div>
									<h6 class="text-uppercase">100% True Cinnamon</h6>
									<p>
										Ensures that the essence of "true cinnamon" remains untouched while meeting the needs of the modern world.
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Option 1: Simple full-width image -->

				</div>
			</div>





			<!-- Option 4: Full-width image with content overlay (common for hero sections) -->
			<div class="container-fluid p-0 position-relative">
				<img src="assets/productProcessing.png" alt="Hero image" class="img-fluid w-100">
				<div class="position-absolute top-50 start-50 translate-middle text-center text-white">

				</div>
			</div>

			<!-- <div id="process-unique" class="s-pt-50 s-pb-50">
				<div class="col-lg-6" id="feature-center">
					<div class="unique-features">
						<h4>Uniqueness of Our Cinnamon</h4>
					</div>
					<div class="feature-row-center">
						<div class="feature-box-container">
							<div class="feature-box-item">
								<div class="feature-box text-center">
									<div class="icon-styled fs-60 color-main2">
										<i class="fas fa-gem"></i>
									</div>
									<h6 class="text-uppercase">Technologically advanced</h6>
									<p>
										Uniquely designed for true cinnamon processings.
									</p>
								</div>
							</div>
							<div class="feature-box-item">
								<div class="feature-box text-center">
									<div class="icon-styled fs-60 color-main2">
										<i class="fas fa-globe"></i>
									</div>
									<h6 class="text-uppercase">
										Global standard
									</h6>
									<p>
										Our facility maintains hygiene and purity standards that meet global export demands.
									</p>
								</div>
							</div>
							<div class="feature-box-item">
								<div class="feature-box text-center">
									<div class="icon-styled fs-60 color-main2">
										<i class="fas fa-shield-alt"></i>
									</div>
									<h6 class="text-uppercase">Expertly Processed</h6>
									<p>
										Every step, from cultivation to packing, is monitored with years of experience.
									</p>
								</div>
							</div>
							<div class="feature-box-item">
								<div class="feature-box text-center">
									<div class="icon-styled fs-60 color-main2">
										<i class="fas fa-leaf"></i>
									</div>
									<h6 class="text-uppercase">100% True Cinnamon</h6>
									<p>
										Ensures that the essence of "true cinnamon" remains untouched while meeting the needs of the modern world.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->

			<!-- <div class="container-grade s-pt-50 s-pb-50 mt-5">
				<h1>Cinnamon Grades</h1>
				<p> We export 5 types of Cinnamon grades and we are planning to expand our product range with bottled cinnamon items
					and more value-added cinnamon products. </p>
				<div class="mainproduct_name">
					<div class="hr-container">
						<div class="hr-line"></div>
						<img src="images/gallery/cinnamon.png" alt="Cinnamon and Leaf" class="hr-image">
						<div class="hr-line"></div>
					</div>
				</div>
				<div class="grid-container-1">
					<div class="grid-container">
						<div class="grid-item">
							<div class="card-label">ALBA</div>
							<div class="image-container">
								<img src="home/assets/alba.png" alt="Cinnamon and Leaf">
							</div>
						</div>

						<div class="grid-item">
							<div class="card-label">C5 SPECIAL</div>
							<div class="image-container">
								<img src="home/assets/C5 special.png" alt="Cinnamon and Leaf">
							</div>
						</div>
						<div class="grid-item">
							<div class="card-label">C5</div>
							<div class="image-container">
								<img src="home/assets/c5.png" alt="Cinnamon and Leaf">
							</div>
						</div>
					</div>
					<div class="center-row">
						<div class="grid-item">
							<div class="card-label">H1</div>
							<div class="image-container">
								<img src="home/assets/h1.png" alt="Cinnamon and Leaf">
							</div>
						</div>
						<div class="grid-item">
							<div class="card-label">H2</div>
							<div class="image-container">
								<img src="home/assets/h2.png" alt="Cinnamon and Leaf">
							</div>
						</div>
						<div class="grid-item">
							<div class="card-label">C4</div>
							<div class="image-container">
								<img src="home/assets/c4.png" alt="Cinnamon and Leaf">
							</div>
						</div>
					</div>

					<div class="row g-4 mb-4">
						<div class="col-md-4">
							<div class="grade-card card" data-aos="bounce-left" data-aos-delay="100">
								<div class="card-header">
									<h5 class="m-0">ALBA</h5>
								</div>
								<div class="card-body">
									<img src="home/assets/alba.png" alt="ALBA Cinnamon" class="img-fluid">
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="grade-card card" data-aos="bounce-left" data-aos-delay="200">
								<div class="card-header">
									<h5 class="m-0">C5 SPECIAL</h5>
								</div>
								<div class="card-body">
									<img src="home/assets/C5 special.png" alt="C5 SPECIAL Cinnamon" class="img-fluid">
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="grade-card card" data-aos="bounce-left" data-aos-delay="300">
								<div class="card-header">
									<h5 class="m-0">C5</h5>
								</div>
								<div class="card-body">
									<img src="home/assets/c5.png" alt="C5 Cinnamon" class="img-fluid">
								</div>
							</div>
						</div>
					</div>

					Second Row of Products
					<div class="row g-4">
						<div class="col-md-4">
							<div class="grade-card card" data-aos="bounce-left" data-aos-delay="100">
								<div class="card-header">
									<h5 class="m-0">H1</h5>
								</div>
								<div class="card-body">
									<img src="home/assets/h1.png" alt="H1 Cinnamon" class="img-fluid">
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="grade-card card" data-aos="bounce-left" data-aos-delay="200">
								<div class="card-header">
									<h5 class="m-0">H2</h5>
								</div>
								<div class="card-body">
									<img src="home/assets/h2.png" alt="H2 Cinnamon" class="img-fluid">
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="grade-card card" data-aos="bounce-left" data-aos-delay="300">
								<div class="card-header">
									<h5 class="m-0">C4</h5>
								</div>
								<div class="card-body">
									<img src="home/assets/c4.png" alt="C4 Cinnamon" class="img-fluid">
								</div>
							</div>
						</div>
					</div>

					Coming Soon Section
					<div class="coming-soon text-center mt-5">
						<h3><i class="fas fa-flask me-2"></i> Coming Soon</h3>
						<p class="mb-0">Stay tuned for our new bottled cinnamon products and more value-added offerings.</p>
					</div>
				</div>
			</div> -->





		</div>








		<!-- <section class="ls section-portfolio s-pt-80 s-pb-80 text-center text-sm-left" id="gal" style="background-color: #FFF8F0;">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h6 class="special-heading sub-title text-center" style="color: #A16207; letter-spacing: 2px; font-size: 1rem; margin-bottom: 10px;">
							<span>CINNAMON PRODUCTION</span>
						</h6>
						<h2 class="special-heading text-center" style="color: #5C3317; font-size: 2.5rem; margin-bottom: 20px;">
							Our Cinnamon Journey
						</h2>
						<div class="divider-30"></div>
						<p class="text-center" style="color: #7B3F00; max-width: 700px; margin: 0 auto 40px;">
							Witness the journey of our premium cinnamon from harvest to your home
						</p>
					</div>
				</div>

				<div class="row isotope-wrapper portfolio masonry-layout c-gutter-5 c-mb-5">

					<div class="col-md-6 corporate">
						<div class="vertical-item item-gallery content-absolute text-center" style="overflow: hidden; border-radius: 8px; box-shadow: 0 5px 15px rgba(92,51,23,0.1);">
							<div class="item-media">
								<img src="home/assets/gal1.jpg" alt="Cinnamon harvest" style="transition: transform 0.5s ease; width: 100%;">
							</div>
							<div class="item-content" style="background: linear-gradient(to top, rgba(92,51,23,0.8) 0%, transparent 100%); opacity: 0; transition: opacity 0.3s ease;">
								<div class="icons-link">
									<a class="link-zoom photoswipe-link" title="Cinnamon harvest" href="home/assets/gal1.jpg" style="background: #FFF; color: #5C3317; width: 50px; height: 50px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-6 entertainment innovations">
						<div class="vertical-item item-gallery content-absolute text-center" style="overflow: hidden; border-radius: 8px; box-shadow: 0 5px 15px rgba(92,51,23,0.1);">
							<div class="item-media">
								<img src="home/assets/gal-2.jpg" alt="Cinnamon drying process" style="transition: transform 0.5s ease; width: 100%;">
							</div>
							<div class="item-content" style="background: linear-gradient(to top, rgba(92,51,23,0.8) 0%, transparent 100%); opacity: 0; transition: opacity 0.3s ease;">
								<div class="icons-link">
									<a class="link-zoom photoswipe-link" title="Cinnamon drying process" href="home/assets/gal-2.jpg" style="background: #FFF; color: #5C3317; width: 50px; height: 50px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="vertical-item item-gallery content-absolute text-center" style="overflow: hidden; border-radius: 8px; box-shadow: 0 5px 15px rgba(92,51,23,0.1);">
							<div class="item-media">
								<img src="home/assets/gal-3.jpg" alt="Cinnamon sticks" style="transition: transform 0.5s ease; width: 100%;">
							</div>
							<div class="item-content" style="background: linear-gradient(to top, rgba(92,51,23,0.8) 0%, transparent 100%); opacity: 0; transition: opacity 0.3s ease;">
								<div class="icons-link">
									<a class="link-zoom photoswipe-link" title="Cinnamon sticks" href="home/assets/gal-3.jpg" style="background: #FFF; color: #5C3317; width: 40px; height: 40px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="vertical-item item-gallery content-absolute text-center" style="overflow: hidden; border-radius: 8px; box-shadow: 0 5px 15px rgba(92,51,23,0.1);">
							<div class="item-media">
								<img src="home/assets/gal-4.jpg" alt="Cinnamon powder" style="transition: transform 0.5s ease; width: 100%;">
							</div>
							<div class="item-content" style="background: linear-gradient(to top, rgba(92,51,23,0.8) 0%, transparent 100%); opacity: 0; transition: opacity 0.3s ease;">
								<div class="icons-link">
									<a class="link-zoom photoswipe-link" title="Cinnamon powder" href="home/assets/gal-4.jpg" style="background: #FFF; color: #5C3317; width: 40px; height: 40px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="vertical-item item-gallery content-absolute text-center" style="overflow: hidden; border-radius: 8px; box-shadow: 0 5px 15px rgba(92,51,23,0.1);">
							<div class="item-media">
								<img src="home/assets/gal-5.jpg" alt="Cinnamon packaging" style="transition: transform 0.5s ease; width: 100%;">
							</div>
							<div class="item-content" style="background: linear-gradient(to top, rgba(92,51,23,0.8) 0%, transparent 100%); opacity: 0; transition: opacity 0.3s ease;">
								<div class="icons-link">
									<a class="link-zoom photoswipe-link" title="Cinnamon packaging" href="home/assets/gal-5.jpg" style="background: #FFF; color: #5C3317; width: 40px; height: 40px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-6 entertainment innovations">
						<div class="vertical-item item-gallery content-absolute text-center" style="overflow: hidden; border-radius: 8px; box-shadow: 0 5px 15px rgba(92,51,23,0.1);">
							<div class="item-media">
								<img src="home/assets/gal-6.jpg" alt="Cinnamon quality check" style="transition: transform 0.5s ease; width: 100%;">
							</div>
							<div class="item-content" style="background: linear-gradient(to top, rgba(92,51,23,0.8) 0%, transparent 100%); opacity: 0; transition: opacity 0.3s ease;">
								<div class="icons-link">
									<a class="link-zoom photoswipe-link" title="Cinnamon quality check" href="home/assets/gal-6.jpg" style="background: #FFF; color: #5C3317; width: 50px; height: 50px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-3">
						<div class="vertical-item item-gallery content-absolute text-center" style="overflow: hidden; border-radius: 8px; box-shadow: 0 5px 15px rgba(92,51,23,0.1);">
							<div class="item-media">
								<img src="home/assets/gal-7.jpg" alt="Cinnamon farm" style="transition: transform 0.5s ease; width: 100%;">
							</div>
							<div class="item-content" style="background: linear-gradient(to top, rgba(92,51,23,0.8) 0%, transparent 100%); opacity: 0; transition: opacity 0.3s ease;">
								<div class="icons-link">
									<a class="link-zoom photoswipe-link" title="Cinnamon farm" href="home/assets/gal-7.jpg" style="background: #FFF; color: #5C3317; width: 40px; height: 40px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-6 entertainment innovations">
						<div class="vertical-item item-gallery content-absolute text-center" style="overflow: hidden; border-radius: 8px; box-shadow: 0 5px 15px rgba(92,51,23,0.1);">
							<div class="item-media">
								<img src="home/assets/gal-8.jpg" alt="Cinnamon products" style="transition: transform 0.5s ease; width: 100%;">
							</div>
							<div class="item-content" style="background: linear-gradient(to top, rgba(92,51,23,0.8) 0%, transparent 100%); opacity: 0; transition: opacity 0.3s ease;">
								<div class="icons-link">
									<a class="link-zoom photoswipe-link" title="Cinnamon products" href="home/assets/gal-8.jpg" style="background: #FFF; color: #5C3317; width: 50px; height: 50px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<style>
				.vertical-item:hover .item-media img {
					transform: scale(1.05);
				}

				.vertical-item:hover .item-content {
					opacity: 1 !important;
				}

				.link-zoom:hover {
					background: #A16207 !important;
					color: white !important;
					transform: scale(1.1);
				}


				@media (max-width: 767px) {
					.section-portfolio {
						padding-top: 50px !important;
						padding-bottom: 50px !important;
					}

					[class*="col-"] {
						margin-bottom: 15px;
					}
				}
			</style>
		</section> -->

		<section class="py-5" style="background-color: #f3e8d3; ">
			<div class="container text-center px-4">
				<h2 class="h1 mb-4 ">Ready to Experience Premium Ceylon Cinnamon?</h2>
				<p class="lead mb-5 mx-auto" style="max-width: 700px;">Contact us today to discuss your requirements or request a sample of our premium cinnamon products.</p>
				<div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
					<a href="contact/" class="btn btn-primary btn-lg px-5 py-3 rounded-pill pulse-effect" style="font-weight: 600; background-color: #3a2615; border-color: #3a2615; margin-right: 10px;">Contact Us</a>
					<a href="export/" class="btn btn-outline-dark btn-lg px-5 py-3 rounded-pill" style="font-weight: 600; border-width: 2px; border-color: #3a2615; color: #3a2615;">Export Info</a>
				</div>
			</div>
		</section>

		<style>
			/* Animation classes */
			.animate__animated {
				animation-duration: 1s;
			}

			.animate__fadeInUp {
				animation-name: fadeInUp;
			}

			@keyframes fadeInUp {
				from {
					opacity: 0;
					transform: translateY(20px);
				}

				to {
					opacity: 1;
					transform: translateY(0);
				}
			}

			/* Pulse effect for primary button */
			.pulse-effect {
				animation: pulse 2s infinite;
			}

			@keyframes pulse {
				0% {
					box-shadow: 0 0 0 0 rgba(58, 38, 21, 0.4);
				}

				70% {
					box-shadow: 0 0 0 10px rgba(58, 38, 21, 0);
				}

				100% {
					box-shadow: 0 0 0 0 rgba(58, 38, 21, 0);
				}
			}

			/* Hover effects */
			.btn-outline-dark:hover {
				background-color: #3a2615;
				color: #f3e8d3 !important;
			}

			.btn-primary:hover {
				background-color: #2a1a10;
				border-color: #2a1a10;
			}
		</style>


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



					<div class="ds col-lg-6 py-60 faq-contact column-overlay d-flex align-items-center"
						style="background: url('assets/cinnamonlady.jpg') center/cover no-repeat; 
            border-radius: 10px; 
            box-shadow: 0 5px 15px rgba(123, 63, 0, 0.1);
            min-height: 400px;">

						<!-- Content goes here -->

					</div>

					<style>
						@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap');

						.faq-contact {
							position: relative;
							overflow: hidden;
						}

						.faq-contact .btn:hover {
							background-color: #8a5318 !important;
						}
					</style>
				</div>
			</div>
		</section>



		<section class="py-5" style="background-color:rgb(255, 255, 255);">
			<div class="container">
				<div class="row align-items-center">
					<!-- Map Column -->
					<div class="col-lg-7 mb-4 mb-lg-0">
						<iframe
							src="https://www.google.com/maps?q=No.33/4+Mudduwa+Road,+Rathnapura,+Sri+Lanka&output=embed"
							width="100%"
							height="450"
							style="border:0; border-radius: 8px;"
							allowfullscreen=""
							loading="lazy"
							referrerpolicy="no-referrer-when-downgrade">
						</iframe>
					</div>

					<!-- Contact Info Column -->
					<div class="col-lg-5 ps-lg-5">
						<h2 class="mb-4" style="color: #5C3317; font-weight: 700; font-family: 'Playfair Display', serif;">KW Industries Location</h2>
						<h6 class="mb-4" style="color: #A16207; font-weight: 400;">Sri Lanka</h6>

						<ul class="list-unstyled contact-info">
							<li class="mb-3 d-flex ">
								<div class="me-3 " style="color: #A16207;">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<p style="color: #3a2615; font-weight: 500;margin-left: 10px;">No.33/4 Mudduwa Road, Rathnapura, Sri Lanka</p>
							</li>
							<li class="mb-3 d-flex">
								<div class="me-5 " style="color: #A16207;">
									<i class="fas fa-phone"></i>
								</div>
								<p style="color: #3a2615; font-weight: 500;margin-left: 10px;">+94 728485587 / +94 771099361</p>
							</li>
							<li class="d-flex ">
								<div class="me-3 " style="color: #A16207;">
									<i class="fas fa-envelope"></i>
								</div>
								<p style="color: #3a2615; font-weight: 500; margin-left: 10px;">
									<a href="mailto:Industrieskw@gmail.com" style="color: #5C3317; text-decoration: none; font-weight: 500;">Industrieskw@gmail.com</a>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<style>
				/* Font Import */
				@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;500&display=swap');

				/* Text Styles */
				body {
					font-family: 'Poppins', sans-serif;
				}

				/* Hover effects */
				a:hover {
					color: #A16207 !important;
					text-decoration: underline !important;
				}

				/* Contact Info Styling */
				.contact-info p {
					margin-bottom: 0;
				}

				/* Responsive adjustments */
				@media (max-width: 991.98px) {
					.ps-lg-5 {
						padding-left: 0 !important;
						padding-top: 2rem;
					}
				}

				@media (max-width: 767.98px) {
					iframe {
						height: 350px;
					}
				}
			</style>
		</section>

		<!-- <footer class="page_footer text-center text-sm-left ds ms s-pt-50 s-pb-50 c-gutter-30">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 animate" data-animation="fadeInUp">
						<a href="./" class="logo">
							<img src="images/logo.png" alt="">
							<span class="d-flex flex-column">
								<span class="logo-text color-darkgrey">Canabicom</span>
								<span class="logo-subtext">medical</span>
							</span>
						</a>
						<p>
							There are many cannabis activists doing great things for the legalization movement in the United States.
						</p>
					</div>

					<div class="col-lg-2 col-md-6 animate" data-animation="fadeInUp">
						<div class="widget widget_nav_menu mb-0">
							<h3 class="widget-title">company</h3>
							<ul class="list-unstyled">
								<li>
									<a href="#">About</a>
								</li>
								<li>
									<a href="#">features</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li>
									<a href="#">Shop</a>
								</li>
								<li>
									<a href="#">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 animate" data-animation="fadeInUp">
						<div class="widget widget_mailchimp">
							<h3 class="widget-title">Subscribe</h3>
							<p>
								Be notified about new location
							</p>
							<form class="signup" action="/">
								<label for="mailchimp_email">
									<span class="screen-reader-text">Subscribe:</span>
								</label>
								<input id="mailchimp_email" name="email" type="email" class="form-control mailchimp_email" placeholder="Email">
								<button type="submit" class="search-submit">
									<span class="screen-reader-text">Subscribe</span>
								</button>
								<div class="response"></div>
							</form>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mb-0 animate" data-animation="fadeInUp">
						<div class="widget widget_icons_list">
							<h3 class="widget-title">Contact info</h3>
							<ul>
								<li class="icon-inline">
									<div class="icon-styled icon-top color-main fs-14">
										<i class="fa fa-map-marker"></i>
									</div>
									<p>2688 Simpson Avenue <br> Harrisburg, PA 17109 </p>
								</li>
								<li class="icon-inline">
									<div class="icon-styled icon-top color-main fs-14">
										<i class="fa fa-phone"></i>
									</div>
									<p>+1 234 56 78</p>
								</li>
								<li class="icon-inline">
									<div class="icon-styled icon-top color-main fs-14">
										<i class="fa fa-envelope"></i>
									</div>
									<p>
										<a href="#">conabicom@example.com</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer> -->
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
							<li class="mb-2"><a href="#" class="text-decoration-none footer-link" style="color: #3a2615;">Home</a></li>
							<li class="mb-2"><a href="about/" class="text-decoration-none footer-link" style="color: #3a2615;">About Us</a></li>
							<li class="mb-2"><a href="product/" class="text-decoration-none footer-link" style="color: #3a2615;">Products</a></li>
							<li class="mb-2"><a href="quality/" class="text-decoration-none footer-link" style="color: #3a2615;">Quality Assurance</a></li>
							<li class="mb-2"><a href="export/" class="text-decoration-none footer-link" style="color: #3a2615;">Export Information</a></li>
							<li class="mb-2"><a href="contact/" class="text-decoration-none footer-link" style="color: #3a2615;">Contact Us</a></li>
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

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="script.js"></script>


	<script>
		document.addEventListener('DOMContentLoaded', function() {


			const video = document.getElementById('cinnamonVideo');
			const toggleButton = document.getElementById('toggleSound');
			const volumeControl = document.getElementById('volumeControl');
			const soundStatus = document.getElementById('soundStatus');
			const videoSection = document.getElementById('videoSection');
			const progressBar = document.getElementById('progressBar');
			const progressContainer = document.getElementById('progressContainer');

			// Force video to be ready to play
			video.preload = "auto";
			video.muted = false; // Start with sound on

			// Create intersection observer to detect when video is in view
			const options = {
				root: null, // Use viewport as the root
				rootMargin: '0px',
				threshold: 0.1 // 10% of the element is visible
			};

			const videoObserver = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						// When video comes into view
						playMedia();
					} else {
						// When video goes out of view
						pauseMedia();
					}
				});
			}, options);

			// Start observing the video section
			videoObserver.observe(videoSection);

			// Function to play both video and audio
			function playMedia() {
				// Try to play the video
				const playPromise = video.play();

				// Handle play promise to avoid DOM exceptions
				if (playPromise !== undefined) {
					playPromise
						.then(() => {
							// Video is playing successfully
							console.log("Video is playing");
						})
						.catch(error => {
							// Auto-play was prevented
							console.log("Autoplay prevented:", error);

							// As a fallback, mute and try again (browsers allow muted autoplay)
							video.muted = true;
							soundStatus.textContent = 'Sound: Off (click to enable)';
							toggleButton.textContent = 'Unmute';

							video.play().catch(e => console.log("Even muted playback failed:", e));

							// Add a one-time click event to the document to enable sound
							const enableSound = function() {
								video.muted = false;
								soundStatus.textContent = 'Sound: On';
								toggleButton.textContent = 'Mute';
								document.removeEventListener('click', enableSound);
							};
							document.addEventListener('click', enableSound);
						});
				}
			}

			// Function to pause media
			function pauseMedia() {
				video.pause();
			}

			// Toggle sound function
			toggleButton.addEventListener('click', function() {
				if (video.muted) {
					video.muted = false;
					soundStatus.textContent = 'Sound: On';
					toggleButton.textContent = 'Mute';
				} else {
					video.muted = true;
					soundStatus.textContent = 'Sound: Off';
					toggleButton.textContent = 'Unmute';
				}
			});

			// Volume control
			volumeControl.addEventListener('input', function() {
				video.volume = this.value;
			});

			// Update progress bar as video plays
			video.addEventListener('timeupdate', function() {
				const percent = (video.currentTime / video.duration) * 100;
				progressBar.style.width = percent + '%';
			});

			// Allow seeking when clicking on progress bar
			progressContainer.addEventListener('click', function(e) {
				const rect = progressContainer.getBoundingClientRect();
				const pos = (e.clientX - rect.left) / rect.width;
				video.currentTime = pos * video.duration;
			});

			// Check if video is already visible on page load
			const rect = videoSection.getBoundingClientRect();
			const isInitiallyVisible =
				rect.top < window.innerHeight &&
				rect.bottom > 0;

			if (isInitiallyVisible) {
				playMedia();
			}
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