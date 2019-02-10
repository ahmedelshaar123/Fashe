<?php 
include "connect.php";
$id = $_GET['id'];
$delete_watches = "DELETE FROM watches where id = $id";
$result = $conn->query($delete_watches);
if ($result) {
	header("Location:../watches.php");
}else{
	echo "Error";
}