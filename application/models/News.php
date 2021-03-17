<?php
namespace application\models;

use application\core\Model;
use function application\lib\Dev\debug;

class News extends Model
{
public function getNews()
{
    $result = $this->db->row('Select * FROM news');
    $img1 = $result[0]['img'];
    $params = [
        'img1' => $img1
    ];
    return $params;
}
}