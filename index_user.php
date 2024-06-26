<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Mexi – Health & Medical HTML Template</title>
  <meta name="description" content="Mexi Health & Medical Bootstrap 5 Template is a sophisticated website template for your hospital or clinic."/>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

  <!--== Main Style CSS ==-->
  <link href="templateuser/assets/css/style.css" rel="stylesheet" />

</head>

<body>

  <!--wrapper start-->
  <div class="wrapper home-default-wrapper">

    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
      <div class="preloader">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!--== End Preloader Content ==-->

    <!--== Start Header Wrapper ==-->
    <header class="header-area header-default transparent sticky-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="header-align">
              <div class="header-logo-area">
                <a href="index.html">
                  <img class="logo-main" src="templateuser/assets/img/logo.png" alt="Logo" />
                  <img class="logo-light" src="templateuser/assets/img/logo-light.png" alt="Logo" />
                </a>
              </div>
              <div class="header-navigation-area">
                <ul class="main-menu nav justify-content-center">
                  <li><a href="index.html">Home</a></li>
                  <li class="has-submenu"><a href="services.html">Services</a>
                    <ul class="submenu-nav">
                      <li><a href="services.html">Services</a></li>
                      <li><a href="service-details.html">Service Details</a></li>
                    </ul>
                  </li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li class="has-submenu"><a href="blog.html">Blog</a>
                    <ul class="submenu-nav">
                      <li><a href="blog.html">Blog Grid</a></li>
                      <li><a href="blog-details.html">Blog Single</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="header-action-area">
                <div class="login-reg">
                  <a href="login_form.php">log in</a><span>/</span> <i class="icon icofont-user-alt-3"></i>
                </div>
               
                <button class="btn-menu d-lg-none">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--== End Header Wrapper ==-->

    <main class="main-content site-wrapper-reveal">
      <!--== Start Hero Area Wrapper ==-->
      <section class="home-slider-area slider-default bg-img" data-bg-img="templateuser/assets/img/slider/main-slide-01.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- Start Slide Item -->
              <div class="slider-content-area" data-aos="fade-zoom-in" data-aos-duration="1300">
                
                <h2>Kesehatan Anda Adalah Prioritas Kami</span></h2>
              </div>
              <!-- End Slide Item -->
              <div class="swiper-container service-slider-container">
                <div class="swiper-wrapper service-slider service-category">

                  <div class="swiper-slide category-item">
                    <div class="icon">
                      <i class="icofont-stethoscope-alt"></i>
                    </div>
                    <h4>Diagnose</h4>
                    <p>Examination & Diagnosis</p>
                  </div>

                  <div class="swiper-slide category-item">
                    <div class="icon">
                      <i class="icofont-brain-alt"></i>
                    </div>
                    <h4>Treatment</h4>
                    <p>Treatment of the disease</p>
                  </div>

                  <div class="swiper-slide category-item">
                    <div class="icon">
                      <i class="icofont-paralysis-disability"></i>
                    </div>
                    <h4>Care Healthy</h4>
                    <p>Care and recuperation</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Hero Area Wrapper ==-->

      <!--== Start Appointment Form Area Wrapper ==-->
      <section class="appointment-area" data-bg-color="#eaeded">
        <div class="appointment-form-style1">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="appointment-form">
                  <div class="section-title">
                    <h5>We Alway Ready Helps you</h5>
                    <h2 class="title">Book An <span>Appointment</span></h2>
                  </div>
                  <form id="contact-form" action="http://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <input class="form-control" type="text" name="con_name" placeholder="Enter your name...">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <input class="form-control" type="email" name="con_email" placeholder="sample@gmail.com">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <input class="form-control" type="text" name="con_phone" placeholder="Phone">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group datepicker-group">
                          <label for="datepicker" class="form-label icon icofont-calendar"></label>
                          <input class="form-control" id="datepicker" type="text" name="con_date" placeholder="Date">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <textarea name="con_message" rows="7" placeholder="Your message here..."></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <button class="btn btn-theme" type="submit">Make an appointment</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- Message Notification -->
                <div class="form-message"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Appointment Form Area Wrapper ==-->

      <!--== Start Feature Area Wrapper ==-->
      <section class="feature-area feature-default-area" data-bg-color="#eaeded">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title" data-aos="fade-up" data-aos-duration="1100">
                <h5>Why Choose Mexi Medical</h5>
                <h2 class="title">The Best <span>For Your Health</span></h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-xl-8">
              <div class="row icon-box-style1" data-aos="fade-up" data-aos-duration="1100">
                <div class="col-md-6">
                  <div class="icon-box-item">
                    <div class="icon">
                      <i class="icofont-prescription"></i>
                    </div>
                    <div class="content">
                      <h5 class="title">Medical Counseling</h5>
                      <p>Lorem ipsum dolor sit amet, consect adipisicing elit vero. Donec ultri sollicitudin lacus</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="icon-box-item">
                    <div class="icon">
                      <i class="icofont-doctor-alt"></i>
                    </div>
                    <div class="content">
                      <h5 class="title">Top Level Doctors</h5>
                      <p>Lorem ipsum dolor sit amet, consect adipisicing elit vero. Donec ultri sollicitudin lacus</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="icon-box-item">
                    <div class="icon">
                      <i class="icofont-microscope"></i>
                    </div>
                    <div class="content">
                      <h5 class="title">Medical Facilites</h5>
                      <p>Lorem ipsum dolor sit amet, consect adipisicing elit vero. Donec ultri sollicitudin lacus</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="icon-box-item">
                    <div class="icon">
                      <i class="icofont-ambulance-cross"></i>
                    </div>
                    <div class="content">
                      <h5 class="title">24 Hours Services</h5>
                      <p>Lorem ipsum dolor sit amet, consect adipisicing elit vero. Donec ultri sollicitudin lacus</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="icon-box-item">
                    <div class="icon">
                      <i class="icofont-blood"></i>
                    </div>
                    <div class="content">
                      <h5 class="title">Personal Services</h5>
                      <p>Lorem ipsum dolor sit amet, consect adipisicing elit vero. Donec ultri sollicitudin lacus</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="icon-box-item">
                    <div class="icon">
                      <i class="icofont-paralysis-disability"></i>
                    </div>
                    <div class="content">
                      <h5 class="title">Dedicated Patient Care</h5>
                      <p>Lorem ipsum dolor sit amet, consect adipisicing elit vero. Donec ultri sollicitudin lacus</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="thumb" data-aos="fade-left" data-aos-duration="1500">
          <img src="templateuser/assets/img/photos/doctor-01.png" alt="Mexi-Image">
        </div>
      </section>
      <!--== End Feature Area Wrapper ==-->

      <!--== Start Team Area Wrapper ==-->
      <section class="team-area team-default-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h5>Meet Our Docots</h5>
                <h2 class="title">Professional & <span>Enthusiastic</span></h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="swiper-container team-slider-container" data-aos="fade-up" data-aos-duration="1300">
                <div class="swiper-wrapper team-slider">
                  <!--== Start Team Item ==-->
                  <div class="swiper-slide team-member">
                    <div class="thumb">
                      <img src="templateuser/assets/img/team/01.jpg" alt="Mexi-HasTech">
                    </div>
                    <div class="content">
                      <div class="member-info">
                        <h4 class="name">Dr. Helen Willmore</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut sapi euismod, auctor orci ut.
                        </p>
                        <a href="#/" class="btn-link">Read More</a>
                      </div>
                    </div>
                  </div>
                  <!--== End Team Item ==-->

                  <!--== Start Team Item ==-->
                  <div class="swiper-slide team-member">
                    <div class="thumb">
                      <img src="templateuser/assets/img/team/02.jpg" alt="Mexi-HasTech">
                    </div>
                    <div class="content">
                      <div class="member-info">
                        <h4 class="name">Dr. Robert David</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut sapi euismod, auctor orci ut.
                        </p>
                        <a href="#/" class="btn-link">Read More</a>
                      </div>
                    </div>
                  </div>
                  <!--== End Team Item ==-->

                  <!--== Start Team Item ==-->
                  <div class="swiper-slide team-member">
                    <div class="thumb">
                      <img src="templateuser/assets/img/team/03.jpg" alt="Mexi-HasTech">
                    </div>
                    <div class="content">
                      <div class="member-info">
                        <h4 class="name">Dr. Kristina Castle</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut sapi euismod, auctor orci ut.
                        </p>
                        <a href="#/" class="btn-link">Read More</a>
                      </div>
                    </div>
                  </div>
                  <!--== End Team Item ==-->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Team Area Wrapper ==-->

      <!--== Start Testimonial Area Wrapper ==-->
      <section class="testimonial-area testimonial-default-area bg-img"
        data-bg-img="templateuser/assets/img/photos/testimonial-bg1.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h5>Testimonial</h5>
                <h2 class="title">Trusted <span>From Clients</span></h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="swiper-container testimonial-slider-container" data-aos="fade-up" data-aos-duration="1100">
                <div class="swiper-wrapper testimonial-slider">
                  <!--== Start Testimonial Item ==-->
                  <div class="swiper-slide testimonial-item">
                    <div class="thumb">
                      <img src="templateuser/assets/img/testimonial/01.jpg" alt="Image">
                    </div>
                    <div class="client-content">
                      <p>“It’s been an absolute pleasure to work with Mexi, <br>their response to our brief exceeded
                        expectations and the execution was efficient, professional and very reassuring. I’d fully
                        recommend theme.”</p>
                    </div>
                    <div class="client-info">
                      <div class="desc">
                        <h4 class="name">Steven Gerrard</h4>
                        <p class="client-location">Golden Lotus Apartment, Brooklyn, USA</p>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                  <!--== Start Testimonial Item ==-->
                  <div class="swiper-slide testimonial-item">
                    <div class="thumb">
                      <img src="templateuser/assets/img/testimonial/02.jpg" alt="Image">
                    </div>
                    <div class="client-content">
                      <p>“It’s been an absolute pleasure to work with Mexi, <br>their response to our brief exceeded
                        expectations and the execution was efficient, professional and very reassuring. I’d fully
                        recommend theme.”</p>
                    </div>
                    <div class="client-info">
                      <div class="desc">
                        <h4 class="name">Kristina Castle</h4>
                        <p class="client-location">Golden Lotus Apartment, HasTech, BNA</p>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="brand-logo-area brand-logo-default-area">
                <div class="swiper-container brand-logo-slider-container" data-aos="fade-up" data-aos-duration="1200">
                  <div class="swiper-wrapper brand-logo-slider">
                    <div class="swiper-slide brand-logo-item">
                      <a href="#/"><img src="templateuser/assets/img/brand-logo/01.png" alt="Mexi-Brand-Logo"></a>
                    </div>
                    <div class="swiper-slide brand-logo-item">
                      <a href="#/"><img src="templateuser/assets/img/brand-logo/02.png" alt="Mexi-Brand-Logo"></a>
                    </div>
                    <div class="swiper-slide brand-logo-item">
                      <a href="#/"><img src="templateuser/assets/img/brand-logo/03.png" alt="Mexi-Brand-Logo"></a>
                    </div>
                    <div class="swiper-slide brand-logo-item">
                      <a href="#/"><img src="templateuser/assets/img/brand-logo/04.png" alt="Mexi-Brand-Logo"></a>
                    </div>
                    <div class="swiper-slide brand-logo-item">
                      <a href="#/"><img src="templateuser/assets/img/brand-logo/05.png" alt="Mexi-Brand-Logo"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Testimonial Area Wrapper ==-->

      <!--== Start Pricing Area Wrapper ==-->
     
      <!--== End Pricing Area Wrapper ==-->

     
      <!--== End Blog Area Wrapper ==-->

      <!--== Start Map Area Wrapper ==-->
      <div class="map-area">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8402891185374!2d144.95373631590425!3d-37.81720974201477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2ssg!4v1607294780661!5m2!1sen!2ssg"></iframe>
      </div>
      <!--== End Map Area Wrapper ==-->
    </main>

    <!--== Start Footer Area Wrapper ==-->
    <footer class="footer-area reveal-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
            <div class="widget-item">
              <div class="about-widget">
                <a class="footer-logo" href="index.html">
                  <img src="templateuser/assets/img/logo.png" alt="Logo">
                </a>
                <p class="mb-0">Sed elit quam, iaculis sed semper sit amet udin vitae nibh at magna akal semperFusce.
                </p>
                <ul class="widget-contact-info">
                  <li class="info-address"><i class="icofont-location-pin"></i>69 Halsey St, New York, Ny 10002, United
                    States.</li>
                  <li class="info-mail"><i class="icofont-email"></i><a
                      href="mailto://hello@yourdomain.com">hello@yourdomain.com</a></li>
                  <li class="info-phone"><i class="icofont-ui-call"></i><a href="tel://(0091) 8547 632521">(0091) 8547
                      632521</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 offset-md-1 col-lg-3 offset-lg-0 col-xl-3 d-lg-none d-xl-block">
            <div class="widget-item d-inline-block">
              <h4 class="widget-title line-bottom">Popular Tags</h4>
              <div class="widget-tags">
                <ul>
                  <li><a href="#/">Amazing</a></li>
                  <li><a href="#/">Envato</a></li>
                  <li><a href="#/">Themes</a></li>
                  <li><a href="#/">Clean</a></li>
                  <li><a href="#/">Wordpress</a></li>
                  <li><a href="#/">Creative</a></li>
                  <li><a href="#/">Mutilpurpose</a></li>
                  <li><a href="#/">Retina Ready</a></li>
                  <li><a href="#/">Twitter</a></li>
                  <li><a href="#/">Responsive</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
            <div class="widget-item">
              <h4 class="widget-title line-bottom">Recent Posts</h4>
              <nav class="widget-posts">
                <ul class="posts-item">
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Lorem Ispum dolor sit
                      amet putilor</a></li>
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Medical is all about
                      quality.</a></li>
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Is your website user
                      friendly ?</a></li>
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Ai offer weekly
                      updates & more.</a></li>
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Customer should love
                      your web.</a></li>
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Your site smooth and
                      stunning.</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 offset-md-1 col-lg-4 offset-lg-0 col-xl-3">
            <div class="widget-item">
              <h4 class="widget-title line-bottom">Newsletter</h4>
              <div class="widget-newsletter">
                <p>Sign up for our mailing list to get latest updates and offers.</p>
                <form class="newsletter-form input-btn-group">
                  <input class="form-control" type="text" placeholder="Enter your email">
                  <button class="btn btn-theme" type="button"><i class="icofont-long-arrow-right"></i></button>
                </form>
              </div>
              <div class="widget-social-icons">
                <a href="#"><i class="icofont-twitter"></i></a>
                <a href="#"><i class="icofont-google-plus"></i></a>
                <a href="#"><i class="icofont-pinterest"></i></a>
                <a href="#"><i class="icofont-rss"></i></a>
                <a href="#"><i class="icofont-facebook"></i></a>
                <a href="#"><i class="icofont-dribbble"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row text-center">
            <div class="col-sm-12">
              <div class="widget-copyright">
                <p>© 2021 <span>MEXI</span>. Made with <i class="icofont-heart-alt"></i> by <a target="_blank"
                    href="https://www.hasthemes.com">HasThemes</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
    <div class="scroll-to-top"><span class="icofont-rounded-up"></span></div>

    <!--== Start Side Menu ==-->
    <aside class="off-canvas-wrapper">
      <div class="off-canvas-inner">
        <div class="off-canvas-overlay"></div>
        <!-- Start Off Canvas Content Wrapper -->
        <div class="off-canvas-content">
          <!-- Off Canvas Header -->
          <div class="off-canvas-header">
            <div class="logo-area">
              <a href="index.html"><img src="assets/img/logo.png" alt="Logo" /></a>
            </div>
            <div class="close-action">
              <button class="btn-close"><i class="lnr lnr-cross"></i></button>
            </div>
          </div>

          <div class="off-canvas-item">
            <!-- Start Mobile Menu Wrapper -->
            <div class="res-mobile-menu">
              <!-- Note Content Auto Generate By Jquery From Main Menu -->
            </div>
            <!-- End Mobile Menu Wrapper -->
          </div>
          <!-- Off Canvas Footer -->
          <div class="off-canvas-footer"></div>
        </div>
        <!-- End Off Canvas Content Wrapper -->
      </div>
    </aside>
    <!--== End Side Menu ==-->
  </div>

  <!--=======================Javascript============================-->

  <!--=== Modernizr Min Js ===-->
  <script src="templateuser/assets/js/modernizr.js"></script>
  <!--=== jQuery Min Js ===-->
  <script src="templateuser/assets/js/jquery-main.js"></script>
  <!--=== jQuery Migration Min Js ===-->
  <script src="templateuser/assets/js/jquery-migrate.js"></script>
  <!--=== Popper Min Js ===-->
  <script src="templateuser/assets/js/popper.min.js"></script>
  <!--=== Bootstrap Min Js ===-->
  <script src="templateuser/assets/js/bootstrap.min.js"></script>
  <!--=== jquery UI Min Js ===-->
  <script src="templateuser/assets/js/jquery-ui.min.js"></script>
  <!--=== Plugin Collection Js ===-->
  <script src="templateuser/assets/js/plugincollection.js"></script>


  <!--=== Custom Js ===-->
  <script src="templateuser/assets/js/custom.js"></script>

</body>

</html>