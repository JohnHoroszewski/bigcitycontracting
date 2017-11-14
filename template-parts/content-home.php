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
	
    <section class="hero" style="background-image:url('<?php the_field('hero_image'); ?>');">
        <div class="constrain">
            <div class="hero-bold-text"><?php the_field( 'hero_bold_text' ); ?></div>
            <div class="hero-light-text"><?php the_field( 'hero_light_text' ); ?></div>
            <a href="#hp-form" class="cta-btn accent-btn"><?php the_field( 'anchor_text' ); ?></a>
        </div>
    </section>

    <section class="services">
        <div class="constrain flexed">

            <div class="service-block">
                <?php the_field( 'service_column_1' ); ?>
            </div>
            <div class="service-block">
                <?php the_field( 'service_column_2' ); ?>
            </div>
            <div class="service-block">
                <?php the_field( 'service_column_3' ); ?>
            </div>
            <div class="service-block">
                <?php the_field( 'service_column_4' ); ?>
            </div>

        </div>
    </section>

    <section class="about" style="background-image:url('<?php the_field('about_section_image'); ?>');">
        <div class="constrain flexed">
            <div class="left-block"><?php the_field( 'about_section_text' ); ?></div>
        </div>
    </section>

    <section id="hp-form" class="hp-form">
        <div class="constrain">
            <h3>Start Your Project</h3>
            <?php $formSc = get_field( 'contact_form_shortcode' );
                echo do_shortcode( $formSc ); ?>
        </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
