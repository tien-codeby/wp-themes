<?php
add_action( 'init', 'custom_banner_position_taxonomy' );
function custom_banner_position_taxonomy() {
    $args = [
        'label'  => esc_html__( 'Positions', 'your-textdomain' ),
        'labels' => [
            'menu_name'                  => esc_html__( 'Positions', 'your-textdomain' ),
            'all_items'                  => esc_html__( 'All positions', 'your-textdomain' ),
            'edit_item'                  => esc_html__( 'Edit position', 'your-textdomain' ),
            'view_item'                  => esc_html__( 'View position', 'your-textdomain' ),
            'update_item'                => esc_html__( 'Update position', 'your-textdomain' ),
            'add_new_item'               => esc_html__( 'Add new position', 'your-textdomain' ),
            'new_item'                   => esc_html__( 'New position', 'your-textdomain' ),
            'parent_item'                => esc_html__( 'Parent position', 'your-textdomain' ),
            'parent_item_colon'          => esc_html__( 'Parent position', 'your-textdomain' ),
            'search_items'               => esc_html__( 'Search positions', 'your-textdomain' ),
            'popular_items'              => esc_html__( 'Popular positions', 'your-textdomain' ),
            'separate_items_with_commas' => esc_html__( 'Separate positions with commas', 'your-textdomain' ),
            'add_or_remove_items'        => esc_html__( 'Add or remove positions', 'your-textdomain' ),
            'choose_from_most_used'      => esc_html__( 'Choose most used positions', 'your-textdomain' ),
            'not_found'                  => esc_html__( 'No positions found', 'your-textdomain' ),
            'name'                       => esc_html__( 'Positions', 'your-textdomain' ),
            'singular_name'              => esc_html__( 'Position', 'your-textdomain' ),
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
    register_taxonomy( 'position', [ 'banner' ], $args );
}
