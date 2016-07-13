<?php
/**
 * The template for displaying a single Market Music custom post type
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen_Child
 * @since Twenty_Thirteen_Child 1.0
 */

get_header(); ?>


	<div id="primary" class="content-area">

		<div class="title-of-page">
			<a href="<?php echo home_url(); ?>/market-music/">
				<h2>&mdash; Market Music &mdash;</h2>
			</a>
		</div>

		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 


				$size = "medium";
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
					<ul class="event-date">
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
				</section><!-- .artist-info -->

				<div class="clearfix"></div>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->