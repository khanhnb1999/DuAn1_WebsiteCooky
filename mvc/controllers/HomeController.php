<?php

class Home extends Controller {

    function index() {
        $getModel = $this->model("HomeModel");
        $cate = $getModel->getAll("catalogs");
        $getAllDish = $getModel->getAll("dish");
        $getAllNew = $getModel->getAllLimit("news","new_id","DESC",0,3);
        $pr = $getModel->getAllLimit("dish","dish_id","DESC",0,8);
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