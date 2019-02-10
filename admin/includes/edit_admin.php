<?php 
	$id = $_GET['id'];
	$select_Admin = "SELECT * FROM admin WHERE id = $id";
	$result = $conn->query($select_Admin);
	$row = $result->fetch_assoc();

?>











<form method="post" action="fun/edit_admin.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" 
    value= "<?php echo $row['name'];?>" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password"
    value= "<?php echo $row['password']; ?>" placeholder="Password">
  </div>
  <input type="submit" class="btn btn-primary" value="Edit admin">
</form>