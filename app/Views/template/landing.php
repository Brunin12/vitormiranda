<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitor Miranda | <?= $this->renderSection('title', true) ?></title>
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
    <?= $this->renderSection('pageStyles') ?>
</head>

<body cz-shortcut-listen="true">
    <?= $this->renderSection('main') ?>

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
    <?= $this->renderSection('pageScripts') ?>
</body>

</html>