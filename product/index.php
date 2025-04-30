<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
  <!--<![endif]-->

  <head>
    <title>Canabicom</title>
    <meta charset="utf-8" />
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/animations.css" />
    <link rel="stylesheet" href="../css/font-awesome5.css" />
    <link rel="stylesheet" href="../css/fontello.css" />
    <link rel="stylesheet" href="main.css" class="color-switcher-link" />
    <link rel="stylesheet" href="sty.css" />
    <!-- <link rel="stylesheet" href="shop.css" class="color-switcher-link" /> -->
	
    <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="search.js"></script>
	
	<script src="filter.js"></script>
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
      <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--[if lt IE 9]>
      <div class="bg-danger text-center">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/" class="color-main"
          >upgrade your browser</a
        >
        to improve your experience.
      </div>
    <![endif]-->

    <div class="preloader">
      <div class="preloader_image"></div>
    </div>

    <!-- search modal -->
    <div
      class="modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="search_modal"
      id="search_modal"
    >
      <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
      >
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="widget widget_search">
        <form method="get" class="searchform search-form" action="/">
          <div class="form-group">
            <input
              type="text"
              value=""
              name="search"
              class="form-control"
              placeholder="Search keyword"
              id="modal-search-input"
            />
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
              <a
                href="javascript:void(0)"
                data-dismiss="modal"
                aria-label="Close"
                class="remove"
                >×</a
              >
            </div>
            <form
              class="contact-form c-mb-25 c-gutter-20"
              method="post"
              action="/"
            >
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group has-placeholder">
                    <label for="name3"
                      >Full Name <span class="required">*</span></label
                    >

                    <input
                      type="text"
                      aria-required="true"
                      size="30"
                      value=""
                      name="name"
                      id="name3"
                      class="form-control"
                      placeholder="Name"
                    />
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group has-placeholder">
                    <label for="email3"
                      >Email address<span class="required">*</span></label
                    >

                    <input
                      type="email"
                      aria-required="true"
                      size="30"
                      value=""
                      name="email3"
                      id="email3"
                      class="form-control"
                      placeholder="Email"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group has-placeholder">
                    <label for="message3">Message</label>
                    <textarea
                      aria-required="true"
                      rows="6"
                      cols="45"
                      name="message"
                      id="message3"
                      class="form-control"
                      placeholder="Message"
                    ></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 text-center">
                  <div class="form-group">
                    <input
                      class="btn btn-maincolor"
                      type="submit"
                      value="Send Message"
                    />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="login-form" class="ls modal c-gutter-0">
      <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
      >
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="container">
        <div class="row">
          <div class="col-md-6 ds column-overlay">
            <img src="../images/signup.jpg" alt="" />
          </div>
          <div class="col-md-6 ls">
            <div class="divider-65 hidden-below-md"></div>
            <div class="divider-60 hidden-above-md"></div>
            <h4 class="special-heading text-center text-capitalize">Sign Up</h4>

            <form
              class="contact-form c-mb-30 c-gutter-20"
              method="post"
              action="/"
            >
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group has-placeholder">
                    <label for="name"
                      >Full Name <span class="required">*</span></label
                    >

                    <input
                      type="text"
                      aria-required="true"
                      size="30"
                      value=""
                      name="name"
                      id="name"
                      class="form-control"
                      placeholder="Name"
                    />
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group has-placeholder">
                    <label for="email"
                      >Email address<span class="required">*</span></label
                    >

                    <input
                      type="email"
                      aria-required="true"
                      size="30"
                      value=""
                      name="email"
                      id="email"
                      class="form-control"
                      placeholder="Email"
                    />
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group has-placeholder">
                    <label for="password"
                      >Password<span class="required">*</span></label
                    >

                    <input
                      type="password"
                      aria-required="true"
                      size="30"
                      value=""
                      name="password"
                      id="password"
                      class="form-control"
                      placeholder="Password"
                    />
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="checkbox" id="agree" name="agree" checked />
                    <label for="agree"
                      >I agree with all the text in the agreement</label
                    >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <a href="#" class="btn btn-with-border sign-in"
                      >I am already Member</a
                    >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 text-center">
                  <div class="form-group">
                    <input
                      class="btn btn-maincolor"
                      type="submit"
                      value="Learn more"
                    />
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
            <img src="../images/signup.jpg" alt="" />
          </div>
          <div
            class="col-md-6 align-items-center d-flex flex-column justify-content-center ls"
          >
            <div class="divider-65 hidden-below-md"></div>
            <div class="divider-60 hidden-above-md"></div>
            <h4 class="special-heading text-center text-capitalize">Sign in</h4>

            <form
              class="contact-form c-mb-30 c-gutter-20"
              method="post"
              action="/"
            >
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group has-placeholder">
                    <label for="name2"
                      >Full Name <span class="required">*</span></label
                    >

                    <input
                      type="text"
                      aria-required="true"
                      size="30"
                      value=""
                      name="name"
                      id="name2"
                      class="form-control"
                      placeholder="Name"
                    />
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group has-placeholder">
                    <label for="password2"
                      >Password<span class="required">*</span></label
                    >

                    <input
                      type="password"
                      aria-required="true"
                      size="30"
                      value=""
                      name="password2"
                      id="password2"
                      class="form-control"
                      placeholder="Password"
                    />
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
                    <input
                      class="btn btn-maincolor"
                      type="submit"
                      value="Learn more"
                    />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div id="years" class="ls s-py-md-70 s-py-60 years modal text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h4 class="special-heading text-center">
              Are you over 21 years old?
            </h4>
            <div class="divider-70 hidden-below-md"></div>
            <div class="divider-30 hidden-above-md"></div>
            <div class="years-btn">
              <a href="#" class="btn btn-maincolor2 btn-yes">Yes</a>
              <a href="index.html" class="btn btn-maincolor btn-no">no</a>
            </div>
          </div>
        </div>
      </div>
    </div>

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
    </div>
    <!-- eof .modal -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
      <div id="box_wrapper">
        <!-- template sections -->
        <!--topline section visible only on small screens|-->

        <section class="page_topline topline-1 ls s-borderbottom py-9">
          <div class="container">
            <div class="row align-items-center">
              <div
                class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12 text-md-left text-center"
              >
                <span class="social-icons">
                  <a
                    href="#"
                    class="fab fab fa-facebook-f"
                    title="facebook"
                  ></a>
                  <a
                    href="#"
                    class="fab fa-telegram-plane"
                    title="telegram"
                  ></a>
                  <a href="#" class="fab fa-linkedin-in" title="linkedin"></a>
                  <a href="#" class="fab fa-instagram" title="instagram"></a>
                  <a href="#" class="fab fa-youtube" title="youtube"></a>
                </span>
              </div>

              <div
                class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-md-end justify-content-center align-items-center"
              >
                <div class="login-modal">
                  <a class="login-form-btn" href="#"
                    ><i class="fa fa-user"></i
                  ></a>
                </div>

                <!--user action-->
                <div class="dropdown widget_search">
                  <a
                    class="dropdown-toggle dropdown-toggle-split"
                    href="#"
                    id="headerSearchDropdown"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa-search"></i>
                  </a>

                  <div
                    class="dropdown-menu ls ms"
                    aria-labelledby="headerSearchDropdown"
                  >
                    <form
                      role="search"
                      method="get"
                      class="search-form"
                      action="/"
                    >
                      <label for="search-form-top">
                        <span class="screen-reader-text">Search for:</span>
                      </label>

                      <input
                        type="search"
                        id="search-form-top"
                        class="search-field"
                        placeholder="Search keyword"
                        value=""
                        name="search"
                      />

                      <button type="submit" class="search-submit">
                        <span class="screen-reader-text">Search</span>
                      </button>
                    </form>
                  </div>
                </div>

                <div class="dropdown shopping-cart">
                  <a
                    class="dropdown-toggle dropdown-shopping-cart"
                    href="#"
                    role="button"
                    id="dropdown-shopping-cart"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fas fa-shopping-bag"></i>
                    <span class="badge bg-maincolor2">3</span>
                  </a>
                  <div
                    class="dropdown-menu ls"
                    aria-labelledby="dropdown-shopping-cart"
                  >
                    <div class="widget woocommerce widget_shopping_cart">
                      <div class="widget_shopping_cart_content">
                        <ul
                          class="woocommerce-mini-cart cart_list product_list_widget"
                        >
                          <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a
                              href="#"
                              class="remove"
                              aria-label="Remove this item"
                              data-product_id="73"
                              data-product_sku=""
                              >×</a
                            >
                            <a href="shop-product-right.html">
                              <img src="../images/shop/26.jpg" alt="" />Medical
                              marijuana THC
                            </a>

                            <span class="quantity"
                              >1 ×
                              <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol"
                                  >$</span
                                >
                                12.00
                              </span>
                            </span>
                          </li>
                          <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a
                              href="#"
                              class="remove"
                              aria-label="Remove this item"
                              data-product_id="76"
                              data-product_sku=""
                              >×</a
                            >
                            <a href="shop-product-right.html">
                              <img src="../images/shop/26.jpg" alt="" />Medical
                              marijuana THC
                            </a>

                            <span class="quantity"
                              >1 ×
                              <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol"
                                  >$</span
                                >
                                15.00
                              </span>
                            </span>
                          </li>
                        </ul>

                        <p class="woocommerce-mini-cart__total total">
                          <strong>Subtotal:</strong>
                          <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol"
                              >$</span
                            >
                            27.00
                          </span>
                        </p>

                        <p class="woocommerce-mini-cart__buttons buttons">
                          <a href="shop-cart.html" class="button wc-forward"
                            >View cart</a
                          >
                          <a
                            href="shop-checkout.html"
                            class="button checkout wc-forward"
                            >Checkout</a
                          >
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--eof topline-->

        <!-- header with two Bootstrap columns - left for logo and right for navigation -->
        <header class="page_header header-1 ls s-py-20">
          <div class="container">
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8 col-12">
                <a href="./" class="logo">
                  <img src="../images/logo.png" alt="" />
                  <span class="d-flex flex-column">
                    <span class="logo-text color-darkgrey">Canabicom</span>
                    <span class="logo-subtext">medical</span>
                  </span>
                </a>
              </div>
              <div
                class="col-xl-9 col-lg-9 col-md-8 col-sm-4 col-12 d-flex align-items-center justify-content-end"
              >
                <!-- main nav start -->
                <nav class="top-nav">
                  <ul class="nav sf-menu">
                    <li class="active">
                      <a href="index.html">Home</a>
                      <ul>
                        <li>
                          <a href="index.html">MultiPage</a>
                        </li>
                        <li>
                          <a href="index-alt.html">MultiPage Alternative</a>
                        </li>
                        <li>
                          <a href="index_static.html">Static Intro</a>
                        </li>
                        <li>
                          <a href="index_singlepage.html">Single Page</a>
                        </li>
                      </ul>
                    </li>

                    <li>
                      <a href="about.html">Pages</a>
                      <ul>
                        <li>
                          <a href="about.html">About</a>
                        </li>

                        <li>
                          <a href="pricing.html">Pricing</a>
                        </li>

                        <!-- features -->
                        <li>
                          <a href="shortcodes_iconbox.html">Shortcodes</a>
                          <ul>
                            <li>
                              <a href="shortcodes_typography.html"
                                >Typography</a
                              >
                            </li>
                            <li>
                              <a href="shortcodes_buttons.html">Buttons</a>
                            </li>
                            <li>
                              <a href="shortcodes_pricing.html">Pricing</a>
                            </li>
                            <li>
                              <a href="shortcodes_iconbox.html">Icon Boxes</a>
                            </li>
                            <li>
                              <a href="shortcodes_progress.html">Progress</a>
                            </li>
                            <li>
                              <a href="shortcodes_tabs.html"
                                >Tabs &amp; Collapse</a
                              >
                            </li>
                            <li>
                              <a href="shortcodes_bootstrap.html"
                                >Bootstrap Elements</a
                              >
                            </li>
                            <li>
                              <a href="shortcodes_animation.html">Animation</a>
                            </li>
                          </ul>
                        </li>
                        <!-- eof shortcodes -->

                        <li>
                          <a href="shortcodes_widgets_default.html">Widgets</a>
                          <ul>
                            <li>
                              <a href="shortcodes_widgets_default.html"
                                >Default Widgets</a
                              >
                            </li>
                            <li>
                              <a href="shortcodes_widgets_shop.html"
                                >Shop Widgets</a
                              >
                            </li>
                            <li>
                              <a href="shortcodes_widgets_custom.html"
                                >Custom Widgets</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="services.html">Services</a>
                          <ul>
                            <li>
                              <a href="services.html">Services 1</a>
                            </li>
                            <li>
                              <a href="services2.html">Services 2</a>
                            </li>
                            <li>
                              <a href="service-single.html">Single Service</a>
                            </li>
                          </ul>
                        </li>
                        <!-- gallery -->
                        <li>
                          <a href="gallery-image.html">Gallery</a>
                          <ul>
                            <!-- Gallery image only -->
                            <li>
                              <a href="gallery-image.html">Image Only</a>
                              <ul>
                                <li>
                                  <a href="gallery-image-2-cols.html"
                                    >2 columns</a
                                  >
                                </li>
                                <li>
                                  <a href="gallery-image.html">3 columns</a>
                                </li>
                                <li>
                                  <a href="gallery-image-4-cols-fullwidth.html"
                                    >4 columns fullwidth</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <!-- eof Gallery image only -->

                            <!-- Gallery with title -->
                            <li>
                              <a href="gallery-title.html">Image With Title</a>
                              <ul>
                                <li>
                                  <a href="gallery-title-2-cols.html"
                                    >2 columns</a
                                  >
                                </li>
                                <li>
                                  <a href="gallery-title.html">3 column</a>
                                </li>
                                <li>
                                  <a href="gallery-title-4-cols-fullwidth.html"
                                    >4 columns fullwidth</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <!-- eof Gallery with title -->

                            <!-- Gallery with excerpt -->
                            <li>
                              <a href="gallery-excerpt.html"
                                >Image with Excerpt</a
                              >
                              <ul>
                                <li>
                                  <a href="gallery-excerpt-2-cols.html"
                                    >2 columns</a
                                  >
                                </li>
                                <li>
                                  <a href="gallery-excerpt.html">3 column</a>
                                </li>
                                <li>
                                  <a
                                    href="gallery-excerpt-4-cols-fullwidth.html"
                                    >4 columns fullwdith</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <!-- eof Gallery with excerpt -->

                            <!-- Gallery item -->
                            <li>
                              <a href="gallery-single.html">Gallery Item</a>
                              <ul>
                                <li>
                                  <a href="gallery-single.html">Style 1</a>
                                </li>
                                <li>
                                  <a href="gallery-single2.html">Style 2</a>
                                </li>
                              </ul>
                            </li>
                            <!-- eof Gallery item -->
                          </ul>
                        </li>
                        <!-- eof Gallery -->

                        <li>
                          <a href="team.html">Team</a>
                          <ul>
                            <li>
                              <a href="team.html">Team List</a>
                            </li>
                            <li>
                              <a href="team-single.html">Team Member</a>
                            </li>
                          </ul>
                        </li>

                        <li>
                          <a href="faq.html">FAQ</a>
                          <ul>
                            <li>
                              <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                              <a href="faq2.html">FAQ 2</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="404.html">404</a>
                        </li>
                      </ul>
                    </li>
                    <!-- eof pages -->

                    <li>
                      <a href="#">Features</a>
                      <div class="mega-menu">
                        <ul class="mega-menu-row">
                          <li class="mega-menu-col">
                            <a href="#">Headers</a>
                            <ul>
                              <li>
                                <a href="header1.html">Header Type 1</a>
                              </li>
                              <li>
                                <a href="header2.html">Header Type 2</a>
                              </li>
                              <li>
                                <a href="header3.html">Header Type 3</a>
                              </li>
                              <li>
                                <a href="header4.html">Header Type 4</a>
                              </li>
                              <li>
                                <a href="header5.html">Header Type 5</a>
                              </li>
                              <li>
                                <a href="header6.html">Header Type 6</a>
                              </li>
                            </ul>
                          </li>
                          <li class="mega-menu-col">
                            <a href="#">Side Menus</a>
                            <ul>
                              <li>
                                <a href="header-side.html">Push Left</a>
                              </li>
                              <li>
                                <a href="header-side-right.html">Push Right</a>
                              </li>
                              <li>
                                <a href="header-side-slide.html">Slide Left</a>
                              </li>
                              <li>
                                <a href="header-side-slide-right.html"
                                  >Slide Right</a
                                >
                              </li>
                              <li>
                                <a href="header-side-sticked.html"
                                  >Sticked Left</a
                                >
                              </li>
                              <li>
                                <a href="header-side-sticked-right.html"
                                  >Sticked Right</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li class="mega-menu-col">
                            <a href="title1.html">Title Sections</a>
                            <ul>
                              <li>
                                <a href="title1.html">Title section 1</a>
                              </li>
                              <li>
                                <a href="title2.html">Title section 2</a>
                              </li>
                              <li>
                                <a href="title3.html">Title section 3</a>
                              </li>
                              <li>
                                <a href="title4.html">Title section 4</a>
                              </li>
                              <li>
                                <a href="title5.html">Title section 5</a>
                              </li>
                              <li>
                                <a href="title6.html">Title section 6</a>
                              </li>
                            </ul>
                          </li>
                          <li class="mega-menu-col">
                            <a href="footer1.html#footer">Footers</a>
                            <ul>
                              <li>
                                <a href="footer1.html#footer">Footer Type 1</a>
                              </li>
                              <li>
                                <a href="footer2.html#footer">Footer Type 2</a>
                              </li>
                              <li>
                                <a href="footer3.html#footer">Footer Type 3</a>
                              </li>
                              <li>
                                <a href="footer4.html#footer">Footer Type 4</a>
                              </li>
                              <li>
                                <a href="footer5.html#footer">Footer Type 5</a>
                              </li>
                              <li>
                                <a href="footer6.html#footer">Footer Type 6</a>
                              </li>
                            </ul>
                          </li>
                          <li class="mega-menu-col">
                            <a href="copyright1.html#copyright">Copyright</a>

                            <ul>
                              <li>
                                <a href="copyright1.html#copyright"
                                  >Copyright 1</a
                                >
                              </li>
                              <li>
                                <a href="copyright2.html#copyright"
                                  >Copyright 2</a
                                >
                              </li>
                              <li>
                                <a href="copyright3.html#copyright"
                                  >Copyright 3</a
                                >
                              </li>
                              <li>
                                <a href="copyright4.html#copyright"
                                  >Copyright 4</a
                                >
                              </li>
                              <li>
                                <a href="copyright5.html#copyright"
                                  >Copyright 5</a
                                >
                              </li>
                              <li>
                                <a href="copyright6.html#copyright"
                                  >Copyright 6</a
                                >
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <!-- eof mega menu -->
                    </li>
                    <!-- eof features -->

                    <!-- blog -->
                    <li>
                      <a href="blog-right.html">Blog</a>
                      <ul>
                        <li>
                          <a href="blog-right.html">Right Sidebar</a>
                        </li>
                        <li>
                          <a href="blog-left.html">Left Sidebar</a>
                        </li>
                        <li>
                          <a href="blog-full.html">No Sidebar</a>
                        </li>

                        <li>
                          <a href="blog-single-right.html">Post</a>
                          <ul>
                            <li>
                              <a href="blog-single-right.html">Right Sidebar</a>
                            </li>
                            <li>
                              <a href="blog-single-left.html">Left Sidebar</a>
                            </li>
                            <li>
                              <a href="blog-single-full.html">No Sidebar</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <!-- eof blog -->

                    <!-- shop -->
                    <li>
                      <a href="shop-right.html">Shop</a>
                      <ul>
                        <li>
                          <a href="shop-account-dashboard.html">Account</a>
                          <ul>
                            <li>
                              <a href="shop-account-details.html"
                                >Account details</a
                              >
                            </li>
                            <li>
                              <a href="shop-account-addresses.html"
                                >Addresses</a
                              >
                            </li>
                            <li>
                              <a href="shop-account-address-edit.html"
                                >Edit Address</a
                              >
                            </li>
                            <li>
                              <a href="shop-account-orders.html">Orders</a>
                            </li>
                            <li>
                              <a href="shop-account-order-single.html"
                                >Single Order</a
                              >
                            </li>
                            <li>
                              <a href="shop-account-downloads.html"
                                >Downloads</a
                              >
                            </li>
                            <li>
                              <a href="shop-account-password-reset.html"
                                >Password Reset</a
                              >
                            </li>
                            <li>
                              <a href="shop-account-login.html">Login/Logout</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="shop-right.html">Right Sidebar</a>
                        </li>
                        <li>
                          <a href="shop-left.php">Left Sidebar</a>
                        </li>
                        <li>
                          <a href="shop-product-right.html"
                            >Product Right Sidebar</a
                          >
                        </li>
                        <li>
                          <a href="shop-product-left.php"
                            >Product Left Sidebar</a
                          >
                        </li>
                        <li>
                          <a href="shop-cart.html">Cart</a>
                        </li>
                        <li>
                          <a href="shop-checkout.html">Checkout</a>
                        </li>
                        <li>
                          <a href="shop-order-received.html">Order Received</a>
                        </li>
                      </ul>
                    </li>
                    <!-- eof shop -->

                    <!-- contacts -->
                    <li>
                      <a href="contact.html">Contact</a>
                      <ul>
                        <li>
                          <a href="contact.html">Contact 1</a>
                        </li>
                        <li>
                          <a href="contact2.html">Contact 2</a>
                        </li>
                        <li>
                          <a href="contact3.html">Contact 3</a>
                        </li>
                        <li>
                          <a href="contact4.html">Contact 4</a>
                        </li>
                      </ul>
                    </li>
                    <!-- eof contacts -->
                  </ul>
                </nav>
                <!-- eof main nav -->
              </div>
            </div>
          </div>
          <!-- header toggler -->
          <span class="toggle_menu"><span></span></span>
        </header>

        <section class="page_title ds s-parallax s-py-65" >
        <div class="s-blur" ></div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center text-sm-left">
                <h1>Products</h1>
                <ol class="breadcrumb">
                <li class="breadcrumb-item">
									<a href="../home/index.php">Home</a>
								</li>
								<li class="breadcrumb-item">
									<a href="index.php">Shop</a>
								</li>
                  <li class="breadcrumb-item active">Products</li>
                </ol>
              </div>
            </div>
          </div>
        </section>

        <div class="my-div mb-5"></div>

