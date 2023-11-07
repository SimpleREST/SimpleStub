<?php

use App\Http\Kernel;
use Res\Values\Resources;
use Stub\Framework\Contracts\Main\Application;
use Stub\Framework\Main\Assets\BaseDefaultStubResource;

/**
 *--------------------------------------------------------------------------
 * Данный скрипт - контейнер для запуска HTTP приложения
 *--------------------------------------------------------------------------
 *
 * Отвечает за связь проекта simpleStub с его фреймворком, организует работ
 * связь между клиентской частью кода и конфигурации заглушки с данными фреймворка.
 *
 */

define('HTTP_STUB_START', microtime(true));

/**
 *--------------------------------------------------------------------------
 * Регистрация автозагрузчика / Register The Auto Loader
 *--------------------------------------------------------------------------
 *
 * Регистрация автоматически сгенерированного загрузчика классов предоставленного Composer.
 * Нам просто нужно использовать это, согласно инструкции Https://getcomposer.org/doc/01-basic-usage.md!
 * Здесь подключается автоматически сгенерированный скрипт, для загрузки и пользования классов
 * предоставляемых подключаемыми Composer библиотеками, без дополнительной работы, чтобы нам
 * не пришлось беспокоиться о загрузке любого из наших классов вручную.
 *
 */

require __DIR__ . '/../vendor/autoload.php';

/**
 *--------------------------------------------------------------------------
 * Запуск приложения / Run The Application
 *--------------------------------------------------------------------------
 *
 * Создаем экземпляр класса приложения,
 * после чего регистрируем и обрабатываем сам запрос с помощью ядра HTTP.
 * Завершая процесс работы приложения ответ отправляется в браузер клиента.
 *
 */
/** @var Application $app */
require_once __DIR__ . '/../boiler/app.php';

$kernel = new Kernel($app);

function getLocalResources(): BaseDefaultStubResource
{
    $locale = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    $stringClassName = 'Res\Values\\' . ucfirst($locale) . '\Resources';
    if (class_exists($stringClassName)) {
        return new $stringClassName ();
    } else {
        return new Resources();
    }
}

$response = $kernel->getCurrentStub(getLocalResources());
$request = "Тестовый запрос";

$kernel->terminate($request, $response);
