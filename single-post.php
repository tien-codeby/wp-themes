<?php
use JBZoo\Utils\Dates;
use JBZoo\Utils\Arr;

get_header();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
//$terms = get_the_terms(get_the_ID(), 'season');
//$season = Arr::getField($terms ? $terms : [], 'name');
//$terms = get_the_terms(get_the_ID(), 'mu-theo-loai');
//$MuTheoLoai = Arr::getField($terms ? $terms : [], 'name');
?>
    <!-- WP_BODY -->
    <section id="main">
        <div class="container-fluid d-p-0 d-sm-0">
            <div class="d-flex justify-content-between">
                <div class="banner-left">
                    <?php
                    get_template_part('template-parts/banners/item', null, ['terms' => 'banner-trai']);
                    ?>
                </div>
                <div class="content-middle">
                    <div class="top-banner">
                        <?php
                        get_template_part('template-parts/banners/item', null, ['terms' => 'banner-giua-to']);
                        get_template_part('template-parts/banners/item', null, ['terms' => 'banner-giua-nho']);
                        ?>
                    </div>
                    <div class="tool" id="scroll-blog">
                        <div class="row  align-items-center">
                            <div class="col-12">
                                <form class="input-group" method="get" action="/huong-dan-choi-mu-online">
                                    <input type="text" class="form-control txt_keyword" name="keyword" placeholder="Tìm kiếm hướng dẫn">
                                    <div class="input-group-append">
                                        <button class="btn btn-search" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="blog-detail">
                        <div class="info-detail">
                            <h1><?php the_title(); ?></h1>
                            <div class="des-wrap d-block d-sm-flex">
                                <figure class="img-cover">
                                    <img src="<?= $featured_img_url ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                                </figure>
                                <div class="description">
                                    <p class="">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="share d-flex justify-content-between align-items-center mt-3 mb-5">
                            <div class="time">
                                <b><i class="far fa-clock"></i> <?= get_the_date( 'Y-m-d | H:i' ) ?></b>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="col-12">
                            <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
<!--
                    <div class="tool mt-5">
                        <div class="row  align-items-center">
                            <div class="col-12 filter-wrap">
                                <div class="link-version ">
                                    <p class="filter-title text-center">Các bài hướng dẫn liên quan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-wrap">
                        <ul class="blog-list">
                            <li class="blog-item">
                                <a class="d-block d-sm-flex" href="/huong-dan/huong-dan-xoay-canh-2.5-wing-2.5-mu-online-12.htm">
                                    <div class="img-blog">
                                        <img width="260" height="125" src="https://i.imgur.com/GiHgQGS.jpg" title="Hướng dẫn xoay cánh 2.5 (Wing 2.5) Mu Online" alt="Hướng dẫn xoay cánh 2.5 (Wing 2.5) Mu Online">
                                    </div>
                                    <div class="blog-info">
                                        <h3>Hướng dẫn xoay cánh 2.5 (Wing 2.5) Mu Online</h3>
                                        <p class="description">Wing 2.5 còn gọi là những đôi cánh bị nguyền rủa bởi nó được chế tạo bởi các bậc thầy phù thủy ở Arca, có nhiều nguồn tin cho rằng đôi cánh này được tạo từ những bộ phận của những con quái vật có sức mạnh vô cùng khủng khiếp.</p>
                                        <div class="d-block d-sm-flex justify-content-between">
                                            <div class="category">
                                                Hướng dẫn Mu <i class="fas fa-angle-right"></i> Hệ thống ép đồ
                                            </div>
                                            <div class="blog-time">
                                                <i class="far fa-clock"></i>&nbsp; 12/10/2021
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-item">
                                <a class="d-block d-sm-flex" href="/huong-dan/huong-dan-xoay-canh-2-wing-2-mu-online-11.htm">
                                    <div class="img-blog">
                                        <img width="260" height="125" src="https://i.imgur.com/UwJ5KHS.jpg" title="Hướng dẫn xoay cánh 2 (Wing 2) Mu Online" alt="Hướng dẫn xoay cánh 2 (Wing 2) Mu Online">
                                    </div>
                                    <div class="blog-info">
                                        <h3>Hướng dẫn xoay cánh 2 (Wing 2) Mu Online</h3>
                                        <p class="description">Hôm nay mình xin chia sẽ lại cách xoay Cánh 2 (Wing 2) trong Game Mu Online trên PC để anh em nào chưa biết thì có thể tham khảo nha.</p>
                                        <div class="d-block d-sm-flex justify-content-between">
                                            <div class="category">
                                                Hướng dẫn Mu <i class="fas fa-angle-right"></i> Hệ thống ép đồ
                                            </div>
                                            <div class="blog-time">
                                                <i class="far fa-clock"></i>&nbsp; 11/10/2021
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-item">
                                <a class="d-block d-sm-flex" href="/huong-dan/huong-dan-xoay-canh-1-wing-1-mu-online-10.htm">
                                    <div class="img-blog">
                                        <img width="260" height="125" src="https://i.imgur.com/73NP0hZ.jpg" title="Hướng dẫn xoay cánh 1 (Wing 1) Mu Online" alt="Hướng dẫn xoay cánh 1 (Wing 1) Mu Online">
                                    </div>
                                    <div class="blog-info">
                                        <h3>Hướng dẫn xoay cánh 1 (Wing 1) Mu Online</h3>
                                        <p class="description">Cánh cấp 1 là cánh cơ sở, cũng có thể nói nó là bước đệm để bạn bắt đầu cuộc phiêu lưu khám phá và chinh phục tựa game MU online. </p>
                                        <div class="d-block d-sm-flex justify-content-between">
                                            <div class="category">
                                                Hướng dẫn Mu <i class="fas fa-angle-right"></i> Hệ thống ép đồ
                                            </div>
                                            <div class="blog-time">
                                                <i class="far fa-clock"></i>&nbsp; 10/10/2021
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="view-more text-center">
                            <a class="btn btn-danger btn-sm-d" href="/huong-dan-choi-mu-online">
                                <i class="fa fa-eye"></i>
                                Hiển thị thêm bài hướng dẫn
                            </a>
                        </div>
                    </div>
                    -->
                    <?php
                    get_template_part('template-parts/posts/list-single');
                    ?>
                </div>
                <div class="banner-right">
                    <?php
                    get_template_part('template-parts/banners/item', null, ['terms' => 'banner-phai']);
                    ?>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>