<?php

namespace Sikessem\Installer\Tests;

use Sikessem\Console\Application;
use Sikessem\Console\Tests\CommandTester;
use Sikessem\Installer\Command\Install;

it('can scaffold a new sikessem app', static function () {
    $scaffoldDirectoryName = 'out/my-app';
    $scaffoldDirectory = dirname(__DIR__)."/$scaffoldDirectoryName";

    if (file_exists($scaffoldDirectory)) {
        if (PHP_OS_FAMILY == 'Windows') {
            exec("rd /s /q \"$scaffoldDirectory\"");
        } else {
            exec("rm -rf \"$scaffoldDirectory\"");
        }
    }

    $app = new Application('Sikessem Installer');
    $app->add(new Install);

    $tester = new CommandTester($app->find('new'));

    $statusCode = $tester->execute(['name' => $scaffoldDirectoryName]);

    expect($statusCode)->toEquals(0);
});
