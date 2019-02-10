<?php
include "connect.php";
$id = $_POST['id'];
$header = $_POST['header'];
$author = $_POST['author'];
$category = $_POST['category'];
$content = $_POST['content'];
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
	move_uploaded_file($imgtmp, "upload/$image");
	$update_img = "UPDATE article SET image = '$image' WHERE id = $id";
	$conn->query($update_img);
}

$update_article = "UPDATE article SET header = '$header' , author = '$author' , category = '$category', content = '$content' WHERE id = $id";
$result = $conn->query($update_article);

if($result == TRUE){
	header("Location: ../article.php");
}else{
	echo "Error";
}