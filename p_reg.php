<?php
	$xml = simplexml_load_file("u_reg.xml");
	/*print_r($xml);
	for($i=0;$i<count(($xml)->info);$i++)
	{
		echo $xml->usertype[0]->puname;
	}*/
?>
	
<?php
	$err_pname="";
	$pname="";
	$err_puname="";
	$puname="";
	$err_ppass="";
	$ppass="";
	$err_gender="";
	$gender="";
	$err_padd="";
	$padd="";
	$err_prof="";
	$prof="";
	$err_pnum="";
	$pnum="";
	
	if(isset($_POST['submit']))
	{
		
		if(empty($_POST['pname']))
		{
			$err_pname="*Name Required";
		}
		else
		{			
			$pname=htmlspecialchars($_POST['pname']);
		}
		if(empty($_POST['puname']))
		{
			$err_puname="*Usename Required";
		}
		else
		{
			$puname=$_POST['puname'];
		}
		if(empty($_POST['ppass']))
		{
			$err_ppass="*Password Required";
		}
		else
		{
			$pass=$_POST['ppass'];
		}
		if(empty($_POST['gender']))
		{
			$err_gender="*Gender Required";
		}
		else
		{
			$gender=$_POST['gender'];
		}
		if(empty($_POST['padd']))
		{
			$err_padd="*Address Required";
		}
		else
		{
			$padd=$_POST['padd'];
		}
		if(empty($_POST['prof']))
		{
			$err_prof="*Profession Required";
		}
		else
		{
			$prof=$_POST['prof'];
		}
		if(empty($_POST['pnum']))
		{
			$err_pnum="*Phone Number Required";
		}
		else
		{
			$pnum=$_POST['pnum'];
			echo "$pname Submission Successful!";
		}
	}
?>
<html>
	<head>
		<title>Private Tutor Finder - sign up as parents</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="p_regstyle.css">
	</head>
	<body>
		<div class="signup-p">
			<form method="post" action="">
				<h3>Sign up as Parents</h3>
				<p>
					Full Name:  
					<span style="color:red"><?php echo $err_pname;?></span>
					<input class="textbox" placeholder="Enter Full Name" type="text" value="<?php echo $pname;?>" name="pname">
				</p>
				
				<p>
					Username:
					<span style="color:red"><?php echo $err_puname;?></span>
					<input class="textbox" placeholder="Enter User Name" type="text" value="<?php echo $puname;?>" name="puname">
				</p>

				<p>
					Password:
					<input class="textbox" placeholder="Enter Password" type="password" value="<?php echo $ppass;?>" name="ppass">
					<span style="color:red"><?php echo $err_ppass;?></span>
				</p>

				<p>
					Gender:
					<span><input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female</span>
					<span style="color:red"><?php echo $err_gender;?><span>
				</p>
				
				<p>
					Address:
					<input class="textbox" type="text" name="padd" placeholder="Enter address" value="<?php echo $padd;?>">
					<span style="color:red"><?php echo $err_padd;?></span>
				</p>	
				
				<p>
					Profession:
					<input class="textbox" type="text" placeholder="Enter Profession" name="prof" value="<?php echo $prof;?>">
					<span style="color:red"><?php echo $err_prof;?></span>
				</p>
				
				<p>
					Phone Number:
					<input class="textbox" type="text" placeholder="Enter phone number" name="pnum" value="<?php echo $pnum;?>">
					<span style="color:red"><?php echo $err_pnum;?></span>
				</p>
				
				<p>
					<input type="submit" name="submit" value="Submit"></br>
					Go to<a href="logIn.php"> log in </a>page
				</p>
			</form>
		</div>
	</body>
</html>