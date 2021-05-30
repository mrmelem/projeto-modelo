<?php

class App
{
    public function run()
    {
        $url = ucfirst(isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'home');

        $controller = 'controllers\\' . $url . 'Controller';
        $model = 'models\\' . $url . 'Model';
        $view = 'views\\' . $url . 'View';

        //$controller = new $controller(new $model, new $view);
        //$controller->index();

        echo $url;
        echo "</br>";
        echo $controller;
        echo "</br>";
        echo $model;
        echo "</br>";
        echo $view;
        echo "</br>";
    }
}
