<?php
session_start();
//include 'index.php';

$conn = mysqli_connect("localhost", "root", "root", "logintest2");

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
    
}

?>

