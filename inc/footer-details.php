<?php
/**
 * @package Theme Freesia
 * @subpackage Pixgraphy
 * @since Pixgraphy 1.0
 */
?>
<?php
/************************* PIXGRAPHY FOOTER DETAILS **************************************/

function pixgraphy_site_footer() {
if ( is_active_sidebar( 'pixgraphy_footer_options' ) ) :
		dynamic_sidebar( 'pixgraphy_footer_options' );
	else:
		echo '<div class="copyright">' .'&copy; ' . date('Y') .' '; ?>
		<a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?>
					</div>
	<?php endif;
}
add_action( 'pixgraphy_sitegenerator_footer', 'pixgraphy_site_footer');
?>