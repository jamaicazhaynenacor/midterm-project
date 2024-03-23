<?php 
	session_start();

	// variable declaration
	$firstname    = "";
	$middlename    = "";
	$lastname    = "";
	$gender    = "";
	$birthdate    = "";
	$age    = "";
	$username    = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$middlename = mysqli_real_escape_string($db, $_POST['middlename']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
		$age = mysqli_real_escape_string($db, $_POST['age']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($firstname)) { array_push($errors, "firstname is required"); }
		if (empty($middlename)) { array_push($errors, "middlename is required"); }
		if (empty($lastname)) { array_push($errors, "lastname is required"); }
		if (empty($gender)) { array_push($errors, "gender is required"); }
		if (empty($birthdate)) { array_push($errors, "birthdate is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

?>