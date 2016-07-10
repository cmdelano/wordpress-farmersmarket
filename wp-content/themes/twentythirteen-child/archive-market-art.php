<?php
/**
 * The template the displaying the Market Art archives pages
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
			<a href="<?php echo home_url(); ?>/market-art/">
				<h2>&mdash; Market Art &mdash;</h2>
			</a>		
		</div>

		<div id="content" class="site-content" role="main">
		
		<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 


				$size = "medium"; //variables
				$artist_photo = get_field('artist_photo');
				$artist_month = get_field('artist_month');
				$artist_date = get_field('artist_date');
				$artist_year = get_field('artist_year');
				$artist_time = get_field('artist_time'); 
				$artist_website = get_field('artist_website'); 
				?>


				<div class="artist-photo">
					<?php if ($artist_photo) { ?>
					<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($artist_photo, $size ); ?></a>
					<?php } ?>
				</div>

				<section class="artist-info">
					<a href="<?php the_permalink(); ?>"><h3>Market Art: <?php the_title(); ?></h3></a>
					<ul class="event-date">
						<h4>
							<li><?php echo $artist_month ?></li>
							<li><?php echo $artist_date ?>, </li>
							<li><?php echo $artist_year ?></li>
							<li> @ <?php echo $artist_time ?></li>
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