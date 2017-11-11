<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big_City_Contracting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://use.fontawesome.com/822d311cfa.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'sfooter' ); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'big-city-contracting' ); ?></a>
	<div class="top-bar">
		<div class="constrain flexed">
			<div class="contact-links">
				<a href="tel:<?php echo get_theme_mod( 'bigCity_company_phone' ); ?>" class="phone"><i class="fa fa-phone"></i><?php echo get_theme_mod( 'bigCity_company_phone' ); ?></a>
				<a href="mailto:<?php echo get_theme_mod( 'bigCity_company_email' ); ?>" class="email"><i class="fa fa-envelope"></i><?php echo get_theme_mod( 'bigCity_company_email' ); ?></a>
				<a id="top-contact-toggle" href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="builder-link">
				<a href="#">Builders Package <i class="fa fa-chevron-right"></i></a>
			</div>
			<div class="top-social social-media">
				<a href="#" id="top-social-toggle"><i class="fa fa-share-alt"></i></a>
				<?php social_media_list(); ?>
			</div>
		</div>
	</div>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="constrain flexed">

			<div class="site-branding">
				<a class="logo-full" href="/"><img src="<?php echo get_theme_mod( 'bigCity_logo' ); ?>" alt=""></a>
				<a class="logo-mobile" href="/"><img src="<?php echo get_theme_mod( 'bigCity_company_mark' ); ?>" alt=""></a>
				<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
