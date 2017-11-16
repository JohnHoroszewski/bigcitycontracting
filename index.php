<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_City_Contracting
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( get_field( 'banner_image' ) ) : ?>
        	<div class="banner-image parallax-image" style="background-image:url('<?php the_field('banner_image'); ?>');">
    	<?php else : ?>
        	<div class="banner-image parallax-image" style="background-image:url('<?php echo get_theme_mod('bigCity_posts_blog'); ?>');">
    	<?php endif; ?>
			<div class="constrain">

				<div class="page-heading">
					<h1>Thoughts</h1>
				</div><!-- .page-heading -->

			</div>  

			</div><!-- .banner-image -->
			<section class="page-content">
				<div class="constrain">
					<div class="content-wrapper">

						<div class="blog-quote">
							<?php echo get_theme_mod( 'bigCity_blog_quote' ); ?>
						</div>

						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>

							<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
					</div><!-- .content-wrapper -->
				</div><!-- .constrain -->
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
