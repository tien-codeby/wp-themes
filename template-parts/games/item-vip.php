<?php
use JBZoo\Utils\Dates;
use JBZoo\Utils\Arr;

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$terms = get_the_terms(get_the_ID(), 'season');
$season = Arr::getField($terms ? $terms : [], 'name');
$terms = get_the_terms(get_the_ID(), 'mu-theo-loai');
$MuTheoLoai = Arr::getField($terms ? $terms : [], 'name');
$i = $args['i'];
?>
<li>
    <div class="d-flex item-vip">
        <div class="item-vip-left">
            <p class="stt"><?= $i ?></p>
            <a title="<?php the_title() ?>"
               href="<?php the_permalink(); ?>">
                [Chi tiết MU]
            </a>
        </div>
        <div class="item-vip-middle">
            <a
                class="item-img"
                title="<?php the_title() ?>"
                href="<?php the_permalink(); ?>"
            >
                <img
                    src="<?= $featured_img_url ?>"
                    alt="<?php the_title() ?>"
                    title="<?php the_title() ?>"
                />
            </a>
            <a
                class="item-title"
                title="<?php the_title() ?>"
                href="<?php the_permalink(); ?>"
            >
                <span class="d-stt"><?= $i ?>. </span>
                <?php the_title() ?>
            </a>
        </div>
        <div class="item-vip-right">
            <img src="<?= get_template_directory_uri() ?>/html/assets/images/gold-member-long-text.png"
                 alt="<?php the_title() ?>"
                 title="<?php the_title() ?>"/>
            <p class="hidden-md-up">
                Alpha: <?= Dates::human(rwmb_get_value('alpha_test'), 'd/m') ?>
                <span class="year">/<?= Dates::human(rwmb_get_value('alpha_test'), 'Y') ?></span>
                (<?= Dates::human(rwmb_get_value('alpha_test'), 'H:i') ?>)
            </p>
            <p class="hidden-md-up">
                Open: <?= Dates::human(rwmb_get_value('open_beta'), 'd/m') ?>
                <span class="year">/<?= Dates::human(rwmb_get_value('open_beta'), 'Y') ?></span>
                (<?= Dates::human(rwmb_get_value('open_beta'), 'H:i') ?>)
            </p>
        </div>
    </div>
    <div class="content-sub d-flex">
        <div class="item-vip-left"></div>
        <div class="content">
            <p><?php the_title() ?></p>
            <p><?php the_title() ?> <b><?php rwmb_the_value('ten_may_chu') ?></b>
                vào <?= Dates::human(rwmb_get_value('open_beta'), 'H:i') ?>
                ngày
                <?= Dates::human(rwmb_get_value('open_beta'), 'd/m/Y') ?></p>
            <p>
                Trang chủ:
                <a
                    class="text-red"
                    target="_blank"
                    href="<?php rwmb_the_value('trang_chu') ?>"
                    title="<?php the_title() ?>"
                    rel="nofollow noopener noreferrer"
                >
                    <?php rwmb_the_value('trang_chu') ?>
                </a>
            </p>
            <p>Phiên bản: <?= implode(',', $season) ?></p>
            <p>Exp: <?php rwmb_the_value('exp') ?>x -
                Drop: <?php rwmb_the_value('drop') ?>%</p>
            <p>Kiểu reset: <?= implode(',', $MuTheoLoai) ?></p>
            <p>Antihack mà Mu sử dụng: <?php rwmb_the_value('anti_hack') ?></p>
        </div>
    </div>
</li>
