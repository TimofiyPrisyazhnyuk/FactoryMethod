<?php

namespace FactoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}
