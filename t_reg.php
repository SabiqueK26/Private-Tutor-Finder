<?php
	require_once '../controllers/TutorsControllers.php';
?>

<html>
	<head>
		<title>Private Tutor Finder - sign up as tutors</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="t_regstyle.css">
	</head>
	<body>
		<div class="signup-t">
			<form method="post" action="../controllers/TutorsControllers.php">
				<h3>Sign up as Tutors</h3>
				<p>
					Full Name:
					<input class="textbox" placeholder="Enter Full Name" type="text" name="tname" required>
				</p>
				
				<p>User Type:
					<select name="utype">
						<option value="Tutors">Tutors</option>
					</select>
				</p>
				
				<p>
					User Name:
					<input class="textbox" placeholder="Enter User Name" type="text" name="tuname" required>
				</p>

				<p>
					Password:
					<input class="textbox" placeholder="Enter Password" type="password" name="tpass" required>
				</p>

				<p>
					Gender: 
					<span><input type="radio" name="gender" value="M"> Male <input type="radio" name="gender" value="F"> Female</span>
				</p>
				
				<p>
					Address:
					<input class="textbox" type="text" name="tadd" placeholder="Enter address" required>
				</p>	

				<p>
					Phone Number:
					<input class="textbox" type="text" placeholder="Enter phone number" name="tnum" required>
				</p>
				<p>
					Email:
					<input class="textbox" type="text" placeholder="Enter Email" name="email" required>
				</p>
				<p>
					Academic Institution:
					<input class="textbox" type="text" placeholder="Current Institution Name" name="tai" required>
				</p>
				<p>
					<input type="submit" name="add_tutors" value="Submit">
				</p>
			</form>
			<p>
				Go to<a href="logIn.php"> log in </a>page
			</p>
		</div>	
	</body>
</html>