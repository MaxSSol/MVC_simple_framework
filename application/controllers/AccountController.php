<?php

namespace application\controllers;
use application\lib\Db;
use application\models\Account;
use function application\lib\Dev\debug;
use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        $this->view->render('Sign In');
        $this->checkData();
    }
    public function checkData()
    {
        if(!empty($_SESSION['email']))
        {
            header('Location:/MVC_Example/profile');
        }elseif(!empty(@$_POST['email'] && $_POST['pass']))
        {
            $this->model->checkData($_POST['email'],$_POST['pass']);
        }
    }
}