<!DOCTYPE html>
<head>
    <link rel="icon" 
      type="image/png" 
      href="images/logo.png">
     <meta charset="UTF-8">
        <link type="text/css" href="menu.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
		<link href="css/forhover.css" rel="stylesheet"/>
        <script src="js/jquery-2.2.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>	
    
	
<style>
.login{width:50%; height:250px;}
</style>
</head>
<body>
    <div class="container-fluid">
        <table width="100%" border="5" height="70px">
<tr bgcolor="#0099FF">
	<td colspan="4" width="100%" >
	<!---------------->
	<table width="100%">
	<tr>
		<td width="20%"><img src="images/logo.png" height="100px"></td>
		<td width="60%"><center>
		<font size="40" face="Lucida Sans Unicode">
		<h1 style= "color: white;    text-shadow: 4px 4px 4px #000000;">Online Book Exchange</h1>
		</font>
		<h2 style= "color: white;    text-shadow: 4px 4px 4px #000000;">We like it as "OBeX"</h2>
		</center></td>
		<td width="20%"><img src="images/igdtu.jpg" height="100px"></td>
	</tr>
	</table>
	</td>
</tr>
<tr align="center">
	<td class="nav" width="25%" bgcolor="#CCFF00" height="50px"><a href="index.php?p=home"><b><h4>Home</h4></b></a></td>
        <td class="nav"  width="25%" bgcolor="#CCFF00" height="50px"><a href="index.php?p=dropAd"><b><h4>Drop a Free Ad</h4></b></a>
     </td>
	<td class="nav"  width="25%" bgcolor="#CCFF00" height="50px"><a href="index.php?p=buyBooks"><b><h4>Buy Books</h4></b></a></td>
        <td class="nav"  width="25%" bgcolor="#CCFF00" height="50px"><a href="userlogin.php"><b><h4>User Login</h4></b></a></td>
     <!--   <td class="nav"  width="25%" bgcolor="#CCFF00" height="50px"><a href="index.php?p=adminview"><b><h4>Admin Login</h4></b></a></td>
	<!--<td class="nav"  width="25%" bgcolor="#CCFF00" height="50px"><a href="index.php?p=feedback"><b><h4>Your Feedback</h4></b></a></td>-->
</tr>
</table>
    </div>
</body>

<br><br>
<center>
<div class="login">
			<hr>
             <form name="loginfrm" method="post" action="userloggedin.php">
             Email:
            <input type="email" name="email" placeholder="Enter Email ID" id="UserEmail" required>
            <span id="email_status"></span>
			<br><br>		
             Pswd:
             <input type="password"  name="password" placeholder="Enter password" id="UserPass" required>
			 <br><br>
                  <input type="submit" class="btn btn-success col-md-offset-1" name="userlogin" value="Login" />            
             </form>
			 <hr>
    <div class="err"><?php echo @$msg; ?></div>
</div>
  </center>
 
<?php
include 'view/footer.php';
?> 