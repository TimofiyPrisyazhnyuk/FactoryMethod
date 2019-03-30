<?php

/**
 * Class FileLogger
 */
class FileLogger implements Logger
{
    /**
     * @var string
     */
    private $filePath;

    /**
     * FileLogger constructor.
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * @param string $message
     */
    public function log(string $message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}
