<?php

namespace Infocorp\Persist;

use Slim;

class Persist 
{
    protected $request;

    public function __construct(Slim $request)
    {
        $this->request = $request;
    }

    public function insert()
    {
        
    }
}