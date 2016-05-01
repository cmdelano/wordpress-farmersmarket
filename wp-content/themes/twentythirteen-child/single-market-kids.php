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
			<h2>Market Kids</h2>
		</div>


			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 


				$size = 'medium';
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
					<h3>Market Art: <?php the_title(); ?></h3>
					<ul class="event_date">
						<h4>
							<li><?php echo $kids_month ?></li>
							<li><?php echo $kids_date ?>, </li>
							<li><?php echo $kids_year ?></li>
							<li> @ <?php echo $kids_time ?></li>
						</h4>
					</ul>
					<p class="artist-description">
						<?php the_content(); ?>
					</p>
				</section>

				<?php twentythirteen_post_nav(); ?>

			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->