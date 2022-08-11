<?php

class News extends controller {
        function index() {
                $getModel = $this->model("NewModel");
                $getAllNews = $getModel->getAllLimit("news","new_id","DESC",0,12);
                $getTop4 = $getModel->getAllLimit("news","new_id","DESC",0,4);
                $getTop1 = $getModel->getAllLimit("news","new_id","DESC",0,1);
                $this->view("news",
                        [
                                "news" => $getAllNews,
                                "getTop" => $getTop4,
                                "getTop1" => $getTop1,
                        ]);
        }

        function newDetail($id) {
                $getModel = $this->model("NewModel");
                $newDetail = $getModel->getOne("news","new_id=$id");
                $result = $getModel->getNew();
                $this->view("new_detail",[
                "newDetail" => $newDetail,
                "new" => $result
                ]);
        }
}

?>