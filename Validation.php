<?php
	session_start();
	require '../models/database.php';
	
	if(isset($_POST["LogIn"]))
	{
		valid();
	}
	function function_alert($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/login.php'</script>";
	} 
	function valid()
	{
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		$utype = $_POST['utype'];
		
		if($utype == 'Admin')
		{
			$q1 = "SELECT * FROM admin WHERE UserName = '$uname' && Password = '$pass'";
			$r1 = get($q1);
			if(count($r1)>0)
			{
				$_SESSION['UserName'] = $uname;
				header("Location:../views/a_homepage.php");
			}
			else{
				function_alert("Invalid UserName or Password");
			}
		}
		else if($utype == 'Parents')
		{
			$q2 = "SELECT * FROM parents WHERE UserName = '$uname' && Password = '$pass'";
			$r2 = get($q2);
			if(count($r2)>0)
			{
				$_SESSION['UserName'] = $uname;
				header("Location:../views/p_homepage.php");
			}
			else{
				function_alert("Invalid UserName or Password");
			}
		}
		else if($utype == 'Tutors')
		{
			$q3 = "SELECT * FROM tutors WHERE UserName = '$uname' && Password = '$pass'";
			$r3 = get($q3);
			if(count($r3)>0)
			{
				$_SESSION['UserName'] = $uname;
				header("Location:../views/t_homepage.php");
			}
			else{
				function_alert("Invalid UserName or Password");
			}
		}
		else
		{
			function_alert("Invalid UserName or Password");
		}
	}	
?>