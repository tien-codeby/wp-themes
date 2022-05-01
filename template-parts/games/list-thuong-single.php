<div class="post-wrap">
    <h2 class="title">
        Tin Mu mới nhất
    </h2>
    <?php
    $args = [
        'post_type' => 'game',
        'post_status'    => 'publish',
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
                get_template_part('template-parts/games/item-thuong', null, ['i' => $i]);
            endwhile;
            ?>
        </ul>
    <?php
    endif;
    wp_reset_postdata();
    ?>
</div>
