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
<header class="site-header">
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <h4><?php bloginfo( 'description' ); ?></h4>
	<nav class="navigation-menu">
		<?php $args = [ 'theme_location' => 'primary' ]; ?>
		<?php wp_nav_menu( $args ) ?>
    </nav>
</header>

    <?php if(is_page()) : ?>
        <h3>Thanks for visiting our page!</h3>
    <?php endif ?>