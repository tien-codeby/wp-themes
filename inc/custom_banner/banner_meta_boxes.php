<?php
add_filter( 'rwmb_meta_boxes', 'custom_banner_meta_boxes' );
function custom_banner_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Advance banner', 'online-generator' ),
        'id'      => 'banner',
        'context' => 'normal',
        'post_types' => array('banner'),
        'fields'  => [
            [
                'type' => 'url',
                'name' => esc_html__( 'Url', 'online-generator' ),
                'id'   => $prefix . 'url',
            ],
            [
                'type' => 'file_advanced',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'file_advanced_e40i6fjkppm',
            ],
        ],
    ];

    return $meta_boxes;
}

