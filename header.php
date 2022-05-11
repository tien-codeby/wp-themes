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
$userId = get_current_user_id();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<style>
<?php if(is_admin()){?>
    .fixed-top{
       top: 0
    }

    @media screen(max-width: 991px){
        .fixed-top{
            top: 32px;
        }
    }
<?php } ?>
</style>
<body <?php body_class(); ?>>


<header class="header">
    <div class="header-area bg-main fixed-top" style="<?= $userId ? 'top: 32px':'' ?>">
        <div class="header-top">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <div class="container-fluid">

                    <a class="navbar-brand img-logo" href="/">
                        <?php
                        $logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($logo_id, 'full');
                        $logo = isset($logo[0]) ? $logo[0] : '';
                        ?>
                        <img src="<?= $logo ?>" title="<?= bloginfo('name') ?>" alt="<?= bloginfo('name') ?>"/>
                    </a>
                    <?php
                    $menuDesks = wp_get_menu_array('Menu Desktop');
                    ?>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ">
                            <?php foreach ($menuDesks as $menu) { ?>
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
                    </div>
                    <div class="area-user d-none d-sm-flex align-items-center">
                        <div class="social btn-upload-adv">
                            <a href="/dang-quang-cao" rel="nofollow">
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

<section>
    <div id="pageslide">
        <div class="header-mobile">
            <a class="navbar-brand img-logo" href="">
                <img src="<?= $logo ?>"
                     title="<?= bloginfo('name') ?>"
                     alt="<?= bloginfo('name') ?>"/>
                <!-- <img src="./assets/images/header_logo.png" title="Mu Mới Ra - Kênh tổng hợp MU lớn nhất Việt Nam | Mumoiravn.com" alt="Mu Mới Ra - Kênh tổng hợp MU lớn nhất Việt Nam | Mumoiravn.com" /> -->
            </a>
<!--            <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="./assets/images/avataremty.png"
                         alt="User picture"/>
                </div>
                <a class="user-info" href="/dang-nhap.htm">
                            <span class="user-name">
                                Xin chào! Guest
                            </span>
                    <span class="user-role">Đăng nhập ngay</span>
                </a>
            </div>-->

            <?php
            $menuMobis = wp_get_menu_array('Menu Mobile');
            ?>
            <ul class="navbar-nav">
                <?php foreach ($menuMobis as $menu) {?>
                    <li class="nav-item" data-menu="/">
                        <a class="nav-link" href="<?= $menu['url'] ?>">
                            <span></span>
                            <?= $menu['title'] ?>
                        </a>
                    </li>
                <?php } ?>
<!--                <li class="nav-item" data-menu="/">
                    <a class="nav-link" href="/">
                        <span></span>
                        Trang chủ
                    </a>
                </li>
                <li class="nav-item" data-menu="#">
                    <a class="nav-link" href="/mu-alpha-test">
                        <span></span>
                        Mu Alpha test hôm nay
                    </a>
                </li>
                <li class="nav-item" data-menu="#">
                    <a class="nav-link" href="/mu-open-beta">
                        <span></span>
                        Mu Open hôm nay
                    </a>
                </li>
                <li class="nav-item" data-menu="#">
                    <a class="nav-link" href="/huong-dan-choi-mu-online">
                        <span></span>
                        Hướng dẫn chơi game
                    </a>
                </li>
                <li class="nav-item" data-menu="#">
                    <a class="nav-link" href="/thong-tin-thue-banner">
                        <span></span>
                        Thuê banner
                    </a>
                </li>
                <li class="nav-item" data-menu="#">
                    <a class="nav-link" href="/lien-he-voi-chung-toi.htm">
                        <span></span>
                        Liên hệ
                    </a>
                </li>-->
            </ul>
            <div class="upload-adv-absolute">
                <div class="social btn-upload-adv">
                    <a href="/dang-quang-cao" rel="nofollow">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Đăng quảng cáo
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
