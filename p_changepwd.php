<?php
	session_start();
	if(!isset($_SESSION['UserName']))
	{
		header('Location:../views/login.php');
	}
	require_once '../controllers/ParentsControllers.php';
?>
<html>
	<head>
		<title>Parents - change password</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="a_changepwdstyle.css">
	</head>
	<body>
		<div class="a_homepage">
			<form action="../controllers/ParentsControllers.php" method="post"> 
			<h3>Welcome <?php echo $_SESSION['UserName']; ?></h3>
				<ul class="nav-area">
					<li><a href="p_homepage.php"><b>Home</b></a></li>
					<li><a href="logout.php"><b>Log Out</b></a></li>
				</ul>
			<div class="cen-area">		
				<p>
					UserName:
					<input class="textbox" placeholder="Enter UserName" type="text" name="puname" required>
				</p>
				<p>
					Old Password:
					<input class="textbox" placeholder="Enter old Password" type="password" name="popass" required>
				</p>
				<p>
					New Password:
					<input class="textbox" placeholder="Enter new Password" type="password" name="pnpass" required>
				</p>
				<p>
					Confirm Password:
					<input class="textbox" placeholder="Enter new Password" type="password" name="conpnpass" required>
				</p>
				<p>
					<input type="submit" name="changepwd_p" value="Confirm Password">
				</p>
			</div>	
			</form>
		</div>
	</body>
</html>