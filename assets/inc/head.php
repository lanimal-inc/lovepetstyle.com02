<html style="margin-top: 0 !important;" <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no,address=no,email=no">

    <script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KHDXZCD5');
    </script>

    <meta name="keywords" content="ペットシッター,東京,散歩代行,犬,猫">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/mediaquery_mobile.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/mediaquery_pc.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">

    <style type="text/css">
        .navbar-default .navbar-toggle .icon-bar { background-color: #f7e160; }
        .navbar-default .navbar-toggle { border-color: rgba(247, 225, 96, 0.3); }
        .navbar-default .navbar-toggle:focus,
        .navbar-default .navbar-toggle:hover {
            border-color: rgba(247, 225, 96, 0.3);
            background-color: rgba(255, 255, 255, 0);
        }
        .navbar-fixed-top .navbar-collapse,
        .navbar-fixed-bottom .navbar-collapse { max-height: 640px; }
    </style>

    <?php wp_head(); ?>
</head>