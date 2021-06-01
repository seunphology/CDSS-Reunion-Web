<?php

session_start();

if(isset($_SESSION['name'])) {

$_SESSION['msg'] = "You must log in first to view this page";
header("location: signin.php");

}

if(isset($_GET['logout'])) {

session_destroy();
unset($_SESSION['name']);
header("location : signin.php");


}







?>

