<?php

namespace Brick\Brick\Core;

class Application
{

    protected string|null $basePath;

    function __construct(string|null $basePath) {
        $this->basePath = $basePath;
    }
   
    
}