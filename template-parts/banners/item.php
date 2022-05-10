<?php
$args1 = [
    'post_type' => 'banner',
    'post_status'    => 'publish',
    'tax_query' => [
        [
            'taxonomy' => 'position',
            'field' => 'slug',
            'terms' => $args['terms'],
        ],
    ]
];
$query = new WP_Query($args1);
if ($query->have_posts()):
    while ($query->have_posts()): $query->the_post();
    $image = \JBZoo\Utils\Arr::first(rwmb_get_value('file_advanced_e40i6fjkppm', ['size' => 'full']));
        ?>
        <a href="<?php rwmb_the_value('url') ?>"
           title="Mu online" rel="nofollow noopener noreferrer" target="_blank">
            <img src="<?= @$image['url'] ?>" alt="Giới thiệu Mu Online - Mu online"
                 title="Giới thiệu Mu Online - Mu online" loading="lazy"/>
        </a>
    <?php
    endwhile;
endif;
wp_reset_postdata();
?>
