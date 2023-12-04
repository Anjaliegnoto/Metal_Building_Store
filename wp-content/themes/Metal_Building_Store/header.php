<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!DOCTYPE HTML>
<html>
<head>
	<!--font-->
	<!--playfair display-->
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&display=swap" rel="stylesheet">

	<!--Manrope-->
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<!--Circular Std-->
	<link href="https://db.onlinewebfonts.com/c/860c3ec7bbc5da3e97233ccecafe512e?family=Circular+Std+Book" rel="stylesheet" type="text/css"/>

	<!-- rajdhani -->		
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;500;600;700&display=swap" rel="stylesheet">

	<!--css-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/advance-styles.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/search-styles.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/quote-styles.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/product-styles.css">

	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Page Structure</title>
</head>
<body>
	<!--Desktop View-->
	<div class="desktop-view">
		<!--main container-->
		<div class="main-container">
			<!--header container-->
			<div class="header-container">
				<!-- header -->
				<a class="header">
					<div class="logo">
						<svg xmlns="http://www.w3.org/2000/svg" width="58" height="44" viewBox="0 0 58 44" fill="none">
	  					<path fill-rule="evenodd" clip-rule="evenodd" d="M45.8957 24.4781H12.1042V26.3279H45.8957V24.4781ZM45.8957 20.6405H12.1042V22.4902H45.8957V20.6405ZM33.0883 35.9844L29 38.3597L24.9116 35.9844H33.0916H33.0883ZM39.6912 32.1467L36.5036 33.9965H21.4896L18.302 32.1467H39.6879H39.6912ZM45.8957 28.5415L43.1099 30.1588H14.8901L12.1042 28.5415V28.3091H45.8957V28.5415ZM53.1449 14.7913V24.3299L47.8679 27.396V14.8149H10.1321V27.396L4.85507 24.3299V14.7913L29 0L53.1449 14.7981V14.7913ZM26.0032 10.5561V12.9854H28.4174V10.5561H26.0032ZM29.5792 10.5561V12.9854H31.9934V10.5561H29.5792ZM29.5792 9.38694H31.9934V6.95765H29.5792V9.38694ZM28.4174 9.38694V6.95765H26.0032V9.38694H28.4174ZM12.1042 16.7994V18.6492H45.8957V16.7994H12.1042Z" fill="#0F645B"/>
	  					<path d="M58 14.5151L55.395 12.9787V25.6473L42.2025 33.3125H42.1958L29 40.9777L15.8042 33.3125H15.7975L2.60836 25.6473V12.9787L0 14.5151V27.15L14.5017 35.5734V35.5767L29 44L43.5017 35.5767L43.4983 35.5734L58 27.15V14.5151Z" fill="#0F645B"/>
						</svg>
					</div>
					<div class="content">
						<span class="tag">Metal Building</span>
						<span class="heading">Store</span>
					</div>
				</a>
			</div>

			<!-- content -->
			<div class="content-container">
				<h1 class="heading">Message</h1>
				<p class="description">It was popularised in the 1960s with the release of Letraset sheets containing ipsum passages, and more recently with desktop publishing</p>
				<a href="#" class="mobile-view-btn">
					<span>
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					  	<mask id="mask0_1125_6" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
					    <rect width="20" height="20" fill="#D9D9D9"/>
					  	</mask>
					  	<g mask="url(#mask0_1125_6)">
					    <path d="M7.5 15.8333L1.66666 10L7.5 4.16667L8.66667 5.33333L4.85416 9.16667H18.3333V10.8333H4.85416L8.6875 14.6667L7.5 15.8333Z" fill="white"/>
					  	</g>
						</svg>
					</span>
					<span>Go To Mobile View</span>
				</a>		
			</div>

			<!-- scroll -->
			<div class="scroll-container">
				<div class="scroll">
					<div class="row row_one">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_1.png" alt="metal store 1">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_2.png" alt="metal store 2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_14.png" alt="metal store 3">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_15.png" alt="metal store 4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_16.png" alt="metal store 5">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_17.png" alt="metal store 6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_3.png" alt="metal store 3">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_4.png" alt="metal store 4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_5.png" alt="metal store 5">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_6.png" alt="metal store 6">
					</div>
					
					<div class="row row_two">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_7.png" alt="metal store 7">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_18.png" alt="metal store 8">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_22.png" alt="metal store 9">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_19.png" alt="metal store 10">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_20.png" alt="metal store 11">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_21.png" alt="metal store 12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_14.png" alt="metal store 8">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_9.png" alt="metal store 9">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_10.png" alt="metal store 10">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_22.png" alt="metal store 11">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/metal_store_12.png" alt="metal store 12">
					</div>
				</div>
			</div>

			<!-- footer -->
			<div class="footer-container">
				<div class="footer">
					<div class="footer-nav">
						<ul class="footer-nav-menu">
							<li>About Us</li>
							<li>Contact Us</li>
							<li>Blog</li>
						</ul>
					</div>
					<div class="copyright">
						<p>©2023 Metal Building Store. All Right Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Moble View div open-->
	<div class="mobile-view">
		<!--header container-->
		<div class="main-container header-container">
			<div class="sub-container">
				<!-- header -->
				<div class="header">
					<div class="header-nav">
						<div class="header-logo" style="display: block;">
					        <a href="#">
					            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="34" viewBox="0 0 46 34" fill="none">
								  <path fill-rule="evenodd" clip-rule="evenodd" d="M36.4001 18.9149H9.59992V20.3443H36.4001V18.9149ZM36.4001 15.9495H9.59992V17.3788H36.4001V15.9495ZM26.2425 27.8061L23 29.6416L19.7575 27.8061H26.2451H26.2425ZM31.4793 24.8407L28.9512 26.27H17.0435L14.5154 24.8407H31.4766H31.4793ZM36.4001 22.0548L34.1906 23.3045H11.8094L9.59992 22.0548V21.8752H36.4001V22.0548ZM42.1494 11.4297V18.8004L37.9642 21.1696V11.4479H8.03578V21.1696L3.85059 18.8004V11.4297L23 0L42.1494 11.4349V11.4297ZM20.6232 8.15698V10.0342H22.5379V8.15698H20.6232ZM23.4594 8.15698V10.0342H25.3741V8.15698H23.4594ZM23.4594 7.25354H25.3741V5.37637H23.4594V7.25354ZM22.5379 7.25354V5.37637H20.6232V7.25354H22.5379ZM9.59992 12.9814V14.4108H36.4001V12.9814H9.59992Z" fill="white"/>
								  <path d="M46 11.2162L43.934 10.029V19.8184L33.471 25.7415H33.4656L23 31.6646L12.5343 25.7415H12.529L2.0687 19.8184V10.029L0 11.2162V20.9796L11.5013 27.4885V27.4911L23 34L34.5013 27.4911L34.4987 27.4885L46 20.9796V11.2162Z" fill="white"/>
								</svg>
					        </a>
					   </div>
					   <div class="menu-nav">
					   		<h3>Menu</h3>
					   </div>
					</div>
				</div>
			</div>
		</div>
	</div>
