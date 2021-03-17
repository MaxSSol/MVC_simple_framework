<?php

namespace application\models;
use application\core\Model;
use function application\lib\Dev\debug;

class Account extends Model
{
    public function checkData($email, $pass)
    {
        $sql = "SELECT email,password FROM users WHERE email = :email AND password = :pass";
        $params = [
            "email" => $email,
            "pass" => $pass
        ];
        $result = $this->db->row($sql,$params);
        if($result)
        {
            $param = ['email'=>$email];
            $login = $this->db->row('SELECT login FROM users WHERE email = :email',$param);
            $_SESSION['login'] = $login[0]['login'];
            header('Location:/MVC_Example/account/profile');
        }
    }
}





