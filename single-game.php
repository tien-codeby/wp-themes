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
                                             title="Mu Mới ra, MU LIFE - Season 6 Exp 100x - Drop 10% - KO TOP NẠP - TOP PHÚ HỘ"
                                             alt="Mu Mới ra, MU LIFE - Season 6 Exp 100x - Drop 10% - KO TOP NẠP - TOP PHÚ HỘ">
                                    </div>-->
                                    <div class="content-text ">

                                        <p>
                                            <b>Trang chủ:</b>
                                            <a
                                                    href="<?php rwmb_the_value('trang_chu') ?>"
                                                    target="_blank" rel="nofollow noopener noreferrer">
                                                <?php rwmb_the_value('trang_chu') ?>
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>
                                        </p>
                                        <p>
                                            <b>Fanpage hỗ trợ:</b> <a
                                                    href="<?php rwmb_the_value('fanpage_ho_tro') ?>"
                                                    target="_blank" title="Fanpage hỗ trợ"
                                                    rel="nofollow noopener noreferrer">
                                                <?php rwmb_the_value('fanpage_ho_tro') ?>
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>
                                        </p>
                                        <p><b>Phiên bản:</b> <?= implode(',', $season) ?> - <b>Máy chủ:</b> <?php rwmb_the_value('ten_may_chu') ?></p>
                                        <p><b>Loại Mu:</b> <?= implode(',', $MuTheoLoai) ?>, Exp <?php rwmb_the_value('exp') ?>x, Drop <?php rwmb_the_value('drop') ?>%</p>
                                        <p>
                                            <b>Alpha Test:</b> <?= Dates::human(rwmb_get_value('alpha_test'), 'd/m/Y') ?>
                                            (<?= Dates::human(rwmb_get_value('alpha_test'), 'H:i') ?>)
                                            - <b>Open Beta:</b> <?= Dates::human(rwmb_get_value('open_beta'), 'd/m/Y') ?>
                                            (<?= Dates::human(rwmb_get_value('open_beta'), 'H:i') ?>)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox"></div>

                            <div class="detail-game">
                                <?php
                                the_content();
                                ?>
                                <hr/>
                                <p>
                                ️🏆 Ghi chú bởi Mumoiravn.com: nếu bài giới thiệu mu mới ra có like & share nhận code game, vui lòng tham gia trực tiếp tại Fanpage của Hà Nội Mu theo đường dẫn sau: https://www.facebook.com/Mumoiravn.com
                                </p>
                            </div>
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