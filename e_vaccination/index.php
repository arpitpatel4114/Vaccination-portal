<?php
    session_start();
?>
<html>
<head>
	<title>Login Form</title>


</head>

<body>

<form method="post" action="chkuser.php" class="container">

<div>

<h2>E - Vaccination Management</h2>	


<label><b>Username</b><span class="error">*</span></label></br>
<input type="text" name="uname" class="text" placeholder="Username" size="62" required /></br></br>

<label><b>Password</b><span class="error">*</span></label></br>
<input type="password" name="pass" class="text" placeholder="Enter Password" size="62" required /></br></br>

<label><b>You are a</b><span class="error">*</span></label></br>
<select name="utype" required>
    <option value="none" selected disabled hidden> Select an Option</option>
    <option value="Admin">Admin</option>
    <option value="Parent">Parent</option>
</select> 

<br>


<input type="Submit" name="login" value="Login" /><br>
<br>

Don't have an account yet?  <br>  <a href="registration.php"><b>Tap to Register</b></a>
<br>
<?php
            if(isset($_SESSION['msg']))
            {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                session_destroy();
            } 
?>


</div>
</body>
</form>
</html>