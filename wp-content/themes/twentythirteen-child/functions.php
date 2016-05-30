<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/*
 * Set up the content width value based on the theme's design.
 *
 * @see twentythirteen_content_width() for template-specific adjustments.
 */
//if ( ! isset( $content_width ) )
//   $content_width = 1000;

// if ( ! isset( $content_width ) )
//     $content_width = 900;

/*
* This theme uses a custom image size for featured images, displayed on
* "standard" posts and pages.
*/
    // add_theme_support( 'post-thumbnails' );
   // set_post_thumbnail_size( 604, 270, true );

function create_custom_post_types() {

// creating Vendors post type
    register_post_type( 'our-vendors',
        array(
            'labels' => array(
                'name' => __( 'Our Vendors' ),
                'singular_name' => __( 'Our Vendors' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'our-vendors' ),
            'taxonomies' => array ( 'post_tag', 'category')
        )
    );


// creating the Market Music post type
    register_post_type( 'market-music',
        array(
            'labels' => array(
                'name' => __( 'Market Music' ),
                'singular_name' => __( 'Market Music' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'market-music' ),
            'taxonomies' => array ( 'post_tag', 'category' )
        )
    );

register_taxonomy_for_object_type( 'category', 'post','market-music' );


// creating the Market Art post type
    register_post_type( 'market-art',
        array(
            'labels' => array(
                'name' => __( 'Market Art' ),
                'singular_name' => __( 'Market Art' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'market-art' ),
            'taxonomies' => array ( 'post_tag', 'category')
        )
    );

// creating the Market Kids post type
     register_post_type( 'market-kids',
        array(
            'labels' => array(
                'name' => __( 'Market Kids' ),
                'singular_name' => __( 'Market Kids' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'market-kids' ),
            'taxonomies' => array ( 'post_tag', 'category')
        )
    );
}

// Hooks the custom function up to the theme
add_action( 'init', 'create_custom_post_types' );


// Filter the except length to 20 words.

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


// Function to add custom post types to wordpress default categories and tags

function add_custom_types_to_tax( $query ) {
if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

// Get all your post types
$post_types = get_post_types();

$query->set( 'post_type', $post_types );
return $query;
}
}
add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );