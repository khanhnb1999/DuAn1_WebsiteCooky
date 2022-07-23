<?php

class ConnectDb {
    public $conn;
    protected $username = "root";
<<<<<<< HEAD
    protected $password = "root";
=======
    protected $password = "";
>>>>>>> cfb1b088ccdefe7d28328d9fd78a949a31facd07
    protected $url = "mysql:host=localhost; dbname=cooky_food";
    function __construct() {
        $this->conn = new PDO($this->url, $this->username, $this->password);
    }
}
?>