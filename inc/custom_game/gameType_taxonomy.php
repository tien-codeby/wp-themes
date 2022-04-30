<?php
add_action( 'init', 'custom_gameType_taxonomy' );
function custom_gameType_taxonomy() {
    $args = [
        'label'  => esc_html__( 'gameTypes', 'your-textdomain' ),
        'labels' => [
            'menu_name'                  => esc_html__( 'gameTypes', 'your-textdomain' ),
            'all_items'                  => esc_html__( 'All gameTypes', 'your-textdomain' ),
            'edit_item'                  => esc_html__( 'Edit gameType', 'your-textdomain' ),
            'view_item'                  => esc_html__( 'View gameType', 'your-textdomain' ),
            'update_item'                => esc_html__( 'Update gameType', 'your-textdomain' ),
            'add_new_item'               => esc_html__( 'Add new gameType', 'your-textdomain' ),
            'new_item'                   => esc_html__( 'New gameType', 'your-textdomain' ),
            'parent_item'                => esc_html__( 'Parent gameType', 'your-textdomain' ),
            'parent_item_colon'          => esc_html__( 'Parent gameType', 'your-textdomain' ),
            'search_items'               => esc_html__( 'Search gameTypes', 'your-textdomain' ),
            'popular_items'              => esc_html__( 'Popular gameTypes', 'your-textdomain' ),
            'separate_items_with_commas' => esc_html__( 'Separate gameTypes with commas', 'your-textdomain' ),
            'add_or_remove_items'        => esc_html__( 'Add or remove gameTypes', 'your-textdomain' ),
            'choose_from_most_used'      => esc_html__( 'Choose most used gameTypes', 'your-textdomain' ),
            'not_found'                  => esc_html__( 'No gameTypes found', 'your-textdomain' ),
            'name'                       => esc_html__( 'gameTypes', 'your-textdomain' ),
            'singular_name'              => esc_html__( 'gameType', 'your-textdomain' ),
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
    register_taxonomy( 'gameType1', [ 'game' ], $args );
}