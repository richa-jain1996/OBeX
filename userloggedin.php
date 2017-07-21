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
.login{width:50%;}
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
	<br><br>
</body>




<!---------------------------------->
<?php
session_start();

if (!empty($_REQUEST['Delete']) && !empty($_REQUEST['delete_id']))
{
    
    $con=new mysqli("localhost","root","","buyandsell") or die(mysqli_error($con));
        $sql3="DELETE FROM newad WHERE id=".$_REQUEST['delete_id'].";";
            $result3=$con->query($sql3);
            
     $sql4="DELETE FROM verified WHERE id=".$_REQUEST['delete_id'].";";
            $result4=$con->query($sql4);
         //   echo '<script> location.replace("index.php?p=adminview"); </script>';
}

?>
<?php
if(isset($_POST['userlogin']))
{
$con=mysqli_connect("localhost","root","","buyandsell");

extract($_POST);
	$query="SELECT * FROM `verified` where `email`='".@$email."' and `password`='".@$password."'";
	$data=mysqli_query($con,$query);
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
                        $_SESSION['spass']="$password";
			//header('location:index.php?p=newview');
                     $q="SELECT * FROM newad WHERE email = '" . $_SESSION['semail'] . "' and password= '" . $_SESSION['spass'] . "'";
    $stmt=$con->prepare($q);
    $stmt->bind_result($id,$book,$category,$amount,$name,$number,$email,$password,$feedback,$image);
    $stmt->execute() or die(mysqli_error($con));
    
 
 $c=0;
 $arr="";
 while($stmt->fetch())
{
     $arr[$c]['id']=$id;
        $arr[$c]['book']=$book;
        $arr[$c]['category']=$category;
      //  $arr[$c]['addetails']=$addetails;
        $arr[$c]['amount']=$amount;
        $arr[$c]['name']=$name;
        $arr[$c]['number']=$number;
        $arr[$c]['email']=$email;
        $arr[$c]['password']=$password;
        $arr[$c]['feedback']=$feedback;
        $arr[$c]['image']=$image;
        
        
        ++$c;
}
 
                        echo'<div class="row">';
 if (is_array($arr) || is_object($arr))
 {
foreach($arr as $value)
{
    $k=0;
   
  echo'<div class="col-sm-4 col-md-4 col-lg-4">';
   echo' <div class="thumbnail">';
   echo'<div class="caption">';
    foreach($value as $d)
    {
        ++$k;
        if($k==2)
        {
            echo"<h3>$d</h3>";
           
            continue;
        }
        
         if($k==3)
        {
            echo"<h6><b>Category:</b>$d</h6>";
             
           
        }
        
         if($k==4)
        {
            echo"<h6><b>Price:</b>$d</h6>";
           
            
        }
         if($k==5)
        {
            echo"<h6><b>Contact Person:</b>$d</h6>";
     
            
        }
         if($k==6&&$d!=null)
        {
            echo"<h6><b>Phone Number:</b>$d</h6>";
           
            
        }
        else
            if($k==6&&$d==null)
            {
                echo"<h6><b>Phone Number:</b>Not Provided</h6>";
            }
       
        if($k==7)
        {
             echo"<h6><b>Email Address:</b>$d</h6>";
        }
        
        if($k==9||$k==8)
            continue;
        if($k==10)
            break;
        
        
    }
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $d ).'" width="290" height="290">';
   echo'</div>';
   ?>
 

 <form method="post">
   <input type="hidden" name="delete_id" value="<?php echo $value['id']; ?>" />
        <input type="submit" value="Delete" name="Delete" style="color: red;display: block"/>
      </form>
<?php
   echo'</div>';
   echo'</div>';
  
}

 echo'</div>';       
 }
		}
		else
		{
			$msg="Your email id and password don't match our database";
		}
	}
}

?> 
