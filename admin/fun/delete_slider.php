<?php
include "connect.php";
$id = $_GET['id'];
$delete_slider = "DELETE FROM slider WHERE id = $id";
$result = $conn->query($delete_slider);
if($result == TRUE){
	header("Location:../slider.php");
}else{
	echo "Error";
}