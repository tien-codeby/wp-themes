<?php
add_action( 'init', 'custom_game_season_taxonomy' );
function custom_game_season_taxonomy() {
    $args = [
        'label'  => esc_html__( 'Seasons', 'your-textdomain' ),
        'labels' => [
            'menu_name'                  => esc_html__( 'Seasons', 'your-textdomain' ),
            'all_items'                  => esc_html__( 'All seasons', 'your-textdomain' ),
            'edit_item'                  => esc_html__( 'Edit season', 'your-textdomain' ),
            'view_item'                  => esc_html__( 'View season', 'your-textdomain' ),
            'update_item'                => esc_html__( 'Update season', 'your-textdomain' ),
            'add_new_item'               => esc_html__( 'Add new season', 'your-textdomain' ),
            'new_item'                   => esc_html__( 'New season', 'your-textdomain' ),
            'parent_item'                => esc_html__( 'Parent season', 'your-textdomain' ),
            'parent_item_colon'          => esc_html__( 'Parent season', 'your-textdomain' ),
            'search_items'               => esc_html__( 'Search seasons', 'your-textdomain' ),
            'popular_items'              => esc_html__( 'Popular seasons', 'your-textdomain' ),
            'separate_items_with_commas' => esc_html__( 'Separate seasons with commas', 'your-textdomain' ),
            'add_or_remove_items'        => esc_html__( 'Add or remove seasons', 'your-textdomain' ),
            'choose_from_most_used'      => esc_html__( 'Choose most used seasons', 'your-textdomain' ),
            'not_found'                  => esc_html__( 'No seasons found', 'your-textdomain' ),
            'name'                       => esc_html__( 'Seasons', 'your-textdomain' ),
            'singular_name'              => esc_html__( 'Season', 'your-textdomain' ),
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
    register_taxonomy( 'season', [ 'game' ], $args );
}
