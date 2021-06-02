<?php

namespace controllers;

class DashboardController extends Controller
{

	public function __construct($view, $model)
	{
		parent::__construct($view, $model);
	}

	public function index()
	{
		if ($_SESSION['user_access']) {
			if (isset($_GET['product']))
				$this->product($_GET['product']);
			else if (isset($_GET['logout']))
				$this->logout();
			else
				$this->view->render('dashboard/index.php');
		} else {
			header('location:' . INCLUDE_PATH . 'login');
		}
	}

	public function product($url)
	{
		$page = 'dashboard/products/';
		if ($url == 'add') {
			if (isset($_POST['acao'])) {
				$this->model->setProduct($_POST);
				header('Location:' . INCLUDE_PATH . 'products');
			} else {
				$this->view->render($page . 'new.php');
			}
		} else if ($url == 'list') {
			if (isset($_GET['id']) && @$_GET['id'] !== '') {
				$this->view->render($page . 'edit.php');
			} else {
				$this->view->render($page . 'index.php');
			}
		} else {
			header('location:' . INCLUDE_PATH . 'dashboard');
		}
	}

	function logout()
	{
		session_destroy();
		header('location:' . INCLUDE_PATH);
	}


}
