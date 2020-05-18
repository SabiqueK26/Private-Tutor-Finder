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
		<title>Admin - Delete Tutors</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="a_changepwdstyle.css">
	</head>
	<body>
		<div class="a_homepage">
			<form action="../controllers/TutorsControllers.php" method="post"> 
			<h3>Welcome <?php echo $_SESSION['UserName']; ?></h3>
				<ul class="nav-area">
					<li><a href="a_homepage.php"><b>Home</b></a></li>
				</ul>
		</div>
		<div class="cen-area">		
				<p>
					Enter UserName:
					<input class="textbox" placeholder="Enter UserName" type="text" name="tuname" required>
				</p>
				<p>
					<input type="submit" name="del_t" value="Delete User">
				</p>
			</div>	
	</body>
</html>