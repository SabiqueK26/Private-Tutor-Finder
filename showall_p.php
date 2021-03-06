<?php
	session_start();
	if(!isset($_SESSION['UserName']))
	{
		header('Location:../views/login.php');
	}
	require_once '../controllers/ParentsControllers.php';
	$parents = getAllParents();
?>
<html>	
	<head>
		<title>Admin - show all Parents</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="a_changepwdstyle.css">
	</head>
	<body>
		<div class="a_homepage">
			<form action="../controllers/ParentsControllers.php" method="post"> 
			<h3>Welcome <?php echo $_SESSION['UserName']; ?></h3>
				<ul class="nav-area">
					<li><a href="a_homepage.php"><b>Home</b></a></li>
					<li><a href="deletep.php"><b>DELETE USER</b></a></li>
				</ul>
			<div class="plist">	
				<table>
					<caption>Parents List</caption>
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
							}
						?>
					</tbody>
				</table>
			</div>	
			</form>
		</div>	
	</body>
</html>		