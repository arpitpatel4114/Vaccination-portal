<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parent Report</title>
</head>

<body>
<div class="topnav">
  <label >
    <?php 
    echo "Welcome ";
    echo $_SESSION['username']; 
    ?>
    </label>
  <a href="logout.php">Click to Logout</a>
</div>

<div class="bg">
<center>
  <h1>
<a href= "addchild.php"><div class="btn"><br>Add New Child</div></a></br>
<a href= "viewparentchild.php"><div class="btn"><br>View Child Details</div></a></br>
<a href= "vaccinereminder.php"><div class="btn"><br>My Vaccine Reminder</div></a><br>
<br><br>
</h1>
</center>
</div>
</body>
</html>