<?php

namespace App;

class Stub implements Application
{
    /**
     * The SimpleStub framework version.
     *
     * @var string
     */
    const VERSION = '0.0.1';

    private $params = [];

    public function __construct()
    {
        $this->params = include_once('./../config/config.php');
    }

    /**
     * Gets the value of the configuration parameter.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function get($key, $default = null)
    {
        return $this->params[$key] ?: $default;
    }

    public function version()
    {
        return static::VERSION;
    }
}