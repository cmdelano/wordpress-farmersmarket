<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0

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
				
				<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); 
				 
					$size='medium';
					$vendor_page_photo=get_field('vendor-page-photo'); ?>

					<aside class="vendor-photo">

					<?php if ($vendor_page_photo) { ?>
					<?php echo wp_get_attachment_image( $vendor_page_photo, $size ); ?>	
					<?php } ?>


					</aside>

					<?php endwhile; ?>

		<?php twentythirteen_paging_nav(); ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>