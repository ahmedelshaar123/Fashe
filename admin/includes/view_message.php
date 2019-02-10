<table class="table table-hover">
	<thead>
		<tr>
			<th>Fname</th>
			<th>Email</th>
			<th>Message</th>
		</tr>
	</thead>

	<tbody>
		<?php
		$view_messsage = "SELECT * FROM message";
		$result = $conn->query($view_messsage);
		while($row = $result->fetch_assoc()){
			$fname = $row['fname'];
			$email = $row['email'];
			$message = $row['message'];
		?>
		<tr>
			<td><?php echo $fname; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $message;?></td>
			<td><a class="btn btn-danger" href="fun/delete_message.php?id=<?php echo $row['id']?>">Delete</a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>