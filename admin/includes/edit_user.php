<?php
	$id = $_GET['id'];
	$select_User = "SELECT * FROM user WHERE id = $id";
	$result = $conn->query($select_User);
	$row = $result->fetch_assoc();
?>

<form method="post" action="fun/edit_user.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id']?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter name" value="<?php echo $row['username']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="<?php echo $row['password']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Fname</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="fname" aria-describedby="emailHelp" placeholder="Enter first Name" value="<?php echo $row['fname']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Lname</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lname" placeholder="Last name" value="<?php echo $row['lname']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" placeholder="Enter phone" value="<?php echo $row['phone']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="address" placeholder="Address" value="<?php echo $row['address']?>"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $row['email']?>">
  </div>
  <div class="form-group">
  	<img style="width: 100px; height: 100px; src="fun/upload/<?php echo $image ?>"/> <br>
    <label for="exampleInputPassword1">Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
  </div>
  <input type="submit" class="btn btn-primary"  value="Edit user">
</form>