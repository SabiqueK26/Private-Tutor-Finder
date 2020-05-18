<?php
	require_once '../controllers/Validation.php';
?>

<html>
	<head>
		<title>Private Tutor Finder - log in or sign up</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="logInstyle.css">
	</head>
	<body>
		<div class="login-box">
			<form action="../controllers/Validation.php" method="post"> 	
				
				<p>User Name:
				<input class="textbox" placeholder="Enter Username" type="text" name="uname" required>
			
				<p>Password:
				<input class="textbox" placeholder="Enter Password" type="password" name="pass" required>
				
				<p>User Type:
					<select name="utype">
						<option value="Admin">Admin</option>
						<option value="Parents">Parents</option>
						<option value="Tutors">Tutors</option>
					</select>
				</p>

				
				<input type="submit" name="LogIn" value="Log In">
			</form>
				<input id="fp" type="submit" name="fp" value="Forgot Password?">
				
				<h2><b> Create an Account! </b></h2>
				<p>
					<a href="p_reg.php">SignUp as Parents</a>
					<a href="t_reg.php">SignUp as Tutors</a>
				</p>
		
		</div>
	</body>
</html>