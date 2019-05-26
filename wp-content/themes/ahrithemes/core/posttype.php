<?php
/* register post type canhodienghinh */
register_post_type( 'canhodienhinh',
    array(
        'labels' => array(
            'name' => __('căn hộ điển hình'),
            'singular_name' => __('căn hộ điển hình'),
        ),
        'public' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 21,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_ui' => true
    )
);