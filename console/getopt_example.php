<?php

echo php_sapi_name().PHP_EOL;

$shortopts = 'u:p:d:t';

$longopts = [
    "user:", 
    "password:",
    "database:",
    "test"
];

$options = getopt($shortopts, $longopts);

var_dump($options);

$user = $options['u'] ?? ($options['user'] ?? '');
$password = $options['p'] ?? ($options['password'] ?? '');
$db = $options['d'] ?? ($options['database'] ?? '');
$test = (isset($options['t']) || isset($options['test']));
$message = "Trying to connect to database \"$db\" as user \"$user\" with password \"$password\"";
if ($test) {
  $message .= ' (in test mode)';
}

echo $message.PHP_EOL;