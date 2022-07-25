<?php

class ConnectDb
{
    public $conn;
    protected $username = "root";
    protected $password = "root";
    protected $url = "mysql:host=localhost; dbname=cooky_food";
    function __construct()
    {
        $this->conn = new PDO($this->url, $this->username, $this->password);
    }
}