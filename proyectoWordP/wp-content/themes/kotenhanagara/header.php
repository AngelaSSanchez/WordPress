<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package kotenhanagara
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner"<?php kotenhanagara_wp_add_custom_header_style(); ?>>

    <div class="site-branding-wrap">
	    <a class="site-title-icon" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php if ( get_option( 'kotenhanagara_logo_image' ) ) : ?>
			<img src="<?php echo esc_url( get_option( 'kotenhanagara_logo_image' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
		<?php endif; ?>
	    </a>
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div>

        <div class="social-bookmark">

        <ul>
        <?php dynamic_sidebar("Facebook");?>
        <?php dynamic_sidebar("Twitter");?>
	   <?php dynamic_sidebar("Tumblr");?>
        <?php dynamic_sidebar("Google");?>
        <?php dynamic_sidebar("LinkedIn");?>
        <?php dynamic_sidebar("RSS");?>

        </ul>
        </div>
        <?php wp_nav_menu( array('menu_class' => 'nav-menu' ) ); ?>
	</div>
	</header><!-- #masthead -->
	<div id="main" class="site-main">
