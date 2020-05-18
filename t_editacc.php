<?php
	session_start();
	if(!isset($_SESSION['UserName']))
	{
		header('Location:../views/login.php');
	}
	require_once '../controllers/TutorsControllers.php';
	$tutors = getTutors();
?>
<html>
	<head>
		<title>Tutors - edit account</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="p_homepagestyle.css">
	</head>
	<body>
		<div class="t_homepage">
			<form action="../controllers/TutorsControllers.php" method="post"> 
			<h3>Welcome <?php echo $_SESSION['UserName']; ?></h3>
				<ul class="nav-area">
					<li><a href="t_homepage.php"><b>Home</b></a></li>
					<li><a href="logout.php"><b>Log Out</b></a></li>
				</ul>
				<div class="cen-area">
				<div class="tlist">	
				<table>
					<caption>PROFILE</caption>
					<thead>
						<th>Name</th>
						<th>UserName</th>
						<th>Gender</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Address</th>
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
									echo "<td>".$tutor["Address"]."</td>";
									echo "<td>".$tutor["AcademicInstitution"]."</td>";
								echo "</tr>";
								echo "<tr>";
									echo '<td>Cannot Change</td>';
									echo '<td>Cannot Change</td>';
									echo '<td>Cannot Change</td>';
									echo '<td><a href="t_up_tnum.php"><b>Change</b></td>';
									echo '<td>Cannot Change</td>';
									echo '<td><a href="t_up_tadd.php"><b>Change</b></td>';
									echo '<td><a href="t_up_tai.php"><b>Change</b></td>';
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
			</div>	
			</form>
		</div>
	</body>
</html>