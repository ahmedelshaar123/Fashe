<?php

include 'connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM ourblog WHERE id = $id";
$result = $conn->query($sql);

if ($result) {
	header("Location: ../ourblog.php");
}else{
	echo "Error";
}