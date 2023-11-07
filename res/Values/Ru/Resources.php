<?php

namespace Res\Values\Ru;

class Resources extends \Res\Values\Resources
{
    public function __construct()
    {
        parent::__construct();
        self::$base_title = "Сервис НАИМЕНОВАНИЕ РЕСУРСА находится в разработке";
        self::$lang = "ru";
    }
}