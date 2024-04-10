<?php
   include_once "config.php";
   $pagename = basename($_SERVER['PHP_SELF']);
   ?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="icon" type="image/x-icon" href="assets/images/home/tpLogo.png">
      <title>
         techpathshala
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="<?php echo $data_tags[$pagename]['descr']; ?>">
      <meta property="og:title" content="<?php echo $data_tags[$pagename]['title']; ?>" />
      <meta property="og:description" content="<?php echo $data_tags[$pagename]['descr']; ?>" />
      <meta property="og:url" content="<?php echo $data_tags[$pagename]['url']; ?>" />
      <meta property="og:image" content="<?php echo $data_tags[$pagename]['image']; ?>" />
      <meta property="og:type" content="<?php echo $data_tags[$pagename]['type']; ?>" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="canonical" href="<?php echo $data_canonical[$pagename]; ?>">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo $assets_url; ?>images/general/favicon.ico">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" media="print" onload="this.media='all'">
      <link rel="stylesheet" type="text/css" href="<?php echo $assets_url; ?>css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $assets_url; ?>css/slick.css" media="print"
         onload="this.media='all'" />
      <link rel="stylesheet" type="text/css" href="<?php echo $assets_url; ?>css/slick-theme.css" media="print"
         onload="this.media='all'" />
      <link rel="stylesheet" type="text/css" href="<?php echo $assets_url; ?>css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
   </head>
   <body>
      <!-- start header -->
      <nav class="navbar navbar-expand-lg bg-light">
         <div class="container custom_nav_container"  >
            <a class="navbar-brand" href="<?php echo $base_url; ?>">
            <img class="responsive_logo" src="<?php echo $assets_url; ?>images\home\techstalwarts_logo.svg" style="width: 259px;height: 31.08px;">
            </a>
            <i class="bi bi-search d-lg-none d-block"onclick="openSearch()" style="font-size: 22px;"></i>
            <!-- mobile search start -->
            <div id="mySearch" class="Toggle d-lg-none d-block">
               <div class="toggle_box search_box_custom">
                  <a href="javascript:void(0)" onclick="closeSearch()" style="font-size:40px;color:black"> &#8592;</a>
                  <div class="mobile_search_box">
                     <i class="bi bi-search" style="position:relative;left: 32px;"></i>
                     <input type="text" class="mobile-search-input" placeholder="Search programs">
                  </div>
               </div>
               <div class="search_container">
                  <p>Recent searches</p>
                  <button class="serch_clear_btn">Clear</button>
               </div>
            </div>
            <!-- serch end -->
            <!-- mobile toggle start  -->
            <div class="d-lg-none d-block">
               <div id="myToggle" class="Toggle">
                  <div class="toggle_box">
                     <a href="javascript:void(0)" onclick="closeNav()" style="font-size:40px;color:black"> &#8592;</a>
                     <a href="<?php echo $base_url; ?>index.php">
                     <img class="responsive_logo" src="<?php echo $assets_url; ?>images\home\techstalwarts_logo.svg" style="height: 27px;">
                     </a>
                  </div>
                  <div class="ancher_container">
                     <a class="nav-link tabs_ancher <?php echo ($pagename == 'about') ? "active" : ""; ?>"
                        href="<?php echo $base_url; ?>about.php">About Us <img class="carrot-arrow" src="<?php echo $assets_url; ?>images\home\carrot-arrow.svg"></a>
                  </div>
                  <div class="ancher_container">
                     <a class="nav-link tabs_ancher <?php echo ($pagename == 'our_program') ? "active" : ""; ?>"
                        href="<?php echo $base_url; ?>our_program.php"> Our Programs <img class="carrot-arrow" src="<?php echo $assets_url; ?>images\home\carrot-arrow.svg"></a>
                  </div>
                  <div class="ancher_container">
                     <a class="nav-link tabs_ancher <?php echo ($pagename == 'enquire') ? "active" : ""; ?>"
                        href="<?php echo $base_url; ?>enquire.php">Hire From Us <img class="carrot-arrow" src="<?php echo $assets_url; ?>images\home\carrot-arrow.svg"></a>
                  </div>
                  <div class="ancher_container">
                     <a class="nav-link tabs_ancher <?php echo ($pagename == 'contact-us') ? "active" : ""; ?>"
                        href="<?php echo $base_url; ?>contact-us.php">Contact us  <img class="carrot-arrow" src="<?php echo $assets_url; ?>images\home\carrot-arrow.svg"></a>
                     <div>
                     <button class="enqury-btn-mbl" onclick="onClickEnquireModal()">Enquire Now</button>
                     </div>
                  </div>
               </div>
            </div>
            <span class="d-lg-none d-block" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <!-- mobile toggle end -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link <?php echo ($pagename == 'about.php') ? "active" : ""; ?>"
                        href="<?php echo $base_url; ?>about">About Us </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?php echo ($pagename == 'our_program.php') ? "active" : ""; ?>"
                        href="<?php echo $base_url; ?>our_program"> Our Programs </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?php echo ($pagename == 'enquire.php') ? "active" : ""; ?>"
                        href="<?php echo $base_url; ?>enquire">Hire From Us </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?php echo ($pagename == 'contact-us.php') ? "active" : ""; ?>"
                        href="<?php echo $base_url; ?>contact-us">Contact us </a>
                  </li>
                  <li class="nav-item enquire_button">
                     <button class="header__enquire__btn"  onclick="onClickEnquireModal()">Enquire Now</button>
                   
                  </li>
                  <!-- //////-->
                  <li class="logo-sm d-flex d-lg-none pb-0">
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon">
                     <i class="bi bi-x-lg"></i>
                     </span>
                     </button>
                  </li>
               </ul>
            </div>
         </div>
      </nav>

 