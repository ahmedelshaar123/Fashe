<?php 
include "connect.php";
$id = $_GET['id'];
$delete_footwear = "DELETE FROM footwear where id = $id";
$result = $conn->query($delete_footwear);
if ($result) {
	header("Location:../footwear.php");
}else{
	echo "Error";
}