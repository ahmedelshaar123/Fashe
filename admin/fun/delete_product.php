<?php
include "connect.php";

$id = $_GET['id'];


$delete_product = "DELETE FROM product WHERE id = $id";
$result = $conn->query($delete_product);

if($result){
	header("Location: ../product.php");
}else{
	Echo "Error";
}


