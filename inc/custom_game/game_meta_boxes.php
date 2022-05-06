<?php

use CodebyCore\CodeByMetaBoxes;

add_filter( 'rwmb_meta_boxes', 'custom_game_meta_boxes' );
function custom_game_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = CodeByMetaBoxes::init('Game', ['game'])
        ->addField('text', 'Email')
        ->addField('url', 'Trang Chủ')
        ->addField('url', 'Fanpage Hỗ Trợ')
        ->addField('text', 'Tên Máy Chủ')
        ->addField('text', 'Miêu Tả Mu')
        ->addField('datetime', 'Alpha Test')
        ->addField('datetime', 'Open Beta')
        ->addField('number', 'Exp')
        ->addField('number', 'Drop')
        ->addField('text', 'Anti Hack')
//        ->addField('', 'Image')
        ->get();
    return $meta_boxes;
}

