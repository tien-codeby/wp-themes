<?php

use JBZoo\Utils\Dates;
use JBZoo\Utils\Arr;

get_header();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$terms = get_the_terms(get_the_ID(), 'season');
$season = Arr::getField($terms ? $terms : [], 'name');
$terms = get_the_terms(get_the_ID(), 'mu-theo-loai');
$MuTheoLoai = Arr::getField($terms ? $terms : [], 'name');
?>
    <!-- WP_BODY -->
    <section id="main">
        <div class="container-fluid d-p-0 d-sm-0">
            <div class="d-flex justify-content-between">
                <div class="banner-left">
                    <?php
                    get_template_part('template-parts/banners/item', null, ['terms' => 'banner-trai']);
                    ?>
                </div>
                <div class="content-middle">
                    <div class="top-banner">
                        <?php
                        get_template_part('template-parts/banners/item', null, ['terms' => 'banner-giua-to']);
                        get_template_part('template-parts/banners/item', null, ['terms' => 'banner-giua-nho']);
                        ?>
                    </div>
                    <div class="detail-wrap" id="scroll-detail">
                        <?php
                        get_template_part('template-parts/games/loc-theo');
                        ?>
                        <div class="post-detail-wrap">
                            <h1><?php the_title() ?></h1>
                            <div class="post-content d-block">
                                <?php if ($featured_img_url): ?>
                                    <figure class="img-post">
                                        <img src="<?= $featured_img_url ?>"
                                             title="<?php the_title() ?>"
                                             alt="<?php the_title() ?>">
                                    </figure>
                                <?php else: ?>
                                    <figure class="img-post">
                                        <img src="https://i.imgur.com/OzNoPQY.jpg"/>
                                    </figure>
                                <?php endif; ?>
                                <div class="d-block d-sm-flex">
                                    <!--                                    <div class="img-share">
                                                                            <img src="https://i.imgur.com/K3zKsmt.jpg"
                                                                                 title="Mu M???i ra, MU LIFE - Season 6 Exp 100x - Drop 10% - KO TOP N???P - TOP PH?? H???"
                                                                                 alt="Mu M???i ra, MU LIFE - Season 6 Exp 100x - Drop 10% - KO TOP N???P - TOP PH?? H???">
                                                                        </div>-->
                                    <div class="content-text ">

                                        <p>
                                            <b>Trang ch???:</b>
                                            <a
                                                    href="<?php rwmb_the_value('trang_chu') ?>"
                                                    target="_blank" rel="nofollow noopener noreferrer">
                                                <?php rwmb_the_value('trang_chu') ?>
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>
                                        </p>
                                        <p>
                                            <b>Fanpage h??? tr???:</b> <a
                                                    href="<?php rwmb_the_value('fanpage_ho_tro') ?>"
                                                    target="_blank" title="Fanpage h??? tr???"
                                                    rel="nofollow noopener noreferrer">
                                                <?php rwmb_the_value('fanpage_ho_tro') ?>
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>
                                        </p>
                                        <p><b>Phi??n b???n:</b> <?= implode(',', $season) ?> - <b>M??y
                                                ch???:</b> <?php rwmb_the_value('ten_may_chu') ?></p>
                                        <p><b>Lo???i Mu:</b> <?= implode(',', $MuTheoLoai) ?>,
                                            Exp <?php rwmb_the_value('exp') ?>x, Drop <?php rwmb_the_value('drop') ?>%
                                        </p>
                                        <p>
                                            <b>Alpha
                                                Test:</b> <?= Dates::human(rwmb_get_value('alpha_test'), 'd/m/Y') ?>
                                            (<?= Dates::human(rwmb_get_value('alpha_test'), 'H:i') ?>)
                                            - <b>Open
                                                Beta:</b> <?= Dates::human(rwmb_get_value('open_beta'), 'd/m/Y') ?>
                                            (<?= Dates::human(rwmb_get_value('open_beta'), 'H:i') ?>)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox"></div>

                            <div class="detail-game" id="autolinker">
                                <?php
                                the_content();
                                ?>
                                <hr/>
                                <p>
                                    ??????? Ghi ch?? b???i Mumoiravn.com: n???u b??i gi???i thi???u mu m???i ra c?? like & share nh???n
                                    code game, vui l??ng tham gia tr???c ti???p t???i Fanpage c???a H?? N???i Mu theo ???????ng d???n sau:
                                    https://www.facebook.com/Mumoiravn.com
                                </p>
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/autolinker/3.15.0/Autolinker.min.js"
                                    integrity="sha512-I3G6EZwC5S8QDBRI8UYriGE7RGmvbOFgA407DnC/pKTF72kcN+AhdBnB7kc9o1hdJ3pFccd+z4lpfYkFV9nx2Q=="
                                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                            <script>
                                var autolinkerEl = document.getElementById('autolinker');
                                autolinkerEl.innerHTML = Autolinker.link(autolinkerEl.innerHTML);
                            </script>
                        </div>
                        <?php
                        get_template_part('template-parts/games/season');
                        ?>
                    </div>
                    <div class="hr"></div>
                    <?php
                    get_template_part('template-parts/games/list-thuong-single');
                    ?>
                </div>
                <div class="banner-right">
                    <?php
                    get_template_part('template-parts/banners/item', null, ['terms' => 'banner-phai']);
                    ?>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>