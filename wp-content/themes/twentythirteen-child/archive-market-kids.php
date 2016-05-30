<?php
/**
 * The template the displaying the Market Kids archives pages
 *
 *
 * This template pulls in several fields from the Advanced Custom Fields plugin.
 *
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen__Child
 * @since Twenty_Thirteen_Child 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="title-of-page">
			<a href="<?php echo home_url(); ?>/market-kids/">
				<h2>Market Kids</h2>
			</a>
		</div>

		<div id="content" class="site-content" role="main">

		<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 


				$size = 'medium'; //variables
				$kids_photo = get_field('kids_photo');
				$kids_month = get_field('kids_month');
				$kids_date = get_field('kids_date');
				$kids_year = get_field('kids_year');
				$kids_time = get_field('kids_time'); ?>

				<div class="artist-photo">
					<?php if ($kids_photo) { ?>
					<?php echo wp_get_attachment_image( $kids_photo, $size ); ?>	
					<?php } ?>
				</div>

				<section class="artist-info">
					<a href="<?php the_permalink(); ?>"><h3>Market Kids: <?php the_title(); ?></h3></a>
					<ul class="event-date">
						<h4>
							<li><?php echo $kids_month ?></li>
							<li><?php echo $kids_date ?>, </li>
							<li><?php echo $kids_year ?></li>
							<li> @ <?php echo $kids_time ?></li>
						</h4>
					</ul>
					<p class="artist-description">
						<?php the_excerpt(); ?>
					</p>
				</section>

				<div class="clearfix"></div>

			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>