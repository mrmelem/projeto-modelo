<?php

if (!isset($_ENV['prod'])) {
    $_ENV['INCLUDE_PATH'] = '/projeto-modelo/';
}

define("INCLUDE_PATH", $_ENV['INCLUDE_PATH']);

function Autoload($class)
{
    if (file_exists('./src/' . $class . '.php')) {
        include_once('./src/' . $class . '.php');
    } else {
        die($class);
    }
}

spl_autoload_register('Autoload');

$app = new App();
$app->run();
