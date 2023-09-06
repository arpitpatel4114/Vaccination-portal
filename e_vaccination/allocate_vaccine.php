<!DOCTYPE html>
<html>
<head>
	<title>Allocate Vaccine</title>
</head>

<body>

<div class="bg">
<a href="adminindex.php"><div class="btn"><br>Back</div></a><br>	
	<?php

		include 'database_connection.php';

		$query = "SELECT * FROM vaccine_dates";
		$result = mysqli_query($con,$query);

		if(mysqli_num_rows($result) > 0)
		{
			echo "<table cellspacing='6' cellpadding='6' class='tabel_style'>

				  <tr>
				  		<th>Child Name</th>
				  		<th>Vaccine Name</th>
				  		<th>Start Vaccine Date</th>
				  		<th>Vaccine Remainder</th>
				  		<th></th>
				  </tr>";

			while ($row = mysqli_fetch_array($result)) {
				
				if($row['status'] == 'false'){
					echo "<tr>
							<td>".$row['c_name']."</td>
							<td>".$row['name']."</td>
							<td>".$row['v_date']."</td>
							<td class='td'>".$row['timing']."</td>
							<td><a href='updatevaccine.php?c_name=".$row['c_name']."&vaccine_n=".$row['name']."'><br>Tap to allocate</div></a><br></a></td>
							</tr>";
				}
				else{
					echo "<tr>
							<td class='td_allocate'>".$row['c_name']."</td>
							<td class='td_allocate'>".$row['name']."</td>
							<td class='td_allocate'>".$row['v_date']."</td>
							<td class='td_allocate'>".$row['timing']."</td>
							<td class='td_allocate'>Allocated</td>
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