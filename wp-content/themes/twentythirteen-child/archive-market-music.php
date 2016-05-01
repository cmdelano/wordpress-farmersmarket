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
			<h2>Market Music</h2>
		</div>

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
					<a href="<?php the_permalink(); ?>"><h3>Market Music: <?php the_title(); ?></h3></a>
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
				</section>

			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>
			


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>