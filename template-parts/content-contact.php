<?php
/**
 * Template part for displaying page content in contact.php
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
        <div class="banner-image parallax-image" style="background-image:url('<?php echo get_theme_mod('bigCity_page_contact'); ?>');">
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
            <aside class="contact">

                <div class="contact-snippet">
                    <?php if ( get_field( 'contact_snippet' ) ) {
                        the_field( 'contact_snippet' );
                    } ?>
                </div>      

                <?php if ( get_field( 'default_info' )  == 'yes' ) : ?>
                    <div class="contact-block">
                        <h3>Meet Us</h3>
                        <?php echo get_theme_mod( 'bigCity_company_street' ); ?><br />
                        <?php echo get_theme_mod( 'bigCity_company_city' ); ?>, <?php echo get_theme_mod( 'bigCity_company_state' ); ?> <?php echo get_theme_mod( 'bigCity_company_zip' ); ?>

                        <h3>Email Us</h3>
                        <a href="mailto:<?php echo get_theme_mod( 'bigCity_company_email' ); ?>"><?php echo get_theme_mod( 'bigCity_company_email' ); ?></a>

                        <h3>Call Us</h3>
                        <a href="tel:<?php echo get_theme_mod( 'bigCity_company_phone' ); ?>"><?php echo get_theme_mod( 'bigCity_company_phone' ); ?></a>
                    </div>

                <?php elseif ( get_field( 'default_info' )  == 'no' ) : ?>

                    <div class="contact-block">
                        <?php the_field( 'custom_sidebar_information' ); ?>
                    </div>

                <?php else : ?>

                <?php endif; ?>

            </aside>    
        </div>
    </section>
 
        <?php if ( get_theme_mod( 'bigCity_company_gmap' ) ) : ?>

            <div class="google-map">
                <?php echo get_theme_mod( 'bigCity_company_gmap' ); ?>
            </div>

        <?php endif; ?>
   

</article><!-- #post-<?php the_ID(); ?> -->
