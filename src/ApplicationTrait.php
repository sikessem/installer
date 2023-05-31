<?php

namespace Sikessem\Installer;

trait ApplicationTrait
{
    public const DEFAULT_NAME = 'Sikessem Installer';

    public const DEFAULT_VERSION = 'v0.0.0';

    abstract public function __construct(string $name = self::DEFAULT_NAME, string $version = self::DEFAULT_VERSION);
}
