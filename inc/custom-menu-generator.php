<?php
// Menu generator
function wp_get_menu_array($current_menu) {
    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $url = $m->url;
            if (!str_starts_with($url, 'http')) {
                $url = home_url($url);
            }
            $menu[$m->ID]             = array();
            $menu[$m->ID]['ID']       = $m->ID;
            $menu[$m->ID]['title']    = $m->title;
            $menu[$m->ID]['url']      = $url;
            $menu[$m->ID]['children'] = array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $url = $m->url;
            if (!str_starts_with($url, 'http')) {
                $url = home_url($url);
            }
            $submenu[$m->ID]                                = array();
            $submenu[$m->ID]['ID']                          = $m->ID;
            $submenu[$m->ID]['title']                       = $m->title;
            $submenu[$m->ID]['url']                         = $url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return array_values($menu);
}