<?php
$id = $_GET['id'];
$select_article = "SELECT * FROM article WHERE id = $id";
$result = $conn->query($select_article);
$row = $result->fetch_assoc();
?>

<form role="form" method="POST" action="fun/edit_article.php" enctype="multipart/form-data">

  <input type="hidden" name="id" value="<?php echo $row['id'];?>">

  <div class="form-group">
    <label for="exampleInputEmail1">Header</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Header" name="header" value="<?php echo $row['header']; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Author</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Author" name="author" value = "<?php echo $row['author']; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category" name="category" value="<?php echo $row['category']; ?>">
  </div>



  <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Content" name="content" value="<?php echo $row['content']; ?>">
  </div>

  <div class="form-group">
    <img style="width: 100px; height: 100px;" src="fun/upload/<?php echo $row['image'] ?>"/><br>
    <label for="exampleInputDate">Image</label>
    <input type="file" class="form-control" id="exampleInputDate" name="image">
  </div>

  <input type="submit" class="btn btn-primary" value="Submit">
</form>