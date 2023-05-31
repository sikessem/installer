<?php

namespace Sikessem\Installer;

use Sikessem\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    use ApplicationTrait;

    public function __construct(string $name = self::DEFAULT_NAME, string $version = self::DEFAULT_VERSION)
    {
        parent::__construct($name, $version);
    }
}
