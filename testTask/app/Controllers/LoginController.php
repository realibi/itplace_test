<?php

namespace Controllers;

use Core\Abstracts\Controller;
use Models\Auth;

class LoginController extends Controller {

    public $db;
    public function __construct()
    {
        $this->db = include "./app/config/database.php";
    }

    function login($login, $password){
        $users = $this->db->select("users", "*");

        foreach ($users as $user) {
            if (($login == $user["login"]) && (md5($password) == $user["password"])) {
                return $user;
                break;
            }
        }
        return false;
    }
}