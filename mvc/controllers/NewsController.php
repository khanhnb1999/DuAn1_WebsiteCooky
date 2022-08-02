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

    function newDetail($id) {
        $getModel = $this->model("NewModel");
        $newDetail = $getModel->getOne("news","new_id=$id");
        $result = $getModel->getNew();
        $this->view("new_detail",[
            "newDetail" => $newDetail,
            "new" => $result
        ]);
    }
}

?>