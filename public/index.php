<?php

use App\Stub;

require __DIR__ . '/../vendor/autoload.php';
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

    <!-- Google Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/simplerest/icofont/icofont.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
<!-- ======= Header ======= -->
<header id="header">
    <div class="container-fluid">
        <div class="logo float-left">
            <h1 class="text-light">
                <a href="index.php">
                    <span>
                        <?php echo $app->get('base_title', 'SimpleStub') . $app->version() ?>
                    </span>
                </a>
            </h1>
        </div>
        <div class="contact-link float-right">
            <a href="#contacts" class="scrollto">Связаться с нами</a>
        </div>
    </div>
</header>
<!-- ======= End Header ======= -->
<!--<nav></nav>-->
<div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
    <!-- ======= Base Stub Section ======= -->
    <section id="stub"
             style="background-image: url('img/<?php echo $app->get('base_background', 'simpleplug-base-bg.jpg') ?>');">
        <div class="stub-container">
            <BR><BR>
            <h1>We Build Simple REST</h1>
            <h2><?php echo $app->get('base_note', 'SimpleStub / We Build') . $app->version() ?></h2>
            <div id="countdown" class="countdown-timer"
                 data-deadline="<?php echo $app->get('countdown_deadline', '2025/12/30') ?>"
                 data-pattern="<?php echo $app->get('countdown_pattern', '%w w %d d %H:%M:%S') ?>"></div>
        </div>
    </section><!-- End Base Stub section -->
</div>
<main id="main">

    <!-- ======= Contact Us Section ======= -->
    <section id="contacts" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Наши контакты</h2>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="icofont-google-map"></i>
                        <h3>Адрес</h3>
                        <address>Россия, Санкт-Петербург. Проспект Энтузиастов д.30</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="icofont-phone"></i>
                        <h3>Телефонный номер</h3>
                        <p><a href="tel:+79119412700">+7 (911) 941 -- --</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="icofont-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@simplerest.ru">info@simplerest.ru</a></p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->
<footer></footer>
<script src="js/main.js"></script>
</body>
</html>