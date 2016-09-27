<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="sidebar-container" role="complementary">
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>


		</div><!-- .widget-area -->

	</div><!-- #secondary -->

	<div class="designed-by">
		<p>Designed and built by <a href= "http://www.cindydelano.com" target="_blank">Cindy DeLano</a></p>
		<p>&copy; Cindy DeLano</p>
	</div>

<?php endif; ?>