<h6 class="special-heading sub-title" style="text-align: center; margin-top: 50px;"><span> Own Production</span></h6>
<h3 class="special-heading" style="text-align: center;">Panagolish True Cinnamon</h2>
<div class="my-div mb-5"></div>

        <div class="text-center bg-light p-4 mb-3 rounded-3 shadow-sm" style="font-family: 'Poppins', sans-serif;">
  <p class="mb-0 fs-3 text-dark">
    At KW Industries, we take pride in offering a premium selection of cinnamon products, with our Panagolish True Cinnamon Sticks being the first product we introduce to the market. Sourced directly from the heart of Sri Lanka, these cinnamon bales are a representation of quality and authenticity. Carefully handpicked and expertly packed, each bale is made of pure Ceylon cinnamon, ensuring unmatched natural purity and flavor.
  </p>
</div>
<div class="my-div mb-5"></div>

		<h3 class="special-heading" style="text-align: center;">Grades of Ceylon Cinnamon</h2>
    
    <div style="text-align: center; margin-top: 40px;">
    <img src="Cinnamon Grades together.jpg" alt="Cinnamon Grades" style="max-width: 100%; height: auto;">
</div>



<!-- FIRST PRODUCT SECTION: ALBA -->
<section id="about" class="ls section-about s-pt-50 s-pb-0 text-center text-sm-center mt-2">

    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content Section -->
            <div class="col-lg-6 text-lg-left text-center">
                <h6 class="special-heading sub-title"><span>Panagolish True Cinnamon</span></h6>
                <h3 class="special-heading">Highest Grade- ALBA</h3>
                <div class="my-div mb-4"></div>
                <p class="smallp" style="text-align:justify"  >ALBA is recognized as the highest and most expensive grade of true Ceylon cinnamon, standing out for its exceptional quality and refinement. It is crafted from ultra-thin quills with a maximum diameter of just 6 mm, making it one of the finest and most delicate varieties available. Its pale golden color, combined with an extremely thin and delicate texture, gives ALBA a luxurious appearance that complements its superior taste.</p>
                <p class="longp"  style="text-align:justify">Known for its mild, sweet, and highly aromatic flavor profile, ALBA cinnamon is a prized ingredient in premium food and beverage products, luxury culinary creations, and traditional herbal medicines. It is regarded worldwide as the gold standard among all Ceylon cinnamon grades, offering unmatched quality for those who seek the very best.</p>
            </div>

            <!-- Image Section -->
            <div class="col-lg-6 text-center">
                <img src="1.png" alt="KW Industries" class="img-fluid" style="width: 600px;">
            </div>
        </div>
    </div>
