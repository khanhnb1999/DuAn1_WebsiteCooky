<?php

class Home extends Controller {

    function index() {
        $getModel = $this->model("HomeModel");
        $cate = $getModel->getAll("catalogs");
        $getAllDish = $getModel->getAllTop50();
        $getAllNew = $getModel->getAllLimit("news","new_id","DESC",0,4);
        $pr = $getModel->getAllStatus();
        $this->view("home",[
                "home" => $cate,
                "dish" => $pr,
                "outstanding" => $getAllDish,
                "news" => $getAllNew
        ]);
    }

    function detailDish($id) {
        $getModel = $this->model("HomeModel");
        $newDetail = $getModel->getOne("dish","dish_id=$id");
        $this->view("new_dish",[
                "dish" => $newDetail
        ]);
    }
}

?>