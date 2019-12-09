<?php

namespace Controllers;

use Core\Abstracts\Controller;
use Medoo\Medoo;

class NewsController extends Controller {

    public $db;

    public function __construct()
    {
        $this->db = include "./app/config/database.php";
    }

    function getNews(){
        return json_encode($this->db->select('news', "*"));
    }

    function deleteNews($id){
        $this->db->delete("news", [ "id" => $id ]);
    }

    function addNews($title, $content, $datetime, $author_id){
        $this->db->insert("news", 
        [ 
            "title" => $title,
            "content" => $content,
            "datetime" => $datetime,
            "author_id" => $author_id
        ]);
    }
}