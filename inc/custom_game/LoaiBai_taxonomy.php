<?php
add_action( 'init', 'custom_game_loaibai_taxonomy' );
function custom_game_loaibai_taxonomy() {
    $args = [
        'label'  => esc_html__( 'Loại bài', 'your-textdomain' ),
        'labels' => [
            'menu_name'                  => esc_html__( 'Loại bài', 'your-textdomain' ),
            'all_items'                  => esc_html__( 'All Loại bài', 'your-textdomain' ),
            'edit_item'                  => esc_html__( 'Edit Loại bài', 'your-textdomain' ),
            'view_item'                  => esc_html__( 'View Loại bài', 'your-textdomain' ),
            'update_item'                => esc_html__( 'Update Loại bài', 'your-textdomain' ),
            'add_new_item'               => esc_html__( 'Add new Loại bài', 'your-textdomain' ),
            'new_item'                   => esc_html__( 'New Loại bài', 'your-textdomain' ),
            'parent_item'                => esc_html__( 'Parent Loại bài', 'your-textdomain' ),
            'parent_item_colon'          => esc_html__( 'Parent Loại bài', 'your-textdomain' ),
            'search_items'               => esc_html__( 'Search Loại bài', 'your-textdomain' ),
            'popular_items'              => esc_html__( 'Popular Loại bài', 'your-textdomain' ),
            'separate_items_with_commas' => esc_html__( 'Separate Loại bài with commas', 'your-textdomain' ),
            'add_or_remove_items'        => esc_html__( 'Add or remove Loại bài', 'your-textdomain' ),
            'choose_from_most_used'      => esc_html__( 'Choose most used Loại bài', 'your-textdomain' ),
            'not_found'                  => esc_html__( 'No Loại bài found', 'your-textdomain' ),
            'name'                       => esc_html__( 'Loại bài', 'your-textdomain' ),
            'singular_name'              => esc_html__( 'Loại bài', 'your-textdomain' ),
        ],
        'public'               => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'show_in_nav_menus'    => true,
        'show_tagcloud'        => true,
        'show_in_quick_edit'   => true,
        'show_admin_column'    => true,
        'show_in_rest'         => true,
        'hierarchical'         => false,
        'query_var'            => true,
        'sort'                 => false,
        'rewrite_no_front'     => false,
        'rewrite_hierarchical' => false,
        'rewrite' => true
    ];
    register_taxonomy( 'loai-bai', [ 'game' ], $args );
}