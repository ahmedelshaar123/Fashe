<?php 
include "connect.php";
$id = $_GET['id'];
$delete_bags = "DELETE FROM bags where id = $id";
$result = $conn->query($delete_bags);
if ($result) {
	header("Location:../bags.php");
}else{
	echo "Error";
}