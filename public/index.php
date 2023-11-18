<?php

use App\Config;
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
$kernel->setConfig(new Config());

function getLocalResources(): BaseDefaultStubResource
{
    global $kernel;
    $c = $kernel->getConfig();
    if (!($c::isResourceLocaleEnabled())) {
        if (languageResourceExist($c::getDefaultLanguage())) {
            return getLanguageResource($c::getDefaultLanguage());
        } else {
            return new Resources();
        }
    } else {
        $uriLanguage = substr(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1, 2);
        if (!empty($uriLanguage) && languageResourceExist($uriLanguage)) {
            return getLanguageResource($uriLanguage);
        } else {
            if ($c::isAutomaticDetectionBrowserLanguageEnabled()) {
                $locale = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
            } else {
                $locale = $c::getDefaultLanguage();
            }
            if (languageResourceExist($locale)) {
                return getLanguageResource($locale);
            } else {
                return new Resources();
            }
        }
    }
}

function languageResourceExist(string $s): bool
{
    return class_exists('Res\Values\\' . ucfirst($s) . '\Resources');
}

function getLanguageResource(string $s): BaseDefaultStubResource
{
    $classNameString = "Res\Values\\" . ucfirst($s) . "\Resources";
    return new $classNameString();
}

$response = $kernel->getCurrentStub(getLocalResources());
$request = "Тестовый запрос";

$kernel->terminate($request, $response);
