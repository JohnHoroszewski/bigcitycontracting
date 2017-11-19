<?php
/**
 * Template Name: Gallery
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_City_Contracting
 */

get_header(); ?>

	<main id="main" class="content-area">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'gallery' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
