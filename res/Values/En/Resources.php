<?php

namespace Res\Values\En;

class Resources extends \Res\Values\resources
{
    public function __construct()
    {
        parent::__construct();
        self::$base_title = "The service is under development";
        self::$lang = "en";
    }
}