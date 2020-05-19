<?php
	require_once '../models/database.php';
	
	if(isset($_POST["add_tutors"]))
	{
		insertTutors();
	}
	else if(isset($_POST["edit_tutors"]))
	{
		editTutors();
	}
	else if(isset($_POST["del_t"]))
	{
		deleteTutors();
	}
	else if(isset($_POST["changepwd_t"]))
	{
		changepwd();
	}
	else if(isset($_POST["up_tnum"]))
	{
		upTnum();
	}
	else if(isset($_POST["up_tadd"]))
	{
		upTadd();
	}
	else if(isset($_POST["up_tai"]))
	{
		upTai();
	}
	function function_alert($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/showall_t.php'</script>";
	}
	function function_alert1($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/login.php'</script>";
	}
	function function_alert2($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/t_editacc.php'</script>";
	}
	function function_alert3($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/t_reg.php'</script>";
	}
	function function_alert4($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/t_changepwd.php'</script>";
	}
	function function_alert5($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/t_editacc.php'</script>";
	}
	function getAllTutors()
	{
		$query ="SELECT Name,UserName,Gender,Phone,Email,Address,AcademicInstitution FROM tutors";
		$tutors = get($query);
		return $tutors;	
	}
	function getTutors()
	{
		$tuname=$_SESSION['UserName'];
		$query="SELECT * FROM tutors WHERE UserName='$tuname'";
		$tutors=get($query);
		return $tutors;
		
	}
	function deleteTutors()
	{
		$tuname=$_POST['tuname'];
		$query="DELETE FROM tutors WHERE UserName='$tuname'";
		execute($query);
		function_alert("Records were Deleted successfully.");
	}
	function insertTutors()
	{
		$tname=$_POST['tname'];
		$tuname=$_POST['tuname'];
		$utype=$_POST['utype'];
		$tpass=$_POST['tpass'];
		$gender=$_POST['gender'];
		$tnum=$_POST['tnum'];
		$email=$_POST['email'];
		$tadd=$_POST['tadd'];
		$tai=$_POST['tai'];
		
		$s="SELECT * FROM tutors WHERE UserName='$tuname'";
		$result=get($s);
		$s1="SELECT * FROM tutors WHERE Phone='$tnum'";
		$result1=get($s1);
		$s2="SELECT * FROM tutors WHERE Email='$email'";
		$result2=get($s2);
		if(count($result) > 0)
		{
			function_alert3("UserName Already Taken!");
		}
		elseif(count($result1) > 0)
		{
			function_alert3("This Phone Number has been used already!");
		}
		elseif(count($result2) > 0)
		{
			function_alert3("This Email has been used already!");
		}
		elseif($tnum == 0)
		{
			function_alert3("Phone Number cannot be 0");
		}
		else{
			$query="INSERT INTO tutors(id, Name, UserName, UserType, Password, Gender, Phone, Email, Address, AcademicInstitution) VALUES (NULL,'$tname','$tuname','$utype','$tpass','$gender','$tnum','$email','$tadd','$tai')";
			execute($query);
			function_alert1("Registration Successful!");
		}
	}
	function upTnum()
	{
		$tuname=$_POST['tuname'];
		$tnum=$_POST['tnum'];
		$conpass=$_POST['conpass'];
		
		$s = "SELECT Password FROM tutors WHERE UserName='$tuname'";
		$result = get($s);
		while(count(result) > 0)
		{
			$pass=$result[0];
			
			if($pass["Password"] == $conpass)
			{
				$query="UPDATE tutors SET Phone=$tnum WHERE UserName='$tuname'";
				execute($query);
				function_alert5("Update Successful!");
			}else{
				function_alert5("Password donot match");
			}
		}
	}
	function upTadd()
	{
		$tuname=$_POST['tuname'];
		$tadd=$_POST['tadd'];
		$conpass=$_POST['conpass'];
		
		$s = "SELECT Password FROM tutors WHERE UserName='$tuname'";
		$result = get($s);
		while(count(result) > 0)
		{
			$pass=$result[0];
			
			if($pass["Password"] == $conpass)
			{
				$query="UPDATE tutors SET Address='$tadd' WHERE UserName='$tuname'";
				execute($query);
				function_alert5("Update Successful!");
			}else{
				function_alert5("Password donot match");
			}
		}
	}
	function upTai()
	{
		$tuname=$_POST['tuname'];
		$tai=$_POST['tai'];
		$conpass=$_POST['conpass'];
		
		$s = "SELECT Password FROM tutors WHERE UserName='$tuname'";
		$result = get($s);
		while(count(result) > 0)
		{
			$pass=$result[0];
			
			if($pass["Password"] == $conpass)
			{
				$query="UPDATE tutors SET AcademicInstitution='$tai' WHERE UserName='$tuname'";
				execute($query);
				function_alert5("Update Successful!");
			}else{
				function_alert5("Password donot match");
			}
		}
	}
	function changepwd()
	{
		$tuname=$_POST['tuname'];
		$topass=$_POST['topass'];
		$tnpass=$_POST['tnpass'];
		$contnpass=$_POST['contnpass'];
		
		$p = "SELECT Password FROM tutors WHERE UserName='$tuname'";
		$result = get($p);
		while(count($result) > 0)
		{
			$pass=$result[0];
			
			if($pass["Password"] == $topass)
			{			
				if($tnpass == $contnpass)
				{
					$query="UPDATE tutors SET Password='$contnpass' WHERE UserName='$tuname'";
					execute($query);
					function_alert4("Password Changed Successfully");
				}
				else{
					function_alert4("New and Confirm Password donot match");
				}
			}else{
				function_alert4("Password donot match");
			}
		}
	}
?>