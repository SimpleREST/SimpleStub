<?php

namespace Res\Values\De;

class Resources extends \Res\Values\Resources
{
    public function __construct()
    {
        parent::__construct();
        self::$base_title = "Der REST-API-Verwaltungsservice für einfache Verbindungen befindet sich in der Entwicklung";
    }
}