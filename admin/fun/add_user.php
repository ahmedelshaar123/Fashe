<?php
	include "connect.php";
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
}



	move_uploaded_file($imgtmp, "upload/$image"); 
	$insert_User = "INSERT INTO user(username, password, fname, lname, phone, address, email, c_date, image)
	VALUES('$username', '$password', '$fname', '$lname', '$phone', '$address', '$email', '$date', '$image')";
	$result = $conn->query($insert_User);
	if($result == TRUE){
		header("Location:../user.php");
	}else{
		echo "Error";
	}

	