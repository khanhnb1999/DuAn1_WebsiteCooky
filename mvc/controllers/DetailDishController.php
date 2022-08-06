<?php

class DetailDish extends controller {
    // function index() {
    //     $getModel = $this->model("DetailDishModel");
    //     $getAllNews = $getModel->getAllLimit("dish","dish_id","DESC",0,12);
    //     $this->view("news",
    //     [
    //         "news" => $getAllNews
    //     ]);
    // }

    function dishDetail($id) {
        $getModel = $this->model("DetailDishModel");
        $dishDetail = $getModel->getOne("dish","dish_id=$id");
        $dishTop5 = $getModel->top5($dishDetail['catalog_id']);
        $allCmt = $getModel->showcmt($id);
        $this->view("dish_detail",[
            "dish_detail" => $dishDetail,
            "dish_Top5" =>$dishTop5,
            "all_Cmt" =>$allCmt
            // "new" => $result
        ]);
    }
    
    
}

?>