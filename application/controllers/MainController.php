<?php

namespace application\controllers;
use application\lib\Dev;
use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $vars = [
            'path' => '../application/public/css/main.css',
            'bootstrap' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">'
        ];
        $this->view->render('Главная страница',$vars);
    }
}