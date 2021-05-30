<?php




function Autoload($class)
{
    if (file_exists('./src/functions/' . $class . '.php')) {
        include_once('./src/functions/' . $class . '.php');
    } else {
        die($class);
    }
}

spl_autoload_register('Autoload');

$app = new App();
$app->run();
