<?php
	
	session_start();
	
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$err_invalid="";
	$has_error=false;
	
	if(isset($_POST['LogIn']))
	{	
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;
		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;	
		}
		else
		{
			$pass=$_POST['pass'];
		}
		
		$xml = simplexml_load_file("u_reg.xml");
		
		if(!$has_error)
		{
			if($uname == $xml->usertype[0]->uname && $pass == $xml->usertype[0]->pass)
			{
				setcookie("loggedinuser",$uname,time()+240);
				$_SESSION["loggedinauser"]=$uname;
				header("Location:p_homepage.php");
			}
			else if($uname == $xml->usertype[1]->uname && $pass == $xml->usertype[1]->pass)
			{
				setcookie("loggedinuser",$uname,time()+240);
				$_SESSION["loggedinauser"]=$uname;
				header("Location:a_homepage.php");
			}
			else if($uname == $xml->usertype[2]->uname && $pass == $xml->usertype[2]->pass)
			{
				setcookie("loggedinuser",$uname,time()+240);
				$_SESSION["loggedinauser"]=$uname;
				header("Location:a_homepage.php");
			}
			else if($uname == $xml->usertype[3]->uname && $pass == $xml->usertype[3]->pass)
			{
				setcookie("loggedinuser",$uname,time()+240);
				$_SESSION["loggedinauser"]=$uname;
				header("Location:t_homepage.php");
			}
			else
			{
					$err_invalid="Invalid Username Password";
			}
		}
		
	}
?>

<html>
	<head>
		<title>Private Tutor Finder - log in or sign up</title>
		<h1 style="color:black;"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="logInstyle.css">
	</head>
	<body>
		<div class="login-box">
			<span><?php echo $err_invalid;?></span>
			<form action="" method="post"> 	
			
				<p>Username: <span><?php echo $err_uname;?></span> </p>
				<input class="textbox" placeholder="Enter Username" type="text" value="<?php echo $uname;?>" name="uname">
				
				
				<p>Password: <span><?php echo $err_pass;?></span> </p>
				<input class="textbox" placeholder="Enter Password" type="password" value="<?php echo $pass;?>" name="pass">
				
				
				<input type="submit" name="LogIn" value="Log In">
				<input id="fp" type="submit" name="fp" value="Forgot Password?">
				
				<h2><b> Create an Account! </b></h2>
				<p>
					<a href="parentsReg.php">SignUp as Parents</a>
					<a href="tutorsReg.php">SignUp as Tutors</a>
				</p>
			</form>
		</div>
	</body>
</html>