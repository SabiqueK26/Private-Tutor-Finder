<?php
	session_start();
?>
<html>	
	<head>
		<title>Admin - show all Tutors</title>
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
			<div class="plist">	
				<table>
					<caption>Tutors List</caption>
					<tr>
						<th>Full Name</th>
						<th>User Name</th>
						<th>Gender</th>
						<th>E-mail</th>
						<th>DELETE</th>
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