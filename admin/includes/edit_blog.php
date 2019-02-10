<?php 

$id = $_GET['id']; 
$sql = "SELECT * FROM ourblog WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


<form role="form" method="POST" action="fun/edit_blog.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username" value="<?php echo $row['username'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Header</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Header" name="header" value="<?php echo $row['header'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Paragraph</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Paragraph" name="paragraph" value="<?php echo $row['paragraph'] ?>">
  </div>

  <div class="form-group">
    <img style="width: 100px;height: 100px;" src="fun/upload/<?php echo $row['image'] ?>" /><br>
    <label for="exampleInputPassword1">Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
  </div>

  <input type="submit" class="btn btn-primary" value="Edit Blog">
</form>