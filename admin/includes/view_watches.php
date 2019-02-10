<a class="btn btn-primary" href="?do=add">Add new watches</a>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th>Image</th>
		</tr>
	</thead>

	<tbody>
		<?php 
			$select_watches = "SELECT * FROM watches";
			$result = $conn->query($select_watches);
			foreach ($result as $row) {
				$image = $row['image'];	
		?>

		<tr>
			<td><img style="width: 100px; height: 100px;" src="fun/upload/<?php echo $image?>"></td>
			<td><a class="btn btn-danger" href="fun/delete_watches.php?id=<?php echo $row['id']?>">Delete</a></td>
		</tr>			
			<?php } ?>
	</tbody>
</table>
