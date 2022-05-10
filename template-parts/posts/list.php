<div class="tool" id="scroll-blog">
    <div class="row  align-items-center">
        <div class="col-12">
            <form class="input-group" method="get" action="/huong-dan-choi-mu-online-pc">
                <input value="<?= @$_GET['keyword'] ?>" type="text" class="form-control txt_keyword" name="keyword" placeholder="Tìm kiếm hướng dẫn">
                <div class="input-group-append">
                    <button class="btn btn-search" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="blog-wrap">
    <h2 class="title !text-yellow-500">
        Hướng dẫn MU Online mới cập nhật
    </h2>
    <?php
    $currentPage = intval(isset($_GET['page1']) ? $_GET['page1'] : 1);
    $perPage = 10;
    $args = [
        's' => @$_GET['keyword'],
        'post_type' => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => $perPage,
        'paged' => $currentPage,
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
    $page1 = (get_query_var('page1')) ? get_query_var('page1') : 1;
    $total_pages = $queryPost->max_num_pages;
    $big = 999999999;
    wp_reset_postdata();
    ?>
    <nav class="mt-3 mb-3">
        <section class="">
            <div class="pagi pagination justify-content-center">
                <?php
                echo paginate_links(array(
                    'format' => '/huong-dan-choi-mu-online-pc/?page1=%#%',
                    'current' => max(1, $currentPage),
                    'total' => $queryPost->max_num_pages
                ));
                ?>
            </div>
        </section>
    </nav>
</div>
