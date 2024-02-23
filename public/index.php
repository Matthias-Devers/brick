<?php

#===============================================================================
# The entry point for all requests entering the application
#-------------------------------------------------------------------------------
# Just some more Info for this project so that it is even easier to understand
# what is going on 
#===============================================================================

#-------------------------------------------------------------------------------
# Load autoloader

require dirname(__DIR__) . '/vendor/autoload.php';

#-------------------------------------------------------------------------------
# Load .env file variables

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

#-------------------------------------------------------------------------------
# Load

$application = require_once __DIR__ . "/../bootstrap/application.php";

print_r($application);