</section>

<!-- SECOND PRODUCT SECTION: Image Left, Text Right -->
<section class="ls section-about s-pt-0 s-pb-0 text-center text-sm-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-lg-6 text-center">
                <img src="3.png" alt="Product Image" class="img-fluid" style="width: 600px;">
            </div>

            <!-- Text Content Section -->
            <div class="col-lg-6 text-lg-left text-center">
                <h6 class="special-heading sub-title"><span>Panagolish True Cinnamon</span></h6>
                <h3 class="special-heading">C5 Special Cinnamon</h3>
                <div class="my-div mb-4"></div>

                <p class="smallp" style="text-align:justify" >C5 Special is recognized as the third highest grade of true Ceylon cinnamon available in Sri Lanka, offering a fine balance between quality and accessibility. Crafted from quills slightly larger than Alba, with a typical diameter ranging from 7 to 9 mm, C5 Special features a beautiful light brown color and a rich, sweet aroma that is highly prized.</p>
                <p class="longp" style="text-align:justify" >Its refined taste and fragrant profile make it a popular choice for high-end food industries, specialty teas, and luxury spice markets around the world. Striking a perfect harmony between superior quality and greater availability, C5 Special remains a preferred option for those seeking an exceptional yet accessible cinnamon experience.</p>
            </div>
        </div>
    </div>
