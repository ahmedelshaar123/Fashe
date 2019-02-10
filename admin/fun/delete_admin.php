<?php
include "connect.php";
$id = $_GET['id'];
$delete_Admin = "DELETE FROM admin WHERE id = $id";
$result = $conn->query($delete_Admin);
if($result == TRUE){
	header("Location:../admin.php");
}else{
	echo "Error";
}