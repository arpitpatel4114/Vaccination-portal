<html>
<head>
	<title>Registration Form</title>


</head>

<body>

<form method="POST" class="container" action="adduser.php">

<div>
<h2>E - Vaccination Management</h2>	

<label><b>Username</b><span class="error">*</span></label></br>
<input type="text" name="uname" placeholder="First Name" size="62" required /></br></br>

<label><b>Name</b><span class="error">*</span></label></br>
<input type="text" name="name" placeholder="Enter Name" size="62" required/></br></br>

<label><b>Gender</b><span class="error">*</span></label></br>
<input type="radio" name="gender" value="Male" style="margin-left: 20px" />Male
<input type="radio" name="gender" value="Female" />Female

</br></br>
<label><b>City</b><span class="error">*</span></label></br>
<select name="city" required>
    <option value="none" selected disabled hidden> Select an city</option>
    <option value="Surat">Surat</option>
    <option value="Ahmedabad">Ahmedabad</option>
    <option value="Vadodara">Vadodara</option>
    <option value="Bharuch">Bharuch</option>
    <option value="Vapi">Vapi</option>
    <option value="Valasad">Valasad</option>
    </select> 

</br></br>
<label><b>Birth Date </b><span class="error">*</span></label></br>
    <input type="date" name="birth" required/>

<br><br>
<label><b>You are a</b><span class="error">*</span></label></br>
<select name="utype" class="option" required>
    <option value="none" selected disabled hidden> Select an Option</option>
    <option value="Admin">Admin</option>
    <option value="Parent">Parent</option>
</select> 

<br><br>
<label><b>Email Address</b><span class="error">*</span></label></br>
<input type="email" name="email" placeholder="Enter email address" size="62" required/></br></br>

<label><b>Password</b><span class="error">*</span></label></br>
<input type="password" name="password" placeholder="Enter Password" size="62" required /></br></br>

<input type="Submit" name="register" value="Register" /><br>
<br>

Already have an Account? <a href="index.php"><b>Login</b></a>
</div>

</body>
</form>
</html>