<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title><?php bloginfo( 'name' ); ?></title>

<?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>



	<nav id="menu-bar" class="navbar navbar-fixed-top navbar-light w-100">
                <a id="" class="navbar-brand" href="#">  
                  </a>
                  <button style="display:block;" id="responsive_hamburger" class="hamburger navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="hamburger-box ">
                          <span class="hamburger-inner "></span>
                      </span>
                  </button>
                  <div class="collapse navbar-collapse float-right" id="navbar-content">
                          <?php $defaults=array(
                          'theme_location'    => 'primary',
                          'container_id'      => 'navbar-content',
                          'container'         => '',
                          'container_id'      => '',
                          'container_class'   => '',
                          'menu_id'           => false,
                          'menu_class'        => 'navbar-nav ml-auto',
                          'depth'             => 0,
                          'fallback_cb'       => 'class-wp-bootstrap-navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker(),
                          'add_li_class'      => "nav-item mx-4"

                      );
                      wp_nav_menu($defaults);?>

                  </div>
                </nav>


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <h1><a href="<?php //echo home_url(); ?>"><?php //bloginfo( 'name' ); ?></a></h1>
    <h4><?php //bloginfo( 'description' ); ?></h4>
 -->
    


    <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul> -->
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->
 
<header class="site-header">
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <h4><?php bloginfo( 'description' ); ?></h4>


    	<nav class="navigation-menu">
			<?php $args = [ 'theme_location' => 'primary' ]; ?>
			<?php wp_nav_menu( $args ) ?>
        </nav>
</header>
