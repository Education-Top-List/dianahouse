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



    /* Khach hang */

    add_action( 'init', 'customer_review_custom_post_type' );
    add_filter('manage_customer_review_posts_columns','customer_review_contact_columns');
    add_action('manage_customer_review_posts_custom_column','customer_review_custom_column',10,2);
    function customer_review_custom_post_type() {
        $labels = array(
            'name'              => 'Khách hàng',
            'singular_name'     => 'Khách hàng',
            'menu_name'         => 'Khách hàng',
            'name_admin_bar'    => 'Khách hàng'
        );

        $args = array(
            'labels'            => $labels,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'capability_type'   => 'post',
            'hierarchical'      => false,
            'menu_position'     => 26,
            'menu_icon'         => 'dashicons-businessman',
            'supports'          => array( 'title', 'thumbnail' , 'excerpt' )
        );

        register_post_type( 'customer_review', $args );

    }

    function customer_review_contact_columns($columns){
        $newColumns = array();
        $newColums['title'] = 'Title';
        $newColums['avatar'] = 'Avatar';
        return $newColums;
    }

    function customer_review_custom_column($column,$post_id){
        switch ($column) {
            case 'avatar':
            echo get_the_post_thumbnail();
            break;
        }
    }

        /*  */

    add_action( 'init', 'tg_partner_custom_post_type' );
    add_filter('manage_tg_partner_posts_columns','tg_partner_contact_columns');
    add_action('manage_tg_partner_posts_custom_column','tg_partner_custom_column',10,2);
    function tg_partner_custom_post_type() {
        $labels = array(
            'name'              => 'Đối tác',
            'singular_name'     => 'Đối tác',
            'menu_name'         => 'Đối tác',
            'name_admin_bar'    => 'Đối tác'
        );

        $args = array(
            'labels'            => $labels,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'capability_type'   => 'post',
            'hierarchical'      => false,
            'menu_position'     => 26,
            'menu_icon'         => 'dashicons-businessman',
            'supports'          => array( 'title', 'thumbnail' , 'excerpt' )
        );

        register_post_type( 'tg_partner', $args );

    }

    function tg_partner_contact_columns($columns){
        $newColumns = array();
        $newColums['title'] = 'Title';
        $newColums['avatar'] = 'Avatar';
        return $newColums;
    }

    function tg_partner_custom_column($column,$post_id){
        switch ($column) {
            case 'avatar':
            echo get_the_post_thumbnail();
            break;
        }
    }