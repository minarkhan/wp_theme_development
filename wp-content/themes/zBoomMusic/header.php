<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>zBoomMusic Free Html5 Responsive Template</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/<?php echo get_template_directory_uri(); ?>/assets/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">


		<?php 
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
			    echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
			} else {
			    echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
			}
		 ?>


		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    	<h4><?php bloginfo( 'description' ); ?></h4>
		<div id="logo"><a href="#">
			<!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/logo.png"/> -->
		</a></div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<ul>
				<li class="current"><a href="index.html">Home</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="single.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		
	</div>
</nav>
