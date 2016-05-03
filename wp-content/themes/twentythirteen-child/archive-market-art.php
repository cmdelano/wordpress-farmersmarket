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

		<div class="spacer"></div><!--take this out once you have this template styled -->

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
				$artist_time = get_field('artist_time'); 
				$artist_website = get_field('artist_website'); 

				$categry = get_field('category');
				?>


				<div class="artist-photo">
					<?php if ($artist_photo) { ?>
					<?php echo wp_get_attachment_image($artist_photo, $size ); ?>	
					<?php } ?>
				</div>

				<section class="artist-info">
					<a href="<?php the_permalink(); ?>"><h3>Market Music: <?php the_title(); ?></h3></a>
					<ul class="event-date">
						<h4>
							<li><?php echo $artist_month ?></li>
							<li><?php echo $artist_date ?>, </li>
							<li><?php echo $artist_year ?></li>
							<li> @ <?php echo $artist_time ?></li>
							<li><?php if ($artist_website) { ?>
								<?php echo ($artist_website ); ?>
					<?php } ?>
						</h4>
					</ul>
					<p class="artist-description">
						<?php the_excerpt(); ?>
					</p>
				</section>

			<?php endwhile; ?>

			<h2><?php echo get_cat_name(5) ?></h2>

			<?php twentythirteen_paging_nav(); ?>
			


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>