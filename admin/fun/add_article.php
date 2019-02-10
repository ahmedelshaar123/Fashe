<?php
include "connect.php";
$header = $_POST['header'];
$author = $_POST['author'];
$category = $_POST['category'];
$content = $_POST['content'];
$date = date("Y-m-d");
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
$add_article = "INSERT INTO article(header, author, category, content, image, c_date) VALUES('$header', '$author', '$category', '$content', '$image', '$date')";
$result = $conn->query($add_article);
if($result == TRUE){
	header("Location: ../article.php");
}else{
	echo "Error";
}
