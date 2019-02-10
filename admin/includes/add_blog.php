<form role="form" method="POST" action="fun/add_blog.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Header</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Header" name="header">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Paragraph</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Paragraph" name="paragraph">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
  </div>

  <input type="submit" class="btn btn-primary" value="Add blog">
</form>
