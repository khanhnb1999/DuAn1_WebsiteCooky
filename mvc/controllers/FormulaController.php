<?php

class Formula extends controller {
        function index() {
                $getModel = $this->model("FormulaModel");
                $result = $getModel->getAll("catalogs");
                $cateId = 1;
                $getOneDish = $getModel->getDish($cateId);
                $this->view("formula",
                [
                        "cate" => $result,
                        "getOneDish" => $getOneDish
                ]);
        }

        function homeDish($id) {
                $getModel = $this->model("FormulaModel");
                $result = $getModel->getAll("catalogs");
                $cateId = $id;
                $getOneDish = $getModel->getDish($cateId);
                $this->view("formula",
                [
                        "cate" => $result,
                        "getOneDish" => $getOneDish
                ]);
        }

        function getCatalog($id) {
                $getModel = $this->model("FormulaModel");
                $cateId = $id;
                $result = $getModel->getDish($cateId);
                $this->view("filter-product",
                [
                        "getOneDish" => $result
                ]);
                die();
        }

        function getCate($id) {
                $getModel = $this->model("FormulaModel");
                $cateId = $id;
                $result = $getModel->getDish($cateId);
                $this->view("filter-product",
                [
                        "getOneDish" => $result
                ]);
        }

        function detailDish($id) {
                $getModel = $this->model("FormulaModel");
                $cateId = $id;
                $ingredientId = $id;
                $result = $getModel->getOne("dish", "dish_id=$cateId");
                $ingredient = $getModel->getIngredient($ingredientId);
                $dishId = $result['catalog_id'];
                $dishTop = $getModel->getDishTop($dishId);
                $this->view("dish_detail",[
                        "dishDetail" => $result,
                        "ingredient" => $ingredient,
                        "dishTop" => $dishTop,
                        "getId" => $id 
                ]);
        }

        function addComment() {
                $getModel = $this->model("FormulaModel");
                $message = [];
                if(isset($_SESSION['username'])) {
                        $date = date("Y/m/d");
                        $data = [
                                "content" => $_POST['comment'],
                                "date" => $date,
                                "status" => 0,
                                "user_id" => $_SESSION['userId'],
                                "dish_id" => $_POST["dish_id"]
                        ];
                        $getModel->insert("comments", $data);
                        $message['status'] = true;
                        $message['content'] = "Bình luận của bạn đang chờ người quản trị phê duyệt!!!";
                } else {
                        $message['status'] = false;
                }
                echo json_encode($message);
        }
}
?>