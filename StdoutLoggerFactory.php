<?php

/**
 * Class StdoutLoggerFactory
 */
class StdoutLoggerFactory implements LoggerFactory
{
    /**
     * @return Logger
     */
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}
