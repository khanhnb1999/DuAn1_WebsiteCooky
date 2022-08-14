<?php

class UserFormula extends Controller {
        function index($id) {
                $getModel = $this->model("ProductModel");
                $pr = $getModel->getFormulaUser(7,$id);
                $totalRecord = $getModel->totalRecordUserFormula();
                $this->view("formula/index",[
                        "product" => $pr,
                        "totalRecord" => $totalRecord,
                        "page" => $id,
                        "page_one" => 7
                ]);
        }
}
 
?>