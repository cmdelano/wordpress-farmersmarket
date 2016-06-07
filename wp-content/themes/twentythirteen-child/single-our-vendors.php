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

		<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 

				$size = 'medium';
				$vendor_photo = get_field( 'vendor_photo'); 
				$vendor_street_address = get_field('vendor_street_address');
				$vendor_city = get_field('vendor_city');
				$vendor_state = get_field('vendor_state');
				$vendor_zipcode = get_field('vendor_zipcode');
				$vendor_phone = get_field('vendor_phone');
				$vendor_website = get_field('vendor_website'); ?>
				

				<section class="vendor-title">
					<h3><?php the_title(); ?></h3>
					<div class="vendor-info">
							<p><?php echo $vendor_street_address ?>, 
							<?php echo $vendor_city ?>, 
							<?php echo $vendor_state ?>
							<?php echo $vendor_zipcode ?></p>
							<p><?php echo $vendor_phone ?></p>
							<p><?php echo $vendor_website ?></p>
							<p><?php the_content(); ?></p>
					</div>
				</section>

				<div class="vendor-photo">
					<?php if ($vendor_photo) { ?>
					<?php echo wp_get_attachment_image( $vendor_photo, $size ); ?>	
					<?php } ?>
				</div>

				<div class="clearfix"></div>

				<?php twentythirteen_post_nav(); ?>


			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>
			


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>