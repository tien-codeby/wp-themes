<?php
if(!class_exists('CodebyCore\CustomPostType')) return;
use CodebyCore\CustomPostType;

add_action('init', 'custom_banner_post_type', 0);
function custom_banner_post_type(): void
{
    register_post_type('banner', CustomPostType::generator('Banner', 'Banners', 2, 'dashicons-camera'));
}

