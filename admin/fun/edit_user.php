<?php
include "connect.php";
	$id = $_POST['id'];
	$username = $_POST['name'];
	$pass = $_POST['password'];
	$password = md5($pass);
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$date = date("y-m-d");
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
	move_uploaded_file($imgtmp, "upload/$image")
	$update_img = "UPDATE user SET image = '$image' WHERE id = $id";
	$conn->query($update_img);
}

$update_User = "UPDATE user SET username = '$username' , password = '$password', fname = '$fname', lname = '$lname', phone = '$phone', address = '$address', email = '$email', c_date = '$date' WHERE id = $id";   
$result = $conn->query($update_User);

if($result == TRUE){
	header("Location: ../user.php");
}else{
	echo "Error";
}
