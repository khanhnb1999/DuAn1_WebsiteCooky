<?php

// Bảng user
class User extends Controller {
    // list user
    public function index($id) {
        $getModel = $this->model("UserModel");
        $result = $getModel->paging("users","user_id",8,$id);
        $totalRecord = $getModel->totalRecord("users");
        $this->view("users/index",
        [
            "user" => $result,
            "totalRecord" => $totalRecord,
            "page" => $id,
            "page_one" => 3
        ]);
    }

    // update user
    public function update($id){
        $getModel = $this->model("UserModel");
        $result = $getModel->getOne("users", "user_id=$id");
        $allRole = $getModel->getAll("roles");
        $userRoles = $getModel->getAll("users_role");
        $roleOfUser = [];
        if(!empty($userRoles)) {
            foreach($userRoles as $getId) {
                $roleOfUser[] = $getId['role_id'];
            }
        }
        // echo "<pre>";
        // print_r($roleOfUser);die;
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'user_id' => $_POST['user_id'],
                'user_name' => $_POST['username'],
                'user_email' => $_POST['email'],
                'user_password' => $_POST['password'],
                'user_address' => $_POST['address'],
                'user_phone' => $_POST['phones']
            ];
            $where = "user_id = $id";
            $getModel->update("users",$data,$where);
            // end update user

            $roleUpdate = $_POST['role'] ?? [];
            if(!empty($roleUpdate)) {
                $getModel->delete('users_role',"user_id=$id");
                foreach ($roleUpdate as $role) {
                    $dataRole = [
                        "role_id" => $role,
                        "user_id" => $id
                    ];
                    $getModel->insert("users_role", $dataRole);
                }
            }
            header("Location: ".SITE_URL."/user/index/1");
        }
        $this->view("users/update",
        [
            "user" => $result,
            "allRole" => $allRole,
            "roleOfUser" => $roleOfUser
        ]);
    }


    // delete user 
    public function delete($id) {
        $getModel = $this->model("UserModel");
        if(isset($id)) {
            $where = "user_id = $id";
            $getModel->delete("users",$where);
            header("Location: ".SITE_URL."/user/index/1");
        }
    }

    // delete All
    public function deleteAll() {
        $ids = $_POST['ids'] ?? 0;
        if (!empty($ids)) {
            $getModel = $this->model("UserModel");
            foreach ($ids as $id) {
                $where = "user_id = $id";
                $getModel->delete('users', $where);
            }
            header("Location: ".SITE_URL."/user/index/1");
        }
    }

}

?>