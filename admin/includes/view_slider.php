<a class="btn btn-info" href="?do=add">Add slider</a>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th>Header</th>
			<th>Paragraph</th>
			<th>Image</th>
		</tr>
	</thead>

	<tbody>
		<?php 
			$view_slider = "SELECT * FROM slider";
			$result = $conn->query($view_slider);
			foreach ($result as $row) {
			?>
			<tr>
				<td><?php echo $row['header'];?></td>
				<td><?php echo $row['paragraph'];?></td>
				<td><img style="width: 100px; height: 100px;" src="fun/upload/<?php echo $row['image']?>"/></td>
				<td><a class="btn btn-danger" href="fun/delete_slider.php?id=<?php echo$row['id']?>">Delete</a></td>
			</tr>	
		<?php } ?>
	</tbody></table>
			