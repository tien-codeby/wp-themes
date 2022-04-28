<?php
add_filter( 'rwmb_meta_boxes', 'custom_game_meta_boxes' );

function custom_game_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Untitled Field Group', 'online-generator' ),
        'id'      => 'untitled',
        'context' => 'normal',
        'post_types' => array('tourist_review'),
        'fields'  => [
            [
                'type' => 'file_input',
                'name' => esc_html__( 'Tên MU', 'online-generator' ),
                'id'   => $prefix . 'ten_mu',
            ],
            [
                'type' => 'file_input',
                'name' => esc_html__( 'Trang Chủ', 'online-generator' ),
                'id'   => $prefix . 'trang_chu',
            ],
            [
                'type' => 'file_input',
                'name' => esc_html__( 'Fanpage Hỗ Trợ', 'online-generator' ),
                'id'   => $prefix . 'fanpage_ho_tro',
            ],
            [
                'type' => 'select_advanced',
                'name' => esc_html__( 'Phiên Bản', 'online-generator' ),
                'id'   => $prefix . 'phien_ban',
            ],
            [
                'type' => 'checkbox_list',
                'name' => esc_html__( 'Loại Mu', 'online-generator' ),
                'id'   => $prefix . 'loai_mu',
            ],
            [
                'type' => 'file_input',
                'name' => esc_html__( 'Tên Máy Chủ', 'online-generator' ),
                'id'   => $prefix . 'ten_may_chu',
            ],
            [
                'type' => 'file_input',
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
                'type' => 'file_input',
                'name' => esc_html__( 'Anti Hack', 'online-generator' ),
                'id'   => $prefix . 'anti_hack',
            ],
        ],
    ];

    return $meta_boxes;
}