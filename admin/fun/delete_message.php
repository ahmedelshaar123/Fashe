<?php
include "connect.php";
$id = $_GET['id'];
$delete_message = "DELETE FROM message WHERE id = $id";
$result = $conn->query($delete_message);
if($result == TRUE){
	header("Location:../message.php");
}else{
	echo "Error";
}