<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

class App {
    protected $controller = "Home" ;
    protected $action = "index";
    protected $params = [1];
    function __construct() {
        $arr = $this->UlrProcess();
        if(file_exists("./mvc/controllers/".ucfirst($arr[0])."Controller.php")) {
            $this->controller = ucfirst($arr[0]);
            unset($arr[0]);
        }
        // print_r($arr);die;
        require_once("./mvc/controllers/".ucfirst($this->controller)."Controller.php");
        $this->controller = new $this->controller;
          
        if(isset($arr[1])) {
            if(method_exists($this->controller,strtolower($arr[1]))) {
                $this->action = strtolower($arr[1]);
            }
            unset($arr[1]);
        }
        $this->params = $arr ? array_values($arr) : [];
        call_user_func_array([$this->controller,$this->action], $this->params);

    }
    function UlrProcess() { 
        if(isset($_GET["url"])) {
           return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}

?>