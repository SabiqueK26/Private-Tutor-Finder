<?php
	session_start();
?>
<html>
	<head>
		<title>Parents - homepage</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="p_homepagestyle.css">
	</head>
	<body>
		<div class="p_homepage">
			<form action="" method="post"> 
			<h3>Welcome <?php echo $_SESSION['loggedinauser']; ?></h3>
				<ul class="nav-area">
					<li><a href="p_editacc.php"><b>Edit Account</b></a></li>
					<li><a href="p_changepwd.php"><b>Change Password</b></a></li>
					<li><a href="login.php"><b>Log Out</b></a></li>
				</ul>
			<div class="tlist">	
				<table>
					<caption>Tutors List</caption>
					<tr>
						<th>Full Name</th>
						<th>User Name</th>
						<th>Gender</th>
						<th>E-mail</th>
						<th>Interested</th>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
			</form>
		</div>
	</body>
</html>