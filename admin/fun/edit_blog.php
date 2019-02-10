<?php
include 'connect.php';
$id = $_POST['id'];
$username = $_POST['username'];
$header = $_POST['header'];
$paragraph = $_POST['paragraph'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$image_size = $_FILES['image']['size'];
$image_type = $_FILES['image']['type'];

$extensions = array("gif", "png", "jpg", "JPG");
$image_cut = explode(".", $image);
$image_ex = end($image_cut);

if(!in_array($image_ex, $extensions) && !empty($image)){
	echo "Error in image type";
	exit();
}

if($image_size >= 5012000){
	echo "Size of image is big";
}

if(!empty($image)){
	$image_final = rand(0,123456789).time().$image;
	move_uploaded_file($imgtmp, "upload/$image");
	$update_img = "UPDATE ourblog SET image = '$image' WHERE id = $id";
	$conn->query($update_img);
}


$sql = "UPDATE ourblog SET header = '$header' , username = '$username' , paragraph = '$paragraph' WHERE id = $id ";
$result = $conn->query($sql);

if($result == TRUE){
	header("Location: ../ourblog.php");
}else{
	echo "Error";
}