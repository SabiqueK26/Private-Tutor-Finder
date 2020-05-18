<?php
	session_start();
	if(!isset($_SESSION['UserName']))
	{
		header('Location:../views/login.php');
	}
	require_once '../controllers/ParentsControllers.php';
	$parents = getParents();
?>
<html>
	<head>
		<title>Parents - edit account</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="p_homepagestyle.css">
	</head>
	<body>
		<div class="p_homepage">
			<form action="../controllers/ParentsControllers.php" method="post"> 
			<h3>Welcome <?php echo $_SESSION['UserName']; ?></h3>
				<ul class="nav-area">
					<li><a href="p_homepage.php"><b>Home</b></a></li>
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
						<th>Profession</th>
						<th>Phone</th>
						<th>Address</th>
					</thead>
					<tbody>
						<?php
							foreach($parents as $parent)
							{
								echo "<tr>";
									echo "<td>".$parent["Name"]."</td>";
									echo "<td>".$parent["UserName"]."</td>";
									echo "<td>".$parent["Gender"]."</td>";
									echo "<td>".$parent["Profession"]."</td>";
									echo "<td>".$parent["Phone"]."</td>";
									echo "<td>".$parent["Address"]."</td>";
								echo "</tr>";
								echo "<tr>";
									echo '<td>Cannot Change</td>';
									echo '<td>Cannot Change</td>';
									echo '<td>Cannot Change</td>';
									echo '<td><a href="p_up_prof.php"><b>Change</b></td>';
									echo '<td><a href="p_up_pnum.php"><b>Change</b></td>';
									echo '<td><a href="p_up_padd.php"><b>Change</b></td>';
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