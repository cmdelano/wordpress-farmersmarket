<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/* This category.php template has NOT been modified. Hoping.... */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array ('post_type' => 'market-art', // custom post type
				'paged' => $paged,
				)); //This is the code responsible for for getting the Art category to work
			?>


			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: Market Art', //adding Market Art here caused the label to show up in the Market Art category page
				 'twentythirteen-child' ), single_cat_title( ' ', false ) ); ?></h1>

			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array ('post_type' => 'market-music', // custom post type
				'paged' => $paged,
				));
			?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: Market Music', 'twentythirteen-child' ), single_cat_title( ' ', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
