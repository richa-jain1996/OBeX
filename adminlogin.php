<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home page</title>
</head>

<body>
<link href="mycss/admincss.css" rel="stylesheet"/>

<?php
session_start();
$dbcon=mysqli_connect("localhost","root","","buyandsell");

if(isset($_POST['submit']))
{
	extract($_POST);
	$query="SELECT * FROM `admindetails` where `email`='".@$email."' and `password`='".@$password."'";
	$data=mysqli_query($dbcon,$query);
	$res=mysqli_fetch_array($data);
	if(@$email=="" and @$password=="")
	{
		$er=0;
		$msg="Enter email id and password.It can't be blank";
	}
	else
	{
		$er=1;
	}
	
	if($er==0)
	{
		//echo $msg;
	}
	else 
	{
		if($res['email']==$email and $res['password']==$password)
		{
			$_SESSION['semail']="$email";
			header('location:index.php?p=adminview');
		}
		else
		{
			$msg="Your email id and password don't match our database";
		}
	}
		
}
?>

<div class="space">
</div>

<!----------------------------------->
<hr />
<center>
<div class="form-box">
<form method="post">
<p>Admin email-ID:<input type="text" name="email"/></p>
<p>Admin password:<input type="password" name="password"/></p>
<p><input type="submit" name="submit" value="Submit"/></p>
</form>
<div class="err"><?php echo @$msg; ?></div>
</div>
</center>
<hr />
<!----------------------------------->
</body>
</html>


