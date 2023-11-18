<?php

namespace Res\Values\De;

class Resources extends \Res\Values\Resources
{
    public function __construct()
    {
        parent::__construct();
        self::$base_title = "Der Service ist in der Entwicklung";
        self::$lang = "de";
    }
}