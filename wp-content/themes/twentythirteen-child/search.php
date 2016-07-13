<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen_Child
 * @since Twenty_Thirteen_Child 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">

	<div class="title-of-page">
		<h2>&mdash; <?php printf( __( 'Search Results for: %s', 'twentythirteen'), get_search_query() ); ?> &mdash;</h2>
	</div>

		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>