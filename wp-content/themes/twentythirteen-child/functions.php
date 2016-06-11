<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// "function create_custom_post_types" creates a custom post type

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

// creating the Vendor Page Photo post type
    register_post_type( 'vendor-page-photo',
        array(
            'labels' => array(
                'name' => __( 'Vendor Page Photo' ),
                'singular_name' => __( 'Vendor Page Photo' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'our-vendors/vendor-page-photo' ),
            'taxonomies' => array ( 'post_tag', 'category')
        )
    );


// Hooks the custom function up to the theme
add_action( 'init', 'create_custom_post_types' );
    

// Filter the excerpt length to 20 words

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

// used the following function to change "continue reading" to "read more" for excerpts in custom post types

if ( ! function_exists( 'twentythirteen_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ...
 * and a Continue reading link.
 *
 * @since Twenty Thirteen 1.4
 *
 * @param string $more Default Read More excerpt link.
 * @return string Filtered Read More excerpt link.
 */

function twentythirteen_excerpt_more( $more ) {
    $link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
        esc_url( get_permalink( get_the_ID() ) ),
            /* translators: %s: Name of current post */
            sprintf( __( 'Read more %s <span class="meta-nav">&raquo;</span>', 'twentythirteen' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
        );
    return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'twentythirteen_excerpt_more' );
endif;