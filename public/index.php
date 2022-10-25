<?php

use App\Stub;

require __DIR__ . '/../vendor/autoload.php';
//require_once __DIR__ .'/../boiler/Stub.php';
$app = new Stub();
?>
<!DOCTYPE html>
<html lang="<?php echo $app->get('base_lang', 'en') ?>">
<head>
    <title>Simple stub - The site is in the process of being created.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="<?php echo $app->get('base_charset', 'utf-8') ?>">
    <meta content="<?php echo $app->get('base_description', 'SimpleStub') ?>" name="description">
    <meta content="<?php echo $app->get('base_keywords', 'SimpleStub') ?>" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    !-- Template Main CSS File -->
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
<p><?php echo $app->version() ?></p>
<p>Разум — это Будда, а прекращение умозрительного мышления — это путь.
    Перестав мыслить понятиями и размышлять о путях существования и небытия,
    о душе и плоти, о пассивном и активном и о других подобных вещах,
    начинаешь осознавать, что разум — это Будда,
    что Будда — это сущность разума,
    и что разум подобен бесконечности.</p>
<!-- Template Main JS File -->
<script src="js/main.js"></script>
</body>
</html>
