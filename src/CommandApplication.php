<?php

namespace Sikessem\Installer;

use Sikessem\Console\CommandApplication as BaseCommandApplication;

class CommandApplication extends BaseCommandApplication
{
    use ApplicationTrait;

    public function __construct(string $name = self::DEFAULT_NAME, string $version = self::DEFAULT_VERSION)
    {
        parent::__construct($name);
        $this->setVersion($version);
    }
}
