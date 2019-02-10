<form role="form" method="POST" action="fun/add_product.php" enctype="multipart/form-data">

  <div class="form-group">
    <label for="exampleInputEmail1">Category id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category id" name="cat_id">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Product name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter productname" name="name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Old price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Old price" name="oldprice">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="New price" name="newprice">
  </div>

  <div class="form-group">
    <label for="exampleInputDate">Image</label>
    <input type="file" class="form-control" id="exampleInputDate" name="image">
  </div>

  <input type="submit" class="btn btn-primary" value="Submit">
</form>