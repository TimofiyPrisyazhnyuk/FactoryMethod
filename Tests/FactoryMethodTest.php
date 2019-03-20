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
    /**
     * Test factory method.
     *
     * @return void
     */
    public function test()
    {
        new StdoutLoggerFactory();
        new FileLoggerFactory(sys_get_temp_dir());
    }
}
