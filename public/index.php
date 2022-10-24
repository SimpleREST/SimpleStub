<?php

use App\Stub;

require __DIR__ . '/../vendor/autoload.php';
//require_once __DIR__ .'/../boiler/Stub.php';
$app = new Stub();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Simple stub - The site is in the process of being created.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
</head>
<body>
<p><?php echo $app->version() ?></p>
<p><?php echo Stub::VERSION ?></p>
<p><?php $app->printOutVersion(); ?></p>
<p>Разум — это Будда, а прекращение умозрительного мышления — это путь.
    Перестав мыслить понятиями и размышлять о путях существования и небытия,
    о душе и плоти, о пассивном и активном и о других подобных вещах,
    начинаешь осознавать, что разум — это Будда,
    что Будда — это сущность разума,
    и что разум подобен бесконечности.</p>
</body>
</html>
