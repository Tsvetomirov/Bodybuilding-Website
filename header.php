<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="MuscleVale - Official" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>MuscleVale</title>

<!-- Favicon -->
<link rel="shortcut icon" href="/images/favicon.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
 
<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="/css/plugins-css.css" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="/css/typography.css" />
<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="/css/shortcodes/shortcodes.css" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="/css/style.css" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="/css/responsive.css" /> 
<script type="text/javascript" src="/js/jquery-1.12.4.min.js"></script>

<!-- plugins-jquery -->
<script type="text/javascript" src="/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script type="text/javascript">var plugin_path = 'js/';</script>

<!-- custom -->
<script type="text/javascript" src="/js/custom.js"></script>
 
</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="/images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->

<!--=================================
 header -->

<header id="header" class="header default">
  <div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="topbar-call text-left">
          <ul>
            <li><i class="fa fa-envelope-o theme-color"></i> MuscleValeOfficial@gmail.com</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="topbar-social text-right">
          <ul>
            <li><a href="#"><span class="ti-facebook"></span></a></li>
            <li><a href="#"><span class="ti-instagram"></span></a></li>
            <li><a href="#"><span class="ti-google"></span></a></li>
            <li><a href="#"><span class="ti-twitter"></span></a></li>
            <li><a href="#"><span class="ti-linkedin"></span></a></li>
            <li><a href="#"><span class="ti-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
     </div>
  </div>
</div>

