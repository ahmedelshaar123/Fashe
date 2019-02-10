<a class="btn btn-info" href="?do=add">Add new blog</a>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th>username</th>
			<th>header</th>
			<th>paragraph</th>
			<th>date</th>
			<th>image</th>
		</tr>

		<tbody>
			<?php 
				$sql = "SELECT * FROM ourblog";
				$result = $conn->query($sql);
				foreach ($result as $row) {
					$username = $row['username'];
					$header = $row['header'];
					$paragraph = $row['paragraph'];
					$date = $row['c_date'];
					$image = $row['image'];

				

			?>


			<tr>
				<td><?php echo $username; ?> </td>
				<td><?php echo $header; ?> </td>
				<td><?php echo $paragraph; ?> </td>
				<td><?php echo $date; ?> </td>
				<td><img style="width: 100px; height: 100px;" src="fun/upload/<?php echo $image ?>"/></td>
				<td><a class="btn btn-info" href="?do=edit&id=<?php echo $row['id'] ?>">Edit Blog</a></td>
				<td><a class="btn btn-danger" href="fun/delete_blog.php?id=<?php echo $row['id'] ?>">Delete Blog</a></td>
			</tr>

			<?php }
			?>
			
		</tbody>
	</thead>
</table>
