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
                        $getDishFinalId = $getModel->getDishIdFinal();
                        $val = $_SESSION['user-id'];
                        $getVal = $getModel->totalFormula($val);
                        $dish_image = $_FILES['fileToUpload']['name'];
                        $getData = [
                                'dish_name' => $_POST['dish_name'],
                                'dish_image' => $dish_image,
                                'dish_desc' => $_POST['dish_desc'],
                                'dish_intro' => $_POST['dish_intro'],
                                'dish_price' => 0,
                                'catalog_id' => 0,
                                'user_id' => $_SESSION['user-id'],
                                "status" => 0,
                                "views" => 0
                        ];
                        $values1 = [
                                "id" => $getVal['id'],
                                "user_id" => $_SESSION['user-id'],
                                "total" => $getVal['total'] + 1
                        ];

                        $values2 = [
                                "user_id" => $_SESSION['user-id'],
                                "total" => 1
                        ];

                        // if(isset($getVal['id']) == 0) {
                        //         $getModel-insert("total_formulas",$values2);
                        // } else {
                        //         $getModel->update("total_formulas",$values1,"id=".$getVal['id']);
                        // }

                        if(isset($_SESSION['user-id']) && $getVal['id'] > 0) {
                                $getModel->update("total_formulas",$values1,"id=".$getVal['id']);
                        } else {
                                $getModel->insert("total_formulas",$values2);
                        }
                        $getModel->insert("dish", $getData);
                        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], 'admin/mvc/views/products/image/' .$dish_image);
                        // insert table tbl_ingredients
                        foreach ($dataIngredient as $value) {
                                $dataIgr = [
                                        "name" => $value['name'],
                                        "quantity" => $value["quantity"],
                                        "unit" => $value['unit'],
                                        "note" => $value['note'],
                                        "dish_id" => $getDishFinalId[0]['dish_id'] + 1,
                                ];
                                $getModel->insert("ingredients", $dataIgr);
                        }
                        $data['success'] = true;
                        $data['message'] = 'Tạo món ăn thành công';
                        $data['product'] = $_POST['dish_name'];
                }
                echo json_encode($data);
        }

        function update($id) {
                $getModel = $this->model("addFormulaModel");
                $pr = $getModel->getOne("dish","dish_id=$id");
                $ingredient = $getModel->getMany("ingredients","dish_id=$id");
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $dataIngredient = $_POST['ingredient'];
                        foreach($dataIngredient as $value) {
                                $data = [
                                        "name" => $value['name'],
                                        "quantity" => $value['quantity'],
                                        "unit" => $value["unit"],
                                        "note" => $value['note'],
                                        "dish_id" => $id,
                                ];
                                if(isset($value['id']) && !empty($value['id'])) {
                                        $getModel->update("ingredients",$data, "id=".$value['id']);
                                } else {
                                        $getModel->insert("ingredients",$data);
                                }
                }
                $image = $_FILES['fileToUpload'];
                if(!empty($image['name'])) {
                        $data = [
                                'dish_id' => $_POST['dish_id'],
                                'dish_name' => $_POST['dish_name'],
                                'dish_image' => $image['name'] ?? 'no-image.png',
                                'dish_desc' => $_POST['dish_desc'],
                                'dish_intro' => $_POST['dish_intro'],
                                'dish_price' => 0,
                                'catalog_id' => 0,
                                'user_id' => $_SESSION['user-id'],
                                "status" => 0,
                                "views" => $_POST['views']
                        ];
                } else {
                        $data = [
                                'dish_id' => $_POST['dish_id'],
                                'dish_name' => $_POST['dish_name'],
                                'dish_desc' => $_POST['dish_desc'],
                                'dish_intro' => $_POST['dish_intro'],
                                'dish_price' => 0,
                                'catalog_id' => 0,
                                'user_id' => $_SESSION['user-id'],
                                "status" => 0,
                                "views" => $_POST['views']
                        ];
                }
                $dish_image = $image['name'];
                $where = "dish_id = $id";
                $getModel->update("dish",$data,$where);
                move_uploaded_file($image['tmp_name'], 'admin/mvc/views/products/image/' .$dish_image);
                header("Location: ".SITE_URL."/formulaUser");
                }
                $this->view("formula/update-formula",
                [
                        "product" => $pr,
                        "ingredient" => $ingredient
                ]);
        }
}

?>