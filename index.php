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

//use function JBZoo\Utils\int;

?>
<?php get_header(); ?>

    <!-- WP_BODY -->
    <section id="main">
        <div class="container-fluid d-p-0 d-sm-0">
            <div class="d-flex justify-content-between">
                <div class="banner-left"></div>
                <div class="content-middle">
                    <div class="top-banner">
                        <a href="http://ss2.vn?utm_source=mumoira.tv&amp;utm_medium=default&amp;utm_campaign=mumoira_bTop1"
                           title="ss2.vn" rel="nofollow noopener noreferrer" target="_blank">
                            <img src="./assets/images/EDg1y8K.gif" alt="Giới thiệu Mu Online - ss2.vn"
                                 title="Giới thiệu Mu Online - ss2.vn" loading="lazy"/>
                        </a>
                        <a href="https://mumoira.tv/?utm_source=mumoira.tv&amp;utm_medium=default&amp;utm_campaign=mumoira_bTop2"
                           title="Muonline" rel="nofollow noopener noreferrer" target="_blank">
                            <img src="./assets/images/YoKdGNs.gif" alt="Giới thiệu Mu Online - Muonline"
                                 title="Giới thiệu Mu Online - Muonline" loading="lazy"/>
                        </a>
                        <a href="https://mumoira.tv?utm_source=mumoira.tv&amp;utm_medium=default&amp;utm_campaign=mumoira_bTop2"
                           title="Muonline" rel="nofollow noopener noreferrer" target="_blank">
                            <img src="./assets/images/qsvrsM6.gif" alt="Giới thiệu Mu Online - Muonline"
                                 title="Giới thiệu Mu Online - Muonline" loading="lazy"/>
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
                    <?php
                    $args = [
                        'post_type' => 'game',
                        'tax_query' => [
                            [
                                'taxonomy' => 'loai-bai',
                                'field' => 'slug',
                                'terms' => 'VIP',
                            ],
                        ]
                    ];
                    $queryGameVIP = new WP_Query($args);
                    if ($queryGameVIP->have_posts()):
                        ?>
                        <div class="vip-content">
                            <h2 class="title text-yellow-500">
                                <span></span>
                                Danh sách Mu VIP
                            </h2>
                            <ul class="list-vip">
                                <?php
                                $i = 0;
                                while ($queryGameVIP->have_posts()): $queryGameVIP->the_post();
                                    $i++;
                                    get_template_part('template-parts/game-vip-item', null, ['i' => $i]);
                                endwhile;
                                ?>
                            </ul>
                        </div>
                    <?php
                    endif;
                    wp_reset_postdata();
                    ?>
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
                                            <input type="text" class="form-control txt_keyword" name="keyword" value=""
                                                   placeholder="Tìm kiếm MU mới ra ..."/>
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
                        <?php
                        $args = [
                            'post_type' => 'game',
                            'tax_query' => [
                                [
                                    'taxonomy' => 'loai-bai',
                                    'field' => 'slug',
                                    'terms' => 'VIP',
                                    'operator'  => 'NOT IN'
                                ],
                            ]
                        ];
                        $queryGameThuong = new WP_Query($args);
                        if ($queryGameThuong->have_posts()):
                            ?>
                            <ul class="list-post">
                                <?php
                                $i = 0;
                                while ($queryGameThuong->have_posts()): $queryGameThuong->the_post();
                                    $i++;
                                    get_template_part('template-parts/game-thuong-item', null, ['i' => $i]);
                                endwhile;
                                ?>
                            </ul>
                        <?php
                        endif;
                        wp_reset_postdata();
                        ?>
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
                        <h1 style="font-size: 18px; text-align: center;">Mu Mới Ra Hôm Nay - Top Mu Online Private mới
                            ra - Mumoira.tv</h1>
                        <div class="tool">
                            <div class="row align-items-center">
                                <div class="col-12 filter-wrap">
                                    <div class="link-version">
                                        <p class="filter-title float-start">Tìm kiếm Mu theo phiên bản:</p>
                                        <div class="float-start">
                                            <a class="filter-btn filter-btn-season" href="/mu-version/season-2/6">Season
                                                2</a>
                                            <a class="filter-btn filter-btn-season" href="/mu-version/season-3/2">Season
                                                3</a>
                                            <a class="filter-btn filter-btn-season" href="/mu-version/season-6/3">Season
                                                6</a>
                                            <a class="filter-btn filter-btn-season" href="/mu-version/season-7/4">Season
                                                7</a>
                                            <a class="filter-btn filter-btn-season" href="/mu-version/season-16/19">Season
                                                16</a>
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
                                <a class="d-block d-sm-flex"
                                   href="/huong-dan/huong-dan-xoay-canh-3-wing-3-mu-online-13.htm">
                                    <div class="img-blog">
                                        <img src="./assets/images/joca7nD.jpg"
                                             title="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 3 (Wing 3) Mu Online"
                                             alt="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 3 (Wing 3) Mu Online"/>
                                    </div>
                                    <div class="blog-info">
                                        <h3>H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 3 (Wing 3) Mu Online</h3>
                                        <p class="description">
                                            N&#x1EBF;u anh em n&#xE0;o ch&#x1B0;a bi&#x1EBF;t xoay Wings 3 trong Server
                                            Mu Online th&#xEC; c&#xF3; th&#x1EC3; xem b&#xE0;i h&#x1B0;&#x1EDB;ng d&#x1EAB;n
                                            c&#x1EE7;a mumoira.tv b&#xEA;n
                                            d&#x1B0;&#x1EDB;i &#x111;&#x1EC3; bi&#x1EBF;t c&#xE1;ch xoay nha.
                                        </p>
                                        <div class="d-block d-sm-flex justify-content-between">
                                            <div class="category">Hướng dẫn Mu <i class="fas fa-angle-right"></i> H&#x1EC7;
                                                th&#x1ED1;ng &#xE9;p &#x111;&#x1ED3;
                                            </div>
                                            <div class="blog-time"><i class="far fa-clock"></i>&nbsp; 12/10/2021</div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-item">
                                <a class="d-block d-sm-flex"
                                   href="/huong-dan/huong-dan-xoay-canh-2.5-wing-2.5-mu-online-12.htm">
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
                                            Wing 2.5 c&#xF2;n g&#x1ECD;i l&#xE0; nh&#x1EEF;ng &#x111;&#xF4;i c&#xE1;nh b&#x1ECB;
                                            nguy&#x1EC1;n r&#x1EE7;a b&#x1EDF;i n&#xF3; &#x111;&#x1B0;&#x1EE3;c ch&#x1EBF;
                                            t&#x1EA1;o b&#x1EDF;i
                                            c&#xE1;c b&#x1EAD;c th&#x1EA7;y ph&#xF9; th&#x1EE7;y &#x1EDF; Arca, c&#xF3;
                                            nhi&#x1EC1;u ngu&#x1ED3;n tin cho r&#x1EB1;ng &#x111;&#xF4;i c&#xE1;nh n&#xE0;y
                                            &#x111;&#x1B0;&#x1EE3;c t&#x1EA1;o
                                            t&#x1EEB; nh&#x1EEF;ng b&#x1ED9; ph&#x1EAD;n c&#x1EE7;a nh&#x1EEF;ng con qu&#xE1;i
                                            v&#x1EAD;t c&#xF3; s&#x1EE9;c m&#x1EA1;nh v&#xF4; c&#xF9;ng kh&#x1EE7;ng khi&#x1EBF;p.
                                        </p>
                                        <div class="d-block d-sm-flex justify-content-between">
                                            <div class="category">Hướng dẫn Mu <i class="fas fa-angle-right"></i> H&#x1EC7;
                                                th&#x1ED1;ng &#xE9;p &#x111;&#x1ED3;
                                            </div>
                                            <div class="blog-time"><i class="far fa-clock"></i>&nbsp; 12/10/2021</div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-item">
                                <a class="d-block d-sm-flex"
                                   href="/huong-dan/huong-dan-xoay-canh-2-wing-2-mu-online-11.htm">
                                    <div class="img-blog">
                                        <img src="./assets/images/UwJ5KHS.jpg"
                                             title="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 2 (Wing 2) Mu Online"
                                             alt="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 2 (Wing 2) Mu Online"/>
                                    </div>
                                    <div class="blog-info">
                                        <h3>H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 2 (Wing 2) Mu Online</h3>
                                        <p class="description">
                                            H&#xF4;m nay m&#xEC;nh xin chia s&#x1EBD; l&#x1EA1;i c&#xE1;ch xoay C&#xE1;nh
                                            2 (Wing 2) trong Game Mu Online tr&#xEA;n PC &#x111;&#x1EC3; anh em n&#xE0;o
                                            ch&#x1B0;a bi&#x1EBF;t th&#xEC;
                                            c&#xF3; th&#x1EC3; tham kh&#x1EA3;o nha.
                                        </p>
                                        <div class="d-block d-sm-flex justify-content-between">
                                            <div class="category">Hướng dẫn Mu <i class="fas fa-angle-right"></i> H&#x1EC7;
                                                th&#x1ED1;ng &#xE9;p &#x111;&#x1ED3;
                                            </div>
                                            <div class="blog-time"><i class="far fa-clock"></i>&nbsp; 11/10/2021</div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-item">
                                <a class="d-block d-sm-flex"
                                   href="/huong-dan/huong-dan-xoay-canh-1-wing-1-mu-online-10.htm">
                                    <div class="img-blog">
                                        <img src="./assets/images/73NP0hZ.jpg"
                                             title="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 1 (Wing 1) Mu Online"
                                             alt="H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 1 (Wing 1) Mu Online"/>
                                    </div>
                                    <div class="blog-info">
                                        <h3>H&#x1B0;&#x1EDB;ng d&#x1EAB;n xoay c&#xE1;nh 1 (Wing 1) Mu Online</h3>
                                        <p class="description">
                                            C&#xE1;nh c&#x1EA5;p 1 l&#xE0; c&#xE1;nh c&#x1A1; s&#x1EDF;, c&#x169;ng c&#xF3;
                                            th&#x1EC3; n&#xF3;i n&#xF3; l&#xE0; b&#x1B0;&#x1EDB;c &#x111;&#x1EC7;m
                                            &#x111;&#x1EC3; b&#x1EA1;n b&#x1EAF;t
                                            &#x111;&#x1EA7;u cu&#x1ED9;c phi&#xEA;u l&#x1B0;u kh&#xE1;m ph&#xE1; v&#xE0;
                                            chinh ph&#x1EE5;c t&#x1EF1;a game MU online.
                                        </p>
                                        <div class="d-block d-sm-flex justify-content-between">
                                            <div class="category">Hướng dẫn Mu <i class="fas fa-angle-right"></i> H&#x1EC7;
                                                th&#x1ED1;ng &#xE9;p &#x111;&#x1ED3;
                                            </div>
                                            <div class="blog-time"><i class="far fa-clock"></i>&nbsp; 10/10/2021</div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-item">
                                <a class="d-block d-sm-flex"
                                   href="/huong-dan/huong-dan-ban-do-map-trong-mu-online-9.htm">
                                    <div class="img-blog">
                                        <img
                                                src="./assets/images/wxYDthL.jpg"
                                                title="H&#x1B0;&#x1EDB;ng d&#x1EAB;n b&#x1EA3;n &#x111;&#x1ED3; (MAP) trong MU Online"
                                                alt="H&#x1B0;&#x1EDB;ng d&#x1EAB;n b&#x1EA3;n &#x111;&#x1ED3; (MAP) trong MU Online"
                                        />
                                    </div>
                                    <div class="blog-info">
                                        <h3>H&#x1B0;&#x1EDB;ng d&#x1EAB;n b&#x1EA3;n &#x111;&#x1ED3; (MAP) trong MU
                                            Online</h3>
                                        <p class="description">
                                            H&#x1B0;&#x1EDB;ng d&#x1EAB;n chi ti&#x1EBF;t c&#xE1;c b&#x1EA3;n &#x111;&#x1ED3;
                                            trong game Mu Online: Lorencia, Noria, Devias, Tarkan, Kanturu, Lost Tower,
                                            Kalima, Raklion, Swamp of
                                            Calmness, Acheron...
                                        </p>
                                        <div class="d-block d-sm-flex justify-content-between">
                                            <div class="category">Hướng dẫn Mu <i class="fas fa-angle-right"></i> C&#x1A1;
                                                b&#x1EA3;n
                                            </div>
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
                    <a href="https://mumoira.tv/?utm_source=mumoira.tv&amp;utm_medium=default&amp;utm_campaign=mumoira_bRight"
                       title="Mu online" rel="nofollow noopener noreferrer" target="_blank">
                        <img src="./assets/images/9zJMnWF.gif" alt="Giới thiệu Mu Online - Mu online"
                             title="Giới thiệu Mu Online - Mu online" loading="lazy"/>
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
                        <img src="./assets/images/logo_bottom.png"
                             title="Mu Mới Ra - Kênh tổng hợp MU lớn nhất Việt Nam | MuMoiRa.tv"
                             alt="Mu Mới Ra - Kênh tổng hợp MU lớn nhất Việt Nam | MuMoiRa.tv"/>
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
                        <blockquote cite="https://www.facebook.com/mumoira.tv/" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/mumoira.tv/">Mu Mới Ra - Mumoira.tv</a></blockquote>
                    </div>
                    <ul class="f-info">
                        <li>
                            <a href="https://www.facebook.com/MuMoiRa.tv" title="Facebook Mu Mới Ra - Mumoira.tv"
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
                               title="Pinterest MUMOIRA.TV - Mu Mới Ra - Tổng Hợp Mu Online Lậu Mới Ra Hôm Nay"
                               target="_blank">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/mumoira.tv/" title="Instagram Mumoira.tv - Mu Mới Ra"
                               target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/MUMoiRaTV/"
                               title="Twitter MUMOIRA.TV - Tổng hợp Mu mới ra hôm nay" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://mumoiratv.tumblr.com/" title="Tumblr Mu Mới Ra (MUMOIRA.TV)"
                               target="_blank">
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
                            <a href="//www.dmca.com/Protection/Status.aspx?ID=c2cd9024-fccd-444d-a330-af1ed06ff01e"
                               title="DMCA.com Protection Status" class="dmca-badge" target="_blank"
                               rel="nofollow noopener">
                                <img src="https://images.dmca.com/Badges/_dmca_premi_badge_4.png?ID=c2cd9024-fccd-444d-a330-af1ed06ff01e"
                                     width="80" alt="DMCA.com Protection Status"/>
                            </a>
                            <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"
                                    type="e6fa910112ec689bf6e5e74c-text/javascript"></script>
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
                <hr/>
                <div class="col-md-12 text-center">
                    &#xA9; 2021 Mumoira.tv - Mu m&#x1EDB;i ra - Gi&#x1EDB;i thi&#x1EC7;u game Mu Online m&#x1EDB;i ra h&#xF4;m
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

        <a href="https://m.me/MuMoiRa.tv" title="Liên hệ với hỗ trợ của Mu Mới Ra qua chat Facebook Messenger"
           rel="nofollow noopener noreferrer" target="_blank" class="quick-contact">
            <img src="./assets/images/Messenger-icon.png"
                 alt="Liên hệ với hỗ trợ của Mu Mới Ra qua chat Facebook Messenger"/>
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