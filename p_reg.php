<?php 
	require_once '../controllers/ParentsControllers.php';
?>
	
<html>
	<head>
		<title>Private Tutor Finder - sign up as parents</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="p_regstyle.css">
	</head>
	<body>
		<div class="signup-p">
			<form method="post" action="../controllers/ParentsControllers.php">
				<h3>Sign up as Parents</h3>
				<p>
					Full Name:
					<input class="textbox" placeholder="Enter Full Name" type="text" name="pname" required>
				</p>
				
				<p>User Type:
					<select name="utype">
						<option value="Parents">Parents</option>
					</select>
				</p>
				
				<p>
					Username:
					<input class="textbox" placeholder="Enter User Name" type="text" name="puname" required>
				</p>

				<p>
					Password:
					<input class="textbox" placeholder="Enter Password" type="password" name="ppass" required>
				</p>

				<p>
					Gender:
					<span><input type="radio" name="gender" value="M"> Male <input type="radio" name="gender" value="F"> Female</span>
				</p>
				
				<p>
					Address:
					<input class="textbox" type="text" name="padd" placeholder="Enter address" required>
				</p>	
				
				<p>
					Profession:
					<input class="textbox" type="text" placeholder="Enter Profession" name="prof" required>
				</p>
				
				<p>
					Phone Number:
					<input class="textbox" type="text" placeholder="Enter phone number" name="pnum" required>
				</p>
				
				<p>
					<input type="submit" name="add_parents" value="Submit">
				</p>
			</form>
				<p>Go to <a href="logIn.php"> log in </a>page</p>
		</div>
	</body>
</html>