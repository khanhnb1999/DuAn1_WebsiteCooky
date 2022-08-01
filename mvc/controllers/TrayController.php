<?php

class Tray extends controller {
    function index() {
        $getModel = $this->model("TrayModel");
        $result = $getModel->getAll("trays");
        $dish = $getModel->getDish();
        $trayPrice = $getModel->getPriceTray();
        $this->view("tray",[
            "tray" => $result,
            "dish" => $dish,
            "tray-price" => $trayPrice
        ]);
    }


}

?>