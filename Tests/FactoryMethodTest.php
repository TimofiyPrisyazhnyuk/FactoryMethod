<?php

namespace FactoryMethod\Tests;

use FactoryMethod\FileLoggerFactory;
use FactoryMethod\StdoutLoggerFactory;

require __DIR__ . "/../Logger.php";
require __DIR__ . "/../LoggerFactory.php";

foreach (glob("*.php") as $filename) {
    if (file_exists($file = __DIR__ . '/../' . $filename)) {
        require_once $file;
    }
}

class FactoryMethodTest
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        return $loggerFactory->createLogger();
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        return $loggerFactory->createLogger();
    }
}

$test = new FactoryMethodTest();
print_r($test->testCanCreateFileLogging());
echo "\n";
print_r($test->testCanCreateStdoutLogging());
echo "\n";
