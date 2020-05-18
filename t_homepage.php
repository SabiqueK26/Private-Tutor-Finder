<?php
	session_start();
	if(!isset($_SESSION['UserName']))
	{
		header('Location:../views/login.php');
	}
?>
<html>
	<head>
		<title>Tutors - homepage</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="t_homepagestyle.css">
	</head>
	<body>
		<div class="p_homepage">
			<form action="" method="post"> 
			<h3>Welcome <?php echo $_SESSION['UserName']; ?></h3>
				<ul class="nav-area">
					<li><a href="t_editacc.php"><b>Edit Account</b></a></li>
					<li><a href="t_changepwd.php"><b>Change Password</b></a></li>
					<li><a href="logout.php"><b>Log Out</b></a></li>
				</ul>
			</form>
		</div>
	</body>
</html>