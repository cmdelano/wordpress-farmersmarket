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
		<div id="content" class="site-content" role="main">

		<div id="page-title" class="page-title">
			<h2>Our Vendors</h2>
		</div>

		<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 


				$vendor_street_address = get_field('vendor_street_address');
				$vendor_city = get_field('vendor_city');
				$vendor_state = get_field('vendor_state');
				$vendor_zipcode = get_field('vendor_zipcode');
				$vendor_website = get_field('vendor_website'); ?>



				<section class="vendor-title">
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<ul class="vendor-info">
						<h4>
							<li><?php echo $vendor_street_address ?></li>
							<li><?php echo $vendor_city ?>, </li>
							<li><?php echo $vendor_state ?></li>
							<li><?php echo $vendor_state ?></li>
							<li><?php echo $vendor_website ?></li>

						</h4>
					</ul>
				</section>

			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>
			


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>