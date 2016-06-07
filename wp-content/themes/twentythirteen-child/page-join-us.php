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
				<h2><?php the_title(); ?></h2>
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
				<p><?php echo $join_us_intro; ?></p>

				<div id="vendor-invite">
					<h2>Vendors</h2>
				</div>
								
					<p><?php echo $vendor_invitation_text; ?></p>

				<div id="musician-invite">
					<h2>Musicians</h2>
				</div>
				
					<p><?php echo $musician_invitation_text; ?></p>

				<div id="artist-invite">
					<h2>Artists</h2>
				</div>

					<p><?php echo $artist_invitation_text; ?></p>

				<div id="kids-invite">
					<h2>Kids Events</h2>
				</div>
			
					<p><?php echo $kids_invitation_text; ?></p>

				<?php endwhile; ?>
			</section>

			<?php echo do_shortcode('[ninja_forms id=1]'); ?>	
		
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>