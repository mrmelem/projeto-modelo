<?php

class App
{
    public function run()
    {
        $url = ucfirst(isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'home');

        $controller = 'controllers\\' . $url . 'Controller';
        $model = 'models\\' . $url . 'Model';
        $view = 'views\View';

        $controller = new $controller(new $view, new $model);
        $controller->index();
    }
}
