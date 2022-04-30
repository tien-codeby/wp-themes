<?php
$args = [
    'post_type' => 'game',
    'post_status'    => 'publish',
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
                get_template_part('template-parts/games/item-vip', null, ['i' => $i]);
            endwhile;
            ?>
        </ul>
    </div>
<?php
endif;
wp_reset_postdata();
?>