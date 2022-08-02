<?php

// Bảng phân quyền admin
class Role extends Controller {
    function index($id) {
        $getModel = $this->model("RoleModel");
        $result = $getModel->paging("roles","role_id",4,$id);
        $totalRecord = $getModel->totalRecord("roles");
        $this->view("roles/index",
        [
            "role" => $result,
            "totalRecord" => $totalRecord,
            "page" => $id,
            "page_one" => 4
        ]);
    }

    // add role
    function add() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => $_POST['role_name'],
                'code' => $_POST['role_code']
            ];
            $getModel = $this->model("RoleModel");
            $getModel->insert("roles",$data);
            header("Location: ".SITE_URL."/role/index/1");
        }
        $this->view("roles/add");
    }

    function update($id) {
        $getModel = $this->model("RoleModel");
        $result = $getModel->getOne("roles", "role_id=$id");
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'role_id' => $_POST['catalog_id'] ?? 0,
                'name' => $_POST['role_name'],
                'code' => $_POST['role_code'],
            ];
            $where = "role_id = $id";
            $getModel->update("roles",$data,$where);
            header("Location: ".SITE_URL."/role/index/1");
        }
        $this->view("roles/update",
        [
            "role" => $result
        ]);
    }

    public function delete($id) {
        $getModel = $this->model("RoleModel");
        if(isset($id)) {
            $where = "role_id = $id";
            $getModel->delete("roles",$where);
            header("Location: ".SITE_URL."/role/index/1");
        }
    }

    public function deleteAll() {
        $ids = $_POST['ids'] ?? 0;
        if (!empty($ids)) {
            $getModel = $this->model("RoleModel");
            foreach ($ids as $id) {
                $where = "role_id = $id";
                $getModel->delete('roles', $where);
            }
            header("Location: ".SITE_URL."/role/index/1");
        }
    }

}

?>