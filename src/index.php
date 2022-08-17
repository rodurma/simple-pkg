<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Rodurma\SimplePkg\SimplePackage;

$simple = new SimplePackage("Rodrigo");

echo $simple->hello();