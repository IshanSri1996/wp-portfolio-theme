<!DOCTYPE html>
<!-- OLMO - Software, App, SaaS & Startup Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">


	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="DSAThemes"/>	
		<meta name="description" content="OLMO - Software, App, SaaS & Startup Landing Pages Pack"/>
		<meta name="keywords" content="Responsive, HTML5, DSAThemes, One Page, Landing, Software, Mobile App, SaaS, Startup, Creative, Freelancers, Digital Product">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>OLMO - Software, App, SaaS & Startup Landing Pages Pack</title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

		<?php wp_head() ?>

	</head>



	<body>




		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loading" class="orange-red-loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="object_one"></div>
					<div class="object" id="object_two"></div>
					<div class="object" id="object_three"></div>
					<div class="object" id="object_four"></div>
				</div>
			</div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
			<header id="header" class="header tra-menu navbar-light">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	  	
				    	<span class="smllogo"><img src="images/logo-01.png" alt="mobile-logo"/></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	
				 	</div>


				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- HEADER LOGO -->
	    					<?php 
							if(function_exists('the_custom_logo')){
									$custom_logo_id = get_theme_mod('custom_logo');
									$logo = wp_get_attachment_image_src($custom_logo_id);
								}
							?>
	    					<div class="desktoplogo"><a href="#hero-1" class="logo-black"><img src="<?php echo $logo[0] ?>" alt="header-logo"></a></div>
	    					<div class="desktoplogo"><a href="#hero-1" class="logo-white"><img src="<?php echo $logo[0] ?>" alt="header-logo"></a></div>


	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list nav-orange-red-hover">
	        						<?php  function wp_nav_menu_remove_attributes( $menu ){
                   $menu = preg_replace('/ id=\"(.*)\" class=\"(.*)\"/iU', '', $menu );
	        $menu = preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
	    $menu = preg_replace('/<a /', '<a class="nav-link"', $menu);
	return preg_replace('/<li /', '<li class="nav-item"', $menu);
              }add_filter( 'wp_nav_menu', 'wp_nav_menu_remove_attributes' );
				wp_nav_menu(array(
  'menu'=>'Top',
                            'container'=>'',
                            'container_id'=>'',
                            'container_class'=>'',
                            'before'=>'',
                            'after'=>'',
                            'link_before'=> '',
                            'link_after'=> '',
                            'theme_location'=>'', 
  
));
				?>


	        						<!-- MEGAMENU -->
						          	<!-- <li aria-haspopup="true"><a href="/wordpress/about">About Us</a></li>
						          	<li aria-haspopup="true"><a href="/wordpress/blogs">Posts</a></li>
						          	<li aria-haspopup="true"><a href="/wordpress/contact">Contact Us</a></li>
						          	<li aria-haspopup="true"><a href="/wordpress/faq">FAQ</a></li -->>


	        						


									<!-- HEADER SOCIAL LINKS 													
									<li class="nl-simple white-color header-socials ico-20 clearfix" aria-haspopup="true">
										<span><a href="#" class="ico-facebook"><span class="flaticon-facebook"></span></a></span>
										<span><a href="#" class="ico-twitter"><span class="flaticon-twitter"></span></a></span>
										<span><a href="#" class="ico-instagram"><span class="flaticon-instagram"></span></a></span>
										<span><a href="#" class="ico-dribbble"><span class="flaticon-dribbble"></span></a></span>	
									</li> -->	


	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->


	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
				
			</header>	<!-- END HEADER -->