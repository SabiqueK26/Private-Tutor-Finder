<?php
	session_start();
	if(!isset($_SESSION['UserName']))
	{
		header('Location:../views/login.php');
	}
	require_once '../controllers/TutorsControllers.php';
	$tutors = getAllTutors();
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
			<h3>Welcome <?php echo $_SESSION['UserName']; ?></h3>
				<ul class="nav-area">
					<li><a href="p_editacc.php"><b>Edit Account</b></a></li>
					<li><a href="p_changepwd.php"><b>Change Password</b></a></li>
					<li><a href="logout.php"><b>LogOut</b></a></li>
				</ul>
			<div class="tlist">	
				<table>
					<caption>Tutors List</caption>
					<thead>
						<th>Name</th>
						<th>UserName</th>
						<th>Gender</th>
						<th>Phone</th>
						<th>Email</th>
						<th>AcademicInstitution</th>
					</thead>
					<tbody>
						<?php
							foreach($tutors as $tutor)
							{
								echo "<tr>";
									echo "<td>".$tutor["Name"]."</td>";
									echo "<td>".$tutor["UserName"]."</td>";
									echo "<td>".$tutor["Gender"]."</td>";
									echo "<td>".$tutor["Phone"]."</td>";
									echo "<td>".$tutor["Email"]."</td>";
									echo "<td>".$tutor["AcademicInstitution"]."</td>";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
			</form>
		</div>
	</body>
</html>