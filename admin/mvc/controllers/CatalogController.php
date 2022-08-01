<?php

// Bảng danh mục
class Catalog extends Controller {
    public function __construct() {

    }
    // 
    public function index($id) {
        $getModel = $this->model("CatalogModel");
        $result = $getModel->paging("catalogs","catalog_id",3,$id);
        $totalRecord = $getModel->totalRecord("catalogs");
        $this->view("catalogs/index",
        [
            "catalog" => $result,
            "totalRecord" => $totalRecord,
            "page" => $id,
            "page_one" => 3
        ]);
    }

    // Thêm 
    public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $catalog_name = $_POST['catalog_name'];
            $catalog_image = "no_image.jpg";
            
            $catalog_image = $_FILES['fileToUpload']['name'];
            $data = [
                'catalog_image' => $catalog_image,
                'catalog_name' => $catalog_name,
            ];
            $getModel = $this->model("CatalogModel");
            $getModel->insert("catalogs",$data);
            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], './mvc/views/catalogs/image/' .$catalog_image);
            header("Location: ".SITE_URL."/catalog/index/1");
        }
        $this->view("catalogs/add");
    }

    // Sửa
    public function update($id){
        $getModel = $this->model("CatalogModel");
        $result = $getModel->getOne("catalogs", "catalog_id=$id");
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $image = $_FILES['fileToUpload'];
            if(!empty($image['name'])) {
                $data = [
                    'catalog_id' => $_POST['catalog_id'] ?? 0,
                    'catalog_image' => $image['name'] ?? 'no-image.png',
                    'catalog_name' => $_POST['catalog_name'] ?? ''
                ];
            } else {
                $data = [
                    'catalog_id' => $_POST['catalog_id'] ?? 0,
                    'catalog_name' => $_POST['catalog_name'] ?? ''
                ];
            }
            $catalog_image = $image['name'];
            $where = "catalog_id = $id";
            $getModel->update("catalogs",$data,$where);
            move_uploaded_file($image['tmp_name'], './mvc/views/catalogs/image/' .$catalog_image);
            header("Location: ".SITE_URL."/catalog/index/1");
        }
        $this->view("catalogs/update",
        [
            "catalog" => $result
        ]);
    }

    // Xóa 

    public function delete($id) {
        $getModel = $this->model("CatalogModel");
        if(isset($id)) {
            $where = "catalog_id = $id";
            $getModel->delete("catalogs",$where);
            header("Location: ".SITE_URL."/catalog/index/1");
        }
    }

    public function deleteAll() {
        $ids = $_POST['ids'] ?? 0;
        if (!empty($ids)) {
            $getModel = $this->model("CatalogModel");
            foreach ($ids as $id) {
                $where = "catalog_id = $id";
                $getModel->delete('catalogs', $where);
            }
            header("Location: ".SITE_URL."/catalog/index/1");
        }
    }

}

?>