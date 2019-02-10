<?php
include "connect.php";
$id = $_GET['id'];
$delete_User = "DELETE FROM user WHERE id = $id";
$result = $conn->query($delete_User);
if($result == TRUE){
	header("Location:../user.php");
}else{
	echo "Error";
}

