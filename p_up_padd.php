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
		<title>Parents - change address</title>
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
					<input class="textbox" placeholder="Enter Your UserName" type="text" name="puname" required>
				</p>
			
				<p>
					Address:
					<input class="textbox" placeholder="Enter New Address" type="text" name="padd" required>
				</p>
				
				<p>
					Password:
					<input class="textbox" placeholder="Enter Password" type="password" name="conpass" required>
				</p>
				<p>
					<input type="submit" name="up_padd" value="Update">
					<span><a href="p_editacc.php"><b>Cancel</b></span>
				</p>
			</div>	
			</form>
		</div>
	</body>
</html>