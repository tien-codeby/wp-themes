<div class="post-wrap" id="scroll-home">
    <div class="top-post">
        <div class="tool">
            <div class="row align-items-center">
                <div class="col-12 col-sm-7 filter-wrap">
                    <div class="d-flex justify-content-start align-items-center">
                        <p class="filter-title filter-search">Lọc theo:</p>
                        <div class="d-flex">
                            <a class="btn btn-sm btn-success me-2" href="/mu-alpha-test">
                                Alpha Test hôm nay
                            </a>
                            <a class="btn btn-sm btn-danger" href="/mu-open-beta">
                                Open beta hôm nay
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-5">
                    <form class="input-group" method="get" action="/tim-kiem-mu">
                        <input type="text" class="form-control txt_keyword" name="keyword" value=""
                               placeholder="Tìm kiếm MU mới ra ..."/>
                        <div class="input-group-append">
                            <button class="btn btn-search" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <h2 class="title">
            <span></span>
            Danh sách Mu mới ra miễn phí hôm nay
        </h2>
    </div>
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
    <div class="tool">
        <div class="row align-items-center">
            <div class="col-12 filter-wrap">
                <div class="link-version">
                    <p class="filter-title float-start">Tìm kiếm Mu theo phiên bản:</p>
                    <div class="float-start">
                        <a class="filter-btn filter-btn-season" href="/mu-version/season-2/6">Season
                            2</a>
                        <a class="filter-btn filter-btn-season" href="/mu-version/season-3/2">Season
                            3</a>
                        <a class="filter-btn filter-btn-season" href="/mu-version/season-6/3">Season
                            6</a>
                        <a class="filter-btn filter-btn-season" href="/mu-version/season-7/4">Season
                            7</a>
                        <a class="filter-btn filter-btn-season" href="/mu-version/season-16/19">Season
                            16</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
