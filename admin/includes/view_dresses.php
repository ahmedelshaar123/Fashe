<a class="btn btn-primary" href="?do=add">Add new dresses</a>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th>Image</th>
		</tr>
	</thead>

	<tbody>
		<?php 
			$select_dresses = "SELECT * FROM dresses";
			$result = $conn->query($select_dresses);
			foreach ($result as $row) {
				$image = $row['image'];	
		?>

		<tr>
			<td><img style="width: 100px; height: 100px;" src="fun/upload/<?php echo $image?>"></td>
			<td><a class="btn btn-danger" href="fun/delete_dresses.php?id=<?php echo $row['id']?>">Delete</a></td>
		</tr>			
			<?php } ?>
	</tbody>
</table>
