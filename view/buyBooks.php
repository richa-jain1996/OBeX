<html>
    <head>
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
}</style></head>
    <body>
        <script>
            function searchfun(){
           
            alert("Enter atleast 3 characters");
        }
        </script>

</body>
</html>



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
   

<?php 
$a=  displayVerified();
//echo "<div class='jumbotron'>";
//echo "<table class='table table-stripped  table-condensed' >";
//echo "<tr><th class='success'>Book name</th><th class='success'>Category</th><th class='info'>Amount</th><th class='success'>Seller</th><th class='info'>Contact</th><th class='success'>Description</th><th class='success'>Email Id</th></tr>";
 echo'<div class="row">';
 if (is_array($a) || is_object($a))
 {
foreach($a as $value)
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
    echo "<img src=$d width=290 height=290>";
   echo'</div>';
   echo'</div>';
   echo'</div>';
  
}

 echo'</div>';       
 }
//echo "</table>";
//echo"</div>";?>

<!--<br><br>
<div class="container-fluid">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn-primary">
          <h2 style="text-align: center">Contact Us</h2>
	<h2 style="text-align: center">Copyright @ OBeX</h2>
    <h3 style="text-align: center">Meet the developers</h3>
    <h4 style="text-align: center">Aishwarya , Ankita , Richa </h4>
    </div>
   


</div>
</div>--->
