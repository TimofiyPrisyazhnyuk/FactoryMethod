<?php

namespace Tests;

use FileLoggerFactory;
use StdoutLoggerFactory;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class FactoryMethodTest
 * @package FactoryMethod\Tests
 */
class FactoryMethodTest
{
    /**
     * Test factory method.
     *
     * @return void
     */
    public function test()
    {
        echo (new StdoutLoggerFactory())->createLogger()->log('Log Errors');
        // or use ..
        (new FileLoggerFactory(sys_get_temp_dir()))->createLogger()->log('Log to tmp');
    }
}

// Run test
(new FactoryMethodTest())->test();