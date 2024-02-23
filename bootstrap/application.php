<?php

$application = new Brick\Brick\Core\Application(
    $_ENV["APPLICATION_BASE_PATH"] ?? dirname(__DIR__)
);

return $application;