<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head><title>View Child Details</title></head>



<body>

<div>
<a href="parentindex.php"><div class="btn"><br>Back</div></a><br>


<?php
	include 'database_connection.php';

	$name = $_SESSION['username'];
	$query="SELECT * FROM child WHERE p_username = '$name'";

	$result = mysqli_query($con,$query);

	
	if(mysqli_num_rows($result) > 0){

		echo "<table class='tabel_style' cellspacing='5' cellpadding='5' >
				<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Birth Date</th>
				<th>City</th>
				<th>Age</th>
				<th>Weight</th>
				<th>Height</th>
				<th>Vaccine</th>
				<th></th>
			</tr>";

		while ($row = mysqli_fetch_array($result)) {
			echo "<tr>
					<td>".$row['c_name']."</td>
					<td>".$row['c_gender']."</td>
					<td>".$row['c_birth']."</td>
					<td>".$row['c_city']."</td>
					<td>".$row['c_age']."</td>
					<td>".$row['c_weight']."</td>
					<td>".$row['c_height']."</td>
					<td>".$row['c_vaccine']."</td>
					<td><a href='editchild.php?c_name=".$row['c_name']."'>
					<br>Click here to edit child details</div></a><br>
					</td>
				  </tr>";
		}

		echo "</table>";
	}
	else	
	{
		echo "<p> No Data Found!</p>";
	}
?>

</table>
</div>
</body>
</html>