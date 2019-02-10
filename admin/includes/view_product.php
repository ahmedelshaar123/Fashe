
<a class="btn btn-info" href="?do=add">Add New Product</a>
<table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">cat_id</th>
      <th scope="col">name</th>
      <th scope="col">old price</th>
      <th scope="col">new price</th>
      <th scope="col">image</th>
      
    </tr>
  </thead>

  <tbody>

    <?php
      $select_product = "SELECT * FROM product";
      $result = $conn->query($select_product);
      foreach($result as $row){
        $cat_id = $row['cat_id'];
        $name = $row['name'];
        $oldprice = $row['old_price'];
        $newprice = $row['new_price'];
        $image = $row['image'];
        ?>
        <tr>
          <td><?php echo $cat_id; ?> </td>
          <td><?php echo $name; ?></td>
          <td><?php echo $oldprice; ?></td>
          <td><?php echo $newprice; ?></td>
          <td><img style="width: 100px;height: 100px;" src="fun/upload/<?php echo $image ?>" /></td>
          <td><a class="btn btn-info" href="?do=edit&id=<?php echo $row['id']; ?>">Edit</a></td>
          <td><a class="btn btn-danger" href="fun/delete_product.php?id=<?php echo $row['id']; ?>">Delete</a></td>

        </tr>
<?php      }

      ?>
   
  </tbody>

</table>