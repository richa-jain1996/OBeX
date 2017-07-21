<?php
include 'modal/dbconnection.php';
$c=getConnection();
     
    mysqli_select_db($c,"buyandsell") or die(mysql_error());
     
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


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
.searchbox{
background-color: #fffbf8;
padding:13px;
width:335px;
 position:relative;
   left:450px;
margin: 10px auto;
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box;
border-radius:6px;
-webkit-box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
-moz-box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
}
.search{
width:250px;
height:30px;
padding-left:10px;
border-radius:6px;
border:none;
color:#0F0D0D;;
font-weight:500;
background-color:#E2EFF7;;
-webkit-box-shadow:
0 -2px 2px 0 rgba(199, 199, 199, 0.55),
0 1px 1px 0 #fff,
0 2px 2px 1px #fafafa,
0 2px 4px 0 #b2b2b2 inset,
0 -1px 1px 0 #f2f2f2 inset,
0 15px 15px 0 rgba(41, 41, 41, 0.09) inset;
-moz-box-shadow:
0 -2px 2px 0 rgba(199, 199, 199, 0.55),
0 1px 1px 0 #fff,
0 2px 2px 1px #fafafa,
0 2px 4px 0 #b2b2b2 inset,
0 -1px 1px 0 #f2f2f2 inset,
0 15px 15px 0 rgba(41, 41, 41, 0.09) inset;
box-shadow:
0 -2px 2px 0 rgba(199, 199, 199, 0.55),
0 1px 1px 0 #fff,
0 2px 2px 1px #fafafa,
0 2px 4px 0 #b2b2b2 inset,
0 -1px 1px 0 #f2f2f2 inset,
0 15px 15px 0 rgba(41, 41, 41, 0.09) inset;
}
.submit{
width:35px;
height:30px;
background-image:url(images/search-btn.jpg);
background-repeat: no-repeat;
background-position: 17px 2px;
background-color:transparent;
-webkit-background-size:20px 20px;
background-size:20px 20px;
border:none;
cursor:pointer;
}
.search:focus{
outline:0;
}</style>
       <script>
            function searchfun(){
           
            alert("Enter atleast 3 characters");
        }
        </script>
	

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
        <a href="adminlogin.php"><strong>Admin</strong></a>
      
    </div>
    <div class="container-fluid">
<div class="jumbotron";">
    
<form action="search.php" method="GET" class="searchbox">
    <input type="text" class="search" name="query" placeholder="Search Books" onblur="searchfun()"/>
    <input type="submit"class="submit" value="" />
</form>
  
    
  <div class="row">
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <div class="thumbnail"  style="height:150px;">
     <!-- <img src="images/Bookends.jpg" alt="OOPS can't load image" style="height:250px">--->
      <div class="caption">
        <h3>Search it..</h3>
        <h4 style='text-align: center;color: #000099;'>“There is no friend as loyal as a book.” </h4>
        
      </div>
    </div>
  </div>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >
           <div class="thumbnail" style="height:150px;">
<!---      <img src="images/book.jpg" alt="OOPS can't load image" style="height:250px">------->
      <div class="caption">
        <h3>Contact for it..</h3>
        <h4 style='text-align: center;color: #000099;'>“Read the best books first, or you may not have a chance to read them at all.” </h4>
        
      </div>
    </div>
  </div>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <div class="thumbnail"  style="height:150px;">
   <!--   <img src="images/bookimages.jpg" alt="OOPS can't load image" style="height:250px">------>
      <div class="caption">
        <h3>Get it..</h3>
        <h4 style='text-align: center;color: #000099;'>"Anyone who says they have only one life to live must not know how to read a book.” </h4>
        
      </div>
    </div>
  </div>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <div class="thumbnail"  style="height:150px;">
<!--      <img src="images/booksimages.jpg" alt="OOPS can't load image" style="height:250px">------->
      <div class="caption">
        <h3>Stay Happy..</h3>
        <h4 style='text-align: center;color: #000099;'>“Great books help you understand, and they help you feel understood.” </h4>
        
      </div>
    </div>
  </div>
</div>
</div>
   

</body>
   
</html>
<?php
    
    $query = $_GET['query']; 
    // gets value sent over search form
     
   
    // you can set minimum length of the query if you want
      // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($c,$query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($c,"SELECT * FROM verified
            WHERE (`book` LIKE '%".$query."%') OR (`category` LIKE '%".$query."%')OR(`amount` LIKE '%".$query."%')OR(`name` LIKE '%".$query."%')OR(`number` LIKE '%".$query."%')OR(`email` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
               echo'<div class="row">';

            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
              //  echo "<br><br>";
              //  echo "<p><h3>".$results['book']." ".$results['category'].$results['amount'].$results['name'].$results['number'].$results['email']."</h3></p>";
              
  echo'<div class="col-sm-4 col-md-4 col-lg-4">';
   echo' <div class="thumbnail">';
   echo'<div class="caption">';
   
            echo"<h3>".$results['book']."</h3>";
          
        
            echo"<h6><b>Category:</b>".$results['category']."</h6>";
       
            echo"<h6><b>Price:</b>".$results['amount']."</h6>";
      
            echo"<h6><b>Contact Person:</b>".$results['name']."</h6>";
     
         if($results['number']!=null)
        {
            echo"<h6><b>Phone Number:</b>".$results['number']."</h6>";
           
            
        }
        else
            if($results['number']==null)
            {
                echo"<h6><b>Phone Number:</b>Not Provided</h6>";
            }
       
       
             echo"<h6><b>Email Address:</b>".$results['email']."</h6>";
     
     
	 $image_address=$results['image'];
    echo "<img src=$image_address width=290 height=290>";
   echo'</div>';
   echo'</div>';
   echo'</div>';
  
      
}
echo'</div>';  
 } // posts results gotten from database(title and text) you can also show id ($results['id'])
            
             
        
        else{
            // if there is no matching rows do following
            
            echo "<br><br>";
			echo '<h2 style= "color: black;      text-align:center;    background-color:lightblue;">';
            echo "Sorry, No matching results found.";
            echo "</h2>";
//            echo "<img src='images/sad.jpg'; alt='OOPS! No results found'; style='height:250px;display:block;margin-left:40%;'>";
        }
         
    
   

            
    
?>
 
</body>
</html>