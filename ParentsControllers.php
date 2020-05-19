<?php
	require_once '../models/database.php';
	
	if(isset($_POST["add_parents"]))
	{
		insertParents();
	}
	else if(isset($_POST["edit_parents"]))
	{
		editParents();
	}
	else if(isset($_POST["del_p"]))
	{
		deleteParents();
	}
	else if(isset($_POST["changepwd_p"]))
	{
		changepwd();
	}
	else if(isset($_POST["update"]))
	{
		editParents();
	}
	else if(isset($_POST["up_prof"]))
	{
		upProf();
	}
	else if(isset($_POST["up_pnum"]))
	{
		upPnum();
	}
	else if(isset($_POST["up_padd"]))
	{
		upPadd();
	}
	function function_alert($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/login.php'</script>";
	}
	function function_alert1($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/p_editacc.php'</script>";
	}
	function function_alert2($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/showall_p.php'</script>";
	}
	function function_alert3($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/p_reg.php'</script>";
	}
	function function_alert4($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/p_changepwd.php'</script>";
	}
	function function_alert5($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/p_editacc.php'</script>";
	}
	function getAllParents()
	{
		$query ="SELECT Name,UserName,Gender,Profession,Phone,Address FROM parents";
		$parents = get($query);
		return $parents;	
	}
	function getParents()
	{	
		$puname=$_SESSION['UserName'];
		$query="SELECT Name,UserName,Gender,Profession,Phone,Address FROM parents WHERE UserName='$puname'";
		$parents = get($query);
		return $parents;
		
	}
	function deleteParents()
	{
		$puname=$_POST['puname'];
		$query="DELETE FROM parents WHERE UserName='$puname'";
		execute($query);
		function_alert2("Records were Deleted successfully.");
	}
	function insertParents()
	{
		$pname=$_POST['pname'];
		$puname=$_POST['puname'];
		$utype=$_POST['utype'];
		$ppass=$_POST['ppass'];
		$gender=$_POST['gender'];
		$prof=$_POST['prof'];
		$pnum=$_POST['pnum'];
		$padd=$_POST['padd'];
		
		$s="SELECT * FROM parents WHERE UserName = '$puname'";
		$result=get($s);
		$s1="SELECT * FROM parents WHERE Phone = '$pnum'";
		$result1=get($s1);
		if(count($result) > 0)
		{
			function_alert3("UserName Already Taken!");
		}
		elseif(count($result1) > 0)
		{
			function_alert3("This Phone Number has been used already!");
		}
		elseif($pnum == 0)
		{
			function_alert3("Phone Number cannot be 0");
		}
		else{
			$query="INSERT INTO parents(id, Name, UserName, UserType, Password, Gender, Profession, Phone, Address) VALUES (NULL,'$pname','$puname','$utype','$ppass','$gender','$prof',$pnum,'$padd')";
			execute($query);
			function_alert("Registration Successful!");	
		}
	}
	function upProf()
	{
		$puname=$_POST['puname'];
		$prof=$_POST['prof'];
		$conpass=$_POST['conpass'];
		
		$s = "SELECT Password FROM parents WHERE UserName='$puname'";
		$result = get($s);
		while(count(result) > 0)
		{
			$pass=$result[0];
			
			if($pass["Password"] == $conpass)
			{
				$query="UPDATE parents SET Profession='$prof' WHERE UserName='$puname'";
				execute($query);
				function_alert5("Update Successful!");
			}else{
				function_alert5("Password donot match");
			}
		}
	}
	function upPnum()
	{
		$puname=$_POST['puname'];
		$pnum=$_POST['pnum'];
		$conpass=$_POST['conpass'];
		
		$s = "SELECT Password FROM parents WHERE UserName='$puname'";
		$result = get($s);
		while(count(result) > 0)
		{
			$pass=$result[0];
			
			if($pass["Password"] == $conpass)
			{
				$query="UPDATE parents SET Phone='$pnum' WHERE UserName='$puname'";
				execute($query);
				function_alert5("Update Successful!");
			}else{
				function_alert5("Password donot match");
			}
		}
	}
	function upPadd()
	{
		$puname=$_POST['puname'];
		$padd=$_POST['padd'];
		$conpass=$_POST['conpass'];
		
		$s = "SELECT Password FROM parents WHERE UserName='$puname'";
		$result = get($s);
		while(count(result) > 0)
		{
			$pass=$result[0];
			
			if($pass["Password"] == $conpass)
			{
				$query="UPDATE parents SET Address='$padd' WHERE UserName='$puname'";
				execute($query);
				function_alert5("Update Successful!");
			}else{
				function_alert5("Password donot match");
			}
		}
	}
	function changepwd()
	{
		$puname=$_POST['puname'];
		$popass=$_POST['popass'];
		$pnpass=$_POST['pnpass'];
		$conpnpass=$_POST['conpnpass'];
		
		$p = "SELECT Password FROM parents WHERE UserName='$puname'";
		$result = get($p);
		while(count($result) > 0)
		{
			$pass=$result[0];
			
			if($pass["Password"] == $popass)
			{			
				if($pnpass == $conpnpass)
				{
					$query="UPDATE parents SET Password='$conpnpass' WHERE UserName='$puname'";
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