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

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version()
    {
        return static::VERSION;
    }

    public function printOutVersion()
    {
        echo static::VERSION;
    }

}