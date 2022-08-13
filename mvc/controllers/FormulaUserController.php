<?php

class FormulaUser extends controller {
        function index() {
                $getModel = $this->model("FormulaUserModel");
                $userId = $_SESSION['user-id'];
                $result = $getModel->getFormulaUser($userId);
                $this->view("formula-user",[
                        "formulaUser" => $result
                ]);
        }

        function viewFormula($id) {
                $ingredientId = $id;
                $getModel = $this->model("FormulaUserModel");
                $dishDetail = $getModel->getOne("dish","dish_id=$id");
                $ingredient = $getModel->getIngredient($ingredientId);
                $this->view('view-formula',[
                        "dish" => $dishDetail,
                        "ingredient" => $ingredient
                ]);
        }

        function removeNl($id) {
                if(!empty($id)){
                $getModel = $this->model("FormulaUserModel");
                $getModel->delete("ingredients", "id=$id"); 
                die(json_encode(['status' => 1, 'messg' => 'Xóa thành công.']));
                }
                die(['status' => 0, 'messg' => 'Xóa thất bại']);
        }

        function deleteDishUser($id) {
                if(!empty($id)){
                        $getModel = $this->model("FormulaUserModel");
                        $getModel->delete("dish", "dish_id=$id"); 
                        die(json_encode(['status' => 1, 'messg' => 'Xóa thành công.']));
                }
                die(['status' => 0, 'messg' => 'Xóa thất bại']);
        }
}

?>