</section>

<!-- THIRD PRODUCT SECTION: Image Right, Text Left -->
<section class="ls section-about s-pt-0 s-pb-0 text-center text-sm-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content Section -->
            <div class="col-lg-6 text-lg-left text-center">
                <h6 class="special-heading sub-title"><span>Panagolish True Cinnamon</span></h6>
                <h3 class="special-heading">C5 Cinnamon</h3>
                <div class="my-div mb-4"></div>

                <p class="smallp" style="text-align:justify" >C5 is a high-grade cinnamon with a strong market presence, valued for its excellent price-to-quality ratio. With a diameter ranging from 10 to 12 mm, this cinnamon is larger than some other grades, offering a substantial size and rich flavor. Its deep yellow color adds to its unique appeal, distinguishing it from other varieties.</p>
                <p class="longp" style="text-align:justify">Known for its sweet and highly aromatic taste, C5 cinnamon is widely used in food processing, spice blends, and exports, making it a popular choice in both domestic and international markets. Its balanced combination of quality and cost-effectiveness has earned it a solid reputation among cinnamon lovers and industry professionals alike.</p>
            </div>

            <!-- Image Section (Image on the right) -->
            <div class="col-lg-6 text-center">
                <img src="4.png" alt="Premium Gold Cinnamon" class="img-fluid" style="width: 600px;">
            </div>
        </div>
    </div>
