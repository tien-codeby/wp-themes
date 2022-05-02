<?php
add_action('wp_ajax_custom_game_create_action', 'custom_game_create_action');
add_action('wp_ajax_nopriv_custom_game_create_action', 'custom_game_create_action');
function custom_game_create_action()
{
    $custom_post = array(
        'post_title'   => $_POST['title'],
        'post_content' => $_POST['content'],
        'post_status'  => 'private',
        'post_type'    => 'game'
    );
    $post_id  = wp_insert_post($custom_post);
    rwmb_set_meta( $post_id, 'email', $_POST['email'] );
    rwmb_set_meta( $post_id, 'trang_chu', $_POST['trang_chu'] );
    rwmb_set_meta( $post_id, 'fanpage_ho_tro', $_POST['fanpage_ho_tro'] );
    rwmb_set_meta( $post_id, 'ten_may_chu', $_POST['ten_may_chu'] );
    rwmb_set_meta( $post_id, 'mieu_ta_mu', $_POST['mieu_ta_mu'] );
    rwmb_set_meta( $post_id, 'alpha_test', $_POST['alpha_test'] );
    rwmb_set_meta( $post_id, 'open_beta', $_POST['open_beta'] );
    rwmb_set_meta( $post_id, 'exp', $_POST['exp'] );
    rwmb_set_meta( $post_id, 'drop', $_POST['drop'] );
    rwmb_set_meta( $post_id, 'anti_hack', $_POST['anti_hack'] );
    wp_set_post_terms( $post_id, $_POST['mu_theo_loai'], 'mu-theo-loai' );
    wp_set_post_terms( $post_id, $_POST['season'], 'season' );
    wp_send_json_success(array('post_id' => $post_id));
}