<?php
add_filter( 'rwmb_meta_boxes', 'custom_game_meta_boxes' );
function custom_game_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Advance game', 'online-generator' ),
        'id'      => 'untitled',
        'context' => 'normal',
        'post_types' => array('game'),
        'fields'  => [
            [
                'type' => 'text',
                'name' => esc_html__( 'Email', 'online-generator' ),
                'id'   => $prefix . 'email',
            ],
            [
                'type' => 'url',
                'name' => esc_html__( 'Trang Chủ', 'online-generator' ),
                'id'   => $prefix . 'trang_chu',
            ],
            [
                'type' => 'url',
                'name' => esc_html__( 'Fanpage Hỗ Trợ', 'online-generator' ),
                'id'   => $prefix . 'fanpage_ho_tro',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Tên Máy Chủ', 'online-generator' ),
                'id'   => $prefix . 'ten_may_chu',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Miêu Tả Mu', 'online-generator' ),
                'id'   => $prefix . 'mieu_ta_mu',
            ],
            [
                'type' => 'datetime',
                'name' => esc_html__( 'Alpha Test', 'online-generator' ),
                'id'   => $prefix . 'alpha_test',
            ],
            [
                'type' => 'datetime',
                'name' => esc_html__( 'Open Beta', 'online-generator' ),
                'id'   => $prefix . 'open_beta',
            ],
            [
                'type' => 'number',
                'name' => esc_html__( 'Exp', 'online-generator' ),
                'id'   => $prefix . 'exp',
            ],
            [
                'type' => 'number',
                'name' => esc_html__( 'Drop', 'online-generator' ),
                'id'   => $prefix . 'drop',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Anti Hack', 'online-generator' ),
                'id'   => $prefix . 'anti_hack',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Anti Hack', 'online-generator' ),
                'id'   => $prefix . 'anti_hack',
            ],
        ],
    ];

    return $meta_boxes;
}

