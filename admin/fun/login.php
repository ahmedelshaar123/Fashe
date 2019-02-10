<?php 
session_start();
include "connect.php";
$admin_name = $_POST['name'];
$pass = $_POST['password'];
$password = md5($pass);
$select_admin = "SELECT * FROM admin WHERE name = '$admin_name' AND password = '$password'";
$result = $conn->query($select_admin);
$count = $result->num_rows;
if($count > 0){
	$_SESSON['name'] = $admin_name;
	header("Location:../index.php");
}else{
	header("Location:../login.php");
}