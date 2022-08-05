<?php

class Formula extends controller {
    function index() {
        $getModel = $this->model("FormulaModel");
        $result = $getModel->getAll("catalogs");
        $cateId = 1;
        $getOneDish = $getModel->getDish($cateId);
        $this->view("formula",
        [
            "cate" => $result,
            "getOneDish" => $getOneDish
        ]);
    }

    function homeDish($id) {
        $getModel = $this->model("FormulaModel");
        $result = $getModel->getAll("catalogs");
        $cateId = $id;
        $getOneDish = $getModel->getDish($cateId);
        $this->view("formula",
        [
            "cate" => $result,
            "getOneDish" => $getOneDish
        ]);
    }

    function getCatalog($id) {
        $getModel = $this->model("FormulaModel");
        $cateId = $id;
        $result = $getModel->getDish($cateId);
        $this->view("filter-product",
        [
            "getOneDish" => $result
        ]);
        die();
    }

    function getCate($id) {
        $getModel = $this->model("FormulaModel");
        $cateId = $id;
        $result = $getModel->getDish($cateId);
        $this->view("filter-product",
        [
            "getOneDish" => $result
        ]);
    }
}
?>