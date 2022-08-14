<?php 

class Formula extends controller {
        function index() {
                $getModel = $this->model("FormulaModel");
                $value = $getModel->getManyFormula();
                $this->view("formula",[
                        "product" => $value
                ]);
        }
}

?>