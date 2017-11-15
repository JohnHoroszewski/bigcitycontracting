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
    <div class="recent-projects">
        <div class="constrain">
            <h3>Recent Projects</h3>
        </div>
        <div class="flexed">
            <div class="project-image-block" style="background-image:url('<?php the_field( 'recent_project_image_1' ); ?>');">
                <div class="project-image-overlay">
                    <a id="single_image" href="<?php the_field( 'recent_project_image_1' ); ?>" class="cta-btn accent-btn">View Larger</a>
                    <a href="/gallery" class="cta-btn dark-btn">See More</a>
                </div>
            </div><!-- .project-image-block -->
            <div class="project-image-block" style="background-image:url('<?php the_field( 'recent_project_image_2' ); ?>');">
                <div class="project-image-overlay">
                    <a id="single_image" href="<?php the_field( 'recent_project_image_2' ); ?>" class="cta-btn accent-btn">View Larger</a>
                    <a href="/gallery" class="cta-btn dark-btn">See More</a>
                </div>
            </div><!-- .project-image-block -->
            <div class="project-image-block" style="background-image:url('<?php the_field( 'recent_project_image_3' ); ?>');">
                <div class="project-image-overlay">
                    <a id="single_image" href="<?php the_field( 'recent_project_image_3' ); ?>" class="cta-btn accent-btn">View Larger</a>
                    <a href="/gallery" class="cta-btn dark-btn">See More</a>
                </div>
            </div><!-- .project-image-block -->
            <div class="project-image-block" style="background-image:url('<?php the_field( 'recent_project_image_4' ); ?>');">
                <div class="project-image-overlay">
                    <a id="single_image" href="<?php the_field( 'recent_project_image_4' ); ?>" class="cta-btn accent-btn">View Larger</a>
                    <a href="/gallery" class="cta-btn dark-btn">See More</a>
                </div>
            </div><!-- .project-image-block -->
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
