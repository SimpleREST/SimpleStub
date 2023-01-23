<?php

/**
 *--------------------------------------------------------------------------
 * Create The SimpleStub Application
 *--------------------------------------------------------------------------
 *
 * Прежде всего создаем новый экземпляр приложения SimpleStub (простой заглушки),
 * который служит "клеем" для всех компонентов SimpleStub и является контейнером IoC
 * для системы, связывающей все различные части.
 * Данную прослойку пока решено оставить, для организации разделения проекта простой
 * заглушки (клиентской части) и фреймворка обслуживающего клиентский код. Цель -
 * минимизировать возможные изменения в основном коде проекта заглушки, переложить все
 * доделки и максимум изменений исключительно в библиотеку. Так будет решаться две задачи,
 * сохранение постоянной работоспособности и обратная совместимость.
 *
 */

$app = new Stub\Framework\Main\Application($_ENV['APP_BASE_PATH'] ?? dirname(__DIR__));
define('STUB_APP_VERSION', '0.0.7');

/**
 *--------------------------------------------------------------------------
 * Return The SimpleStub Application
 *--------------------------------------------------------------------------
 *
 * Этот скрипт возвращает экземпляр приложения. Экземпляр передается вызывающему
 * скрипту, чтобы мы могли отделить создание экземпляров от фактического запуска
 * приложения и отправки ответов.
 *
 */
return $app;
