<?php

require __DIR__ .  '../bootstrap/app.php';

use Otus\Example;

$example = new Example();
echo $example->getName();