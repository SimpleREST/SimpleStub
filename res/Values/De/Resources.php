<?php

namespace Res\Values\De;

class Resources extends \Res\Values\Resources
{
    public function __construct()
    {
        parent::__construct();
        self::$base_title = "Service DER NAME der RESSOURCE befindet sich in der Entwicklung";
        self::$lang = "de";
    }
}