<?php
add_filter( 'rwmb_meta_boxes', 'custom_game_meta_boxes' );
function custom_game_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Advance game', 'online-generator' ),
        'id'      => 'untitled',
        'context' => 'normal',
        'post_types' => array('game', 'post'),
        'fields'  => [
            [
                'type' => 'text',
                'name' => esc_html__( 'Tên MU', 'online-generator' ),
                'id'   => $prefix . 'ten_mu',
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
                'type'    => 'select',
                'name'    => esc_html__( 'Phiên Bản', 'online-generator' ),
                'id'      => $prefix . 'phien_ban',
                'options' => [
                    'Season 2'  => esc_html__( 'Season 2', 'online-generator' ),
                    'Season 6'  => esc_html__( 'Season 6', 'online-generator' ),
                    'Season 16' => esc_html__( 'Season 16', 'online-generator' ),
                ],
                'std'     => 'Season 2',
            ],
            [
                'type'    => 'radio',
                'name'    => esc_html__( 'Loại Mu', 'online-generator' ),
                'id'      => $prefix . 'loai_mu',
                'options' => [
                    'Reset'     => esc_html__( 'Reset', 'online-generator' ),
                    'Non Reset' => esc_html__( 'Non Reset', 'online-generator' ),
                ],
                'std'     => 'Reset',
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
                'type'    => 'radio',
                'name'    => esc_html__( 'Loại bài', 'online-generator' ),
                'id'      => $prefix . 'loai_bai',
                'options' => [
                    'Thường' => esc_html__( 'Thường', 'online-generator' ),
                    'VIP'       => esc_html__( 'VIP', 'online-generator' ),
                ],
                'std'     => 'Thường',
            ],
        ],
    ];

    return $meta_boxes;
}

