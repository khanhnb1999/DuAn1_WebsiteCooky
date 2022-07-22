<?php 
// Cầu nối để liên kết giữa file index.php và 3 folder (Models-Views-Controller)
// Tất cả những file trong thư mục controllers có thể kế thừa từ file controller.php trong thư mục core
require_once "./mvc/core/App.php";
require_once "./mvc/core/Controller.php";
require_once "./mvc/core/connectDb.php";
require_once "./mvc/core/BaseModel.php";

?>