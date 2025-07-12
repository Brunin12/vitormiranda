<?= $this->extend('template/landing'); ?>

<?= $this->section('title') ?>Gestão Estratégica<?= $this->endSection() ?>

<?= $this->section('main') ?>
<?= view('components/landing/header') ?>

<!--Banner section start-->
<?= view('components/landing/banner') ?>
<!--Banner section end-->

<!--Feature section Start-->
<?= view('components/landing/feature') ?>
<!--Feature section end-->
<!--Video section Start-->
<?= view('components/landing/video') ?>
<!--Video section end-->

<!--Explorer section Start-->
<?= view('components/landing/explorer') ?>
<!--Explorer section end-->

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
<?= $this->endSection() ?>