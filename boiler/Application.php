<?php

namespace App;

interface Application
{
    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version();
}