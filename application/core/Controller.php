<?php
namespace application\core;
use function application\lib\Dev\debug;
use application\core\View;
abstract class Controller
{
    public $route;
    public $view;
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
    }

}