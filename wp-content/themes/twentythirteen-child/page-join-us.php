<?php
/**
 * The template for displaying the Join Us page
 *
 * Pulls in several fields from the Advanced Custom Fields plugin
 *
 * The initital appplication/contact form uses the Ninja Form plugin
 *
 * Template Name: Join Us
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
		</div><!-- .title-of-page -->

		<div id="content" class="site-content" role="main">
	
					 
					<?php while ( have_posts() ) : the_post(); 

					$join_us_intro=get_field('join_us_intro_text');
					$vendor_invitation_text=get_field('vendor_invitation_text');
					$musician_invitation_text=get_field('musician_invitation_text');
					$artist_invitation_text=get_field('artist_invitation_text');
					$kids_invitation_text=get_field('kids_invitation_text');

					?>

			<section class="join-us-page">
				<div class="join-intro">
					<h2>Be a Part of the Fall Farmers Market</h2>
						<p><?php echo $join_us_intro; ?></p>
				</div>

				<h2 id="vendor-invite">Vendors</h2>
								
					<p><?php echo $vendor_invitation_text; ?></p>

				<h2 id="musician-invite">Musicians</h2>
								
					<p><?php echo $musician_invitation_text; ?></p>

				<h2 id="artist-invite">Artists</h2>
				
					<p><?php echo $artist_invitation_text; ?></p>

				<h2 id="kids-invite">Kids Events</h2>
			
					<p><?php echo $kids_invitation_text; ?></p>

				<h2 id="application-form">Apply To Join Us</h2>

				<?php endwhile; ?>
			</section>

			<?php echo do_shortcode('[ninja_forms id=1]'); ?>	
		
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>