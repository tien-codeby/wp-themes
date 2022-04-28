<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mumoiravn.com
 */

?>

<?php get_header(); ?>

<!-- WP_BODY -->
<section>
    <div id="pageslide">
        <div class="header-mobile">
            <a class="navbar-brand img-logo" href="">
                <img src="./assets/images/logo-mu.png" title="Mu Mới Ra - Kênh tổng hợp MU lớn nhất Việt Nam | MuMoiRa.tv" alt="Mu Mới Ra - Kênh tổng hợp MU lớn nhất Việt Nam | MuMoiRa.tv" />
                <!-- <img src="./assets/images/header_logo.png" title="Mu Mới Ra - Kênh tổng hợp MU lớn nhất Việt Nam | MuMoiRa.tv" alt="Mu Mới Ra - Kênh tổng hợp MU lớn nhất Việt Nam | MuMoiRa.tv" /> -->
            </a>
            <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="./assets/images/avataremty.png" alt="User picture" />
                </div>
                <a class="user-info" href="/dang-nhap.htm">
                            <span class="user-name">
                                Xin chào! Guest
                            </span>
                    <span class="user-role">Đăng nhập ngay</span>
                </a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item" data-menu="/">
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
                </li>
            </ul>
            <div class="upload-adv-absolute">
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
        </div>
    </div>
