<?php

// Bảng món ăn
class Product extends Controller {
    // list sản phẩm
    function index($id) {
        $getModel = $this->model("ProductModel");
        $pr = $getModel->paging("dish","dish_id",10,$id);
        $trays = $getModel->getAll("trays");
        $totalRecord = $getModel->totalRecord("dish");
        $this->view("products/index",
        [
            "product" => $pr,
            "totalRecord" => $totalRecord,
            "tray" => $trays,
            "page" => $id,
            "page_one" => 10
        ]);
    }

    // add sản phẩm
    function add() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($_POST['add-tray'] == "add-tray") {
                $getModel = $this->model("ProductModel");
                $getDishId = $getModel->getAllLimit("dish","dish_id","DESC",0,1);
                $userId = $_SESSION['userId'];
                $dish_image = $_FILES['fileToUpload']['name'] ?? "";
                $dataDish = [
                    'dish_name' => $_POST['dish_name'],
                    'dish_image' => $dish_image,
                    'dish_desc' => $_POST['dish_desc'],
                    'dish_intro' => $_POST['dish_intro'],
                    'dish_price' => $_POST['dish_price'],
                    'catalog_id' => $_POST['cate_id'],
                    'user_id' => $userId
                ];
                $dataTray = [
                    "tray_id" => $_POST['tray_id'],
                    "dish_id" => $getDishId[0]['dish_id'] + 1
                ];
                $getModel->insert("tray_details",$dataTray);
                $getModel->insert("dish",$dataDish);
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], './mvc/views/products/image/' .$dish_image);
                header("Location: ".SITE_URL."/product/index/1");
            } else {
                $userId = $_SESSION['userId'];
                $dish_image = $_FILES['fileToUpload']['name'] ?? "";
                $data = [
                    'dish_name' => $_POST['dish_name'],
                    'dish_image' => $dish_image,
                    'dish_desc' => $_POST['dish_desc'],
                    'dish_intro' => $_POST['dish_intro'],
                    'dish_price' => $_POST['dish_price'],
                    'catalog_id' => $_POST['cate_id'],
                    'user_id' => $userId
                ];
                $getModel = $this->model("ProductModel");
                $getModel->insert("dish",$data);
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], './mvc/views/products/image/' .$dish_image);
                header("Location: ".SITE_URL."/product/index/1");
            }
        }
        $getModel = $this->model("ProductModel");
        $result = $getModel->getAll("catalogs");
        $trays = $getModel->getAll("trays");
        $this->view("products/add",[
            'catalog' => $result,
            "tray" => $trays 
        ]);
    }
    
    function removeNl($id) {
        if(!empty($id)){
            $getModel = $this->model("ProductModel");
            $getModel->delete("ingredients", "id=$id"); 
            die(json_encode(['status' => 1, 'messg' => 'Xóa thành công.']));
        }
        die(['status' => 0, 'messg' => 'Xóa thất bại']);

        
    }
    // edit sản phẩm
    function update($id) {
        $getModel = $this->model("ProductModel");
        $pr = $getModel->getOne("dish","dish_id=$id");
        $ingredient = $getModel->getMany("ingredients","dish_id=$id");
        $result = $getModel->getAll("catalogs");
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
                    'dish_price' => $_POST['dish_price'],
                    'catalog_id' => $_POST['cate_id'],
                    'user_id' => 1
                ];
            } else {
                $data = [
                    'dish_id' => $_POST['dish_id'],
                    'dish_name' => $_POST['dish_name'],
                    'dish_desc' => $_POST['dish_desc'],
                    'dish_intro' => $_POST['dish_intro'],
                    'dish_price' => $_POST['dish_price'],
                    'catalog_id' => $_POST['cate_id'],
                    'user_id' => 1
                ];
            }
            $dish_image = $image['name'];
            $where = "dish_id = $id";
            $getModel->update("dish",$data,$where);
            move_uploaded_file($image['tmp_name'], './mvc/views/products/image/' .$dish_image);
            header("Location: ".SITE_URL."/product/index/1");
        }
        $this->view("products/update",
        [
            "catalog" => $result,
            "product" => $pr,
            "ingredient" => $ingredient
        ]);
    }

    // delete sản phẩm
    function delete($id) {
        $getModel = $this->model("ProductModel");
        if(isset($id)) {
            $where = "dish_id = $id";
            $getModel->delete('dish',$where);
            header("Location: ".SITE_URL."/product/index/1");
        }
    }

    // delete nhiều  sản phẩm và thêm vào bàn ăn
    function upload() {
        $ids = $_POST['ids'] ?? [];
        $trayId = $_POST['tray_id'] ?? "";
        if(isset($_POST['delete-all']) == "delete-all") {
            if (!empty($ids)) {
                $getModel = $this->model("ProductModel");
                foreach ($ids as $id) {
                    $where = "dish_id = $id";
                    $getModel->delete('dish', $where);
                }
                header("Location: ".SITE_URL."/product/index/1");
            }
        } else {
            if (!empty($ids)) {
                $getModel = $this->model("ProductModel");
                foreach ($ids as $id) {
                    $trayData = [
                        "tray_id" => $trayId,
                        "dish_id" => $id
                    ];
                    $getModel->insert("tray_details", $trayData);
                };
                // $getSum = $getModel->innerJoin("dish_price",
                //     ["tray_details","dish","trays"],
                //     ["dish_id","tray_id",$trayId]
                // );
                $where = $trayId;
                $getSum = $getModel->sumPrice($where);
                $sumPrice = $getSum["SUM(dish_price)"];
                $price = [
                    "tray_id" => $trayId,
                    "price" => $sumPrice
                ];
                $getModel->insert("tray_prices",$price);
                header("Location: ".SITE_URL."/product/index/1");
            }
        }
    }
}

?>