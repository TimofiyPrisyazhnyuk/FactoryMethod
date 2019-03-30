<?php

/**
 * Interface Logger
 */
interface Logger
{
    /**
     * @param string $message
     * @return mixed
     */
    public function log(string $message);
}
