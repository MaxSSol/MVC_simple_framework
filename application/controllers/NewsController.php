<?php
namespace application\controllers;
use application\core\Controller;
use application\lib\Db;
use function application\lib\Dev\debug;

class NewsController extends Controller{

    public function showAction(){
        $vars = [
            'bootstrap' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">'
        ];
        $this->view->render('Новости',$vars);
        $this->model->getNews();
    }
}