</section>

<!-- FOURTH PRODUCT SECTION: Image Left, Text Right -->
<section class="ls section-about s-pt-0 s-pb-0 text-center text-sm-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-lg-6 text-center">
                <img src="5.png" alt="Product Image" class="img-fluid" style="width: 600px;">
            </div>

            <!-- Text Content Section -->
            <div class="col-lg-6 text-lg-left text-center">
                <h6 class="special-heading sub-title"><span>Panagolish True Cinnamon</span></h6>
                <h3 class="special-heading">C4 Cinnamon</h3>
                <div class="my-div mb-4"></div>

                <p class="smallp" style="text-align:justify">C4 is a commercially popular grade of cinnamon, slightly thicker than C5, with a diameter ranging from 13 to 14 mm. Its golden brown color gives it an attractive appearance, making it visually appealing while maintaining a high level of quality. </p>
                <p class="longp" style="text-align:justify">Known for its mild aroma with a sweet touch, C4 cinnamon is widely used in the spice industry, especially for tea blends and cooking powders. Despite its thicker nature, it remains cost-effective, offering a great balance of quality and price. This makes it a go-to choice for many culinary applications and a versatile ingredient in various spice blends.</p>
            </div>
        </div>
    </div>
</section>

<!-- FIFTH PRODUCT SECTION: Image Right, Text Left -->
<section class="ls section-about s-pt-0 s-pb-0 text-center text-sm-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content Section -->
            <div class="col-lg-6 text-lg-left text-center">
                <h6 class="special-heading sub-title"><span>Panagolish True Cinnamon</span></h6>
                <h3 class="special-heading">H1 Cinnamon </h3>
                <div class="my-div mb-4"></div>

                <p class="smallp" style="text-align:justify">H1 is a medium-grade cinnamon known for its robust flavor, with a diameter ranging from 21 to 23 mm. It has a distinct brown color with a rough outer bark, which gives it a more rustic appearance. While its taste offers a strong flavor with less sweetness compared to higher-grade cinnamons, it is widely used in ground cinnamon production and for pharmaceutical and industrial applications.</p>
                <p class="longp" style="text-align:justify">Due to its rough appearance, H1 is not ideal for presentation purposes, but its potent flavor and versatility make it a practical choice in various production processes where aesthetic considerations are less important.</p>
            </div>

            <!-- Image Section (Image on the right) -->
            <div class="col-lg-6 text-center">
                <img src="7.png" alt="Cinnamon Sticks" class="img-fluid" style="width: 600px;">
            </div>
        </div>
    </div>
