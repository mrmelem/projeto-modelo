<?php

session_start();

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
