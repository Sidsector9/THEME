<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Euclid
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<?php dynamic_sidebar( 'footer-one' ); ?>
					</div>
					<div class="col-sm-3">
						<?php dynamic_sidebar( 'footer-two' ); ?>
					</div>
					<div class="col-sm-3">
						<?php dynamic_sidebar( 'footer-three' ); ?>
					</div>
					<div class="col-sm-3">
						<?php dynamic_sidebar( 'footer-four' ); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-menu-and-info">
			<div class="container">
				<div class="row footer-map-bg">
					<div class="col-sm-9">
						<?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                )
				            );
				        ?>
				        <span class="site-info"><?php echo get_theme_mod( 'site_info_setting' ); ?></span>
					</div>
					<div class="col-sm-3">
						<img src="<?php echo get_theme_mod( 'footer_logo_setting' ); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
