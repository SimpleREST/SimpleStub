<?php

use App\Stub;

require __DIR__ . '/../vendor/autoload.php';
//require_once __DIR__ .'/../boiler/Stub.php';
$app = new Stub();
?>
<!DOCTYPE html>
<html lang="<?php echo $app->get('base_lang', 'en') ?>">
<head>
    <title><?php echo $app->get('base_title', 'Website in development') ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php echo $app->get('base_charset', 'utf-8') ?>">
    <meta content="<?php echo $app->get('base_description', 'SimpleStub') ?>" name="description">
    <meta content="<?php echo $app->get('base_keywords', 'SimpleStub') ?>" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Template Main CSS File -->
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
<!-- ======= Header ======= -->
<header id="header">
    <div class="container-fluid">
        <div class="logo float-left">
            <h1 class="text-light"><a href="index.php"><span><?php echo $app->get('base_title', 'SimpleStub').$app->version() ?></span></a>
            </h1>
        </div>
        <div class="contact-link float-right">
            <a href="#contact" class="scrollto">Связаться с нами</a>
        </div>
    </div>
</header><!-- End #header -->
<nav></nav>
<div class="row">
    <!-- ======= Base Stub Section ======= -->
    <section id="stub">
        <div class="hero-container">
            <BR><BR>
            <h1>We Build Simple REST</h1>
            <h2><?php echo $app->get('base_note', 'SimpleStub / We Build').$app->version() ?></h2>
            <div class="countdown" data-count="2022/11/30"
                 data-template="до старта сайта <BR> %w недель %d дней <br> %H:%M:%S"></div>


        </div>
    </section><!-- End Base Stub section -->
</div>
<footer></footer>

<!-- Vendor JS Files -->
<script src="vendor/components/jquery/jquery.min.js"></script>

<!-- Template Main JS File -->
<script src="js/main.js"></script>
</body>
</html>
