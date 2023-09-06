<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
</head>

<body>

<div class="bg">
<a href="adminindex.php"><div class="btn"><br>Back</div></a><br>

<?php
	include 'database_connection.php';

	$query="SELECT * FROM parent";

	$result=mysqli_query($con,$query);

	if(mysqli_num_rows($result) > 0)
	{
		echo "<p>ALL PARENT LIST</p>";
		echo "<table class='tabel_style'>";

		while ($row = mysqli_fetch_array($result))
		{
			echo "	<tr>
						<td><a href='parentreport.php?name=".$row['p_username']."' class='a'>".$row['p_username']."</a></td>
					</tr>
				  ";
		}
		echo "</table>";
	}
	else
		echo "<p>Not available Any Parent data!</p>";
?>

</table>
	
</div>
</body>
</html>
<!-- <label type=\"text\" for=\"name[]\" value=".$row['p_username']."/>".$row['p_username']." -->