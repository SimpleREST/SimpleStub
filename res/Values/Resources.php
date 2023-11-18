<?php

namespace Res\Values;

use Stub\Framework\Main\Assets\BaseDefaultStubResource;

class Resources extends BaseDefaultStubResource
{
    /**
     * Для переопределения значений строковых значений, назначенных по умолчанию,
     * нужно раскомментировать нужную строку, и вписать новое значение.
     * Дефолтное значение, равно как и информацию о строковой переменной
     * подскажет IDE, нужно только задержаться на имени переменной.
     */
    public function __construct()
    {
        self::$domain = "New project"; // Наименование проекта если общее для всех локализаций
        self::$contact_email_to_display = "admin@NewProject.Net"; // Адрес Электронной почты администратора домена
        self::$countdown_deadline = "2024-01-14T23:59:59+03:00";
        self::$lang = "en"; // Локализация основного текстового ресурса
    }
}