</section>

<!-- SIXTH PRODUCT SECTION: Image Left, Text Right -->
<section class="ls section-about s-pt-0 s-pb-0 text-center text-sm-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-lg-6 text-center">
                <img src="8.png" alt="Product Image" class="img-fluid" style="width: 600px;">
            </div>

            <!-- Text Content Section -->
            <div class="col-lg-6 text-lg-left text-center">
                <h6 class="special-heading sub-title"><span>Panagolish True Cinnamon</span></h6>
                <h3 class="special-heading">H2 Cinnamon</h3>
                <div class="my-div mb-4"></div>

                <p class="smallp" style="text-align:justify">H2 is a popular grade of cinnamon, typically found in its bark form, and is prized for its golden yellow color. Known for its aromatic qualities, H2 is often chosen in bulk and bark form, particularly for exports. It strikes a balance between flavor and cost, making it a favored option among cinnamon bark lovers.</p>
                <p class="longp" style="text-align:justify">While it may not have the same intense sweetness as higher-grade cinnamons, its unique aroma and reasonable pricing make it an excellent choice for large-scale use in both culinary and commercial applications.</p>
            </div>
        </div>
    </div>
</section>

<!-- SEVENTH PRODUCT SECTION: Image Right, Text Left -->
<section class="ls section-about s-pt-0 s-pb-0 text-center text-sm-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content Section -->
            <div class="col-lg-6 text-lg-left text-center">
                <h6 class="special-heading sub-title"><span>Panagolish True Cinnamon</span></h6>
                <h3 class="special-heading">Cinnamon Powder</h3>
                <div class="my-div mb-4"></div>

                <p class="smallp" style="text-align:justify">Cinnamon powder is finely ground cinnamon that ranges in color from golden to brown, depending on the source. It is a versatile ingredient widely used in baking, cooking, teas, cosmetics, and even medicine. Since it can be made from any grade of cinnamon stick, the quality of the powder depends on the quality of the source sticks used.</p>
                <p class="longp" style="text-align:justify">As a result, cinnamon powder can vary in flavor intensity, with higher-grade sticks producing a more aromatic and flavorful powder. Its wide range of uses and the ability to be sourced from different grades make it a staple in both household and industrial applications.</p>
            </div>

            <!-- Image Section (Image on the right) -->
            <div class="col-lg-6 text-center">
    <img src="29.jpg" alt="Cinnamon Essential Oil" class="img-fluid" style="width: 600px;">
