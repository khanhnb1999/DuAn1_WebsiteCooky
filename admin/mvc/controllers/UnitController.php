<?php

// Bảng đơn vị
class Unit extends Controller {
    public function index($id) {
        $getModel = $this->model("UnitModel");
        $result = $getModel->paging("units","unit_id",3,$id);
        $totalRecord = $getModel->totalRecord("units");
        $this->view("units/index",
        [
            "unit" => $result,
            "totalRecord" => $totalRecord,
            "page" => $id,
            "page_one" => 3
        ]);
    }

    // Thêm 
    public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'unit_name' => $_POST['unit_name'],
            ];
            $getModel = $this->model("UnitModel");
            $getModel->insert("units",$data);
            header("Location: ".SITE_URL."/unit/index/1");
        }
        $this->view("units/add");
    }

    // Sửa
    public function update($id){
        $getModel = $this->model("UnitModel");
        $result = $getModel->getOne("units", "unit_id=$id");
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'unit_id' => $_POST['unit_id'] ?? 0,
                'unit_name' => $_POST['unit_name'] ?? ''
            ];
            $where = "unit_id = $id";
            $getModel->update("units",$data,$where);
            header("Location: ".SITE_URL."/unit/index/1");
        }
        $this->view("units/update",
        [
            "unit" => $result
        ]);
    }

    // Xóa 

    public function delete($id) {
        $getModel = $this->model("UnitModel");
        if(isset($id)) {
            $where = "unit_id = $id";
            $getModel->delete("units",$where);
            header("Location: ".SITE_URL."/unit/index/1");
        }
    }

    public function deleteAll() {
        $ids = $_POST['ids'] ?? 0;
        if (!empty($ids)) {
            $getModel = $this->model("UnitModel");
            foreach ($ids as $id) {
                $where = "unit_id = $id";
                $getModel->delete('units', $where);
            }
            header("Location: ".SITE_URL."/unit/index/1");
        }
    }
}

?>