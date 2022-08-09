<?php

class AddFormula extends controller {
        function index() {
                $getModel = $this->model("AddFormulaModel");
                $this->view("add-formula");
        }

        function updateFormula() {
                $message = [];
                $data = [];
                $dataIgr = $_POST['ingredient'];
                $image = $_FILES['fileToUpload'];
                if(empty($_POST['dish_intro'])) {
                        $message["dish_intro"] = "Bạn phải giới thiệu món ăn";
                }

                if(empty($_POST['dish_name'])) {
                        $message["dish_name"] = "Bạn phải nhập tên món ăn";
                }

                if(empty($image["name"])) {
                        $message["image"] = "Bạn phải chọn ảnh";
                }

                if(empty($dataIgr[0]["name"])) {
                        $message["name"] = "Bạn phải chọn nguyên liệu";
                }

                if(empty($dataIgr[0]["quantity"])) {
                        $message["quantity"] = "Bạn phải chọn số lượng";
                }

                if(empty($dataIgr[0]["unit"])) {
                        $message["unit"] = "Bạn phải chọn đơn vị";
                }
                
                if(!empty($message)) {
                        $data['success'] = false;
                        $data['message'] = $message;
                } else {
                        $data['success'] = true;
                        $data['message'] = '
                        <div class="model__open" id="current-content">
                                <div class="model__hidden">
                                        <div class="has__content--show">
                                        <div class="button__current">
                                                <button onclick="currentBox()"><i class="far fa-times"></i></button>
                                        </div>
                                        <div class="box__head">
                                                <p>Bạn đã thêm món ăn thành công</hp>
                                        </div>
                                        <div class="box__body">
                                                <div class="box__body--small">
                                                <div class="body-image">
                                                        <img src="admin/mvc/views/products/image/ba chỉ luộc han quốc.jpg" alt="">
                                                </div>
                                                <div class="body-intro">
                                                        <p>Kem đậu xanh</p>
                                                        <span>Bộ sưu tập của bạn gồm 3 món ăn</span>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="box__footer">
                                                <div class="view-formula">
                                                <a href="">Xem món ăn của bạn</a>
                                                </div>
                                        </div>
                                        </div>
                                </div>
                        </div>
                ';
                }
                echo json_encode($data);
        }
}

?>