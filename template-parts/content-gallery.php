<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_City_Contracting
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    <?php if ( get_field( 'banner_image' ) ) : ?>
        <div class="banner-image parallax-image" style="background-image:url('<?php the_field('banner_image'); ?>');">
    <?php else : ?>
        <div class="banner-image parallax-image" style="background-image:url('<?php echo get_theme_mod('bigCity_page_general'); ?>');">
    <?php endif; ?>
            <div class="constrain">

                <div class="page-heading">
                    <h1><?php the_title(); ?></h1>
                    <?php if ( get_field( 'page_title_subtext' ) ) : ?>
                        <div class="subtitle"><?php the_field( 'page_title_subtext' ); ?></div>
                    <?php endif; ?>
                </div><!-- .page-heading -->

            </div>  

        </div><!-- .banner-image -->
    <section class="page-content">
        <div class="constrain">
            <div class="content-wrapper">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
