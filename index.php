<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
	}

?>
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
}</style>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>SUCCESS!!</h2>
	</div>
	<div class="content">

		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

		<?php endif ?>
	</div>
		
</body>
</html>