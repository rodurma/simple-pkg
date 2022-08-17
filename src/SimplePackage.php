<?php

declare(strict_types=1);

namespace Rodurma\SimplePkg;

class SimplePackage
{
    public function __construct(private string $name)
    {
        
    }

    public function hello(): string
    {
        return vsprintf('Hello %s!!!', [$this->name]);
    }
}