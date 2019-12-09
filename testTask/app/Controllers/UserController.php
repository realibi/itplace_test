<?php

namespace Controllers;

use Core\Abstracts\Controller;
use Medoo\Medoo;

class UserController extends Controller {

    public $db;

    public function __construct()
    {
        $this->db = include "./app/config/database.php";
    }

    function getAll(){
        return json_encode($this->db->select('users', "*"));
    }

    function get($id){
        return json_encode($this->db->get('users', "*", ["id" => $id]));
    }

    function getUserRole($login){
        //$user = $this->db->get("users", "*", "*", [ "login" => $login ]);
        //return $user["role_id"];
        $users = $this->db->select("users", "*");

        foreach($users as $user){
            if($user["login"] == $login){
                return $user["role_id"];
            }
        }

        return false;
    }

    function deleteUser($id){
        $this->db->delete("users", [ "id" => $id ]);
    }

    function addUser($title, $content, $datetime, $author_id){
        $this->db->insert("news", 
        [ 
            "title" => $title,
            "content" => $content,
            "datetime" => $datetime,
            "author_id" => $author_id
        ]);
    }
}