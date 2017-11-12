<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big_City_Contracting
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="top-footer">
		<div class="constrain flexed">

			<?php if ( is_active_sidebar( 'footer_col1' ) ) : ?>
				<div class="footer-col">
					<?php dynamic_sidebar( 'footer_col1' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer_col2' ) ) : ?>
				<div class="footer-col">
					<?php dynamic_sidebar( 'footer_col2' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer_col3' ) ) : ?>
				<div class="footer-col">
					<?php dynamic_sidebar( 'footer_col3' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer_col4' ) ) : ?>
				<div class="footer-col">
					<?php dynamic_sidebar( 'footer_col4' ); ?>
				</div>
			<?php else : ?>
				<div class="footer-col">
					<h3 class="widget-title">Reach Us</h3>
					<div class="contact-info phone"><a href="tel:<?php echo get_theme_mod( 'bigCity_company_phone' ); ?>"><i class="fa fa-phone"></i><?php echo get_theme_mod( 'bigCity_company_phone' ); ?></a></div>
					<div class="contact-info fax"><i class="fa fa-fax"></i><?php echo get_theme_mod( 'bigCity_company_fax' ); ?></div>
					<div class="contact-info email"><a href="<?php echo get_theme_mod( 'bigCity_company_email' ); ?>"><i class="fa fa-envelope"></i><?php echo get_theme_mod( 'bigCity_company_email' ); ?></a></div>
					<div class="contact-info street"><?php echo get_theme_mod( 'bigCity_company_street' ); ?></div>
					<div class="contact-info city-state-zip"><?php echo get_theme_mod( 'bigCity_company_city' ); ?>, <?php echo get_theme_mod( 'bigCity_company_state' ); ?> <?php echo get_theme_mod( 'bigCity_company_zip' ); ?></div>
					<?php $logoFull = get_theme_mod( 'bigCity_logo' );
						  $logoFullID = attachment_url_to_postid( $logoFull );
						  $logoFullAlt = get_post_meta( $logoFullID, '_wp_attachment_image_alt', true ); ?>

					<a class="footer-logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo $logoFull; ?>" alt="<?php echo $logoFullAlt; ?>"></a>
				</div>
			<?php endif; ?>

		</div>
	</footer><!-- #colophon -->
	<footer class="bottom-footer">
		<div class="constrain flexed">
			<div class="copyright">
				&copy;<?php echo date( 'Y' ); ?> <?php echo bloginfo( 'name' ); ?>
			</div>
			<div class="btm-links">
				<a href="<?php echo get_theme_mod( 'bigCity_site_map' ); ?>" class="sitemap">Site Map</a>
				<?php if ( get_theme_mod( 'bigCity_privacy_policy' ) ) : ?>
					<a href="<?php echo get_theme_mod( 'bigCity_privacy_policy' ); ?>" class="privacy-policy">Privacy Policy</a>
				<?php endif; ?>
				<a href="#top" class="bk2tp">Back to Top</a>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>