<!DOCTYPE html>
<html>
<head>
	<title>Add Vaccine</title>
</head>


<body>
<form method="POST" class="container" action="<?php $_SERVER['PHP_SELF'] ?>">

<div class="div">
<a href="adminindex.php"><div class="btn"><br>Back</div></a><br>

<h1>Add Vaccine</h1>	

<label ><b>Vaccine Name</b></label></br>
<select name="vaccine" style="width: 200px; height: 30px">
	<option value="none" selected disabled hidden> Select an Vaccine</option>
	<option value="BCG">BCG</option>
	<option value="Hepatitis B Birth dose">Hepatitis B Birth dose</option>
	<option value="OPV Birth dose">OPV Birth dose </option>
	<option value="IPV (inactivated Polio Vaccine)">IPV (inactivated Polio Vaccine)</option>
	<option value="Pentavelant">Pentavelant</option>
	<option value="Rota Virus Vaccine">Rota Virus Vaccine</option>
	<option value="DPT 1st  booster">DPT 1st  booster</option>
	<option value="DPT2 2nd Booster">DPT 2nd Booster </option>
	<option value="Vitamin A">Vitamin A</option>
	<option value="other">Other</option>
</select> 

<br><br>

<input type="Submit" name="addvaccine" value="Add Vaccine"/>

</div>

<?php

	include 'database_connection.php';
	
	if(isset($_POST['addvaccine']))
	{
		$name = $_POST['vaccine'];

		$time = '';

		if($name == 'BCG')
			$time = '+6 month';
		elseif ($name == 'Hepatitis B Birth dose') 
			$time = '+1 day';
		elseif ($name == 'OPV Birth dose')
			$time = '+10 day';
		elseif ($name == 'IPV (inactivated Polio Vaccine)')
			$time = '+3 month';
		elseif ($name == 'Pentavelant')
			$time = '+2 month';
		elseif ($name == 'Rota Virus Vaccine')
			$time = '+2 month';
		elseif ($name == 'DPT 1st  booster')
			$time = '+24 month';
		elseif ($name == 'DPT2 2nd Booster')
			$time = '+60 month';
		else
			$time = '+9 month';

		$query="INSERT INTO vaccine VALUES('$name','$time')";
		
		$result=mysqli_query($con,$query);

		if(!$result)
		{
			die("<br>Can't Insert Data : " .mysqli_error());
		}
		
		echo "<script>alert('Vaccine Details added');window.location='addvaccine.php'</script>";
	}
?>


</body>
</html>