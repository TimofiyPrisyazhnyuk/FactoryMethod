<?php

/**
 * Interface LoggerFactory
 */
interface LoggerFactory
{
    /**
     * @return Logger
     */
    public function createLogger(): Logger;
}
