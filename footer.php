<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mumoiravn.com
 */
?>

<div class="fakeLoader hide" style="background-color: rgb(0 0 0 / 52%);">
    <div class="wrap-loading">
        <div>
            <div class="fl fl-spinner spinner5">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
        <div class="text-loading"></div>
    </div>
</div>

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 social d-none d-sm-block">
                <?php
                $logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($logo_id, 'full');
                $logo = isset($logo[0]) ? $logo[0] : '';
                ?>
                <a href="/">
                    <img src="<?= $logo ?>" title="<?= bloginfo('name') ?>" alt="<?= bloginfo('name') ?>"/>
                </a>
                <p class="mb-3">Website tổng hợp danh sách game Mu Online mới ra uy tín nhất Việt Nam</p>
                <!-- <div id="fb-root"></div>
                <script
                        async
                        defer
                        crossorigin="anonymous"
                        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=479563189554190&autoLogAppEvents=1"
                        nonce="Hsw2lCit"
                        type="e6fa910112ec689bf6e5e74c-text/javascript"
                ></script> -->
                <div
                        class="fb-page"
                        data-href="https://www.facebook.com/Mumoiravn.com/"
                        data-tabs="timeline"
                        data-width=""
                        data-height="70"
                        data-small-header="false"
                        data-adapt-container-width="true"
                        data-hide-cover="false"
                        data-show-facepile="true"
                >
                    <blockquote cite="https://www.facebook.com/Mumoiravn.com/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Mumoiravn.com/">Mu Mới Ra - Mumoiravn.com</a></blockquote>
                </div>
                <ul class="f-info">
                    <li>
                        <a href="https://www.facebook.com/Mumoiravn.com" title="Facebook Mu Mới Ra - Mumoiravn.com"
                           target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCtUvrrtlkh4M9urFmJzSJLQ"
                           title="Mu Mới Ra - Kênh tổng hợp game Mu Online mới ra" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/mumoiratv"
                           title="Pinterest Mumoiravn.com - Mu Mới Ra - Tổng Hợp Mu Online Lậu Mới Ra Hôm Nay"
                           target="_blank">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/Mumoiravn.com/" title="Instagram Mumoiravn.com - Mu Mới Ra"
                           target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/MUMoiRaTV/"
                           title="Twitter Mumoiravn.com - Tổng hợp Mu mới ra hôm nay" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://mumoiratv.tumblr.com/" title="Tumblr Mu Mới Ra (Mumoiravn.com)"
                           target="_blank">
                            <i class="fab fa-tumblr"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 f-info d-none d-sm-block">
                <h3>Nội Dung Website</h3>
                <ul>
                    <?php
                    $menu1 = wp_get_menu_array('Menu Footer 1');
                    foreach ($menu1 as $item) {?>
                        <li>
                            <a href="<?= $item['url'] ?>">
                                <?= $item['title'] ?>
                            </a>
                        </li>
                    <?php } ?>
<!--                    <li>
                        <a href="//www.dmca.com/Protection/Status.aspx?ID=c2cd9024-fccd-444d-a330-af1ed06ff01e"
                           title="DMCA.com Protection Status" class="dmca-badge" target="_blank"
                           rel="nofollow noopener">
                            <img src="https://images.dmca.com/Badges/_dmca_premi_badge_4.png?ID=c2cd9024-fccd-444d-a330-af1ed06ff01e"
                                 width="80" alt="DMCA.com Protection Status"/>
                        </a>
                        <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"
                                type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
                    </li>-->
                </ul>
            </div>
            <div class="col-md-3 f-info d-none d-sm-block">
                <h3>Tìm kiếm MU Online</h3>
                <ul>
                    <?php
                    $terms = get_terms([
                        'taxonomy' => 'season',
//                        'hide_empty' => false,
                    ]);
//                    echo '<pre>';
//                    var_dump($terms);
//                    echo '</pre>';
//                    die();
                    ?>
                    <?php foreach ($terms as $term) {?>
                        <li>
                            <a href="<?= get_term_link($term) ?>">
                                <?= $term->name ?>
                            </a>
                        </li>
                    <?php } ?>
                    <!--<li>
                        <a href="/mu-version/season-2/6">
                            Season 2
                        </a>
                    </li>
                    <li>
                        <a href="/mu-version/season-3/2">
                            Season 3
                        </a>
                    </li>
                    <li>
                        <a href="/mu-version/season-6/3">
                            Season 6
                        </a>
                    </li>
                    <li>
                        <a href="/mu-version/season-7/4">
                            Season 7
                        </a>
                    </li>
                    <li>
                        <a href="/mu-version/season-16/19">
                            Season 16
                        </a>
                    </li>-->
                </ul>
            </div>
            <div class="col-md-3 f-info d-none d-sm-block">
                <h3>Về chúng tôi</h3>
                <ul>
                    <li>
                        <a href="/gioi-thieu.htm">
                            Giới thiệu
                        </a>
                    </li>
                    <li>
                        <a href="/lien-he-voi-chung-toi.htm">
                            Liên hệ
                        </a>
                    </li>
                    <li>
                        <a href="/dieu-khoan-su-dung">
                            Điều khoản sử dụng
                        </a>
                    </li>
                    <li>
                        <a href="/chinh-sach-bao-mat">
                            Chính sách bảo mật
                        </a>
                    </li>
                    <li>
                        <a href="/thong-tin-thue-banner">
                            Thuê banner quảng cáo
                        </a>
                    </li>
                </ul>
            </div>
            <hr/>
            <div class="col-md-12 text-center">
                &#xA9; 2021 Mumoiravn.com - Mu m&#x1EDB;i ra - Gi&#x1EDB;i thi&#x1EC7;u game Mu Online m&#x1EDB;i ra h&#xF4;m
                nay
            </div>
        </div>
    </div>
</footer>
<div class="right-panel">
    <a href="#top" id="back-to-top" title="Đi lên đầu trang">
        <div class="scroll-to-top">
            <i class="fas fa-arrow-up fa-2x"></i>
        </div>
    </a>
<!--    <a href="https://m.me/Mumoiravn.com" title="Liên hệ với hỗ trợ của Mu Mới Ra qua chat Facebook Messenger"
       rel="nofollow noopener noreferrer" target="_blank" class="quick-contact">
        <img src="./assets/images/Messenger-icon.png"
             alt="Liên hệ với hỗ trợ của Mu Mới Ra qua chat Facebook Messenger"/>
    </a>-->
</div>
<?php wp_footer(); ?>
</body>
</html>
