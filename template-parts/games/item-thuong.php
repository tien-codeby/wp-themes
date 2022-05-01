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
    <div class="d-block d-sm-flex justify-content-between align-items-center item-post">
        <div class="item-post-left">
            <p class="stt"><?= $i ?></p>
        </div>
        <div class="item-post-middle">
            <a class="item-title" title="<?php the_title() ?>" href="<?php the_permalink(); ?>">
                <span class="d-stt"><?= $i ?>. </span> <?php the_title() ?>
            </a>
            <div class="post-info">
                <div class="info-line d-flex">
                    <div class="key-value">
<!--                        <div class="key">- Sever:</div>-->
                        <div class="value">Khai mở MC: <?php rwmb_the_value('ten_may_chu') ?></div>
                    </div>
                    <div class="key-right">
                        <div class="key">- Alpha Test:</div>
                        <div class="value"><?= Dates::human(rwmb_get_value('alpha_test'), 'd/m') ?><span class="year">/<?= Dates::human(rwmb_get_value('alpha_test'), 'Y') ?></span>
                            (<?= Dates::human(rwmb_get_value('alpha_test'), 'H:i') ?>)
                        </div>
                    </div>
                </div>
                <div class="info-line d-flex">
                    <div class="key-value">
                        <div class="key">- Phiên Bản:</div>
                        <div class="value"><?= implode(',', $season) ?></div>
                    </div>
                    <div class="key-right">
                        <div class="key">- Open Beta:</div>
                        <div class="value text-bold-red"><?= Dates::human(rwmb_get_value('open_beta'), 'd/m') ?>
                            <span class="year">/<?= Dates::human(rwmb_get_value('open_beta'), 'Y') ?></span>
                            (<?= Dates::human(rwmb_get_value('open_beta'), 'H:i') ?>)
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-post-right text-center">
            <?php if(Dates::isToday(rwmb_get_value('open_beta'))): ?>
            <div class="text-bold-red">Open Beta hôm nay</div>
            <?php endif; ?>
            <?php if(Dates::isTomorrow(rwmb_get_value('open_beta'))): ?>
            <div class="text-bold-red">Open Beta ngày mai</div>
            <?php endif; ?>
            <?php if(Dates::isYesterday(rwmb_get_value('open_beta'))): ?>
            <div class="text-bold-red">Open Beta hôm qua</div>
            <?php endif; ?>
        </div>
    </div>
    <div class="content-sub d-block d-sm-flex">
        <div class="item-vip-left"></div>
        <div class="content">
            <p><?php the_title() ?></p>
            <p><?php the_title() ?> <b>Khai mở MC: <?php rwmb_the_value('ten_may_chu') ?></b> vào <?= Dates::human(rwmb_get_value('open_beta'), 'H:i') ?>
                ngày <?= Dates::human(rwmb_get_value('open_beta'), 'd/m/Y') ?></p>
            <p>Exp: <?php rwmb_the_value('exp') ?>x - Drop: <?php rwmb_the_value('drop') ?>%</p>
            <p>Kiểu reset: <?= implode(',', $MuTheoLoai) ?></p>
<!--            <p>Thể loại: Mu Custom thêm đồ mới</p>-->
            <p>Antihack mà Mu sử dụng: <?php rwmb_the_value('anti_hack') ?></p>
        </div>
    </div>
</li>

