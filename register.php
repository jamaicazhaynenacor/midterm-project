<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

<style>
	* {
	margin: 0px;
	padding: 0px;
}
body {
	font-size: 120%;
	background: #F8F8FF;
}

.header {
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #c8a2c8;
	text-align: center;
	border: 1px solid #786178;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
	font-family: cursive;
	color: black;
}
form, .content {
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #786178;
	background: #D6CFD6;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 15px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #786178;
	border: 1px solid black;
	border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
</style>
	<title>Registration Form</title>

</head>
<body>
	<div class="header">
		<h2>Registration Form</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>First name</label>
			<input type="text" name="firstname" value="<?php echo $firstname; ?>">
		</div>

		<div class="input-group">
			<label>Middle name</label>
			<input type="text" name="middlename" value="<?php echo $middlename; ?>">
		</div>

		<div class="input-group">

			<label>Last name</label>
			<input type="text" name="lastname" value="<?php echo $lastname; ?>">
		</div>

		<div class="input-group">
			<label for="gender">Gender</label>
    <select name="gender" required>
        <option value="female">Female</option>
        <option value="male">Male</option> <br> </select>
		</div>

		<div class="input-group">
			<label for="birthdate">Birthdate</label>
    <input type="date" name="birthdate"  onchange="calculateAge()"required>
    <br>
    <label for="age">Age</label>
    <input type="text" id="age" name="Age" readonly><br>
		</div>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		
	</form>

	<script>
    function calculateAge() {
        var today = new Date();
        var birthDate = new Date(document.getElementById("birthdate").value);
        var age = today.getFullYear() - birthDate.getFullYear();
        var monthDiff = today.getMonth() - birthDate.getMonth();
        
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        
        document.getElementById("age").value = age;
    }
    </script>
</script>

</body>
</html>