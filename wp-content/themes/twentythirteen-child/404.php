<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen_Child
 * @since Child of Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">

	<header class="page-header">
				<div class="page-title"><h2><?php _e( 'Not Found', 'twentythirteen' ); ?></h2><div>
			</header>

		<div id="content" class="site-content" role="main">

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>