<?php

namespace Res\Values\Ru;

use Res\Values\Language;

class Resources extends \Res\Values\Resources
{


    public function __construct()
    {
        parent::__construct();
        self::$base_title = "Сервис находится в стадии разработки";
        self::$lang = "ru";
    }
}