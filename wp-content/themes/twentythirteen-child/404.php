<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen_Child
 * @since Twenty_Thirteen_Child 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">

	<header class="error-page-header">
				<div class="title-of-page"><h2>&mdash; <?php _e( 'Page Not Found', 'twentythirteen' ); ?> &mdash;</h2><div>
			</header>

		<div id="content" class="site-content" role="main">

		<h1 class="page-title-404">404 error</h1>

			<div class="page-wrapper">
				<div class="page-content">
					<p><?php _e( 'We&rsquo;re sorry, but it looks as if nothing was found at this location. Please try a search below.', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>