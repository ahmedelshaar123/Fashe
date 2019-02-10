<a class="btn btn-primary" href="?do=add">Add new user</a>
<table class="table">
	<thead class = "thead-dark">
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Fname</th>
			<th>Lname</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Email</th>
			<th>Date</th>
			<th>Image</th>

		</tr>
	</thead>

		<tbody>
			<?php 
				$select_user = "SELECT * FROM user";
				$result = $conn->query($select_user);
				foreach ($result as $row) {
					$username = $row['username'];
					$password = $row['password'];
					$fname = $row['fname'];
					$lname = $row['lname'];
					$phone = $row['phone'];
					$address = $row['address'];
					$email = $row['email'];
					$date = $row['c_date'];
					$image = $row['image'];
			?>
				<tr>
					<td><?php echo $username; ?></td>
					<td><?php echo $password; ?></td>
					<td><?php echo $fname; ?></td>
					<td><?php echo $lname; ?></td>
					<td><?php echo $phone; ?></td>
					<td><?php echo $address; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $date; ?></td>
					<td><?php echo $image; ?></td>
					<td><a href="?do=edit&id=<?php echo $row['id']?>">Edit</a></td>
					<td><a href="fun/delete_user.php?id=<?php echo $row['id']?>">Delete</a></td>

				</tr>
					
				<?php }
				?>
		</tbody>
</table>