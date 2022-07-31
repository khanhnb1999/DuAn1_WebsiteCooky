<?php

class Formula extends controller {
    function index() {
        $getModel = $this->model("FormulaModel");
        $result = $getModel->getAll("catalogs");
        $getAllDish  = [];
        $dataDish = [];
        foreach ($result as $key => $value) {
            $cateId = $value["catalog_id"];
            $getAllDish[] = $getModel->getDish($cateId);
            foreach ($getAllDish as $val) {
                foreach ($val as $field) {
                    $dataDish[] = $field;
                }
            }
        }
        // echo "<pre>";
        // print_r($dataDish);die;
        $this->view("formula",
        [
            "cate" => $result,
            "dish" => $dataDish
        ]);
    }
}

?>