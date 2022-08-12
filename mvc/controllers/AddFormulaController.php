<?php

class AddFormula extends controller {
        function index() {
                $getModel = $this->model("AddFormulaModel");
                $this->view("formula/add-formula");
        }

        function add() {
                $message = [];
                $data = [];
                $dataIngredient = $_POST['ingredient'];
                if(empty($_POST['dish_intro'])) {
                        $message["dish_intro"] = "Bạn phải giới thiệu món ăn";
                }

                if(empty($_POST['dish_name'])) {
                        $message["dish_name"] = "Bạn phải nhập tên món ăn";
                }

                if(empty($_FILES['fileToUpload'])) {
                        $message["image"] = "Bạn phải chọn ảnh";
                }

                if(empty($dataIngredient[0]["name"])) {
                        $message["name"] = "Bạn phải chọn nguyên liệu";
                }

                if(empty($dataIngredient[0]["quantity"])) {
                        $message["quantity"] = "Bạn phải chọn số lượng";
                }

                if(empty($dataIngredient[0]["unit"])) {
                        $message["unit"] = "Bạn phải chọn đơn vị";
                }
                
                if(!empty($message)) {
                        $data['success'] = false;
                        $data['message'] = $message;
                } else {
                        $getModel = $this->model("AddFormulaModel");
                        $getNewDish = $getModel->getNewFormula();
                        $dish_image = $_FILES['fileToUpload']['name'];
                        $getData = [
                                'dish_name' => $_POST['dish_name'],
                                'dish_image' => $dish_image,
                                'dish_desc' => $_POST['dish_desc'],
                                'dish_intro' => $_POST['dish_intro'],
                                'dish_price' => 0,
                                'catalog_id' => 0,
                                'user_id' => $_SESSION['user-id'],
                                "status" => 0
                        ];
                        $getModel->insert("dish", $getData);
                        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], 'admin/mvc/views/products/image/' .$dish_image);
                        // insert table tbl_ingredients
                        foreach ($dataIngredient as $value) {
                                $dataIgr = [
                                        "name" => $value['name'],
                                        "quantity" => $value["quantity"],
                                        "unit" => $value['unit'],
                                        "node" => $value['note'],
                                        "tbl_dish_id" => 1,
                                        "user_id" =>  $_SESSION["user-id"]
                                ];
                                $getModel->insert("tbl_ingredients", $dataIgr);
                        }
                        $data['success'] = true;
                        $data['message'] = 'Tạo món ăn thành công';
                        $data['product'] = $_POST['dish_name'];
                         
                        
                }
                echo json_encode($data);
        }

        function update($id) {
                $getModel = $this->model("AddFormulaModel");
                $pr = $getModel->getOne("tbl_dish","id=$id");
                $ingredient = $getModel->getMany("ingredients","dish_id=$id");
                $this->view("formula/update-formula",[
                        "dish" => $pr
                ]);
        }
}

?>