</section>
<section id="main">
    <div class="container-fluid d-p-0 d-sm-0">
        <div class="d-flex justify-content-between">
            <div class="banner-left"></div>
            <div class="content-middle">
                <div class="top-banner">
                    <a href="http://ss2.vn?utm_source=mumoira.tv&amp;utm_medium=default&amp;utm_campaign=mumoira_bTop1" title="ss2.vn" rel="nofollow noopener noreferrer" target="_blank">
                        <img src="./assets/images/EDg1y8K.gif" alt="Giới thiệu Mu Online - ss2.vn" title="Giới thiệu Mu Online - ss2.vn" loading="lazy" />
                    </a>
                    <a href="https://mumoira.tv/?utm_source=mumoira.tv&amp;utm_medium=default&amp;utm_campaign=mumoira_bTop2" title="Muonline" rel="nofollow noopener noreferrer" target="_blank">
                        <img src="./assets/images/YoKdGNs.gif" alt="Giới thiệu Mu Online - Muonline" title="Giới thiệu Mu Online - Muonline" loading="lazy" />
                    </a>
                    <a href="https://mumoira.tv?utm_source=mumoira.tv&amp;utm_medium=default&amp;utm_campaign=mumoira_bTop2" title="Muonline" rel="nofollow noopener noreferrer" target="_blank">
                        <img src="./assets/images/qsvrsM6.gif" alt="Giới thiệu Mu Online - Muonline" title="Giới thiệu Mu Online - Muonline" loading="lazy" />
                    </a>
                    <a
                            href="https://muthandia.vn/?utm_source=mumoira.tv&amp;utm_medium=default&amp;utm_campaign=mumoira_bTop2"
                            title="Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Phi&#xEA;n Ba&#x309;n 6.15 SE"
                            rel="nofollow noopener noreferrer"
                            target="_blank"
                    >
                        <img
                                src="./assets/images/lxB3HDf.gif"
                                alt="Giới thiệu Mu Online - Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Phi&#xEA;n Ba&#x309;n 6.15 SE"
                                title="Giới thiệu Mu Online - Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Phi&#xEA;n Ba&#x309;n 6.15 SE"
                                loading="lazy"
                        />
                    </a>
                </div>
                <div class="vip-content">
                    <h2 class="title text-yellow-500">
                        <span></span>
                        Danh sách Mu VIP
                    </h2>
                    <ul class="list-vip">
                        <li>
                            <div class="d-flex item-vip">
                                <div class="item-vip-left">
                                    <p class="stt">1</p>
                                    <a title="MU LIFE - Season 6 Exp 100x - Drop 10% - KO TOP N&#x1EA0;P - TOP PH&#xDA; H&#x1ED8;" href="/chi-tiet-mu-moi-ra/mu-life-season-6-exp-100x-drop-10-ko-top-nap-top-phu-ho-34">
                                        [Chi tiết MU]
                                    </a>
                                </div>
                                <div class="item-vip-middle">
                                    <a
                                            class="item-img"
                                            title="MU LIFE - Season 6 Exp 100x - Drop 10% - KO TOP N&#x1EA0;P - TOP PH&#xDA; H&#x1ED8;"
                                            href="/chi-tiet-mu-moi-ra/mu-life-season-6-exp-100x-drop-10-ko-top-nap-top-phu-ho-34"
                                    >
                                        <img
                                                src="./assets/images/b3q0W7h.gif"
                                                alt="MU LIFE - Season 6 Exp 100x - Drop 10% - KO TOP N&#x1EA0;P - TOP PH&#xDA; H&#x1ED8;"
                                                title="MU LIFE - Season 6 Exp 100x - Drop 10% - KO TOP N&#x1EA0;P - TOP PH&#xDA; H&#x1ED8;"
                                        />
                                    </a>
                                    <a
                                            class="item-title"
                                            title="MU LIFE - Season 6 Exp 100x - Drop 10% - KO TOP N&#x1EA0;P - TOP PH&#xDA; H&#x1ED8;"
                                            href="/chi-tiet-mu-moi-ra/mu-life-season-6-exp-100x-drop-10-ko-top-nap-top-phu-ho-34"
                                    >
                                        <span class="d-stt">1. </span> MU LIFE - Season 6 Exp 100x - Drop 10% - KO TOP N&#x1EA0;P - TOP PH&#xDA; H&#x1ED8;
                                    </a>
                                </div>
                                <div class="item-vip-right">
                                    <img src="./assets/images/gold-member-long-text.png" alt="Mu Vip" title="Mu Vip" />
                                    <p class="hidden-md-up">Alpha: 21/09<span class="year">/2021</span> (8h)</p>
                                    <p class="hidden-md-up">Open: 30/09<span class="year">/2021</span> (8h)</p>
                                </div>
                            </div>
                            <div class="content-sub d-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MU LIFE - KO TOP N&#x1EA0;P - TOP PH&#xDA; H&#x1ED8;</p>
                                    <p>Mu mới ra tháng 09 2021 - Mở máy chủ <b>Danh V&#x1ECD;ng</b> vào 8h ngày 30/09/2021</p>
                                    <p>
                                        Trang chủ:
                                        <a
                                                class="text-red"
                                                target="_blank"
                                                href="http://goldmu.net?utm_source=mumoira.tv&utm_medium=default&utm_campaign=mumoira_vGold"
                                                title="Trang chủ của MU LIFE Season 6"
                                                rel="nofollow noopener noreferrer"
                                        >
                                            http://goldmu.net
                                        </a>
                                    </p>
                                    <p>Phiên bản: Season 6</p>
                                    <p>Exp: 100x - Drop: 10%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Kiểu Point: Nguy&#xEA;n b&#x1EA3;n</p>
                                    <p>Antihack mà Mu sử dụng: GoldShield</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex item-vip">
                                <div class="item-vip-left">
                                    <p class="stt">2</p>
                                    <a
                                            title="H&#xE0; N&#x1ED9;i Mu - Season 6 Exp 200x - Drop 20% - Mu Mi&#x1EC5;n Ph&#xED; C&#xE0;y Cu&#x1ED1;c L&#xE0; C&#xF3; T&#x1EA5;t C&#x1EA3;"
                                            href="/chi-tiet-mu-moi-ra/ha-noi-mu-season-6-exp-200x-drop-20-mu-mien-phi-cay-cuoc-la-co-tat-ca-449"
                                    >
                                        [Chi tiết MU]
                                    </a>
                                </div>
                                <div class="item-vip-middle">
                                    <a
                                            class="item-img"
                                            title="H&#xE0; N&#x1ED9;i Mu - Season 6 Exp 200x - Drop 20% - Mu Mi&#x1EC5;n Ph&#xED; C&#xE0;y Cu&#x1ED1;c L&#xE0; C&#xF3; T&#x1EA5;t C&#x1EA3;"
                                            href="/chi-tiet-mu-moi-ra/ha-noi-mu-season-6-exp-200x-drop-20-mu-mien-phi-cay-cuoc-la-co-tat-ca-449"
                                    >
                                        <img
                                                src="./assets/images/eNB3wLI.jpg"
                                                alt="H&#xE0; N&#x1ED9;i Mu - Season 6 Exp 200x - Drop 20% - Mu Mi&#x1EC5;n Ph&#xED; C&#xE0;y Cu&#x1ED1;c L&#xE0; C&#xF3; T&#x1EA5;t C&#x1EA3;"
                                                title="H&#xE0; N&#x1ED9;i Mu - Season 6 Exp 200x - Drop 20% - Mu Mi&#x1EC5;n Ph&#xED; C&#xE0;y Cu&#x1ED1;c L&#xE0; C&#xF3; T&#x1EA5;t C&#x1EA3;"
                                        />
                                    </a>
                                    <a
                                            class="item-title"
                                            title="H&#xE0; N&#x1ED9;i Mu - Season 6 Exp 200x - Drop 20% - Mu Mi&#x1EC5;n Ph&#xED; C&#xE0;y Cu&#x1ED1;c L&#xE0; C&#xF3; T&#x1EA5;t C&#x1EA3;"
                                            href="/chi-tiet-mu-moi-ra/ha-noi-mu-season-6-exp-200x-drop-20-mu-mien-phi-cay-cuoc-la-co-tat-ca-449"
                                    >
                                        <span class="d-stt">2. </span> H&#xE0; N&#x1ED9;i Mu - Season 6 Exp 200x - Drop 20% - Mu Mi&#x1EC5;n Ph&#xED; C&#xE0;y Cu&#x1ED1;c L&#xE0; C&#xF3; T&#x1EA5;t C&#x1EA3;
                                    </a>
                                </div>
                                <div class="item-vip-right">
                                    <img src="./assets/images/gold-member-long-text.png" alt="Mu Vip" title="Mu Vip" />
                                    <p class="hidden-md-up">Alpha: 09/04<span class="year">/2022</span> (12h)</p>
                                    <p class="hidden-md-up">Open: 10/04<span class="year">/2022</span> (12h)</p>
                                </div>
                            </div>
                            <div class="content-sub d-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>H&#xE0; N&#x1ED9;i Mu - Mu Mi&#x1EC5;n Ph&#xED; C&#xE0;y Cu&#x1ED1;c L&#xE0; C&#xF3; T&#x1EA5;t C&#x1EA3;</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>M&#xE1;y Ch&#x1EE7; Noria</b> vào 12h ngày 10/04/2022</p>
                                    <p>
                                        Trang chủ:
                                        <a
                                                class="text-red"
                                                target="_blank"
                                                href="https://hanoimu.net/?utm_source=mumoira.tv&utm_medium=default&utm_campaign=mumoira_vGold"
                                                title="Trang chủ của H&#xE0; N&#x1ED9;i Mu Season 6"
                                                rel="nofollow noopener noreferrer"
                                        >
                                            https://hanoimu.net/
                                        </a>
                                    </p>
                                    <p>Phiên bản: Season 6</p>
                                    <p>Exp: 200x - Drop: 20%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Kiểu Point: Nguy&#xEA;n b&#x1EA3;n</p>
                                    <p>Antihack mà Mu sử dụng: MuTeam</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex item-vip">
                                <div class="item-vip-left">
                                    <p class="stt">3</p>
                                    <a
                                            title="Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Season 6 Exp 150x - Drop 25% - Chu&#xE2;&#x309;n ca&#x300;y cu&#xF4;&#x301;c , Item gia&#x301; tri&#x323; "
                                            href="/chi-tiet-mu-moi-ra/mu-than-dia-season-6-exp-150x-drop-25-chuan-cay-cuoc-item-gia-tri--1390"
                                    >
                                        [Chi tiết MU]
                                    </a>
                                </div>
                                <div class="item-vip-middle">
                                    <a
                                            class="item-img"
                                            title="Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Season 6 Exp 150x - Drop 25% - Chu&#xE2;&#x309;n ca&#x300;y cu&#xF4;&#x301;c , Item gia&#x301; tri&#x323; "
                                            href="/chi-tiet-mu-moi-ra/mu-than-dia-season-6-exp-150x-drop-25-chuan-cay-cuoc-item-gia-tri--1390"
                                    >
                                        <img
                                                src="./assets/images/X5caTfi.gif"
                                                alt="Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Season 6 Exp 150x - Drop 25% - Chu&#xE2;&#x309;n ca&#x300;y cu&#xF4;&#x301;c , Item gia&#x301; tri&#x323; "
                                                title="Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Season 6 Exp 150x - Drop 25% - Chu&#xE2;&#x309;n ca&#x300;y cu&#xF4;&#x301;c , Item gia&#x301; tri&#x323; "
                                        />
                                    </a>
                                    <a
                                            class="item-title"
                                            title="Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Season 6 Exp 150x - Drop 25% - Chu&#xE2;&#x309;n ca&#x300;y cu&#xF4;&#x301;c , Item gia&#x301; tri&#x323; "
                                            href="/chi-tiet-mu-moi-ra/mu-than-dia-season-6-exp-150x-drop-25-chuan-cay-cuoc-item-gia-tri--1390"
                                    >
                                        <span class="d-stt">3. </span> Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Season 6 Exp 150x - Drop 25% - Chu&#xE2;&#x309;n ca&#x300;y cu&#xF4;&#x301;c , Item gia&#x301; tri&#x323;
                                    </a>
                                </div>
                                <div class="item-vip-right">
                                    <img src="./assets/images/gold-member-long-text.png" alt="Mu Vip" title="Mu Vip" />
                                    <p class="hidden-md-up">Alpha: 18/04<span class="year">/2022</span> (13h)</p>
                                    <p class="hidden-md-up">Open: 20/04<span class="year">/2022</span> (13h)</p>
                                </div>
                            </div>
                            <div class="content-sub d-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Chu&#xE2;&#x309;n ca&#x300;y cu&#xF4;&#x301;c , Item gia&#x301; tri&#x323;</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Ma&#x301;y chu&#x309; Th&#xE2;&#x300;n &#x110;i&#x323;a</b> vào 13h ngày 20/04/2022</p>
                                    <p>
                                        Trang chủ:
                                        <a
                                                class="text-red"
                                                target="_blank"
                                                href="https://muthandia.vn?utm_source=mumoira.tv&utm_medium=default&utm_campaign=mumoira_vGold"
                                                title="Trang chủ của Mu Th&#xE2;&#x300;n &#x110;i&#x323;a Season 6"
                                                rel="nofollow noopener noreferrer"
                                        >
                                            https://muthandia.vn
                                        </a>
                                    </p>
                                    <p>Phiên bản: Season 6</p>
                                    <p>Exp: 150x - Drop: 25%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Kiểu Point: Nguy&#xEA;n b&#x1EA3;n</p>
                                    <p>Antihack mà Mu sử dụng:</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex item-vip">
                                <div class="item-vip-left">
                                    <p class="stt">4</p>
                                    <a
                                            title="&#x2694;&#xFE0F; Mu Vi&#x1EC7;t 24h &#x2694;&#xFE0F; - Season 6 Exp 170x - Drop 25% - Auto Reset - Keep Point - OffAttack"
                                            href="/chi-tiet-mu-moi-ra/-mu-viet-24h-season-6-exp-170x-drop-25-auto-reset-keep-point-offattack-1398"
                                    >
                                        [Chi tiết MU]
                                    </a>
                                </div>
                                <div class="item-vip-middle">
                                    <a
                                            class="item-img"
                                            title="&#x2694;&#xFE0F; Mu Vi&#x1EC7;t 24h &#x2694;&#xFE0F; - Season 6 Exp 170x - Drop 25% - Auto Reset - Keep Point - OffAttack"
                                            href="/chi-tiet-mu-moi-ra/-mu-viet-24h-season-6-exp-170x-drop-25-auto-reset-keep-point-offattack-1398"
                                    >
                                        <img
                                                src="./assets/images/MU.gif"
                                                alt="&#x2694;&#xFE0F; Mu Vi&#x1EC7;t 24h &#x2694;&#xFE0F; - Season 6 Exp 170x - Drop 25% - Auto Reset - Keep Point - OffAttack"
                                                title="&#x2694;&#xFE0F; Mu Vi&#x1EC7;t 24h &#x2694;&#xFE0F; - Season 6 Exp 170x - Drop 25% - Auto Reset - Keep Point - OffAttack"
                                        />
                                    </a>
                                    <a
                                            class="item-title"
                                            title="&#x2694;&#xFE0F; Mu Vi&#x1EC7;t 24h &#x2694;&#xFE0F; - Season 6 Exp 170x - Drop 25% - Auto Reset - Keep Point - OffAttack"
                                            href="/chi-tiet-mu-moi-ra/-mu-viet-24h-season-6-exp-170x-drop-25-auto-reset-keep-point-offattack-1398"
                                    >
                                        <span class="d-stt">4. </span> &#x2694;&#xFE0F; Mu Vi&#x1EC7;t 24h &#x2694;&#xFE0F; - Season 6 Exp 170x - Drop 25% - Auto Reset - Keep Point - OffAttack
                                    </a>
                                </div>
                                <div class="item-vip-right">
                                    <img src="./assets/images/gold-member-long-text.png" alt="Mu Vip" title="Mu Vip" />
                                    <p class="hidden-md-up">Alpha: 21/04<span class="year">/2022</span> (8h)</p>
                                    <p class="hidden-md-up">Open: 24/04<span class="year">/2022</span> (13h)</p>
                                </div>
                            </div>
                            <div class="content-sub d-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>&#x2694;&#xFE0F; Mu Vi&#x1EC7;t 24h &#x2694;&#xFE0F; - Auto Reset - Keep Point - OffAttack</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>HO&#xC0;NG KIM</b> vào 13h ngày 24/04/2022</p>
                                    <p>
                                        Trang chủ:
                                        <a
                                                class="text-red"
                                                target="_blank"
                                                href="http://muviet24h.net/?utm_source=mumoira.tv&utm_medium=default&utm_campaign=mumoira_vGold"
                                                title="Trang chủ của &#x2694;&#xFE0F; Mu Vi&#x1EC7;t 24h &#x2694;&#xFE0F; Season 6"
                                                rel="nofollow noopener noreferrer"
                                        >
                                            http://muviet24h.net/
                                        </a>
                                    </p>
                                    <p>Phiên bản: Season 6</p>
                                    <p>Exp: 170x - Drop: 25%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Kiểu Point: Keep point</p>
                                    <p>Antihack mà Mu sử dụng: GameGuard Protects</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex item-vip">
                                <div class="item-vip-left">
                                    <p class="stt">5</p>
                                    <a
                                            title="MuWak-Up Custom 6.15 - Season 6 Exp 9999x - Drop 60% - Server Free - C&#xE0;y l&#xE0; c&#xF3; Cho AE"
                                            href="/chi-tiet-mu-moi-ra/muwakup-custom-6.15-season-6-exp-9999x-drop-60-server-free-cay-la-co-cho-ae-2390"
                                    >
                                        [Chi tiết MU]
                                    </a>
                                </div>
                                <div class="item-vip-middle">
                                    <a
                                            class="item-img"
                                            title="MuWak-Up Custom 6.15 - Season 6 Exp 9999x - Drop 60% - Server Free - C&#xE0;y l&#xE0; c&#xF3; Cho AE"
                                            href="/chi-tiet-mu-moi-ra/muwakup-custom-6.15-season-6-exp-9999x-drop-60-server-free-cay-la-co-cho-ae-2390"
                                    >
                                        <img
                                                src="./assets/images/6nw35dO.gif"
                                                alt="MuWak-Up Custom 6.15 - Season 6 Exp 9999x - Drop 60% - Server Free - C&#xE0;y l&#xE0; c&#xF3; Cho AE"
                                                title="MuWak-Up Custom 6.15 - Season 6 Exp 9999x - Drop 60% - Server Free - C&#xE0;y l&#xE0; c&#xF3; Cho AE"
                                        />
                                    </a>
                                    <a
                                            class="item-title"
                                            title="MuWak-Up Custom 6.15 - Season 6 Exp 9999x - Drop 60% - Server Free - C&#xE0;y l&#xE0; c&#xF3; Cho AE"
                                            href="/chi-tiet-mu-moi-ra/muwakup-custom-6.15-season-6-exp-9999x-drop-60-server-free-cay-la-co-cho-ae-2390"
                                    >
                                        <span class="d-stt">5. </span> MuWak-Up Custom 6.15 - Season 6 Exp 9999x - Drop 60% - Server Free - C&#xE0;y l&#xE0; c&#xF3; Cho AE
                                    </a>
                                </div>
                                <div class="item-vip-right">
                                    <img src="./assets/images/gold-member-long-text.png" alt="Mu Vip" title="Mu Vip" />
                                    <p class="hidden-md-up">Alpha: 26/04<span class="year">/2022</span> (10h)</p>
                                    <p class="hidden-md-up">Open: 27/04<span class="year">/2022</span> (19h)</p>
                                </div>
                            </div>
                            <div class="content-sub d-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MuWak-Up Custom 6.15 - Server Free - C&#xE0;y l&#xE0; c&#xF3; Cho AE</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Khai m&#x1EDF; MC: Arena</b> vào 19h ngày 27/04/2022</p>
                                    <p>
                                        Trang chủ:
                                        <a
                                                class="text-red"
                                                target="_blank"
                                                href="http://muwake-up.com/?utm_source=mumoira.tv&utm_medium=default&utm_campaign=mumoira_vGold"
                                                title="Trang chủ của MuWak-Up Custom 6.15 Season 6"
                                                rel="nofollow noopener noreferrer"
                                        >
                                            http://muwake-up.com/
                                        </a>
                                    </p>
                                    <p>Phiên bản: Season 6</p>
                                    <p>Exp: 9999x - Drop: 60%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Kiểu Point: Keep point</p>
                                    <p>Antihack mà Mu sử dụng: SOLAR</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="post-wrap" id="scroll-home">
                    <div class="top-post">
                        <div class="tool">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-7 filter-wrap">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <p class="filter-title filter-search">Lọc theo:</p>
                                        <div class="d-flex">
                                            <a class="btn btn-sm btn-success me-2" href="/mu-alpha-test">
                                                Alpha Test hôm nay
                                            </a>
                                            <a class="btn btn-sm btn-danger" href="/mu-open-beta">
                                                Open beta hôm nay
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-5">
                                    <form class="input-group" method="get" action="/tim-kiem-mu">
                                        <input type="text" class="form-control txt_keyword" name="keyword" value="" placeholder="Tìm kiếm MU mới ra ..." />
                                        <div class="input-group-append">
                                            <button class="btn btn-search" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <h2 class="title">
                            <span></span>
                            Danh sách Mu mới ra miễn phí hôm nay
                        </h2>
                    </div>
                    <ul class="list-post">
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">1</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MuWak-Up Custom 6.15 - Season 6 Exp 9999x - Drop 60% - Server Free - C&#xE0;y l&#xE0; c&#xF3; Cho AE"
                                            href="/chi-tiet-mu-moi-ra/muwakup-custom-6.15-season-6-exp-9999x-drop-60-server-free-cay-la-co-cho-ae-2390"
                                    >
                                        <span class="d-stt">1. </span> MuWak-Up Custom 6.15 - Season 6 Exp 9999x - Drop 60% - Server Free - C&#xE0;y l&#xE0; c&#xF3; Cho AE
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Khai m&#x1EDF; MC: Arena</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">26/04<span class="year">/2022</span> (10h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">27/04<span class="year">/2022</span> (19h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class="text-bold-red">Open Beta h&#xF4;m nay</div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MuWak-Up Custom 6.15 - Server Free - C&#xE0;y l&#xE0; c&#xF3; Cho AE</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Khai m&#x1EDF; MC: Arena</b> vào 19h ngày 27/04/2022</p>
                                    <p>Exp: 9999x - Drop: 60%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: SOLAR</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">2</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MU V&#x1AF;&#x1A0;NG QUY&#xCA;&#x300;N - Season 6 Exp 5000x - Drop 20% - -AUTO ALL-&#x110;&#x102;NG KY&#x301; INGAME-OFF TRAIN"
                                            href="/chi-tiet-mu-moi-ra/mu-vuong-quyen-season-6-exp-5000x-drop-20-auto-alldang-ky-ingameoff-train-2388"
                                    >
                                        <span class="d-stt">2. </span> MU V&#x1AF;&#x1A0;NG QUY&#xCA;&#x300;N - Season 6 Exp 5000x - Drop 20% - -AUTO ALL-&#x110;&#x102;NG KY&#x301; INGAME-OFF TRAIN
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">HUY&#x1EC0;N THO&#x1EA0;I</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">26/04<span class="year">/2022</span> (9h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">27/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class="text-bold-red">Open Beta h&#xF4;m nay</div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MU V&#x1AF;&#x1A0;NG QUY&#xCA;&#x300;N - -AUTO ALL-&#x110;&#x102;NG KY&#x301; INGAME-OFF TRAIN</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>HUY&#x1EC0;N THO&#x1EA0;I</b> vào 13h ngày 27/04/2022</p>
                                    <p>Exp: 5000x - Drop: 20%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: GAMEGUARD</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">3</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MU V&#x1AF;&#x1A0;NG QUY&#xCA;&#x300;N - Season 6 Exp 500x - Drop 20% - &#x110;&#x102;NG KY&#x301; INGAME-AUTO ALL-OFF TRAIN"
                                            href="/chi-tiet-mu-moi-ra/mu-vuong-quyen-season-6-exp-500x-drop-20-dang-ky-ingameauto-alloff-train-2386"
                                    >
                                        <span class="d-stt">3. </span> MU V&#x1AF;&#x1A0;NG QUY&#xCA;&#x300;N - Season 6 Exp 500x - Drop 20% - &#x110;&#x102;NG KY&#x301; INGAME-AUTO ALL-OFF TRAIN
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">HUY&#x1EC0;N THO&#x1EA0;I</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">26/04<span class="year">/2022</span> (9h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">27/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class="text-bold-red">Open Beta h&#xF4;m nay</div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MU V&#x1AF;&#x1A0;NG QUY&#xCA;&#x300;N - &#x110;&#x102;NG KY&#x301; INGAME-AUTO ALL-OFF TRAIN</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>HUY&#x1EC0;N THO&#x1EA0;I</b> vào 13h ngày 27/04/2022</p>
                                    <p>Exp: 500x - Drop: 20%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: GAMEGUARD</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">4</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MU Kh&#x1EDF;i Nguy&#xEA;n - Season 6 Exp 500x - Drop 50% - Free99% C&#xE0;y Wc n&#xE2;ng c&#x1EA5;p item "
                                            href="/chi-tiet-mu-moi-ra/mu-khoi-nguyen-season-6-exp-500x-drop-50-free99-cay-wc-nang-cap-item--2389"
                                    >
                                        <span class="d-stt">4. </span> MU Kh&#x1EDF;i Nguy&#xEA;n - Season 6 Exp 500x - Drop 50% - Free99% C&#xE0;y Wc n&#xE2;ng c&#x1EA5;p item
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Kalima</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">27/04<span class="year">/2022</span> (19h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">29/04<span class="year">/2022</span> (19h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class="text-bold-green">Alpha Test h&#xF4;m nay</div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MU Kh&#x1EDF;i Nguy&#xEA;n - Free99% C&#xE0;y Wc n&#xE2;ng c&#x1EA5;p item</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Kalima</b> vào 19h ngày 29/04/2022</p>
                                    <p>Exp: 500x - Drop: 50%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: GoldShiel</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">5</p>
                                </div>
                                <div class="item-post-middle">
                                    <a class="item-title" title="MU H&#xC0; N&#x1ED8;I - Season 6 Exp 700x - Drop 50% - Free 90%" href="/chi-tiet-mu-moi-ra/mu-ha-noi-season-6-exp-700x-drop-50-free-90-2384">
                                        <span class="d-stt">5. </span> MU H&#xC0; N&#x1ED8;I - Season 6 Exp 700x - Drop 50% - Free 90%
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">H&#xE0; N&#x1ED9;i</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">28/04<span class="year">/2022</span> (14h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">30/04<span class="year">/2022</span> (14h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class="text-bold-green2">Alpha Test ng&#xE0;y mai</div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MU H&#xC0; N&#x1ED8;I - Free 90%</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>H&#xE0; N&#x1ED9;i</b> vào 14h ngày 30/04/2022</p>
                                    <p>Exp: 700x - Drop: 50%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: Ch&#x1ED1;ng hack tuy&#x1EC7;t &#x111;&#x1ED1;i</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">6</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MU MA V&#x1AF;&#x1A0;NG - Season 6 Exp 500x - Drop 20% - MU-MAVUONG.COM KH&#xD4;NG WEBSHOP-"
                                            href="/chi-tiet-mu-moi-ra/mu-ma-vuong-season-6-exp-500x-drop-20-mumavuong.com-khong-webshop-2387"
                                    >
                                        <span class="d-stt">6. </span> MU MA V&#x1AF;&#x1A0;NG - Season 6 Exp 500x - Drop 20% - MU-MAVUONG.COM KH&#xD4;NG WEBSHOP-
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">LORENCIA</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">29/04<span class="year">/2022</span> (9h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">30/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MU MA V&#x1AF;&#x1A0;NG - MU-MAVUONG.COM KH&#xD4;NG WEBSHOP-</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>LORENCIA</b> vào 13h ngày 30/04/2022</p>
                                    <p>Exp: 500x - Drop: 20%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: GAMEGUARD</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">7</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="mu-2022.online - Season 6 Exp 9999x - Drop 50% - &#x2666;&#xFE0F; H&#x1EC7; th&#x1ED1;ng nhi&#x1EC7;m v&#x1EE5; Ng&#xE0;y"
                                            href="/chi-tiet-mu-moi-ra/mu2022.online-season-6-exp-9999x-drop-50-he-thong-nhiem-vu-ngay-2385"
                                    >
                                        <span class="d-stt">7. </span> mu-2022.online - Season 6 Exp 9999x - Drop 50% - &#x2666;&#xFE0F; H&#x1EC7; th&#x1ED1;ng nhi&#x1EC7;m v&#x1EE5; Ng&#xE0;y
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Magic</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">24/04<span class="year">/2022</span> (18h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">26/04<span class="year">/2022</span> (18h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class="text-bold-black">Open Beta h&#xF4;m qua</div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>mu-2022.online - &#x2666;&#xFE0F; H&#x1EC7; th&#x1ED1;ng nhi&#x1EC7;m v&#x1EE5; Ng&#xE0;y</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Magic</b> vào 18h ngày 26/04/2022</p>
                                    <p>Exp: 9999x - Drop: 50%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: UGK</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">8</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="Mu H&#xE0; n&#x1ED9;i - Season 6 Exp 150x - Drop 10% - Mi&#x1EC5;n ph&#xED; kh&#xF4;ng webshop c&#xE0;y l&#xE0; c&#xF3; "
                                            href="/chi-tiet-mu-moi-ra/mu-ha-noi-season-6-exp-150x-drop-10-mien-phi-khong-webshop-cay-la-co--2383"
                                    >
                                        <span class="d-stt">8. </span> Mu H&#xE0; n&#x1ED9;i - Season 6 Exp 150x - Drop 10% - Mi&#x1EC5;n ph&#xED; kh&#xF4;ng webshop c&#xE0;y l&#xE0; c&#xF3;
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">M&#xE1;y ch&#x1EE7; H&#xE0; N&#x1ED9;i</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">24/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">26/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class="text-bold-black">Open Beta h&#xF4;m qua</div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>Mu H&#xE0; n&#x1ED9;i - Mi&#x1EC5;n ph&#xED; kh&#xF4;ng webshop c&#xE0;y l&#xE0; c&#xF3;</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>M&#xE1;y ch&#x1EE7; H&#xE0; N&#x1ED9;i</b> vào 13h ngày 26/04/2022</p>
                                    <p>Exp: 150x - Drop: 10%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: AntihackVip</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">9</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="L&#x1EE4;C &#x110;&#x1ECA;A MU - Season 6 Exp 3000x - Drop 5% - Kh&#xF4;ng webshop, kh&#xF4;ng top n&#x1EA1;p"
                                            href="/chi-tiet-mu-moi-ra/luc-dia-mu-season-6-exp-3000x-drop-5-khong-webshop-khong-top-nap-1401"
                                    >
                                        <span class="d-stt">9. </span> L&#x1EE4;C &#x110;&#x1ECA;A MU - Season 6 Exp 3000x - Drop 5% - Kh&#xF4;ng webshop, kh&#xF4;ng top n&#x1EA1;p
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">L&#x1EE5;c &#x110;&#x1ECB;a MU</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">17/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">20/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>L&#x1EE4;C &#x110;&#x1ECA;A MU - Kh&#xF4;ng webshop, kh&#xF4;ng top n&#x1EA1;p</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>L&#x1EE5;c &#x110;&#x1ECB;a MU</b> vào 13h ngày 20/04/2022</p>
                                    <p>Exp: 3000x - Drop: 5%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: GameGuard</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">10</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="Mu Chi&#x1EBF;n Th&#x1EA7;n s6.15 - Season 6 Exp 9999x - Drop 40% - Ex9999-Kh&#xF4;ng GHRS-RS nh&#x1EAD;n WC"
                                            href="/chi-tiet-mu-moi-ra/mu-chien-than-s6.15-season-6-exp-9999x-drop-40-ex9999khong-ghrsrs-nhan-wc-1400"
                                    >
                                        <span class="d-stt">10. </span> Mu Chi&#x1EBF;n Th&#x1EA7;n s6.15 - Season 6 Exp 9999x - Drop 40% - Ex9999-Kh&#xF4;ng GHRS-RS nh&#x1EAD;n WC
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Chi&#x1EBF;n Th&#x1EA7;n</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">23/04<span class="year">/2022</span> (8h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">24/04<span class="year">/2022</span> (20h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>Mu Chi&#x1EBF;n Th&#x1EA7;n s6.15 - Ex9999-Kh&#xF4;ng GHRS-RS nh&#x1EAD;n WC</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Chi&#x1EBF;n Th&#x1EA7;n</b> vào 20h ngày 24/04/2022</p>
                                    <p>Exp: 9999x - Drop: 40%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: Dragon</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">11</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MUTHIENTHANH.VN - Season 6 Exp 1000x - Drop 10% - NO WEBSHOP-AUTO RESET IMGAME"
                                            href="/chi-tiet-mu-moi-ra/muthienthanh.vn-season-6-exp-1000x-drop-10-no-webshopauto-reset-imgame-1399"
                                    >
                                        <span class="d-stt">11. </span> MUTHIENTHANH.VN - Season 6 Exp 1000x - Drop 10% - NO WEBSHOP-AUTO RESET IMGAME
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">MA&#x301;Y CHU&#x309; ATLANS</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">22/04<span class="year">/2022</span> (9h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">23/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MUTHIENTHANH.VN - NO WEBSHOP-AUTO RESET IMGAME</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>MA&#x301;Y CHU&#x309; ATLANS</b> vào 13h ngày 23/04/2022</p>
                                    <p>Exp: 1000x - Drop: 10%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: GAMEGUARD</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">12</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="&#x2694;&#xFE0F; Mu Vi&#x1EC7;t 24h &#x2694;&#xFE0F; - Season 6 Exp 170x - Drop 25% - Auto Reset - Keep Point - OffAttack"
                                            href="/chi-tiet-mu-moi-ra/-mu-viet-24h-season-6-exp-170x-drop-25-auto-reset-keep-point-offattack-1398"
                                    >
                                        <span class="d-stt">12. </span> &#x2694;&#xFE0F; Mu Vi&#x1EC7;t 24h &#x2694;&#xFE0F; - Season 6 Exp 170x - Drop 25% - Auto Reset - Keep Point - OffAttack
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">HO&#xC0;NG KIM</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">21/04<span class="year">/2022</span> (8h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">24/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>&#x2694;&#xFE0F; Mu Vi&#x1EC7;t 24h &#x2694;&#xFE0F; - Auto Reset - Keep Point - OffAttack</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>HO&#xC0;NG KIM</b> vào 13h ngày 24/04/2022</p>
                                    <p>Exp: 170x - Drop: 25%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: GameGuard Protects</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">13</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="&#x269C;&#xFE0F;MU HO&#xC0;N M&#x1EF8;&#x269C;&#xFE0F; - Season 6 Exp 300x - Drop 30% - RESET &#x110;&#x1EA0;T M&#x1ED0;C NH&#x1EAC;N QU&#xC0; V&#xC0; WCOIN"
                                            href="/chi-tiet-mu-moi-ra/mu-hoan-my-season-6-exp-300x-drop-30-reset-dat-moc-nhan-qua-va-wcoin-1397"
                                    >
                                        <span class="d-stt">13. </span> &#x269C;&#xFE0F;MU HO&#xC0;N M&#x1EF8;&#x269C;&#xFE0F; - Season 6 Exp 300x - Drop 30% - RESET &#x110;&#x1EA0;T M&#x1ED0;C NH&#x1EAC;N QU&#xC0; V&#xC0; WCOIN
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">&#x110;&#x1EBE; V&#x1AF;&#x1A0;NG</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">21/04<span class="year">/2022</span> (20h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">23/04<span class="year">/2022</span> (20h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>&#x269C;&#xFE0F;MU HO&#xC0;N M&#x1EF8;&#x269C;&#xFE0F; - RESET &#x110;&#x1EA0;T M&#x1ED0;C NH&#x1EAC;N QU&#xC0; V&#xC0; WCOIN</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>&#x110;&#x1EBE; V&#x1AF;&#x1A0;NG</b> vào 20h ngày 23/04/2022</p>
                                    <p>Exp: 300x - Drop: 30%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: DEEPSHIELD</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">14</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MUHOANKIEM.NET - Season 6 Exp 3000x - Drop 30% - FULL CUSTOM-EVENT-S&#x1EF0; KI&#x1EC6;N"
                                            href="/chi-tiet-mu-moi-ra/muhoankiem.net-season-6-exp-3000x-drop-30-full-customeventsu-kien-1396"
                                    >
                                        <span class="d-stt">14. </span> MUHOANKIEM.NET - Season 6 Exp 3000x - Drop 30% - FULL CUSTOM-EVENT-S&#x1EF0; KI&#x1EC6;N
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Ho&#xE0;n Ki&#x1EBF;m</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">19/04<span class="year">/2022</span> (10h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">20/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MUHOANKIEM.NET - FULL CUSTOM-EVENT-S&#x1EF0; KI&#x1EC6;N</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Ho&#xE0;n Ki&#x1EBF;m</b> vào 13h ngày 20/04/2022</p>
                                    <p>Exp: 3000x - Drop: 30%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: DRAGON</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">15</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="Mu Season 6 - Season 6 Exp 250x - Drop 20% - Free kh&#xF4;ng n&#x1EA1;p th&#x1EBB;"
                                            href="/chi-tiet-mu-moi-ra/mu-season-6-season-6-exp-250x-drop-20-free-khong-nap-the-1395"
                                    >
                                        <span class="d-stt">15. </span> Mu Season 6 - Season 6 Exp 250x - Drop 20% - Free kh&#xF4;ng n&#x1EA1;p th&#x1EBB;
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Mu Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">19/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">20/04<span class="year">/2022</span> (19h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>Mu Season 6 - Free kh&#xF4;ng n&#x1EA1;p th&#x1EBB;</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Mu Season 6</b> vào 19h ngày 20/04/2022</p>
                                    <p>Exp: 250x - Drop: 20%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: Dragon</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">16</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MUVN8X.COM-FULL EVEN - Season 6 Exp 3000x - Drop 30% - FULL CUSTOM&lt; EVENT&lt;S&#x1EF0; KI&#x1EC6;N 24H"
                                            href="/chi-tiet-mu-moi-ra/muvn8x.comfull-even-season-6-exp-3000x-drop-30-full-custom-eventsu-kien-24h-1394"
                                    >
                                        <span class="d-stt">16. </span> MUVN8X.COM-FULL EVEN - Season 6 Exp 3000x - Drop 30% - FULL CUSTOM&lt; EVENT&lt;S&#x1EF0; KI&#x1EC6;N 24H
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">VI&#x1EC6;T NAM</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">18/04<span class="year">/2022</span> (10h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">19/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MUVN8X.COM-FULL EVEN - FULL CUSTOM&lt; EVENT&lt;S&#x1EF0; KI&#x1EC6;N 24H</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>VI&#x1EC6;T NAM</b> vào 13h ngày 19/04/2022</p>
                                    <p>Exp: 3000x - Drop: 30%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: DRAGON CHEAT</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">17</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="L&#x1EE4;C &#x110;&#x1ECA;A MU - Season 6 Exp 3000x - Drop 10% - &#x110;&#xF4;ng ng&#x1B0;&#x1EDD;i ch&#x1A1;i, mi&#x1EC5;n ph&#xED;"
                                            href="/chi-tiet-mu-moi-ra/luc-dia-mu-season-6-exp-3000x-drop-10-dong-nguoi-choi-mien-phi-1393"
                                    >
                                        <span class="d-stt">17. </span> L&#x1EE4;C &#x110;&#x1ECA;A MU - Season 6 Exp 3000x - Drop 10% - &#x110;&#xF4;ng ng&#x1B0;&#x1EDD;i ch&#x1A1;i, mi&#x1EC5;n ph&#xED;
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">L&#x1EE5;c &#x110;&#x1ECB;a MU</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">17/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">20/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>L&#x1EE4;C &#x110;&#x1ECA;A MU - &#x110;&#xF4;ng ng&#x1B0;&#x1EDD;i ch&#x1A1;i, mi&#x1EC5;n ph&#xED;</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>L&#x1EE5;c &#x110;&#x1ECB;a MU</b> vào 13h ngày 20/04/2022</p>
                                    <p>Exp: 3000x - Drop: 10%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: GameGuard</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">18</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MU H&#xC0; N&#x1ED8;I 2009 - Season 6 Exp 2000x - Drop 30% - Train &#x111;&#x1B0;&#x1EE3;c wcoin - reset ingame - "
                                            href="/chi-tiet-mu-moi-ra/mu-ha-noi-2009-season-6-exp-2000x-drop-30-train-duoc-wcoin-reset-ingame--1392"
                                    >
                                        <span class="d-stt">18. </span> MU H&#xC0; N&#x1ED8;I 2009 - Season 6 Exp 2000x - Drop 30% - Train &#x111;&#x1B0;&#x1EE3;c wcoin - reset ingame -
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Th&#x1EA7;n Ma</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">17/04<span class="year">/2022</span> (19h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">19/04<span class="year">/2022</span> (19h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MU H&#xC0; N&#x1ED8;I 2009 - Train &#x111;&#x1B0;&#x1EE3;c wcoin - reset ingame -</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Th&#x1EA7;n Ma</b> vào 19h ngày 19/04/2022</p>
                                    <p>Exp: 2000x - Drop: 30%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: gold</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">19</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="Mu Huy&#x1EC1;n Tho&#x1EA1;i - Season 6 Exp 300x - Drop 30% - Kh&#xF4;ng Top Ph&#xFA; H&#x1ED9;, Kh&#xF4;ng danh hi&#x1EC7;u.."
                                            href="/chi-tiet-mu-moi-ra/mu-huyen-thoai-season-6-exp-300x-drop-30-khong-top-phu-ho-khong-danh-hieu..-1391"
                                    >
                                        <span class="d-stt">19. </span> Mu Huy&#x1EC1;n Tho&#x1EA1;i - Season 6 Exp 300x - Drop 30% - Kh&#xF4;ng Top Ph&#xFA; H&#x1ED9;, Kh&#xF4;ng danh hi&#x1EC7;u..
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Huy&#x1EC1;n Tho&#x1EA1;i</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">17/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">19/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>Mu Huy&#x1EC1;n Tho&#x1EA1;i - Kh&#xF4;ng Top Ph&#xFA; H&#x1ED9;, Kh&#xF4;ng danh hi&#x1EC7;u..</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Huy&#x1EC1;n Tho&#x1EA1;i</b> vào 13h ngày 19/04/2022</p>
                                    <p>Exp: 300x - Drop: 30%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: Game Guard</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">20</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Season 6 Exp 150x - Drop 25% - Chu&#xE2;&#x309;n ca&#x300;y cu&#xF4;&#x301;c , Item gia&#x301; tri&#x323; "
                                            href="/chi-tiet-mu-moi-ra/mu-than-dia-season-6-exp-150x-drop-25-chuan-cay-cuoc-item-gia-tri--1390"
                                    >
                                        <span class="d-stt">20. </span> Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Season 6 Exp 150x - Drop 25% - Chu&#xE2;&#x309;n ca&#x300;y cu&#xF4;&#x301;c , Item gia&#x301; tri&#x323;
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Ma&#x301;y chu&#x309; Th&#xE2;&#x300;n &#x110;i&#x323;a</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">18/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">20/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>Mu Th&#xE2;&#x300;n &#x110;i&#x323;a - Chu&#xE2;&#x309;n ca&#x300;y cu&#xF4;&#x301;c , Item gia&#x301; tri&#x323;</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Ma&#x301;y chu&#x309; Th&#xE2;&#x300;n &#x110;i&#x323;a</b> vào 13h ngày 20/04/2022</p>
                                    <p>Exp: 150x - Drop: 25%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng:</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">21</p>
                                </div>
                                <div class="item-post-middle">
                                    <a class="item-title" title="Thi&#xEA;n S&#x1EE9; - Season 6 Exp 700x - Drop 50% - Mi&#x1EC5;n Ph&#xED; 99%" href="/chi-tiet-mu-moi-ra/thien-su-season-6-exp-700x-drop-50-mien-phi-99-1389">
                                        <span class="d-stt">21. </span> Thi&#xEA;n S&#x1EE9; - Season 6 Exp 700x - Drop 50% - Mi&#x1EC5;n Ph&#xED; 99%
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Thi&#xEA;n S&#x1EE9;</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">18/04<span class="year">/2022</span> (14h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">19/04<span class="year">/2022</span> (14h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>Thi&#xEA;n S&#x1EE9; - Mi&#x1EC5;n Ph&#xED; 99%</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Thi&#xEA;n S&#x1EE9;</b> vào 14h ngày 19/04/2022</p>
                                    <p>Exp: 700x - Drop: 50%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: Ch&#x1ED1;ng hack tuy&#x1EC7;t &#x111;&#x1ED1;i</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">22</p>
                                </div>
                                <div class="item-post-middle">
                                    <a class="item-title" title="B&#x1ED1;c Ph&#xE9;t  - Season 16 Exp 9999x - Drop 80% - free all ACE &#x1A1;i" href="/chi-tiet-mu-moi-ra/boc-phet-season-16-exp-9999x-drop-80-free-all-ace-oi-1388">
                                        <span class="d-stt">22. </span> B&#x1ED1;c Ph&#xE9;t - Season 16 Exp 9999x - Drop 80% - free all ACE &#x1A1;i
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">B&#x1ED1;c Ph&#xE9;t</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">14/04<span class="year">/2022</span> (19h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 16</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">16/04<span class="year">/2022</span> (10h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>B&#x1ED1;c Ph&#xE9;t - free all ACE &#x1A1;i</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>B&#x1ED1;c Ph&#xE9;t</b> vào 10h ngày 16/04/2022</p>
                                    <p>Exp: 9999x - Drop: 80%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng:</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">23</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="Mu Thi&#xEA;n H&#xE0;  - Season 6 Exp 9999x - Drop 50% - Free 100% - Pk Si&#xEA;u Nhi&#x1EC7;t - &#x110;ua Top"
                                            href="/chi-tiet-mu-moi-ra/mu-thien-ha-season-6-exp-9999x-drop-50-free-100-pk-sieu-nhiet-dua-top-1387"
                                    >
                                        <span class="d-stt">23. </span> Mu Thi&#xEA;n H&#xE0; - Season 6 Exp 9999x - Drop 50% - Free 100% - Pk Si&#xEA;u Nhi&#x1EC7;t - &#x110;ua Top
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Devias</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">15/04<span class="year">/2022</span> (10h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">16/04<span class="year">/2022</span> (19h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>Mu Thi&#xEA;n H&#xE0; - Free 100% - Pk Si&#xEA;u Nhi&#x1EC7;t - &#x110;ua Top</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Devias</b> vào 19h ngày 16/04/2022</p>
                                    <p>Exp: 9999x - Drop: 50%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: DeepShield</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">24</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MU Vi&#x1EC7;t Nam SL - Season 6 Exp 500x - Drop 40% - MU Vi&#x1EC7;t Nam SL - Free 100% - Custom"
                                            href="/chi-tiet-mu-moi-ra/mu-viet-nam-sl-season-6-exp-500x-drop-40-mu-viet-nam-sl-free-100-custom-1386"
                                    >
                                        <span class="d-stt">24. </span> MU Vi&#x1EC7;t Nam SL - Season 6 Exp 500x - Drop 40% - MU Vi&#x1EC7;t Nam SL - Free 100% - Custom
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Vi&#x1EC7;t Nam</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">13/04<span class="year">/2022</span> (9h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">17/04<span class="year">/2022</span> (9h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MU Vi&#x1EC7;t Nam SL - MU Vi&#x1EC7;t Nam SL - Free 100% - Custom</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Vi&#x1EC7;t Nam</b> vào 9h ngày 17/04/2022</p>
                                    <p>Exp: 500x - Drop: 40%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: Gold Shield</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">25</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="H&#xE0; N&#x1ED9;i Mu - Season 6 Exp 200x - Drop 20% - Si&#xEA;u Ph&#x1EA9;m C&#xE0;y Cu&#x1ED1;c C&#xE0;y L&#xE0; C&#xF3;"
                                            href="/chi-tiet-mu-moi-ra/ha-noi-mu-season-6-exp-200x-drop-20-sieu-pham-cay-cuoc-cay-la-co-1385"
                                    >
                                        <span class="d-stt">25. </span> H&#xE0; N&#x1ED9;i Mu - Season 6 Exp 200x - Drop 20% - Si&#xEA;u Ph&#x1EA9;m C&#xE0;y Cu&#x1ED1;c C&#xE0;y L&#xE0; C&#xF3;
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">M&#xE1;y Ch&#x1EE7; DAVIAS</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">14/04<span class="year">/2022</span> (10h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">15/04<span class="year">/2022</span> (19h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>H&#xE0; N&#x1ED9;i Mu - Si&#xEA;u Ph&#x1EA9;m C&#xE0;y Cu&#x1ED1;c C&#xE0;y L&#xE0; C&#xF3;</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>M&#xE1;y Ch&#x1EE7; DAVIAS</b> vào 19h ngày 15/04/2022</p>
                                    <p>Exp: 200x - Drop: 20%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: MuTeam</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">26</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="Mu R&#x1ED3;ng &#x110;&#x1ECF; - Season 6 Exp 40x - Drop 5% - Mi&#x1EC5;n Ph&#xED; 100 % c&#xE0;y cu&#x1ED1;c pk gi&#x1EA3;i t&#xED;"
                                            href="/chi-tiet-mu-moi-ra/mu-rong-do-season-6-exp-40x-drop-5-mien-phi-100-cay-cuoc-pk-giai-ti-1384"
                                    >
                                        <span class="d-stt">26. </span> Mu R&#x1ED3;ng &#x110;&#x1ECF; - Season 6 Exp 40x - Drop 5% - Mi&#x1EC5;n Ph&#xED; 100 % c&#xE0;y cu&#x1ED1;c pk gi&#x1EA3;i t&#xED;
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Quy&#x1EC1;n N&#x103;ng</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">18/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">20/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>Mu R&#x1ED3;ng &#x110;&#x1ECF; - Mi&#x1EC5;n Ph&#xED; 100 % c&#xE0;y cu&#x1ED1;c pk gi&#x1EA3;i t&#xED;</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Quy&#x1EC1;n N&#x103;ng</b> vào 13h ngày 20/04/2022</p>
                                    <p>Exp: 40x - Drop: 5%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: Vgoryus</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">27</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MU8X.NET-N&#x1A0;I H&#x1ED8;I T&#x1EE4;  - Season 6 Exp 2000x - Drop 20% - N&#x1A0;I H&#x1ED8;I T&#x1EE4; C&#xC1;C ANH H&#xD9;NG"
                                            href="/chi-tiet-mu-moi-ra/mu8x.netnoi-hoi-tu-season-6-exp-2000x-drop-20-noi-hoi-tu-cac-anh-hung-1383"
                                    >
                                        <span class="d-stt">27. </span> MU8X.NET-N&#x1A0;I H&#x1ED8;I T&#x1EE4; - Season 6 Exp 2000x - Drop 20% - N&#x1A0;I H&#x1ED8;I T&#x1EE4; C&#xC1;C ANH H&#xD9;NG
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">NORIA</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">13/04<span class="year">/2022</span> (10h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">15/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MU8X.NET-N&#x1A0;I H&#x1ED8;I T&#x1EE4; - N&#x1A0;I H&#x1ED8;I T&#x1EE4; C&#xC1;C ANH H&#xD9;NG</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>NORIA</b> vào 13h ngày 15/04/2022</p>
                                    <p>Exp: 2000x - Drop: 20%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Nguy&#xEA;n b&#x1EA3;n Webzen</p>
                                    <p>Antihack mà Mu sử dụng: DRAGON</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">28</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MuRedBull SS 6.15 - Season 6 Exp 9999x - Drop 60% - &#x1F496; Free 99%, Phu&#x300; H&#x1A1;&#x323;p Cho D&#xE2;n Ca&#x300;y"
                                            href="/chi-tiet-mu-moi-ra/muredbull-ss-6.15-season-6-exp-9999x-drop-60-free-99-phu-hop-cho-dan-cay-455"
                                    >
                                        <span class="d-stt">28. </span> MuRedBull SS 6.15 - Season 6 Exp 9999x - Drop 60% - &#x1F496; Free 99%, Phu&#x300; H&#x1A1;&#x323;p Cho D&#xE2;n Ca&#x300;y
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">M&#xE1;y ch&#x1EE7; m&#x1EDB;i: Lorencia</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">11/04<span class="year">/2022</span> (10h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">13/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MuRedBull SS 6.15 - &#x1F496; Free 99%, Phu&#x300; H&#x1A1;&#x323;p Cho D&#xE2;n Ca&#x300;y</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>M&#xE1;y ch&#x1EE7; m&#x1EDB;i: Lorencia</b> vào 13h ngày 13/04/2022</p>
                                    <p>Exp: 9999x - Drop: 60%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: SOLAR</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">29</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="MU QUY&#x1EC0;N L&#x1EF0;C - Season 6 Exp 5000x - Drop 50% - SI&#xCA;U D&#x1EC4; CH&#x1A0;I.MI&#x1EC4;N PH&#xCD; 100%"
                                            href="/chi-tiet-mu-moi-ra/mu-quyen-luc-season-6-exp-5000x-drop-50-sieu-de-choi.mien-phi-100-454"
                                    >
                                        <span class="d-stt">29. </span> MU QUY&#x1EC0;N L&#x1EF0;C - Season 6 Exp 5000x - Drop 50% - SI&#xCA;U D&#x1EC4; CH&#x1A0;I.MI&#x1EC4;N PH&#xCD; 100%
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">HUY&#x1EC0;N THO&#x1EA0;I</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">11/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">13/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>MU QUY&#x1EC0;N L&#x1EF0;C - SI&#xCA;U D&#x1EC4; CH&#x1A0;I.MI&#x1EC4;N PH&#xCD; 100%</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>HUY&#x1EC0;N THO&#x1EA0;I</b> vào 13h ngày 13/04/2022</p>
                                    <p>Exp: 5000x - Drop: 50%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: GAMEGUARD</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
                                <div class="item-post-left">
                                    <p class="stt">30</p>
                                </div>
                                <div class="item-post-middle">
                                    <a
                                            class="item-title"
                                            title="mu free 20wc/qu&#xE1;i - Season 6 Exp 5000x - Drop 20% - Free all 20wc/1 qu&#xE1;i, boss 1h/l&#x1EA7;n"
                                            href="/chi-tiet-mu-moi-ra/mu-free-20wcquai-season-6-exp-5000x-drop-20-free-all-20wc1-quai-boss-1hlan-453"
                                    >
                                        <span class="d-stt">30. </span> mu free 20wc/qu&#xE1;i - Season 6 Exp 5000x - Drop 20% - Free all 20wc/1 qu&#xE1;i, boss 1h/l&#x1EA7;n
                                    </a>
                                    <div class="post-info">
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Sever:</div>
                                                <div class="value">Cu&#x1ED3;ng Phong</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Alpha Test:</div>
                                                <div class="value">11/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                        <div class="info-line d-flex">
                                            <div class="key-value">
                                                <div class="key">- Phiên Bản:</div>
                                                <div class="value">Season 6</div>
                                            </div>
                                            <div class="key-right">
                                                <div class="key">- Open Beta:</div>
                                                <div class="value text-bold-red">12/04<span class="year">/2022</span> (13h)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-post-right text-center">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="content-sub d-block d-sm-flex">
                                <div class="item-vip-left"></div>
                                <div class="content">
                                    <p>mu free 20wc/qu&#xE1;i - Free all 20wc/1 qu&#xE1;i, boss 1h/l&#x1EA7;n</p>
                                    <p>Mu mới ra tháng 04 2022 - Mở máy chủ <b>Cu&#x1ED3;ng Phong</b> vào 13h ngày 12/04/2022</p>
                                    <p>Exp: 5000x - Drop: 20%</p>
                                    <p>Kiểu reset: Reset In Game</p>
                                    <p>Thể loại: Mu Custom th&#xEA;m &#x111;&#x1ED3; m&#x1EDB;i</p>
                                    <p>Antihack mà Mu sử dụng: vguard ch&#x1ED1;ng ha</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <nav class="mt-3 mb-3">
                        <section class="">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="https://mumoira.tv/?page=1" tabindex="-1">
                                        <i class="fa fa-angle-double-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="https://mumoira.tv/?page=1" tabindex="-1">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="https://mumoira.tv/?page=1">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="https://mumoira.tv/?page=2">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="https://mumoira.tv/?page=3">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="https://mumoira.tv/?page=4">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="https://mumoira.tv/?page=5">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="https://mumoira.tv/?page=6">6</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="https://mumoira.tv/?page=2">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="https://mumoira.tv/?page=14">
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </nav>
                    <h1 style="font-size: 18px; text-align: center;">Mu Mới Ra Hôm Nay - Top Mu Online Private mới ra - Mumoira.tv</h1>
                    <div class="tool">
                        <div class="row align-items-center">
                            <div class="col-12 filter-wrap">
                                <div class="link-version">
                                    <p class="filter-title float-start">Tìm kiếm Mu theo phiên bản:</p>
                                    <div class="float-start">
                                        <a class="filter-btn filter-btn-season" href="/mu-version/season-2/6">Season 2</a>
                                        <a class="filter-btn filter-btn-season" href="/mu-version/season-3/2">Season 3</a>
                                        <a class="filter-btn filter-btn-season" href="/mu-version/season-6/3">Season 6</a>
                                        <a class="filter-btn filter-btn-season" href="/mu-version/season-7/4">Season 7</a>
                                        <a class="filter-btn filter-btn-season" href="/mu-version/season-16/19">Season 16</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hr"></div>
                <div class="blog-wrap">
                    <h2 class="title !text-yellow-500">
                        Hướng dẫn MU Online mới cập nhật
                    </h2>
                    <ul class="blog-list">
                        <li class="blog-item">
                            <a class="d-block d-sm-flex" href="/huong-dan/huong-dan-xoay-canh-3-wing-3-mu-online-13.htm">
                                <div class="img-blog">
                                    <img src="./assets/images/joca7nD.jpg" title="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 3 (Wing 3) Mu Online" alt="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 3 (Wing 3) Mu Online" />
                                </div>
                                <div class="blog-info">
                                    <h3>H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 3 (Wing 3) Mu Online</h3>
                                    <p class="description">
                                        N&#x1EBF;u anh em n&#xE0;o ch&#x1B0;a bi&#x1EBF;t xoay Wings 3 trong Server Mu Online th&#xEC; c&#xF3; th&#x1EC3; xem b&#xE0;i h&#x1B0;&#x1EDB;ng d&#x1EAB;n c&#x1EE7;a mumoira.tv b&#xEA;n
                                        d&#x1B0;&#x1EDB;i &#x111;&#x1EC3; bi&#x1EBF;t c&#xE1;ch xoay nha.
                                    </p>
                                    <div class="d-block d-sm-flex justify-content-between">
                                        <div class="category">Hướng dẫn Mu <i class="fas fa-angle-right"></i> H&#x1EC7; th&#x1ED1;ng &#xE9;p &#x111;&#x1ED3;</div>
                                        <div class="blog-time"><i class="far fa-clock"></i>&nbsp; 12/10/2021</div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="blog-item">
                            <a class="d-block d-sm-flex" href="/huong-dan/huong-dan-xoay-canh-2.5-wing-2.5-mu-online-12.htm">
                                <div class="img-blog">
                                    <img
                                            src="./assets/images/GiHgQGS.jpg"
                                            title="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 2.5 (Wing 2.5) Mu Online"
                                            alt="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 2.5 (Wing 2.5) Mu Online"
                                    />
                                </div>
                                <div class="blog-info">
                                    <h3>H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 2.5 (Wing 2.5) Mu Online</h3>
                                    <p class="description">
                                        Wing 2.5 c&#xF2;n g&#x1ECD;i l&#xE0; nh&#x1EEF;ng &#x111;&#xF4;i c&#xE1;nh b&#x1ECB; nguy&#x1EC1;n r&#x1EE7;a b&#x1EDF;i n&#xF3; &#x111;&#x1B0;&#x1EE3;c ch&#x1EBF; t&#x1EA1;o b&#x1EDF;i
                                        c&#xE1;c b&#x1EAD;c th&#x1EA7;y ph&#xF9; th&#x1EE7;y &#x1EDF; Arca, c&#xF3; nhi&#x1EC1;u ngu&#x1ED3;n tin cho r&#x1EB1;ng &#x111;&#xF4;i c&#xE1;nh n&#xE0;y &#x111;&#x1B0;&#x1EE3;c t&#x1EA1;o
                                        t&#x1EEB; nh&#x1EEF;ng b&#x1ED9; ph&#x1EAD;n c&#x1EE7;a nh&#x1EEF;ng con qu&#xE1;i v&#x1EAD;t c&#xF3; s&#x1EE9;c m&#x1EA1;nh v&#xF4; c&#xF9;ng kh&#x1EE7;ng khi&#x1EBF;p.
                                    </p>
                                    <div class="d-block d-sm-flex justify-content-between">
                                        <div class="category">Hướng dẫn Mu <i class="fas fa-angle-right"></i> H&#x1EC7; th&#x1ED1;ng &#xE9;p &#x111;&#x1ED3;</div>
                                        <div class="blog-time"><i class="far fa-clock"></i>&nbsp; 12/10/2021</div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="blog-item">
                            <a class="d-block d-sm-flex" href="/huong-dan/huong-dan-xoay-canh-2-wing-2-mu-online-11.htm">
                                <div class="img-blog">
                                    <img src="./assets/images/UwJ5KHS.jpg" title="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 2 (Wing 2) Mu Online" alt="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 2 (Wing 2) Mu Online" />
                                </div>
                                <div class="blog-info">
                                    <h3>H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 2 (Wing 2) Mu Online</h3>
                                    <p class="description">
                                        H&#xF4;m nay m&#xEC;nh xin chia s&#x1EBD; l&#x1EA1;i c&#xE1;ch xoay C&#xE1;nh 2 (Wing 2) trong Game Mu Online tr&#xEA;n PC &#x111;&#x1EC3; anh em n&#xE0;o ch&#x1B0;a bi&#x1EBF;t th&#xEC;
                                        c&#xF3; th&#x1EC3; tham kh&#x1EA3;o nha.
                                    </p>
                                    <div class="d-block d-sm-flex justify-content-between">
                                        <div class="category">Hướng dẫn Mu <i class="fas fa-angle-right"></i> H&#x1EC7; th&#x1ED1;ng &#xE9;p &#x111;&#x1ED3;</div>
                                        <div class="blog-time"><i class="far fa-clock"></i>&nbsp; 11/10/2021</div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="blog-item">
                            <a class="d-block d-sm-flex" href="/huong-dan/huong-dan-xoay-canh-1-wing-1-mu-online-10.htm">
                                <div class="img-blog">
                                    <img src="./assets/images/73NP0hZ.jpg" title="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 1 (Wing 1) Mu Online" alt="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 1 (Wing 1) Mu Online" />
                                </div>
                                <div class="blog-info">
                                    <h3>H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 1 (Wing 1) Mu Online</h3>
                                    <p class="description">
                                        C&#xE1;nh c&#x1EA5;p 1 l&#xE0; c&#xE1;nh c&#x1A1; s&#x1EDF;, c&#x169;ng c&#xF3; th&#x1EC3; n&#xF3;i n&#xF3; l&#xE0; b&#x1B0;&#x1EDB;c &#x111;&#x1EC7;m &#x111;&#x1EC3; b&#x1EA1;n b&#x1EAF;t
                                        &#x111;&#x1EA7;u cu&#x1ED9;c phi&#xEA;u l&#x1B0;u kh&#xE1;m ph&#xE1; v&#xE0; chinh ph&#x1EE5;c t&#x1EF1;a game MU online.
                                    </p>
                                    <div class="d-block d-sm-flex justify-content-between">
                                        <div class="category">Hướng dẫn Mu <i class="fas fa-angle-right"></i> H&#x1EC7; th&#x1ED1;ng &#xE9;p &#x111;&#x1ED3;</div>
                                        <div class="blog-time"><i class="far fa-clock"></i>&nbsp; 10/10/2021</div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="blog-item">
                            <a class="d-block d-sm-flex" href="/huong-dan/huong-dan-ban-do-map-trong-mu-online-9.htm">
                                <div class="img-blog">
                                    <img
                                            src="./assets/images/wxYDthL.jpg"
                                            title="H&#x1B0;&#x1EDB;ng d&#x1EAB;n b&#x1EA3;n &#x111;&#x1ED3; (MAP) trong MU Online"
                                            alt="H&#x1B0;&#x1EDB;ng d&#x1EAB;n b&#x1EA3;n &#x111;&#x1ED3; (MAP) trong MU Online"
                                    />
                                </div>
                                <div class="blog-info">
                                    <h3>H&#x1B0;&#x1EDB;ng d&#x1EAB;n b&#x1EA3;n &#x111;&#x1ED3; (MAP) trong MU Online</h3>
                                    <p class="description">
                                        H&#x1B0;&#x1EDB;ng d&#x1EAB;n chi ti&#x1EBF;t c&#xE1;c b&#x1EA3;n &#x111;&#x1ED3; trong game Mu Online: Lorencia, Noria, Devias, Tarkan, Kanturu, Lost Tower, Kalima, Raklion, Swamp of
                                        Calmness, Acheron...
                                    </p>
                                    <div class="d-block d-sm-flex justify-content-between">
                                        <div class="category">Hướng dẫn Mu <i class="fas fa-angle-right"></i> C&#x1A1; b&#x1EA3;n</div>
                                        <div class="blog-time"><i class="far fa-clock"></i>&nbsp; 07/10/2021</div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="view-more text-center">
                        <a class="btn btn-danger btn-sm-d" href="/huong-dan-choi-mu-online">
                            <i class="fa fa-eye"></i>
                            Xem thêm hướng dẫn
                        </a>
                    </div>
                </div>
            </div>
            <div class="banner-right">
                <a href="https://mumoira.tv/?utm_source=mumoira.tv&amp;utm_medium=default&amp;utm_campaign=mumoira_bRight" title="Mu online" rel="nofollow noopener noreferrer" target="_blank">
                    <img src="./assets/images/9zJMnWF.gif" alt="Giới thiệu Mu Online - Mu online" title="Giới thiệu Mu Online - Mu online" loading="lazy" />
                </a>
                <div class="show-md"></div>
            </div>
        </div>
    </div>
</section>
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
                <a href="/">
                    <img src="./assets/images/logo_bottom.png" title="Mu Mới Ra - Kênh tổng hợp MU lớn nhất Việt Nam | MuMoiRa.tv" alt="Mu Mới Ra - Kênh tổng hợp MU lớn nhất Việt Nam | MuMoiRa.tv" />
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
                        data-href="https://www.facebook.com/mumoira.tv/"
                        data-tabs="timeline"
                        data-width=""
                        data-height="70"
                        data-small-header="false"
                        data-adapt-container-width="true"
                        data-hide-cover="false"
                        data-show-facepile="true"
                >
                    <blockquote cite="https://www.facebook.com/mumoira.tv/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mumoira.tv/">Mu Mới Ra - Mumoira.tv</a></blockquote>
                </div>
                <ul class="f-info">
                    <li>
                        <a href="https://www.facebook.com/MuMoiRa.tv" title="Facebook Mu Mới Ra - Mumoira.tv" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCtUvrrtlkh4M9urFmJzSJLQ" title="Mu Mới Ra - Kênh tổng hợp game Mu Online mới ra" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/mumoiratv" title="Pinterest MUMOIRA.TV - Mu Mới Ra - Tổng Hợp Mu Online Lậu Mới Ra Hôm Nay" target="_blank">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/mumoira.tv/" title="Instagram Mumoira.tv - Mu Mới Ra" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/MUMoiRaTV/" title="Twitter MUMOIRA.TV - Tổng hợp Mu mới ra hôm nay" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://mumoiratv.tumblr.com/" title="Tumblr Mu Mới Ra (MUMOIRA.TV)" target="_blank">
                            <i class="fab fa-tumblr"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 f-info d-none d-sm-block">
                <h3>Nội Dung Website</h3>
                <ul>
                    <li>
                        <a href="/mu-open-beta">
                            Mu Open Beta Hôm Nay
                        </a>
                    </li>
                    <li>
                        <a href="/mu-alpha-test">
                            Mu Alpha Test Hôm Nay
                        </a>
                    </li>
                    <li>
                        <a href="/huong-dan-choi-mu-online">
                            Hướng Dẫn Chơi Mu Online
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="/dang-quang-cao-mu-online.htm">
                            Đăng Mu Mới Miễn Phí
                        </a>
                    </li>
                    <li>
                        <a href="//www.dmca.com/Protection/Status.aspx?ID=c2cd9024-fccd-444d-a330-af1ed06ff01e" title="DMCA.com Protection Status" class="dmca-badge" target="_blank" rel="nofollow noopener">
                            <img src="https://images.dmca.com/Badges/_dmca_premi_badge_4.png?ID=c2cd9024-fccd-444d-a330-af1ed06ff01e" width="80" alt="DMCA.com Protection Status" />
                        </a>
                        <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 f-info d-none d-sm-block">
                <h3>Tìm kiếm MU Online</h3>
                <ul>
                    <li>
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
                    </li>
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
            <hr />
            <div class="col-md-12 text-center">
                &#xA9; 2021 Mumoira.tv - Mu m&#x1EDB;i ra - Gi&#x1EDB;i thi&#x1EC7;u game Mu Online m&#x1EDB;i ra h&#xF4;m nay
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

    <a href="https://m.me/MuMoiRa.tv" title="Liên hệ với hỗ trợ của Mu Mới Ra qua chat Facebook Messenger" rel="nofollow noopener noreferrer" target="_blank" class="quick-contact">
        <img src="./assets/images/Messenger-icon.png" alt="Liên hệ với hỗ trợ của Mu Mới Ra qua chat Facebook Messenger" />
    </a>
</div>
<section id="Scripts">
    <!--
        <script src="/Scripts/jquery-3.0.0.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/popper.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/bootstrap.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/commons.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/lib/ladda/js/spin.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/lib/ladda/js/ladda.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/lib/ladda/js/ladda.jquery.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/lib/fancybox-master/dist/jquery.fancybox.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/lib/fakeLoader.js-master/js/fakeLoader.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/lib/jquery-confirm/jquery-confirm.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/lib/toast/js/toastr.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/lib/validation/js/jquery.validate.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        <script src="/Scripts/scripts.js?v=TQ9Aw8URV-U7FMmtZ0ih4IAugsg9SpdZPwu-32Xj9yk" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
        -->

<!--    <script src="./assets/js/jquery-3.0.0.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/popper.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/bootstrap.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/commons.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/spin.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/ladda.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/ladda.jquery.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/jquery.fancybox.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/fakeLoader.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/jquery-confirm.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/toastr.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/jquery.validate.min.js" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
<!--    <script src="./assets/js/scripts.js?v=TQ9Aw8URV-U7FMmtZ0ih4IAugsg9SpdZPwu-32Xj9yk" type="e6fa910112ec689bf6e5e74c-text/javascript"></script>-->
</section>
<!--<script src="./assets/js/rocket-loader.min.js" data-cf-settings="e6fa910112ec689bf6e5e74c-|49" defer=""></script>-->
</body>
</html>

<?php get_footer(); ?>