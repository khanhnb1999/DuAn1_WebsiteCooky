<?php

// File controller.php là file trung gian để kết nối Models và Views
// Tránh sự lặp lại hàm require_one đối với các file trong Controllers

class Controller {
    public function model($modelFileName) {
        require_once "./mvc/models/".$modelFileName.".php";
        return new $modelFileName;
    }

    // Hàm gọi file trong thư mục Views
    public function view($viewFileName, $data = []) {
        require_once "./mvc/views/".$viewFileName.".php";
    }
}

?>