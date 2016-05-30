<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/hover/css/hover-min.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header-custom" role="banner">
		<div class="header-custom">
            <div class="in">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="titreheader"><?php bloginfo( 'name' ); ?></a>
                <span class="slogan">Du webdesign passionnant et (presque) <strong>sans failles</strong></span>
                <div class="searchbar"><?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?></div>
            </div>
            <div class="animation-container">
                <div class="round-container">
                    <div class="seconde-un"></div>
                    <div class="seconde-deux"></div>
                </div>
            </div>
		</div>
        <div class="socialmedia">
            <ul>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="members">
            <ul>
                <li><a href="#"><i class="fa fa-sign-in"></i>Connexion</a></li>
                <li><a href="#"><i class="fa fa-check"></i>Inscription</a></li>
            </ul>
        </div>
	</header>
    <nav class="headmenuz">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
