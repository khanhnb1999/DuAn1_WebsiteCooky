<?php

class News extends controller {
    function index() {
        $getModel = $this->model("NewModel");
        $getAllNews = $getModel->getAllLimit("news","new_id","DESC",0,12);
        $this->view("news",
        [
            "news" => $getAllNews
        ]);
    }
}

?>