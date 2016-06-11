<?php
/**
 * The template for displaying the About Us page
 *
 * Fields all pulled from the About Us custom field using the Advanced Custom Field plugin
 *
 * Template Name: About Us
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen_Child
 * @since Twenty Thirteen_Child 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="title-of-page">
			<a href="<?php echo the_permalink(); ?>">
				<h2>&mdash; <?php the_title(); ?> &mdash;</h2>
			</a>
		</div>

		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 

					$market_description=get_field('market_description');
					$volunteer=get_field('volunteer');
					$contact_us=get_field('contact_us');

					?>

			<section class="about-us-page">
				<div class="about-intro">
				<h2>The Fall Farmers Market</h2>
				<p><?php echo $market_description; ?></p>
				</div>
			
				<h2 id="volunteer">Volunteer</h2>

				<p><?php echo $volunteer; ?></p>

				<h2 id="contact-us">Get in Touch With Us</h2>
				<p><?php echo $contact_us; ?></p>

				<?php endwhile; ?>
			</section>

			<?php echo do_shortcode('[ninja_forms id=5]'); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>