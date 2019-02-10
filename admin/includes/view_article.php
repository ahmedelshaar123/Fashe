<a class="btn btn-primary" href="?do=add">Add new article</a>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th>header</th>
			<th>author</th>
			<th>category</th>
			<th>content</th>
			<th>date</th>
			<th>image</th>

		</tr>


	</thead>

	<tbody>
		<?php
		$select_article = "SELECT * FROM article";
		$result = $conn->query($select_article);
		foreach ($result as $row) {
			$header = $row['header'];
			$author = $row['author'];
			$category = $row['category'];
			$content = $row['content'];
			$date = $row['c_date'];
			$image = $row['image'];
			?>
		 <tr>
      
          <td><?php echo $header; ?></td>
          <td><?php echo $author; ?></td>
          <td><?php echo $category; ?></td>
          <td><?php echo $content; ?></td>
          <td><?php echo $date; ?></td>
          <td><img style="width: 100px;height: 100px;" src="fun/upload/<?php echo $image ?>" /></td>
          <td><a class="btn btn-info" href="?do=edit&id=<?php echo $row['id']; ?>">Edit</a></td>
          <td><a class="btn btn-danger" href="fun/delete_article.php?id=<?php echo $row['id']; ?>">Delete</a></td>

        </tr>

			
	<?php	}
	?>
	</tbody>
</table>