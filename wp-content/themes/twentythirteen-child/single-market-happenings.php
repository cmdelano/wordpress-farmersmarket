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


<?php

$values = get_field('type_of_event');

if(in_array("musician", $values )){
?>
<div class="dealer-services-icon"><img src="<?php echo get_bloginfo('url'); ?>/media/icon-ac.png" alt="<?php the_field('focus_city'); ?> Air Conditioning Service" class="tooltips" title="Air Conditioning"></div>
<?
}

?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 


				$size = "full";
				$peformer_photo = get_field('performer_photo');
				$performance_month = get_field('performance_month');
				$performance_date = get_field('performance_date');
				$performance_year = get_field('performance_year');
				$performance_time = get_field('performance_time'); ?>

				<div class="artist-photo">
					<?php if ($performer_photo) { ?>
					<?php echo wp_get_attachment_image( $performer_photo, $size ); ?>	
					<?php } ?>
				</div>

				<section class="artist-info">
					<h3>Market Music: <?php the_title(); ?></h3>
					<ul class="event_date">
						<h4>
							<li><?php echo $performance_month ?></li>
							<li><?php echo $performance_date ?>, </li>
							<li><?php echo $performance_year ?></li>
							<li> @ <?php echo $performance_time ?></li>
						</h4>
					</ul>
					<p class="performer-description">
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