<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
               <a href="/index.php"><img id="logo_img" src="/images/logo.png" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
         <ul class="menu-links">

         <li class = <?php if(isset($current_page) && $current_page == 'index'){echo 'active';}?>><a href="/index.php">Блог </a>
		 
		 <li class = <?php if($_SERVER['PHP_SELF'] == '/foods/Food-Groups-BG.php' || $_SERVER['PHP_SELF'] == '/foods/Food-TableBG.php' ){echo 'active';}?>><a href="javascript:void(0)">Състав на храни <i class="fa fa-angle-down fa-indicator"></i></a>
				<ul class="drop-down-multilevel">
					<li class="<?php if($_SERVER['PHP_SELF'] == '/foods/Food-Groups-BG.php') {echo 'active';} ?>"><a href="/foods/Food-Groups-BG.php">Търсене на продукти</a>
                    <li class="<?php if($_SERVER['PHP_SELF'] == '/foods/Food-TableBG.php') {echo 'active';} ?>"><a href="/foods/Food-TableBG.php?products=all">Списък с всички храни</a>
					</ul>
				</li>
		 </li>
		 
		 <li><a href="/authors.php?all_ids">Автори </a>
            <li><a href="javascript:void(0)"> Shortcodes <i class="fa fa-angle-down fa-indicator"></i></a>
              <!-- drop down full width -->
                <div class="drop-down grid-col-12">
                    <!--grid row-->
                    <div class="grid-row">
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="elements-accordions.html"><i class="fa fa-list-ul"></i> Accordions </a></li>
                              <li><a href="elements-action-box.html"><i class="fa fa-mouse-pointer"></i> action box </a></li>
                              <li><a href="elements-alerts-and-callouts.html"><i class="fa fa-exclamation-triangle"></i> alerts and callouts </a></li>
                              <li><a href="elements-animations.html"><i class="fa fa-magic"></i> animations </a></li>
                              <li><a href="elements-blockquotes.html"><i class="fa fa-quote-right"></i> blockquotes </a></li>
                              <li><a href="elements-buttons.html"><i class="fa fa-link"></i> buttons </a></li>
                              <li><a href="elements-carousel-slider.html"><i class="fa fa-exchange"></i> carousel slider </a></li>
                              <li><a href="elements-clients.html"><i class="fa fa-user"></i> clients </a></li>
                              <li><a href="elements-columns.html"><i class="fa fa-columns"></i> columns </a></li>
                              <li><a href="elements-content-box.html"><i class="fa fa-file-text-o"></i> content box </a></li>
                              <li><a href="elements-countdown-timer.html"><i class="fa fa-clock-o"></i> countdown timer </a></li>
                            </ul>
                        </div>
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="elements-counter.html"><i class="fa fa-sort-numeric-asc"></i> counter </a></li>
                              <li><a href="elements-data-table.html"><i class="fa fa-table"></i> data table </a></li>
                              <li><a href="elements-datatables.html"><i class="fa fa-database"></i> datatables </a></li>
                              <li><a href="elements-datepicker.html"><i class="fa fa-calendar"></i> datepicker </a></li>
                              <li><a href="elements-dropcap-highlight.html"><i class="fa fa-lightbulb-o"></i> dropcap highlight </a></li>
                              <li><a href="elements-feature-box.html"><i class="fa fa-square-o"></i> feature box </a></li>
                              <li><a href="elements-form.html"><i class="fa fa-at"></i> form </a></li>
                              <li><a href="elements-gallery.html"><i class="fa fa-th"></i> gallery </a></li>
                              <li><a href="elements-headings.html"><i class="fa fa-font"></i> headings </a></li>
                              <li><a href="elements-labels.html"><i class="fa fa-tag"></i> labels </a></li>
                              <li><a href="elements-lightbox.html"><i class="fa fa-arrows-alt"></i> lightbox </a></li>
                            </ul>
                        </div>
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="elements-lists-panels.html"><i class="fa fa-list-ol"></i> lists panels </a></li>
                              <li><a href="elements-lists-style.html"><i class="fa fa-list-ul"></i> lists style </a></li>
                              <li><a href="elements-maps.html"><i class="fa fa-map-marker"></i> maps </a></li>
                              <li><a href="elements-modal-popovers.html"><i class="fa fa-file-image-o"></i> modal popovers </a></li>
                              <li><a href="elements-navigation.html"><i class="fa fa-bars"></i> navigation </a></li>
                              <li><a href="elements-newsletter.html"><i class="fa fa-envelope-o"></i> newsletter </a></li>
                              <li><a href="elements-pagination.html"><i class="fa fa-ellipsis-h"></i> pagination </a></li>
                              <li><a href="elements-pie-chart.html"><i class="fa fa-pie-chart"></i> pie chart </a></li>
                              <li><a href="elements-post-style.html"><i class="fa fa-file-text-o"></i> post style </a></li>
                              <li><a href="elements-pricing-tables.html"><i class="fa fa-table"></i> pricing tables </a></li>
                              <li><a href="elements-process-steps.html"><i class="fa fa-step-forward"></i> process steps </a></li>
                              
                            </ul>
                        </div>
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="elements-responsive-utilities.html"><i class="fa fa-mobile"></i> responsive utilities </a></li>
                              <li><a href="elements-sections.html"><i class="fa fa-server"></i> sections </a></li>
                              <li><a href="elements-select.html"><i class="fa fa-hand-o-up"></i> select </a></li>
                              <li><a href="elements-separators.html"><i class="fa fa-minus"></i> separators </a></li>
                              <li><a href="elements-skills.html"><i class="fa fa-align-left"></i> skills </a></li>
                              <li><a href="elements-social-icon.html"><i class="fa fa-share-alt"></i> social icon </a></li>
                              <li><a href="elements-tabs.html"><i class="fa fa-tasks"></i> tabs </a></li>
                              <li><a href="elements-team.html"><i class="fa fa-users"></i> team </a></li>
                              <li><a href="elements-testimonials.html"><i class="fa fa-comments-o"></i> testimonials </a></li>
                              <li><a href="elements-typography.html"><i class="fa fa-font"></i> typography </a></li>
                              <li><a href="elements-video-audio.html"><i class="fa fa-video-camera"></i> video audio </a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </li>
        </ul>
        <div class="search-cart">
          <div class="search">
            <a class="search-btn not_click" href="javascript:void(0);"></a>
              <div class="search-box not-click">
			  <form type = "POST" action = "/search.php">
                 <input type="text" class="not-click form-control" placeholder="Търсене" value="" name="s">
               <i class="fa fa-search"></i>
			   </form>
           </div>
          </div>
          <div class="shpping-cart">
           <a class="cart-btn" href="#"> <i class="fa fa-shopping-cart icon"></i> <strong class="item">2</strong></a>
            <div class="cart">
              <div class="cart-title">
                 <h6 class="uppercase mb-0">Shopping cart</h6>
              </div>
              <div class="cart-item">
                <div class="cart-image">
                  <img class="img-responsive" src="/images/shop/01.jpg" alt="">
                </div>
                <div class="cart-name clearfix">
                  <a href="#">Product name <strong>x2</strong> </a>
                  <div class="cart-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
                </div>
                <div class="cart-close">
                    <a href="#"> <i class="fa fa-times-circle"></i> </a>
                 </div>
              </div>
              <div class="cart-item">
                <div class="cart-image">
                  <img class="img-responsive" src="/images/shop/01.jpg" alt="">
                </div>
                <div class="cart-name clearfix">
                  <a href="#">Product name <strong>x2</strong></a>
                  <div class="cart-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
                </div>
                 <div class="cart-close">
                    <a href="#"> <i class="fa fa-times-circle"></i> </a>
                 </div>
              </div>
              <div class="cart-total">
                <h6 class="mb-15"> Total: $104.00</h6>
                <a class="button" href="#">View Cart</a>
                <a class="button black" href="#">Checkout</a>
              </div>
            </div>
          </div>
        </div>
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>
<!--=================================
 header -->