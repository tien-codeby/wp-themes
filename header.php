<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mumoiravn.com
 */
?>
<!--<!doctype html>
<html <?php /*language_attributes(); */ ?>>
<head>
	<meta charset="<?php /*bloginfo( 'charset' ); */ ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php /*wp_head(); */ ?>
</head>

<body <?php /*body_class(); */ ?>>
<?php /*wp_body_open(); */ ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php /*esc_html_e( 'Skip to content', 'mumoiravn-com' ); */ ?></a>
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBP4454" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
</noscript> -->

<header class="header">
    <div class="header-area bg-main fixed-top">
        <div class="header-top">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <div class="container-fluid">

                    <a class="navbar-brand img-logo" href="/">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                        ?>
                        <img src="<?= $image[0] ?>" title="<?= bloginfo('name') ?>" alt="<?= bloginfo('name') ?>"/>
                    </a>
                    <?php
                    $menus = wp_get_menu_array('Menu 1');
//                    echo '<pre>';
//                    var_dump($menus);
//                    echo '</pre>';
//                    die();
                    ?>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <?php foreach ($menus as $menu) { ?>
                                <li class="nav-item" data-menu="/">
                                    <a class="nav-link" href="<?= $menu['url'] ?>">
                                        <span></span>
                                        <?= $menu['title'] ?>
                                    </a>
                                    <ul class="sub" style="width: 200px;">
                                        <?php
                                        foreach ($menu['children'] as $child) { ?>
                                            <li class="">
                                                <a style="line-height: 15px; padding: 0 10px;" href="<?= $child['url'] ?>">
                                                    <?= $child['title'] ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
<!--                        <li class="nav-item" data-menu="/">
                            <a class="nav-link" href="/">
                                <span></span>
                                MU mới ra
                            </a>
                            <ul class="sub" style="width: 200px;">
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;" href="/mu-alpha-test">
                                        Mu Alpha test hôm nay
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/mu-open-beta">Mu Open hôm nay</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" data-menu="#">
                            <a class="nav-link" href="#">
                                <span></span>
                                Mu theo phiên bản
                            </a>
                            <ul class="sub" style="width: 200px;">
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;" href="/mu-version/season-2/6">
                                        Season 2
                                    </a>
                                </li>
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;" href="/mu-version/season-3/2">
                                        Season 3
                                    </a>
                                </li>
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;" href="/mu-version/season-6/3">
                                        Season 6
                                    </a>
                                </li>
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;" href="/mu-version/season-7/4">
                                        Season 7
                                    </a>
                                </li>
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;" href="/mu-version/season-16/19">
                                        Season 16
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" data-menu="#">
                            <a class="nav-link" href="#">
                                <span></span>
                                Mu theo loại
                            </a>
                            <ul class="sub" style="width: 200px;">
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;" href="/mu-reset/non-reset/1">
                                        Non Reset
                                    </a>
                                </li>
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;" href="/mu-reset/reset-web/2">
                                        Reset Web
                                    </a>
                                </li>
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;"
                                       href="/mu-reset/mu-reset-in-game/3">
                                        Reset In Game
                                    </a>
                                </li>
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;"
                                       href="/mu-type/mu-nguyen-ban-webzen/1">
                                        Mu Nguy&#xEA;n b&#x1EA3;n Webzen
                                    </a>
                                </li>
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;"
                                       href="/mu-type/mu-custom-them-do-moi/2">
                                        Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i
                                    </a>
                                </li>
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;"
                                       href="/mu-point/mu-reset-point/1">
                                        Nguy&#xEA;n b&#x1EA3;n
                                    </a>
                                </li>
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;" href="/mu-point/keep-point/2">
                                        Keep point
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" data-menu="#">
                            <a class="nav-link" href="/huong-dan-choi-mu-online">
                                <span></span>
                                Hướng dẫn chơi game
                            </a>
                        </li>
                        <li class="nav-item" data-menu="#">
                            <a class="nav-link" href="#">
                                <span></span>
                                Quảng Cáo
                            </a>
                            <ul class="sub" style="width: 200px;">
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;"
                                       href="/lien-he-voi-chung-toi.htm">
                                        Liên hệ
                                    </a>
                                </li>
                                <li class="">
                                    <a style="line-height: 15px; padding: 0 10px;" href="/thong-tin-thue-banner">
                                        Thuê banner
                                    </a>
                                </li>
                            </ul>
                        </li>
                        </ul>-->
                    </div>
                    <div class="area-user d-none d-sm-flex align-items-center">
                        <div class="social btn-upload-adv">
                            <a href="/dang-quang-cao-mu-online.htm" rel="nofollow">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Đăng quảng cáo
                            </a>
                        </div>
                    </div>
                    <div class="menu-bar d-block d-sm-block d-md-none">
                        <button class="btn btn-success first" type="button"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
