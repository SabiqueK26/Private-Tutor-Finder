<?php
	$xml = simplexml_load_file("u_reg.xml");
	/*print_r($xml);
	for($i=0;$i<count(($xml)->info);$i++)
	{
		echo $xml->parents[$i]->puname;
	}*/
?>

<?php
	$err_tname="";
	$tname="";
	$err_tuname="";
	$tuname="";
	$err_tpass="";
	$tpass="";
	$err_gender="";
	$gender="";
	$err_tadd="";
	$tadd="";
	$err_tnum="";
	$tnum="";
	$err_email="";
	$email="";
	$err_tai="";
	$tai="";
	
	if(isset($_POST['submit']))
	{
		
		if(empty($_POST['tname']))
		{
			$err_tname="*Name Required";
		}
		else
		{			
			$tname=htmlspecialchars($_POST['tname']);
			echo $tname;
		}
		if(empty($_POST['tuname']))
		{
			$err_tuname="*Usename Required";
		}
		else
		{
			$tuname=$_POST['tuname'];
		}
		if(empty($_POST['tpass']))
		{
			$err_tpass="*Password Required";
		}
		else
		{
			$tpass=$_POST['tpass'];
		}
		if(empty($_POST['gender']))
		{
			$err_gender="*Gender Required";
		}
		else
		{
			$gender=$_POST['gender'];
		}
		if(empty($_POST['tadd']))
		{
			$err_tadd="*Address Required";
		}
		else
		{
			$tadd=$_POST['tadd'];
		}
		if(empty($_POST['email']))
		{
			$err_email="*Email Required";
		}
		else
		{
			$email=$_POST['email'];
		}
		if(empty($_POST['tai']))
		{
			$err_tai="*Institution Name Required";
		}
		else
		{
			$tai=$_POST['tai'];
		}
		if(empty($_POST['tnum']))
		{
			$err_tnum="*Phone Number Required";
		}
		else
		{
			$tnum=$_POST['tnum'];
		}
	}
?>
<html>
	<head>
		<title>Private Tutor Finder - sign up as tutors</title>
		<h1 class="head_txt"><b>Private Tutor Finder</b></h1>
		<link rel="stylesheet" type="text/css" href="t_regstyle.css">
	</head>
	<body>
		<div class="signup-t">
			<form method="post" action="">
				<h3>Sign up as Tutors</h3>
				<p>
					Full Name:
					<input class="textbox" placeholder="Enter Full Name" type="text" value="<?php echo $tname;?>" name="tname">
					<span style="color:red"><?php echo $err_tname;?></span>
				</p>
				
				<p>
					Username:
					<input class="textbox" placeholder="Enter User Name" type="text" value="<?php echo $tuname;?>" name="tuname">
					<span style="color:red"><?php echo $err_tuname;?></span>
				</p>

				<p>
					Password:
					<input class="textbox" placeholder="Enter Password" type="password" value="<?php echo $tpass;?>" name="tpass">
					<span style="color:red"><?php echo $err_tpass;?></span>
				</p>

				<p>
					Gender: 
					<span><input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female</span>
					<span style="color:red"><?php echo $err_gender;?><span>
				</p>
				
				<p>
					Address:
					<input class="textbox" type="text" name="tadd" placeholder="Enter address" value="<?php echo $tadd;?>">
					<span style="color:red"><?php echo $err_tadd;?></span>
				</p>	

				<p>
					Phone Number:
					<input class="textbox" type="text" placeholder="Enter phone number" name="tnum" value="<?php echo $tnum;?>">
					<span style="color:red"><?php echo $err_tnum;?></span>
				</p>
				<p>
					Email:
					<input class="textbox" type="text" placeholder="Enter Email" name="email" value="<?php echo $email;?>">
					<span style="color:red"><?php echo $err_email;?></span></td>
				</p>
				<p>
					Academic Institution:
					<input class="textbox" type="text" placeholder="Current Institution Name" name="tai" value="<?php echo $tai;?>">
					<span style="color:red"><?php echo $err_tai;?></span></td>
				</p>
				<p colspan="2" align="center">
					<input type="submit" name="submit" value="Submit"> </br>
					Go to<a href="logIn.php">log in </a>page
				</p>
			</form>
		</div>	
	</body>
</html>