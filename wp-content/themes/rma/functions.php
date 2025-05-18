<?php
add_action('wp_enqueue_scripts', 'rma_enqueue_styles');

function rma_enqueue_styles()
{

    // wp_enqueue_style("slick", get_template_directory_uri() . "/assets/css/slick.css", array(), 'v1.1', 'all');
    // wp_enqueue_style("rma-style", get_template_directory_uri() . "/assets/css/primary.css", array(), 'v1.1', 'all');

    wp_enqueue_style(
        'rma-style',
        get_stylesheet_uri()
    );

    wp_enqueue_style(
        'slick',
        get_parent_theme_file_uri('/assets/css/slick.css')
    );

    wp_enqueue_style(
        'slick-theme',
        get_parent_theme_file_uri('/assets/css/slick-theme.css')
    );

    wp_enqueue_style("___style-guides", get_template_directory_uri() . "/assets/css/___style-guides.css", array(), 'v1.1', 'all');

    wp_enqueue_style(
        'rma-primary',
        get_parent_theme_file_uri('/assets/css/primary.css')
    );

    // wp_add_inline_style(
    //     'theme-slug-primary',
    //     'body { background: #eee; }'
    // );
}

add_action('wp_enqueue_scripts', 'rma_enqueue_scripts');

function rma_enqueue_scripts()
{
    // wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), true);

    // wp_enqueue_script('rma-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), true);

    wp_enqueue_script(
        'slick',
        get_parent_theme_file_uri('/assets/js/slick.min.js'),
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'rma-script',
        get_parent_theme_file_uri('/assets/js/script.js'),
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );

    // wp_add_inline_script(
    //     'theme-slug-navigation',
    //     'console.log( "Testing" );'
    // );
}

add_theme_support('post-thumbnails');
add_post_type_support('rma_expertise', 'thumbnail');
add_post_type_support('rma_cases', 'thumbnail');
add_post_type_support('rma_sustainability', 'thumbnail');

function rma_custom_post_type()
{
    register_post_type(
        'rma_expertise',
        array(
            'labels'      => array(
                'name'          => __('Expertises', 'textdomain'),
                'singular_name' => __('Expertise', 'textdomain'),
            ),
            'public'      => true,
            'has_archive' => true,
        )
    );

    register_post_type(
        'rma_cases',
        array(
            'labels'      => array(
                'name'          => __('Cases', 'textdomain'),
                'singular_name' => __('Case', 'textdomain'),
            ),
            'public'      => true,
            'has_archive' => true,
            'taxonomies'  => array('category'),
        )
    );

    register_post_type(
        'rma_sustainability',
        array(
            'labels'      => array(
                'name'          => __('Sustainabilities', 'textdomain'),
                'singular_name' => __('Sustainability', 'textdomain'),
            ),
            'public'      => true,
            'has_archive' => true,
            'taxonomies'  => array('category'),
        )
    );
}
add_action('init', 'rma_custom_post_type');
