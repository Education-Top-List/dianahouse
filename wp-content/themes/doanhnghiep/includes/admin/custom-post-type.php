<?php

/*
	
@package sunsettheme
	
	========================
		THEME CUSTOM POST TYPES
	========================
*/



/* duan */
add_action('init', 'tg_contact_custom_post_type_duan');
add_filter('manage_duan_posts_columns', 'sunset_set_contact_columns_duan');
add_action('manage_duan_posts_custom_column', 'sunset_contact_custom_column_duan', 10, 2);
function tg_contact_custom_post_type_duan()
{
    $labels = array(
        'name' => 'Dự án',
        'singular_name' => 'Dự án',
        'menu_name' => 'Dự án',
        'name_admin_bar' => 'Dự án'
    );
    
    $args = array(
        'labels' => $labels,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'menu_position' => 25,
        'menu_icon' => 'dashicons-building',
        'supports' => array(
            'title',
            'thumbnail',
            'excerpt',
            'editor'
        )
    );
    
    register_taxonomy('du-an', 'duan', array(
        'label' => __('Chuyên mục dự án'),
        'hierarchical' => true
    ));
    
    register_post_type('duan', $args);
}
function sunset_set_contact_columns_duan($columns)
{
    $newColumns          = array();
    $newColums['title']  = 'Title';
    $newColums['avatar'] = 'Avatar';
    return $newColums;
}
function sunset_contact_custom_column_duan($column, $post_id)
{
    switch ($column) {
        case 'avatar':
            echo get_the_post_thumbnail();
            break;
    }
}