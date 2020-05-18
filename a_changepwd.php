<?php
	session_start();
	require_once '../controllers/AdminsControllers.php';
	if(!isset($_SESSION['UserName']))
	{
		header('Location:../views/login.php');
	}
?>
<html>
	<head>
		<title>Admin - homepage</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="a_changepwdstyle.css">
	</head>
	<body>
		<div class="a_homepage">
			<form action="../controllers/AdminsControllers.php" method="post"> 
			<h3>Welcome <?php echo $_SESSION['UserName']; ?></h3>
				<ul class="nav-area">
					<li><a href="a_homepage.php"><b>Home</b></a></li>
					<li><a href="logout.php"><b>Log Out</b></a></li>
				</ul>
			<div class="cen-area">		
				<p>
					UserName:
					<input class="textbox" placeholder="Enter UserName" type="text" name="uname" required>
				</p>
				<p>
					Old Password:
					<input class="textbox" placeholder="Enter old Password" type="password" name="aopass" required>
				</p>
				<p>
					New Password:
					<input class="textbox" placeholder="Enter new Password" type="password" name="anpass" required>
				</p>
				<p>
					Confirm Password:
					<input class="textbox" placeholder="Enter new Password" type="password" name="conanpass" required>
				</p>
				<p>
					<input type="submit" name="changepwd_a" value="Confirm Password">
				</p>
			</div>	
			</form>
		</div>
	</body>
</html>