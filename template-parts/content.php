<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_City_Contracting
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="flexed">
		<div class="blog-block">
			<header class="entry-header">
				<?php
				
				if ( is_singular() ) :
					echo '<div class="constrain">';
					echo '<div class="index-date">' . get_the_date() . '</div>';
					the_title( '<h1 class="entry-title">', '</h1>' );
					echo '</div>';
				else :
					echo '<div class="index-date">' . get_the_date() . '</div>';
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<div class="constrain">
				<?php if ( is_singular() ) {

					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'big-city-contracting' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'	before' => '<div class="page-links">' . esc_html__( 'Pages:', 'big-city-contracting' ),
						'after'  => '</div>',
					) );
				} else {
					the_excerpt();
				} ?>
				</div>
			</div><!-- .entry-content -->
		</div><!-- .blog-block -->
		<?php if ( !is_singular() ) : ?>

			<div class="featured-image">
				<?php if ( get_the_post_thumbnail() ) {
					the_post_thumbnail();
				} else {
					echo '<img src="http://via.placeholder.com/732x475" alt="" />';
					// echo get_theme_mod( 'default_blog_post_image' );
				} ?>
			</div>
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
