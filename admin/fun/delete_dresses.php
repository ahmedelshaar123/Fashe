<?php 
include "connect.php";
$id = $_GET['id'];
$delete_dresses = "DELETE FROM dresses where id = $id";
$result = $conn->query($delete_dresses);
if ($result) {
	header("Location:../dresses.php");
}else{
	echo "Error";
}