<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/bootstrap.css' );

}

function create_custom_post_types() {

// creating the Market-Music post type
    register_post_type( 'market-music',
        array(
            'labels' => array(
                'name' => __( 'Market Music' ),
                'singular_name' => __( 'Market Music' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'market-music' ),
        )
    );

    register_post_type( 'market-art',
        array(
            'labels' => array(
                'name' => __( 'Market Art' ),
                'singular_name' => __( 'Market Art' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'market-art' ),
        )
    );


     register_post_type( 'market-kids',
        array(
            'labels' => array(
                'name' => __( 'Market Kids' ),
                'singular_name' => __( 'Market Kids' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'market-kids' ),
        )
    );
}

// Hooks the custom function up to the theme
add_action( 'init', 'create_custom_post_types' );