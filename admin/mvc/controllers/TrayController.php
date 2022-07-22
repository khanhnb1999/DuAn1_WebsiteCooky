<?php

// Bảng mâm cơm
class Tray extends Controller {

    public function index($id) {
        $getModel = $this->model("TrayModel");
        $result = $getModel->paging("trays","tray_id",4,$id);
        $totalRecord = $getModel->totalRecord("trays");
        $this->view("trays/index",
        [
            "tray" => $result,
            "totalRecord" => $totalRecord,
            "page" => $id,
            "page_one" => 4
        ]);
    }

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
            header("Location: ?url=catalog/index/1");
        }
        $this->view("trays/add");
    }

}

?>