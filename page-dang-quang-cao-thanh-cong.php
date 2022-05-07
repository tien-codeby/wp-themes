<?php
/**
 * Template Name: Dang Quang Cao Thanh Cong
 */
get_header(); ?>

<!DOCTYPE HTML>
<html lang="vi-VN">
<head>

    <link href="<?= get_template_directory_uri() ?>/css/custom-mmr.min.css?v=20201210"
          rel="stylesheet" media="all" onload="this.media='all'"/>

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/mumoira-main.min.css?v=20201210"/>

    <link rel="stylesheet"
          href="<?= get_template_directory_uri() ?>/css/mumoira-post-newgame.min.css?v=20201210"/>

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/mumoira-main-2.min.css?v=20201210"/>

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/mumoira-search.min.css?v=20201210"
          media="all" onload="this.media='all'"/>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/style-cf.min.css?v=20201210" media="all"
          onload="this.media='all'"/>

    <script src="https://cdn.tiny.cloud/1/x02uh8wi045y1ru9c7woje3nctqnylxq0pjlh2r5ruvrhjln/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
    </script>
</head>

<div id="app">
    <main class="main" id="mumoira-middle-content">
        <div class="posts-container container">
            <div class="text-center p-2 rounded mb-3 flex items-center justify-center" style="min-height: 50vh">
                <div class="">
                <?php the_content(); ?>
                </div>
            </div>
        </div>
    </main>
    <script src="<?= get_template_directory_uri() ?>/js/app.min.js"></script>
</div>


<?php get_footer(); ?>
