<?php

// Bảng mâm cơm
class Tray extends Controller {

    public function index($id) {
        $getModel = $this->model("TrayModel");
        $result = $getModel->paging("trays","tray_id",5,$id);
        $totalRecord = $getModel->totalRecord("trays");
        $this->view("trays/index",
        [
            "tray" => $result,
            "totalRecord" => $totalRecord,
            "page" => $id,
            "page_one" => 5
        ]);
    }

    public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $getModel = $this->model("TrayModel");
            $data = [
                "tray_name" => $_POST['tray_name']
            ];
            $getModel->insert("trays",$data);
            header("Location: ".SITE_URL."/tray/index/1");
        }
        $this->view("trays/add");
    }

    public function update($id){
        $getModel = $this->model("TrayModel");
        $result = $getModel->getOne("trays", "tray_id=$id");
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'tray_name' => $_POST['tray_name'] ?? ''
            ];
            $where = "tray_id = $id";
            $getModel->update("trays",$data,$where);
            header("Location: ".SITE_URL."/tray/index/1");
        }
        $this->view("trays/update",
        [
            "tray" => $result
        ]);
    }

    public function delete($id) {
        $getModel = $this->model("TrayModel");
        if(isset($id)) {
            $where = "tray_id = $id";
            $getModel->delete("trays",$where);
            header("Location: ".SITE_URL."/tray/index/1");
        }
    }

    public function deleteAll() {
        $ids = $_POST['ids'] ?? 0;
        if (!empty($ids)) {
            $getModel = $this->model("TrayModel");
            foreach ($ids as $id) {
                $where = "tray_id = $id";
                $getModel->delete('trays', $where);
            }
            header("Location: ".SITE_URL."/tray/index/1");
        }
    }

}

?>