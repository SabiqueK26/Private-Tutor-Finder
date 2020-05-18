<?php
	require_once '../models/database.php';
	
	if(isset($_POST["changepwd_a"]))
	{
		changepwd_admin();
	}
	function function_alert($message)
	{        
		echo "<script>alert('$message');document.location.href='../views/a_changepwd.php'</script>";
	}
	function changepwd_admin()
	{
		$uname=$_POST['uname'];
		$aopass=$_POST['aopass'];
		$anpass=$_POST['anpass'];
		$conanpass=$_POST['conanpass'];
		
		$p = "SELECT Password FROM admin WHERE UserName='$uname'";
		$result = get($p);
		while(count($result)>0)
		{
			$pass=$result[0];
			
			if($pass["Password"] == $aopass)
			{			
				if($anpass == $conanpass)
				{
					$query="UPDATE admin SET Password='$conanpass' WHERE UserName='$uname'";
					execute($query);
					function_alert("Password Changed Successfully");
				}
				else{
					function_alert("New and Confirm Password donot match");
				}
			}	
			else{
				function_alert("Password donot match");
			}
		}	
	}
?>