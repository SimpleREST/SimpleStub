<?php

namespace App;

use Res\Values\Language;
use Stub\Framework\Main\MainConfig;

class Config extends MainConfig
{
    public function __construct()
    {
        self::setLanguageSet([
            Language::RU => 'RU',
            Language::EN => 'EN',
            Language::DE => 'DE'
        ]);
        self::setDefaultLanguage(Language::RU);
        self::languageSelectorOn();
        self::resourceLocaleEnable();
        self::automaticDetectionBrowserLanguageON();
    }


}