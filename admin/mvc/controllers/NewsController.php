<?php
class News extends Controller
{
    public function index($id)
    {
        $getModel = $this->model('NewModel');
        $getModel = new NewModel;
        $result = $getModel->paging("news", "new_id", 5, $id);
        $total = $getModel->totalRecord("news");
        $this->view("news/index", [
            "new" => $result,
            "total" => $total,
            "page" => $id,
            "page_one" => 5
        ]);
    }
    // $data = ['name' => "khanh",'address' => "nghe An"];
    // echo $data[name] = khanh;

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $new_title = $_POST['new_title'];
            $new_content = $_POST['new_content'];
            $new_date = $_POST['new_date'];
            $image_new = "no_image.php";
            $image_new = $_FILES['fileToUpload']['name'];
            $data = [
                'new_title' => $new_title,
                'image_new' => $image_new,
                'new_description' => $new_content,
                'new_date' => $new_date,
            ];


            $getModel = $this->model('NewModel');
            $getModel->insert('news', $data);
            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], './mvc/views/news/image/' . $image_new);
            header('Location: ".SITE_URL."/news/index/1');
        }
        $this->view('news/add');
    }



    // sửa
    public function update($id)
    {
        $getModel = $this->model('NewModel');
        $result = $getModel->getOne("news", "new_id=$id");

        // var_dump($ result);die;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $image = $_FILES['fileToUpload'];
            // print_r($image);die;
            // print_r($image);die;
            if (!empty($image['name'])) {
                $data = [
                    'new_id' => $_POST['new_id'] ?? 0,
                    'new_title' => $_POST['new_title'] ?? '',
                    'image_new' => $image['name'] ?? 'no-image.png',
                    'new_description' => $_POST['new_description'] ?? '',
                    'new_date' => $_POST['new_date'] ?? '',
                ];
            } else {
                $data = [
                    'new_id' => $_POST['new_id'] ?? 0,
                    'new_title' => $_POST['new_title'] ?? '',
                    'new_description' => $_POST['new_description'] ?? '',
                    'new_date' => $_POST['new_date'] ?? '',
                ];
            }

            // print_r($data);die;

            $image_new = $image['name'];
            $where = "new_id=$id";
            $getModel->update("news", $data, $where);
            // var_dump($getModel);die;
            move_uploaded_file($image['tmp_name'], './mvc/views/news/image/' . $image_new);
            // print_r($getModel);die;

            header("Location: ".SITE_URL."/news/index/1");
        }
        $this->view(
            "news/update",
            [
                "news" => $result
            ]
        );
    }
    public function delete($id)
    {
        $getModel = $this->model("NewModel");
        if (isset($id)) {
            $where = "new_id = $id";
            $getModel->delete("news", $where);
            header("Location: ".SITE_URL."/news/index/1");
        }
    }
    // delete all
    public function deleteAll()
    {
        $ids = $_POST['ids'] ?? 0;
        if (!empty($ids)) {
            $getModel = $this->model("NewModel");
            foreach ($ids as $id) {
                $where = "new_id = $id";
                $getModel->delete('news', $where);
            }
            header("Location: ".SITE_URL."/news/index/1");
        }
    }
}