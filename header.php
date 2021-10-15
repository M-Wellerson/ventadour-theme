<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    $title = get_the_title();
    switch (get_the_title()) {
        case 'Sources':
            $title = 'Les sources du Pestrin';
            break;
        case 'Presse':
            $title = 'Presse et Distinctions';
            break;
        case 'Ardèche':
            $title = 'Émerveillés par l\'Ardèche';
            break;
        case 'Portfolio':
            $title = 'Vos photos';
            break;
        case 'Ventes':
            $title = 'Points de ventes';
            break;
        case 'Ventadour':
            $title = 'Ventadour';
            break;
        case 'Chantemerle':
            $title = 'Chantemerle';
            break;
        default:
            $title = 'Les Sources du Pestrin';
            break;
    }
    if (is_home()) {
        $title = 'Les Sources du Pestrin';
    }

    ?>
    <title><?= $title ?> – Les meilleures eaux minérales de France</title>

    <meta name="description" content="C’est sur la commune de Meyras, une ancienne cité médiévale, au cœur des volcans ardéchois et du parc naturel régional que jaillissent Ventadour et Chantemerle: les meilleures eaux minérales de France.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <!-- <meta name="google-site-verification" content="9my--D_QiWkQ1mFYePO2XnXYFITjJgH6qOdI1gEdJd0" /> -->
    <!-- <meta name="google-site-verification" content="teQNfgYpll1Dy0eSMMPQaVWLSf_mHlGe2nF-Qsv_F28" /> -->
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <?php wp_head(); ?>

    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/screen.min.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/swiper/dist/css/swiper.min.css" media="screen, projection" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/all.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slider-home.js" defer></script>

    <script>
        globalThis._state = {
            base: "<?= get_template_directory_uri() ?>",
            domain: "<?= get_site_url() ?>"
        }
    </script>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>

<body>