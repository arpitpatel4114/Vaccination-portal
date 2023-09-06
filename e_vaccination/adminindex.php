<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<?php   
  ?>
<div class="topnav">
  
  <label ><h3>
    <?php 
     echo "welcome ";
    echo $_SESSION['username'];

    ?></h3>
    </label>
  <a href="logout.php">Click here to Logout</a>
</div>

<div class="bg">
<center><h1><br>
<a href= "viewchild.php"><div class="btn"><br>View Child Details</div></a><br>
<a href= "addvaccine.php"><div class="btn"><br>Add vaccine</div></a><br>
<a href= "allocate_vaccine.php"><div class="btn"><br>Allocat Vaccine slote</div></a><br>
<a href= "report.php"><div class="btn"><br>View Report</div></a><br>
</center></h1>
</div>

</body>
</html>
