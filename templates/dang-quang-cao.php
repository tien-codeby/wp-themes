<?php
/**
 * Template Name: Dang Quang Cao
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
            <p>Vui lòng điền đầy đủ thông tin bên dưới để đăng bài giới thiệu server Mu mới của bạn.</p>
            <p>Bài của bạn sẽ được kiểm duyệt trong vòng 24h.</p>

            <ads-form></ads-form>

        </div>
    </main>
    <script src="<?= get_template_directory_uri() ?>/js/app.min.js"></script>
</div>


<?php get_footer(); ?>
