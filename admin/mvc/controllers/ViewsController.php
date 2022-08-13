<?php

class Views extends Controller {
        function index() {
                $getModel = $this->model("ViewsModel");
                $result = $getModel->getViews();
                $this->view("views",[
                        "product" => $result
                ]);
        }
}

?>