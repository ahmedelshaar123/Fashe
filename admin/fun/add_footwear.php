<?php
include "connect.php";

$image = $_FILES['image']['name'];     
$imgtmp = $_FILES['image']['tmp_name'];
$imgsize = $_FILES['image']['size'];
$imgtype = $_FILES['image']['type'];
$images = array('png', 'gif', 'jpg','JPG');
$imagescut = explode(".", $image);
$image_Ex = end($imagescut);

//verify image type
if(!in_array($image_Ex, $images) && !empty($image)){
	echo "error in image type";
	exit();
}        

//verify  image size
if($imgsize >= 5120000){
	echo "size of image is big";
	exit();
}

//change img name
 
if(!empty($image)){
	$image_end_name = rand(0,123456789).time().$image;
}



move_uploaded_file($imgtmp, "upload/$image");       

$add_footwear = "INSERT INTO footwear(image) VALUES ('$image')";
$result = $conn->query($add_footwear);
if($result == TRUE){
	header("LOCATION: ../footwear.php");
}else{
	echo "Error";
}
