<?php

class Formula extends controller {
    function index() {
        $getModel = $this->model("FormulaModel");
        $result = $getModel->getAll("catalogs");
        $getAllDish = $getModel->getAllLimit("dish","dish_id","DESC",0,16);
        $this->view("formula",
        [
            "cate" => $result,
            "dish" => $getAllDish
        ]);
    }
}

?>