</div>

        </div>
    </div>
</section>





                      
                  <!-- products -->


              <aside class="col-lg-5 col-xl-3 order-lg-1">
                <!-- <div class="ls ms px-20 py-40">
                  <div class="widget widget_product_search">
                    <h3 class="widget-title">Search</h3>

                    <form
                      role="search"
                      class="woocommerce-product-search"
                      action="/"
                    >
                      <label
                        class="screen-reader-text"
                        for="woocommerce-product-search-field-widget"
                      >
                        Search for:
                      </label>

                      <input
                        type="search"
                        id="woocommerce-product-search-field-widget"
                        class="search-field"
                        placeholder="Search"
                        value=""
                        name="search"
                      />
                      <input type="submit" value="Search" />
                    </form>
                  </div>
                </div> -->

              

					<!-- <label for="quality-filter">Filter by Quality:</label> -->
<!--            
<select id="quality-filter">
  <option value="all">All Qualities</option>
  <option value="Highest and Expensive Grade">Highest and Expensive Grade</option>
  <option value="Third Highest Grade">Third Highest Grade</option>
  <option value="High Grade">High Grade</option>
  <option value="Commercially Popular">Commercially Popular</option>
  <option value="Medium Grade">Medium Grade</option>
  <option value="Popular Grade in Bark Form">Popular Grade in Bark Form</option>
