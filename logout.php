<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
// Include the PHP functions file that contains the logoutUser() function
include("./functions/phpfunctions.php");

// Call the logoutUser() function to destroy cookies and logout the user
logoutUser();

session_start();

session_destroy();

header('Location:../index.php');

?>