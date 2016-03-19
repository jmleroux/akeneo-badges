<?php
namespace JmLeroux\Components\Core;

class Version
{
    const VERSION = '0.1.0';

    public function getVersion()
    {
        return static::VERSION;
    }
}
