<?php
/**
 * The template for displaying the front page of the Farmers Market site
 *
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen_Child
 * @since Twenty Thirteen Child 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="title-of-page">
				<a href="<?php echo home_url(); ?>">
				<h2>&mdash; Upcoming Events &mdash;</h2>
				</a>
		</div>
		
			<div id="content">

 				<div class="full-width">
					<ul class="upcoming-events">
					
						<li class="events">
							<?php query_posts('posts_per_page=1&post_type=market-music'); ?>

							<?php /* The loop */ ?>
							<?php while ( have_posts() ) : the_post(); 

							$size = "medium";
							$musician_photo = get_field('musician_photo');
							$musician_month = get_field('musician_month');
							$musician_date = get_field('musician_date');
							$musician_year = get_field('musician_year');
							$musician_time = get_field('musician_time'); ?>


							<section class="event-info">

								<a href="<?php echo home_url(); ?>/market-music"><h3>Market Music: <?php the_title(); ?></h3></a>
	
								<ul class="event-date">
									<h4>
										<li><?php echo $musician_month ?></li>
										<li><?php echo $musician_date ?>, </li>
										<li><?php echo $musician_year ?></li>
										<li> @ <?php echo $musician_time ?></li>
									</h4>
								</ul>
						
								<div class="event-photo">
									<?php if ($musician_photo) { ?>
									<a href="<?php echo home_url(); ?>/market-music/">
										<?php echo wp_get_attachment_image( $musician_photo, $size ); ?>
									<?php } ?></a>
								</div>
							</section>

							<div class="clearfix"></div>
					
							<a href="<?php echo home_url(); ?>/market-music/">
								<h4 class="more-events">More Music <span class="more-arrow">&raquo;</span></h4>
							</a>

						<?php endwhile; // end of the loop. ?>
				
						<?php wp_reset_query(); // resets the altered query back to the original ?>
					</li>


					<li class="events">
						<?php query_posts('posts_per_page=1&post_type=market-art'); ?>

						<?php /* The loop */ ?>
						<?php while ( have_posts() ) : the_post(); 

						$size = "medium";
						$artist_photo = get_field('artist_photo');
						$artist_month = get_field('artist_month');
						$artist_date = get_field('artist_date');
						$artist_year = get_field('artist_year');
						$artist_time = get_field('artist_time'); 
						$artist_website = get_field('artist_website'); ?>


						<section class="event-info">
							<a href="<?php echo home_url(); ?>/market-art"><h3>Market Art: <?php the_title(); ?></h3></a>
								<ul class="event-date">
									<h4>
										<li><?php echo $artist_month ?></li>
										<li><?php echo $artist_date ?>, </li>
										<li><?php echo $artist_year ?></li>
										<li> @ <?php echo $artist_time ?></li>
									</h4>
								</ul>
							<div class="event-photo">
								<?php if ($artist_photo) { ?>
								<a href="<?php echo home_url(); ?>/market-art/">	
								<?php echo wp_get_attachment_image( $artist_photo, $size ); ?>	
								<?php } ?></a>
							</div>
						</section>

						<div class="clearfix"></div>

						<a href="<?php echo home_url(); ?>/market-art/">
							<h4 class="more-events">More Art <span class="more-arrow">&raquo;</span></h4>
						</a>

				
						<?php endwhile; // end of the loop. ?>
						<?php wp_reset_query(); // resets the altered query back to the original ?>
					</li>

					<li class="events">
						<?php query_posts('posts_per_page=1&post_type=market-kids'); ?>

						<?php /* The loop */ ?>
						<?php while ( have_posts() ) : the_post(); 

						$size = 'medium';
						$kids_photo = get_field('kids_photo');
						$kids_month = get_field('kids_month');
						$kids_date = get_field('kids_date');
						$kids_year = get_field('kids_year');
						$kids_time = get_field('kids_time'); ?>

						<section class="event-info">
							<a href="<?php echo home_url(); ?>/market-kids"><h3>Market Kids: <?php the_title(); ?></h3></a>
					
							<ul class="event-date">
								<h4>
									<li><?php echo $kids_month ?></li>
									<li><?php echo $kids_date ?>, </li>
									<li><?php echo $kids_year ?></li>
									<li> @ <?php echo $kids_time ?></li>
								</h4>
							</ul>
						</section>

						<div class="event-photo">
							<?php if ($kids_photo) { ?>
							<a href="<?php echo home_url(); ?>/market-kids">
							<?php echo wp_get_attachment_image( $kids_photo, $size ); ?>	
							<?php } ?></a>
						</div>

						<div class="clearfix"></div>

						<a href="<?php echo home_url(); ?>/market-kids/">
							<h4 class="more-events">More Kids Events <span class="more-arrow">&raquo;</span></h4>
						</a>

					<?php endwhile; // end of the loop. ?>
				
					<?php wp_reset_query(); // resets the altered query back to the original ?>
				</li>

			</ul><!-- .upcoming-events -->

			<div class="events-calendar">
				<a href="<?php echo home_url(); ?>/events/"><h3>&mdash; View Events Calendar &mdash;</h3></a>
			</div>

		</div><!-- .full-width -->
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>