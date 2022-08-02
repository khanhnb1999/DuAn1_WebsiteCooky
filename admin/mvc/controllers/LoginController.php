<?php

// Bảng login
class Login extends controller {
    function index() {
        if(isset($_POST["btn-submit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $where1 = "user_name='$username'";  
            $where2 = "user_password='$password'";
            $getModel = $this->model("LoginModel");
            $user = $getModel->getTwoCondition("users",$where1,$where2);
            if($user) {
                // $_SESSION['btn-submit'] = $user;
                $_SESSION['username'] = $user['user_name'];
                $_SESSION['password'] = $user['user_password'];
                $_SESSION['userId'] = $user['user_id'];
                header("Location: ".SITE_URL."/product/index/1");
            } else {
                exit("error");
            }
        }
        $this->view("forms/login");
    }

    // logout
    function logout() {
        session_start();
        session_destroy();
        header("Location: ".SITE_URL."/login");
        die;
    }

    function profile() {
        // update account admin

        if(isset($_POST['btn-update']) && $_POST['btn-update'] == "Update") {
            $data = [
                'user_name' => $_POST['ad-username'],
                'user_email' => $_POST['ad-email'],
                'user_password' => $_POST['ad-password'],
                'user_address' => $_POST['ad-address'],
                'user_phone' => $_POST['ad-phone']
            ];
            $getModel = $this->model("LoginModel");
            $userId = $_SESSION['userId'];
            $where = "user_id = $userId";
            $getModel->update("users",$data,$where);
        } else {
            // insert account admin
            if(isset($_POST['create-account'])) {
                $data = [
                    'user_name' => $_POST['mb-username'],
                    'user_email' => $_POST['mb-email'],
                    'user_password' => $_POST['mb-password'],
                    'user_address' => $_POST['mb-address'],
                    'user_phone' => $_POST['mb-phone'],
                    'user_type' => "1"
                ];
                $getModel = $this->model("LoginModel");
                $getModel->insert('users',$data);
            }
        }
        $getModel = $this->model("LoginModel");
        $userId = $_SESSION['userId'];
        $where = "user_id = $userId";
        $valueUser = $getModel->getOne("users",$where);
        $this->view("forms/profile",
        [
            "getUser" => $valueUser,
        ]);
    }
}

?>