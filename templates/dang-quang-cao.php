<?php
/**
 * Template Name: Dang Quang Cao
 */
?>
<?php get_header(); ?>

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

<!--<body class="blog sidebar-primary" data-new-gr-c-s-check-loaded="14.1058.0" data-gr-ext-installed="">-->

<div id="app">
    <main class="main" id="mumoira-middle-content">
        <div class="posts-container container">
            <p>Vui lòng điền đầy đủ thông tin bên dưới để đăng bài giới thiệu server Mu mới của bạn.</p>
            <p>Bài của bạn sẽ được kiểm duyệt trong vòng 24h.</p>
            <div class="con-form">
                <div id="noticeMsg"></div>

                <ads-form></ads-form>
            </div>

            <p style="color: #8256c5; font-weight: 600; margin-top: 20px;">Lưu ý:</p>
            <ul>
                <li>Các Mu có bài giới thiệu sơ sài sẽ không được duyệt</li>
                <li>Bài viết bạn gửi sẽ được đăng lên trong vòng không quá 24h</li>
                <li>Bài viết của bạn phải điền đầy đủ các thông tin bắt buộc</li>
                <li>Các mu với tên miền miễn phí (vd: myvnc.com, no-ip.com...) sẽ không được duyệt.</li>
                <li>Nếu có bất kỳ thắc mắc nào, bạn vui lòng <a href="https://mumoira.info/lien-he/"
                                                                title="Liên hệ trực tiếp với hỗ trợ của website Mumoira.info">liên
                        hệ trực tiếp</a> để được hỗ trợ.
                </li>
            </ul>
            <hr/>
            <div id="xemthu"></div>
        </div>
    </main>
    <script src="<?= get_template_directory_uri() ?>/js/app.min.js"></script>
</div>
<!--</body>-->
<!--</html>-->


<?php get_footer(); ?>
