<?php
namespace application\controllers;
use application\core\Controller;
use application\lib\Db;
use function application\lib\Dev\debug;

class NewsController extends Controller{

    public function showAction(){
        $this->view->render('Новости');
        $db = new Db();
        $params = [
            'id'=>2
        ];
        $data = $db->row('SELECT * FROM news WHERE id = :id ',$params);

    }
}