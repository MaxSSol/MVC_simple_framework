<?php

namespace application\controllers;
use application\lib\Dev;
use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Главная страница');
    }
}