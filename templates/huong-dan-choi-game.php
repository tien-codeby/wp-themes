<?php
/**
 * Template Name: Huong dan choi game
 */
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mumoiravn.com
 */

?>
<?php get_header(); ?>

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
                    <?php
                    get_template_part('template-parts/posts/list');
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