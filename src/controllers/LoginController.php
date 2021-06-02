<?php

namespace controllers;

class LoginController extends Controller
{

    public function __construct($view, $model)
    {
        parent::__construct($view, $model);
    }

    public function index()
    {
        if (isset($_GET['forget'])) {
        }

        if (isset($_POST['acao'])) {
            if ($_POST['user'] !== '' && $_POST['key'] !== '') {
                $login = $this->model->login($_POST['user'], $_POST['key']);
                if ($login) {
                    $_SESSION['user_access'] = true;
                    header('location:' . INCLUDE_PATH . 'dashboard');
                } else {
                    $this->view->erro('Senha inválida');
                }
            } else {
                $this->view->erro('Campos vazios não são permitidos');
            }
        }

        if (@$_SESSION['user_access'])
            header('location:' . INCLUDE_PATH . 'dashboard');
        else
            $this->view->render('login.php');
    }
}
