<?php

class TableTray extends controller {

    function add($id) {
        $ingredientId = $id;
        $getModel = $this->model("TableTrayModel");
        $getOne = $getModel->getOne("dish","dish_id=$id");
        $totalRecord = $getModel->totalRecord("dish");
        $ingredient = $getModel->getIngredient($ingredientId);
        $get_number = 1;
        if($id) {
                if(!isset($_SESSION['table'][$id])) {
                        $_SESSION['table'][$id] = 0;
                }
                $_SESSION['table'][$id] += $get_number;
        }
        $trays = $_SESSION['table'] ?? [];
        foreach ($trays as $key => $value) {
                if($key == "public") {
                        unset($trays[$key]);
                        unset($trays["TableTray"]);
                }
        }
        // print_r($trays);
        $dishId = "";
        $dishId = (array_keys($trays));
        $dishTray = "";
        $dishTray = implode(",", $dishId) ;
        $result = $getModel->getAllDish($dishTray);
        $this->view("table-tray",[
                "dish" => $result,
                "intro" => $getOne,
                "ingredient" => $ingredient,
                "totalRecord" => $totalRecord
        ]);
    }

    function show($id) {
        $getId = $id;
        $ingredientId = $id;
        $getModel = $this->model("TableTrayModel");
        $result = $getModel->getIntroDish($getId);
        $ingredient = $getModel->getIngredient($ingredientId);
        $this->view("filter-table",
        [
                "intro" => $result,
                "ingredient" => $ingredient
        ]);
    }

        function remove($id) {
                if(!empty($id)){
                        unset($_SESSION['table'][$id]);
                        die(json_encode(['status' => 1, 'messg' => 'Xóa thành công.']));
                }
                die(['status' => 0, 'messg' => 'Xóa thất bại']);
        }
}

?>