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
        $vars = [
            'path' => '../application/public/css/login.css',
            'bootstrap' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">'
        ];

        $this->view->render('Sign In', $vars);
        $this->loginData();
        $this->checkUser();

    }
    public function profileAction()
    {
        $vars = [
            'path' => '../application/public/css/profile.css',
            'bootstrap' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">'
        ];
        $this->view->render('Profile',$vars);
    }

    protected function loginData()
    {
        if(!empty($_POST['email']) && !empty($_POST['pass']))
        {
            $email = $_POST['email'];
            $pass = md5($_POST['pass']);
            $this->model->checkData($email,$pass);
        }
    }
    public function checkUser()
    {
        if(!empty($_SESSION['login']))
        {
            header('Location:account/profile');
        }
    }

}