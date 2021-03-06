<?php
	session_start();
	if(!isset($_SESSION['UserName']))
	{
		header('Location:../views/login.php');
	}
	require_once '../controllers/TutorsControllers.php';
?>
<html>
	<head>
		<title>Tutors - change password</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="a_changepwdstyle.css">
	</head>
	<body>
		<div class="a_homepage">
			<form action="../controllers/TutorsControllers.php" method="post"> 
			<h3>Welcome <?php echo $_SESSION['UserName']; ?></h3>
				<ul class="nav-area">
					<li><a href="t_homepage.php"><b>Home</b></a></li>
					<li><a href="logout.php"><b>Log Out</b></a></li>
				</ul>
			<div class="cen-area">		
				<p>
					UserName:
					<input class="textbox" placeholder="Enter UserName" type="text" name="tuname" required>
				</p>
				<p>
					Old Password:
					<input class="textbox" placeholder="Enter old Password" type="password" name="topass" required>
				</p>
				<p>
					New Password:
					<input class="textbox" placeholder="Enter new Password" type="password" name="tnpass" required>
				</p>
				<p>
					Confirm Password:
					<input class="textbox" placeholder="Enter new Password" type="password" name="contnpass" required>
				</p>
				<p>
					<input type="submit" name="changepwd_t" value="Confirm Password">
				</p>
			</div>	
			</form>
		</div>
	</body>
</html>