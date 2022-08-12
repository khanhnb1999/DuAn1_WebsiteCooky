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
}

?>