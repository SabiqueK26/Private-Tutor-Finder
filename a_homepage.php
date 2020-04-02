<?php
	session_start();
?>
<html>
	<head>
		<title>Admin - homepage</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="a_homepagestyle.css">
	</head>
	<body>
		<div class="a_homepage">
			<form action="" method="post"> 
			<h3>Welcome <?php echo $_SESSION['loggedinauser']; ?></h3>
				<ul class="nav-area">
					<li><a href="a_changepwd.php"><b>Change Password</b></a></li>
					<li><a href="login.php"><b>Log Out</b></a></li>
				</ul>
				<ul class="cen-area">
					<li><a href="showall_p.php"><b>Show All Parents</b></a></li>
					<span><li><a href="showall_t.php"><b>Show All Tutors</b></a></li></span>
				</ul>
			</form>
		</div>
	</body>
</html>