<?php
/**
 * The template for displaying the Our Vendors custom post type archives page
 *
 * This template pulls in several fields from the Advanced Custom Fields plugin.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen_Child
 * @since Twenty_Thirteen_Child 1.0

 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="title-of-page">
			<a href="<?php echo home_url(); ?>/our-vendors/">
				<h2>&mdash; Our Vendors &mdash;</h2>
			</a>
		</div>

		<div id="content" class="site-content" role="main">

			<section class="narrow-content">

			<?php query_posts('post_type=our-vendors&orderby=title&order=asc'); ?>
		
				<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
	
						<section class="vendor-title">
							<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
						</section>

					<?php endwhile; ?>

				<?php wp_reset_query(); // resets the altered query back to the original ?>

			</section>
				

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>