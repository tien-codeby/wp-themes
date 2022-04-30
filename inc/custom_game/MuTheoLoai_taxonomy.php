<?php
add_action( 'init', 'custom_game_mutheoloai_taxonomy' );
function custom_game_mutheoloai_taxonomy() {
    $args = [
        'label'  => esc_html__( 'MU theo loại', 'your-textdomain' ),
        'labels' => [
            'menu_name'                  => esc_html__( 'MU theo loại', 'your-textdomain' ),
            'all_items'                  => esc_html__( 'All MU theo loại', 'your-textdomain' ),
            'edit_item'                  => esc_html__( 'Edit MU theo loại', 'your-textdomain' ),
            'view_item'                  => esc_html__( 'View MU theo loại', 'your-textdomain' ),
            'update_item'                => esc_html__( 'Update MU theo loại', 'your-textdomain' ),
            'add_new_item'               => esc_html__( 'Add new MU theo loại', 'your-textdomain' ),
            'new_item'                   => esc_html__( 'New MU theo loại', 'your-textdomain' ),
            'parent_item'                => esc_html__( 'Parent MU theo loại', 'your-textdomain' ),
            'parent_item_colon'          => esc_html__( 'Parent MU theo loại', 'your-textdomain' ),
            'search_items'               => esc_html__( 'Search MU theo loại', 'your-textdomain' ),
            'popular_items'              => esc_html__( 'Popular MU theo loại', 'your-textdomain' ),
            'separate_items_with_commas' => esc_html__( 'Separate MU theo loại with commas', 'your-textdomain' ),
            'add_or_remove_items'        => esc_html__( 'Add or remove MU theo loại', 'your-textdomain' ),
            'choose_from_most_used'      => esc_html__( 'Choose most used MU theo loại', 'your-textdomain' ),
            'not_found'                  => esc_html__( 'No MU theo loại found', 'your-textdomain' ),
            'name'                       => esc_html__( 'MU theo loại', 'your-textdomain' ),
            'singular_name'              => esc_html__( 'MU theo loại', 'your-textdomain' ),
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
    register_taxonomy( 'mu-theo-loai', [ 'game' ], $args );
}