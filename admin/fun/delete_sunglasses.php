<?php 
include "connect.php";
$id = $_GET['id'];
$delete_sunglasses = "DELETE FROM sunglasses where id = $id";
$result = $conn->query($delete_sunglasses);
if ($result) {
	header("Location:../sunglasses.php");
}else{
	echo "Error";
}