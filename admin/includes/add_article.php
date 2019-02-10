<form role="form" method="POST" action="fun/add_article.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Header</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Header" name="header">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Author</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Author" name="author">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category" name="category">
  </div>



  <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Content" name="content">
  </div>

  <div class="form-group">
    <label for="exampleInputDate">Image</label>
    <input type="file" class="form-control" id="exampleInputDate" name="image">
  </div>

  <input type="submit" class="btn btn-primary" value="Submit">
</form>