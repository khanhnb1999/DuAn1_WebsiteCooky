<?php
    class Setting extends Controller{
        // Show
        public function index($id){
            $getModel =$this->model('SettingModel');
            $result = $getModel->paging("settings","setting_id",5,$id);
            $total = $getModel->totalRecord("settings");
            $this->view("settings/index",[
                "settings"=>$result,
                "total"=>$total,
                "page"=>$id,
                "page_one"=>5
            ]);
            
        }
        // update
        public function update($id){
            $getModel = $this->model('SettingModel');
            $result = $getModel->getOne("settings","setting_id= $id");
            if($_SERVER["REQUEST_METHOD"] == 'POST'){
                $image = $_FILES['banner'];
                if(!empty($image['name'])){
                    $data=[
                        'setting_id'=> $_POST['setting_id'] ?? 0,
                        'banner'=>$image['name']??'no-img.img',
                        'email'=>$_POST['email'] ?? 0,
                        'address'=>$_POST['address'] ?? 0,
                        'phone_number'=>$_POST['phone_number']?? 0,
                        'description'=>$_POST['description']?? 0
                    ];
                }else{
                    $data=[
                        'setting_id'=> $_POST['setting_id'] ?? 0,
                        'email'=>$_POST['email'] ?? 0,
                        'address'=>$_POST['address'] ?? 0,
                        'phone_number'=>$_POST['phone_number'] ?? 0,
                        'description'=>$_POST['description'] ?? 0
                    ];
                }
                // print_r($data);die;
                $image_new= $image['name'];
                $where = "setting_id=$id";
                $getModel->update("settings",$data,$where);
                move_uploaded_file($image['tmp_name'],'./mvc/views/settings/image/'.$image_new);
                header("Location: ".SITE_URL."/setting/index/1");
            }$this->view("settings/update",[
                'setting' =>$result
            ]);

        }
    }
?>