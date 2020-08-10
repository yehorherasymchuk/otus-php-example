<?php

echo php_sapi_name() . PHP_EOL;

var_dump($argv);

if ($argc === 1) {
    var_dump(getenv());
} else {
    for ($i = 1; $i < $argc; $i++) {
        echo $argv[$i] . ' = ';
        var_dump(getenv($argv[$i]));
    }
}
