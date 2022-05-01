<div class="blog-wrap">
    <h2 class="title !text-yellow-500">
        Hướng dẫn MU Online mới cập nhật
    </h2>
    <?php
    $args = [
        'post_type' => 'post',
        'post_status'    => 'publish',
    ];
    $queryPost = new WP_Query($args);
    if ($queryPost->have_posts()):?>
    <ul class="blog-list">
        <?php
        while ($queryPost->have_posts()): $queryPost->the_post();
            get_template_part('template-parts/posts/item', null);
        endwhile;
        ?>
    </ul>
    <?php
    endif;
    ?>
</div>