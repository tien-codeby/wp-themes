<?php
add_action('wp_ajax_custom_game_create_action', 'custom_game_create_action');
add_action('wp_ajax_nopriv_custom_game_create_action', 'custom_game_create_action');
function custom_game_create_action(): void
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

    // do_action('after_post_ads', $post_id);

    $data = implode(',', $_POST);

    $blogusers = get_users('role=Administrator');
    foreach ($blogusers as $user) {
        echo $user->user_email;
        $subject = "Có người vừa đăng quảng cáo";
        $headers = 'From: '. $_POST['email'] . "\r\n" .
            'Reply-To: ' . $user->user_email . "\r\n" .
            'Content-Type: text/html; charset=UTF-8';

        $message = '<h3>Nội dung quảng cáo</h3>';
        $message .= '<br/> Tên: ' . $_POST['title'];
        $message .= '<br/> Trang Chủ: ' . $_POST['trang_chu'];
        $message .= '<br/> Fanpage Hỗ Trợ: ' . $_POST['fanpage_ho_tro'];
        $message .= '<br/> Tên Máy Chủ: ' . $_POST['ten_may_chu'];
        $message .= '<br/> Miêu Tả: ' . $_POST['mieu_ta_mu'];
        $message .= '<br/> Alpha Test: ' . $_POST['alpha_test'];
        $message .= '<br/> Open Beta: ' . $_POST['open_beta'];
        $message .= '<br/> Exp: ' . $_POST['exp'];
        $message .= '<br/> Drop: ' . $_POST['drop'];
        $message .= '<br/> Anti Hack: ' . $_POST['anti_hack'];
        $message .= '<br/> Mu Theo Loại: ' . $_POST['mu_theo_loai'];
        $message .= '<br/> Mu Theo Loại: ' . $_POST['mu_theo_loai'];
        $message .= '<br/> Season: ' . $_POST['season'];
        $message .= '<br /> Content' . $_POST['content'];

        $sent = wp_mail($user->user_email, $subject, $message, $headers);

        if($sent) {
            // send success
        } else  {
            // cant send
        }

    }


    wp_send_json_success(array('post_id' => $post_id));
}
