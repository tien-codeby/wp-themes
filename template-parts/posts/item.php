<?php
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

?>
<li class="blog-item">
    <a class="d-block d-sm-flex"
       href="<?php the_permalink(); ?>">
        <div class="img-blog">
            <img src="<?= $featured_img_url ?>"
                 title="<?php the_title() ?>"
                 alt="<?php the_title() ?>"/>
        </div>
        <div class="blog-info">
            <h3><?php the_title() ?></h3>
            <p class="description">
                <?php the_excerpt() ?>
            </p>
            <div class="d-block d-sm-flex justify-content-between">
                <div class="category">Hướng dẫn Mu <!--<i class="fas fa-angle-right"/>-->
                </div>
                <div class="blog-time"><i class="far fa-clock"></i>&nbsp; <?= get_the_date( 'Y-m-d' ) ?></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </a>
</li>