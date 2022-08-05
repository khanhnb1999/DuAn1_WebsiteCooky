<?php
defined("SITE_URL") || define("SITE_URL", "http://localhost/Duan1");
session_start();
require_once "./mvc/Bridge.php";
$result = new App();
?>