<a class="btn btn-info" href="?do=add">Add new admin </a>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th>name</th>
			<th>password</th>
		</tr>
	</thead>

	<tbody>
		<?php 
			$select_Admin = "SELECT * FROM admin";
			$result = $conn->query($select_Admin);
			foreach ($result as $row) {
				$name = $row['name'];
				$password = $row['password'];
		?>
		<tr>
			<td><?php echo $name;?></td>
			<td><?php echo $password;?></td>
			<td><a class="btn btn-info" href="?do=edit&id=<?php echo $row['id']?>">Edit</a></td>
			<td><a class="btn btn-danger" href="fun/delete_admin.php?id=<?php echo $row['id']?>">Delete</a></td>
		</tr>
			<?php } ?>
	</tbody>
</table>