<?php

class User extends Controller {
        function addUser() {
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $message = [];
                        $error = [];
                        if(empty($_POST['username'])) {
                                $error['username'] = "Tên tài khoản không được để trống";
                        }

                        if(empty($_POST['email'])) {
                                $error['email'] = "Tên tài khoản không được để trống";
                        }

                        if(empty($_POST['password'])) {
                                $error['password'] = "Mật khẩu không được để trống";
                        }

                        if(empty($_POST['re-password'])) {
                                $error['rePassword'] = "Mật khẩu không được để trống";
                        }

                        if(empty($_POST['re-password']) &&  ($_POST['re-password']) == ( $_POST['password'])) {
                                $error['rePassword'] = "Mật khẩu không khớp";
                        }

                        if(empty($_POST['address'])) {
                                $error['address'] = "Địa chỉ không được để trống";
                        }

                        if(empty($_POST['phone'])) {
                                $error['phone'] = "Số điện thoại không được để trống";
                        }
                        if(!empty($error)) {
                                $message['status'] = false;
                                $message['success'] = $error;
                        } else {
                                $getModel = $this->model('UserModel');
                                $data = [
                                        "user_name" => $_POST['username'],
                                        "user_email" => $_POST['email'],
                                        "user_password" => $_POST['password'],
                                        "user_address" => $_POST['address'],
                                        "user_phone" => $_POST['phone'],
                                        "user_type" => "Customer"
                                ];
                                $getModel->insert("users", $data);
                                $message['status'] = true;
                                $message['success'] = "Đăng nhập thành công";
                        }
                        echo json_encode($message);
                }
        }

        function checkUser() {
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $getModel = $this->model('UserModel');
                        $message = [];
                        $error['username'] = "Tài khoản hoăc mật khẩu không hợp lệ!";
                        $username = $_POST['username1'];
                        $password = $_POST['password1'];
                        $dataUser = $getModel->getUser($username, $password);
                        if($dataUser) {
                                $_SESSION['username'] = $username;
                                $_SESSION['userId'] = $dataUser['user_id'];
                                $message['status'] = true;
                        } else {
                                $message['status'] = false;
                                $message['success'] = $error;
                        }
                        echo json_encode($message);
                }
        }

        function checkUserAddFormula() {
                $message = [];
                $error = [];
                if(isset($_SESSION['username'])) {
                        $message['status'] = true;
                } else {
                        $getModel = $this->model('UserModel');
                        $message['status'] = false;
                }
                echo json_encode($message);
        }
}


?>