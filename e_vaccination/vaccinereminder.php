<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vaccine Remainder</title>
</head>

<body>

<div>
<a href="parentindex.php"><br>Back</div></a><br>
	<?php

		include 'database_connection.php';

		$username = $_SESSION['username'];

		$query = "SELECT * FROM vaccine_dates WHERE p_username='$username'";
		$result = mysqli_query($con,$query);

		if(mysqli_num_rows($result) > 0)
		{
			echo "<table cellspacing='6' cellpadding='6' class='tabel_style'>

				  <tr>
				  		<th>Child Name</th>
				  		<th>Vaccine Name</th>
				  		<th>Start Vaccine Date</th>
				  		<th>Vaccine Remainder</th>
				  </tr>";

			while ($row = mysqli_fetch_array($result)) {
				
				if($row['status'] == 'false'){
				echo "<tr>
						<td>".$row['c_name']."</td>
						<td>".$row['name']."</td>
						<td>".$row['v_date']."</td>
						<td class='td'>".$row['timing']."</td>
						</tr>";
				}
				else{
					echo "<tr>
							<td class='td_allocate'>".$row['c_name']."</td>
							<td class='td_allocate'>".$row['name']."</td>
							<td class='td_allocate'>".$row['v_date']."</td>
							<td class='td_allocate'>".$row['timing']."</td>
						</tr>";
				}
			}

			echo "</table>";
		}
		else
			echo "<p>No Any Dates Available !</p>";
	?>

</div>
</body>
</html>