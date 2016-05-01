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
					<a href="<?php the_permalink(); ?>"><h3>Market Kids: <?php the_title(); ?></h3></a>
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


			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>
			


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>