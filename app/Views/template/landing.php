<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitor Miranda | Gestão Estratégica</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('favicon-96x96.png')?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?= base_url('favicon.svg')?>" />
    <link rel="shortcut icon" href="<?= base_url('favicon.ico')?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('apple-touch-icon.png')?>" />
    <meta name="apple-mobile-web-app-title" content="Vitor Miranda" />
    <link rel="manifest" href="<?= base_url('manifest.json')?>" />
    <!-- CSS -->

    <!--font awesome cnd link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/style.min.css') ?>">
    <!--custom css file link-->
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
    <style>
        .lottie-animation-container {
            width: var(--lottie-animation-container-width);
            height: var(--lottie-animation-container-height);
            background-color: var(--lottie-animation-container-background-color);
            overflow: hidden;
            margin: var(--lottie-animation-margin)
        }

        .lottie-animation-container svg {
            transform: scale(var(--lottie-animation-scale))
        }
    </style>
    <style>
        .lottie-animation-container {
            width: var(--lottie-animation-container-width);
            height: var(--lottie-animation-container-height);
            background-color: var(--lottie-animation-container-background-color);
            overflow: hidden;
            margin: var(--lottie-animation-margin)
        }

        .lottie-animation-container svg {
            transform: scale(var(--lottie-animation-scale))
        }
    </style>
</head>

<body cz-shortcut-listen="true">
    <?= view('components/landing/header') ?>

    <!--Banner section start-->
    <?= view('components/landing/banner') ?>
    <!--Banner section end-->
    <!--LMS section Start-->
    <?= view('components/landing/lms') ?>
    <!--LMS section end-->

    <!--Feature section Start-->
    <?= view('components/landing/feature') ?>
    <!--Feature section end-->
    <!--Video section Start-->
    <?= view('components/landing/video') ?>
    <!--Video section end-->

    <!--Explorer section Start-->
    <?= view('components/landing/explorer') ?>
    <!--Explorer section end-->

    <!--Demo area section start-->
    <?= view('components/landing/demo') ?>
    <!--Demo area section end-->

    <!-- Features-two area section start-->
    <?= view('components/landing/feature2') ?>
    <!-- Feature-two section end-->

    <?= view('components/landing/brand') ?>

    <!-- Integration section start-->
    <?= view('components/landing/integration') ?>
    <!-- Integration section end-->

    <!-- Elamentor section start-->
    <?= view('components/landing/elementor') ?>
    <!-- Elamentor section end-->

    <!-- Responsive section start-->
    <?= view('components/landing/responsive') ?>
    <!-- Responsiv section end-->

    <!-- Inner Pages section start-->
    <?= view('components/landing/inner-page') ?>
    <!-- Inner Pages section end-->

    <!-- Event section start-->
    <?= view('components/landing/event') ?>
    <!--Event section end-->

    <!-- Inner Pages section start-->
    <?= view('components/landing/inner-page2') ?>
    <!-- Inner Pages section end-->

    <!-- Elements section start-->
    <?= view('components/landing/elements') ?>
    <!-- Elements section end-->

    <!-- Elements section start-->
    <?= view('components/landing/elements2') ?>
    <!-- Elements section end -->
    <!-- Faq's section start -->
    <?= view('components/landing/faq') ?>
    <!-- Faq's section end -->
    <!-- Footer section start -->
    <?= view('components/landing/footer') ?>
    <!-- Footer section end -->



    <!-- JS
    ============================================ -->
    <!-- <script src="./js/vendor/jquery.min.js"></script>
    <script src="./js/vendor/bootstrap.min.js"></script>
    <script src="./js/vendor/sal.min.js"></script>
    <script src="./js/vendor/paralax.min.js"></script>
    <script src="./js/vendor/paralax-scroll.min.js"></script>
    <script src="./js/vendor/imageloaded.min.js"></script>
    <script src="./js/vendor/jquery.counterup.js"></script>
    <script src="./js/vendor/magnifypopup.min.js"></script>
    <script src="./js/vendor/jquery.waypoints.js"></script> -->
    <!--custom js file link-->
    <!-- <script src="./js/main.js"></script> -->
    <script src="<?= base_url('assets/main.min.js') ?>"></script>
</body>

</html>