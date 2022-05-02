<div class="post-wrap" id="scroll-home">
    <div class="top-post">
        <?php get_template_part('template-parts/games/loc-theo'); ?>

        <h2 class="title">
            <span></span>
            Danh sách Mu mới ra miễn phí hôm nay
        </h2>
    </div>
    <?php
    $args = [
        'post_type' => 'game',
        'post_status' => 'publish',
        'tax_query' => [
            [
                'taxonomy' => 'loai-bai',
                'field' => 'slug',
                'terms' => 'VIP',
                'operator' => 'NOT IN'
            ],
        ]
    ];
    $termSeason = get_the_terms( $post->ID, 'season' );
    if($termSeason) {
        $args['tax_query'][] = [
            'taxonomy' => 'season',
            'field' => 'slug',
            'terms' => $termSeason[0]->slug,
        ];
    }
//echo '<pre>';
//var_dump($terms);
//echo '</pre>';
//die();
    $is_open = preg_match('#mu-open-beta#mis', get_permalink());
    $is_alpha = preg_match('#mu-alpha-test#mis', get_permalink());
    if ($is_open || $is_alpha) {
        $args['meta_query'][] = [
            'key' => $is_open ? 'open_beta' : 'alpha_test',
            'value' => array(date('Y/m/d', strtotime('-1 days')), date('Y/m/d', strtotime('1 days'))),
            'compare' => 'BETWEEN',
            'type' => 'DATE'
        ];
    }
    $queryGameThuong = new WP_Query($args);
    if ($queryGameThuong->have_posts()):?>
        <ul class="list-post">
            <?php
            $i = 0;
            while ($queryGameThuong->have_posts()): $queryGameThuong->the_post();
                $i++;
                get_template_part('template-parts/games/item-thuong', null, ['i' => $i]);
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
                    <a class="page-link" href="https://Mumoiravn.com/?page=1" tabindex="-1">
                        <i class="fa fa-angle-double-left"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="https://Mumoiravn.com/?page=1" tabindex="-1">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="https://Mumoiravn.com/?page=1">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="https://Mumoiravn.com/?page=2">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="https://Mumoiravn.com/?page=3">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="https://Mumoiravn.com/?page=4">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="https://Mumoiravn.com/?page=5">5</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="https://Mumoiravn.com/?page=6">6</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="https://Mumoiravn.com/?page=2">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="https://Mumoiravn.com/?page=14">
                        <i class="fa fa-angle-double-right"></i>
                    </a>
                </li>
            </ul>
        </section>
    </nav>
    <h1 style="font-size: 18px; text-align: center;">Mu Mới Ra Hôm Nay - Top Mu Online Private mới
        ra - Mumoiravn.com</h1>
    <?php
    get_template_part('template-parts/games/season');
    ?>
</div>
