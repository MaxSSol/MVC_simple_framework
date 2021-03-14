<?php
namespace application\models;

use application\core\Model;
use function application\lib\Dev\debug;

class News extends Model
{
public function getNews()
{
    $this->db->row('SELECT * FROM news');
}
}