
<?php

include "connect.php";
$cat_id = $_POST['cat_id'];
$name = $_POST['name'];
$oldprice = $_POST['oldprice'];
$newprice = $_POST['newprice']; 


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

$add_product = "INSERT INTO product(cat_id, name, old_price, new_price, image) VALUES ('$cat_id', '$name', '$oldprice', '$newprice' , '$image')";
$result = $conn->query($add_product);
if($result == TRUE){
	header("LOCATION: ../product.php");
}else{
	echo "Error";
}

  