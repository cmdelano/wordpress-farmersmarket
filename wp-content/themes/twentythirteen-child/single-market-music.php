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
			<h2>Market Music</h2>
		</div>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 


				$size = "full";
				$musician_photo = get_field('musician_photo');
				$musician_month = get_field('musician_month');
				$musician_date = get_field('musician_date');
				$musician_year = get_field('musician_year');
				$musician_time = get_field('musician_time'); ?>

				<div class="artist-photo">
					<?php if ($musician_photo) { ?>
					<?php echo wp_get_attachment_image( $musician_photo, $size ); ?>	
					<?php } ?>
				</div>

				<section class="artist-info">
					<h3>Market Music: <?php the_title(); ?></h3>
					<ul class="event_date">
						<h4>
							<li><?php echo $musician_month ?></li>
							<li><?php echo $musician_date ?>, </li>
							<li><?php echo $musician_year ?></li>
							<li> @ <?php echo $musician_time ?></li>
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