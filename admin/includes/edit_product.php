<?php 

$id = $_GET['id']; 
$select_product = "SELECT * FROM product WHERE id = $id";
$result = $conn->query($select_product);
$row = $result->fetch_assoc();
?>


<form role="form" method="POST" action="fun/edit_product.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Category id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter category id" name="cat_id" value="<?php echo $row['cat_id'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter productname" name="name" value="<?php echo $row['name'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Old price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Old price" name="oldprice" value="<?php echo $row['old_price'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="New price" name="newprice" value="<?php echo $row['new_price'] ?>">
  </div>

  <div class="form-group">
    <img style="width: 100px;height: 100px;" src="fun/upload/<?php echo $row['image'] ?>" /><br>
    <label for="exampleInputPassword1">Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
  </div>

  <input type="submit" class="btn btn-primary" value="Submit">
</form>