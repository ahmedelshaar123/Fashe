<?php
include "connect.php";
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$update_Admin = "UPDATE admin SET name = '$name', password = '$password' WHERE id = $id ";
$result = $conn->query($update_Admin);
if($result == TRUE){
	header("Location:../admin.php");
}else{
	echo "Error";
}