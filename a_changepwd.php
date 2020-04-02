<?php
	session_start();
?>
<html>
	<head>
		<title>Admin - homepage</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="a_changepwdstyle.css">
	</head>
	<body>
		<div class="a_homepage">
			<form action="" method="post"> 
			<h3>Welcome <?php echo $_SESSION['loggedinauser']; ?></h3>
				<ul class="nav-area">
					<li><a href="a_homepage.php"><b>Home</b></a></li>
					<li><a href="login.php"><b>Log Out</b></a></li>
				</ul>
			<div class="cen-area">		
				<p>
					Old Password:
					<input class="textbox" placeholder="Enter old Password" type="password" name="apass">
				</p>
				<p>
					New Password:
					<input class="textbox" placeholder="Enter new Password" type="password" name="apass">
				</p>
				<p>
					<input type="submit" name="submit" value="Confirm Password">
				</p>
			</div>	
			</form>
		</div>
	</body>
</html>