</select>

<button id="filter-button" class="button" style="margin-top: 30px;">Filter</button> -->
				

                <!-- <div class="widget woocommerce widget_product_tag_cloud">
                  <h3 class="widget-title">Price Filter</h3>

                  <div class="tagcloud">
                    <a
                      href="shop-right.html"
                      class="tag-cloud-link"
                      aria-label="album (1 product)"
                    >
                      Cannabis
                    </a>
                    <a
                      href="shop-right.html"
                      class="tag-cloud-link"
                      aria-label="premium (1 product)"
                    >
                      Medical
                    </a>
                    <a
                      href="shop-right.html"
                      class="tag-cloud-link"
                      aria-label="product (1 product)"
                    >
                      Marijuana
                    </a>
                    <a
                      href="shop-right.html"
                      class="tag-cloud-link"
                      aria-label="single (1 product)"
                    >
                      Health
                    </a>
                  </div>
                </div> -->
              </aside>
            </div>
          </div>
        </section>

        <footer
          class="page_footer text-center text-sm-left ds ms s-pt-60 s-pb-60 s-pt-md-85 s-pb-md-90 s-pt-lg-125 s-pb-lg-130 s-pt-xl-150 s-pb-xl-145 c-gutter-30 s-parallax c-mb-50 c-mb-lg-0"
        >
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 animate" data-animation="fadeInUp">
                <a href="./" class="logo">
                  <img src="../images/logo.png" alt="" />
                  <span class="d-flex flex-column">
                    <span class="logo-text color-darkgrey">Canabicom</span>
                    <span class="logo-subtext">medical</span>
                  </span>
                </a>
                <p>
                  There are many cannabis activists doing great things for the
                  legalization movement in the United States.
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

                  <p>Be notified about new location</p>

                  <form class="signup" action="/">
                    <label for="mailchimp_email">
                      <span class="screen-reader-text">Subscribe:</span>
                    </label>

                    <input
                      id="mailchimp_email"
                      name="email"
                      type="email"
                      class="form-control mailchimp_email"
                      placeholder="Email"
                    />

                    <button type="submit" class="search-submit">
                      <span class="screen-reader-text">Subscribe</span>
                    </button>
                    <div class="response"></div>
                  </form>
                </div>
              </div>
              <div
                class="col-lg-3 col-md-6 mb-0 animate"
                data-animation="fadeInUp"
              >
                <div class="widget widget_icons_list">
                  <h3 class="widget-title">Contact info</h3>
                  <ul>
                    <li class="icon-inline">
                      <div class="icon-styled icon-top color-main fs-14">
                        <i class="fa fa-map-marker"></i>
                      </div>
                      <p>
                        2688 Simpson Avenue <br />
                        Harrisburg, PA 17109
                      </p>
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
        </footer>

        <section class="page_copyright ds ms s-py-15 s-bordertop">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-12 text-center">
                <p>
                  &copy; Copyright <span class="copyright_year">2019</span> All
                  Rights Reserved
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

    <script src="../js/compressed.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
