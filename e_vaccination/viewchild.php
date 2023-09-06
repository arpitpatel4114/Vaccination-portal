<!DOCTYPE html>
<html>
<head>
	<title>View Child Details</title>
</head>


<body>

<div>
<a href="adminindex.php"><div class="btn"><br>Back</div></a><br>	

<table class="tabel_style" cellspacing="5" cellpadding="5" >


<?php
	include 'database_connection.php';

	$query="SELECT * FROM child";

	$result = mysqli_query($con,$query);

	if(mysqli_num_rows($result) > 0){
		echo "<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Birth Date</th>
				<th>City</th>
				<th>Age</th>
				<th>Weight</th>
				<th>Height</th>
				<th>Vaccine</th>
				<th></th>
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
					<td><a href='deletechild.php?c_name=".$row['c_name']."'>
					<br>Tap to delete record</div></a><br>	</a>
					</td>
				  </tr>";
		}
	}
	else{
		echo "<p>Not inserted Any Child Details !</p>";
	}

?>

</table>
</div>
</body>
</html>