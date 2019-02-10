<?php
include "connect.php";
$name = $_POST['name'];
$pass = $_POST['password'];
$password = md5($pass);
$insert_Admin = "INSERT INTO admin(name, password)VALUES('$name', '$password')";
$result = $conn->query($insert_Admin);
if($result == TRUE){
	header("Location:../admin.php");
}else{
	echo "Error";
}
