<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Hero 3D Craft</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/meanmenu.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper.min.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/fontawesome-pro.css">
   <link rel="stylesheet" href="assets/css/icomoon.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/main.css">


   <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/loaders/FBXLoader.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/loaders/MTLLoader.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/loaders/OBJLoader.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/controls/OrbitControls.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/libs/fflate.min.js"></script>

   <!-- Three.js kütüphanesini yükle -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
</head>


</head>

<body>
   <!-- preloader start -->
   <div id="preloader">
      <div class="bd-loader-inner">
         <div class="bd-loader">
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
         </div>
      </div>
   </div>
   <!-- preloader start -->

   <!-- Back to top start -->
   <div class="backtotop-wrap cursor-pointer">
      <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- Back to top end -->

   <!-- search area start -->
   <div class="df-search-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="df-search-form">
                  <div class="df-search-close text-center mb-20">
                     <button class="df-search-close-btn df-search-close-btn"></button>
                  </div>
                  <form action="#">
                     <div class="df-search-input mb-10">
                        <input type="text" placeholder="Search for product...">
                        <button type="submit"><i class="icon-search"></i></button>
                     </div>
                     <div class="df-search-category">
                        <span>Search by : </span>
                        <a href="#">Modified Wotech, </a>
                        <a href="#">Wotech Installation, </a>
                        <a href="#">Wotech Cornering, </a>
                        <a href="#">Wotech Renovation </a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- search area end -->

   <!-- Offcanvas area start -->
   <div class="fix">
      <div class="offcanvas__info">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo">
                     <a href="dashboard.php">
                        <img src="assets/imgs/logo/logo-white.svg" alt="Header Logo">
                     </a>
                  </div>
                  <div class="offcanvas__close">
                     <button>
                        <i class="fal fa-times"></i>
                     </button>
                  </div>
               </div>
               <div class="mobile-menu fix mb-40"></div>
            </div>
         </div>
      </div>
   </div>
   <div class="offcanvas__overlay"></div>
   <div class="offcanvas__overlay-white"></div>
   <!-- Offcanvas area start -->

   <!-- Header area start -->
   <header>
      <div class="container-fluid bg-color-1">
         <div class="header-top">
            <div class="header-top-contact-info">
               <span class="email p-relative"><a href="mailto:info@wotech.com">info@hero3dcraft.com</a></span>
            </div>
            <div class="header-top-socials">
               <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
               <span><a href="#"><i class="fab fa-twitter"></i></a></span>
               <span><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
               <span><a href="#"><i class="fab fa-youtube"></i></a></span>
            </div>
         </div>
      </div>
      <div id="header-sticky" class="header-area">
         <div class="large-container">
            <div class="mega-menu-wrapper">
               <div class="header-main">
                  <div class="header-left">
                     <div class="header-logo">
                        <a href="index.php">
                           <img width="200" src="assets/imgs/logo/hero2.png" alt="header logo">
                        </a>
                     </div>
                  </div>
                  <div class="header-right d-flex justify-content-end">
                     <div class="mean__menu-wrapper d-none d-lg-block">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li class="has-dropdown">
                                    <a href="index.php">Anasayfa</a>
                                 </li>
                                 <li class="">
                                    <a href="about.php">Hakkımızda</a>
                                 </li>
                                 <li>
                                    <a href="services.php">Hizmetler</a>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="projects.php">Projeler</a>
                                 </li>

                              </ul>
                           </nav>
                           <!-- for wp -->
                           <div class="header__hamburger ml-50 d-none">
                              <button type="button" class="hamburger-btn offcanvas-open-btn">
                                 <span>01</span>
                                 <span>01</span>
                                 <span>01</span>
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="header-action d-none d-xl-inline-flex gap-5">
                        <div class="header-link">
                           <a class="primary-btn-1 btn-hover" href="contact.php">
                              İLETİŞİM &nbsp; | <i class="icon-right-arrow"></i>
                              <span style="top: 147.172px; left: 108.5px;"></span>
                           </a>
                        </div>
                     </div>
                     <div class="header-action">
                        <div class="header-link-1">
                           <div class="icon">
                              <i class="fal fa-phone-volume"></i>
                           </div>
                           <div class="content">
                              <span>Bize Ulaşın</span>
                              <h6><a href="tel:2085550112">+90-555-555-5555</a></h6>
                           </div>
                        </div>
                     </div>
                     <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                           <a class="bar-icon" href="javascript:void(0)">
                              <i class="fa-light fa-bars-sort"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header area end  -->