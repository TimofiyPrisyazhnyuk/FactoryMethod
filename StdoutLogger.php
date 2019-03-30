<?php

/**
 * Class StdoutLogger
 */
class StdoutLogger implements Logger
{
    /**
     * @param string $message
     */
    public function log(string $message)
    {
        echo $message;
    }
}
