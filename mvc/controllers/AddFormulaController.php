<?php

class AddFormula extends controller {
    function index() {
        $getModel = $this->model("AddFormulaModel");
        $this->view("add-formula");
    }

    function add() {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                "dish_name" => $_POST["dish_name"],
                "dish_image" => $_POST['fileToUpload'],
                "dish_desc" => $_POST['dish_desc'],
                "dish_intro" => $_POST["dish_intro"],
            ];
            header("Location: ".SITE_URL."/addFormula");
        }

        $this->view("add-formula",[
            "dishName" => $message['dish_name']
        ]);
    }
}

?>