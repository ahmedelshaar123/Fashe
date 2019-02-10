<?php
include "connect.php";

$id = $_GET['id'];                     


$delete_article = "DELETE FROM article WHERE id = $id";
$result = $conn->query($delete_article);

if($result){
	header("Location: ../article.php");
}else{
	Echo "Error";
}
