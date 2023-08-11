<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$dbhost = "localhost";
$dbuser = "root";
$dbpwd = "";
$dbname = "relyon_imax";
$newconnection = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname) or die("Cannot connect to Mysql server host");

?>