<?php

namespace application\models;
use application\core\Model;
use function application\lib\Dev\debug;

class Account extends Model
{
public function checkData($email,$pass)
{
    $sql = 'SELECT email,pass FROM users WHERE email = :email AND pass = :pass';
    $params = [
      "email" => "$email",
      "pass" => "$pass"
    ];

    if($this->db->query($sql,$params)){
        $_SESSION['email'] = $email;
        header('Location:/MVC_Example/');
    }

}


}