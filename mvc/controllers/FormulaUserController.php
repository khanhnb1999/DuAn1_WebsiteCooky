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
                $getId = $_SESSION['user-id'];
                $getInfoUser = $getModel->getUserName($getId);
                $getName = $getModel->getManyFormula($getId);
                $this->view('view-formula',[
                        "dish" => $dishDetail,
                        "ingredient" => $ingredient,
                        "count" =>  $getName
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
                        $val = $_SESSION['user-id'];
                        $getVal = $getModel->totalFormula($val);
                        $data = [
                                'id' => $getVal['id'],
                                "user_id" => $getVal['user_id'],
                                "total" => $getVal['total'] - 1
                        ];
                        $getModel->delete("dish", "dish_id=$id");
                        $getModel->update("total_formulas",$data,"id=".$getVal['id']);
                        die(json_encode(['status' => 1, 'messg' => 'Xóa thành công.']));
                }
                die(['status' => 0, 'messg' => 'Xóa thất bại']);
        }
}

?>