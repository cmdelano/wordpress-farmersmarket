<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage TwentyThirteen_Child
 * @since Twenty Thirteen Child 1.0
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<div id="page-title" class="page-title">
			<h2>Market Art</h2>
		</div>


			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 


				$size = "medium";
				$artist_photo = get_field('artist_photo');
				$artist_month = get_field('artist_month');
				$artist_date = get_field('artist_date');
				$artist_year = get_field('artist_year');
				$artist_time = get_field('artist_time'); ?>

				<div class="artist-photo">
					<?php if ($artist_photo) { ?>
					<?php echo wp_get_attachment_image( $artist_photo, $size ); ?>	
					<?php } ?>
				</div>

				<section class="artist-info">
					<h3>Market Art: <?php the_title(); ?></h3>
					<ul class="event_date">
						<h4>
							<li><?php echo $artist_month ?></li>
							<li><?php echo $artist_date ?>, </li>
							<li><?php echo $artist_year ?></li>
							<li> @ <?php echo $artist_time ?></li>
						</h4>
					</ul>
					<p class="artist-description">
						<?php the_content(); ?>
					</p>
				</section>

				<?php twentythirteen_post_nav(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->