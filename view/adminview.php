
<?php 
$arr=  display();

if (!empty($_REQUEST['Delete']) && !empty($_REQUEST['delete_id']))
{
    admindelete();
}
if (!empty($_REQUEST['Add']) && !empty($_REQUEST['user_id']))
{
    insertVerify();
}
//echo "<div class='jumbotron'>";
//echo "<table class='table table-stripped  table-condensed' >";
//echo "<tr><th class='success'>Book name</th><th class='success'>Category</th><th class='info'>Amount</th><th class='success'>Seller</th><th class='info'>Contact</th><th class='success'>Description</th><th class='success'>Email Id</th></tr>";
 echo'<div class="row">';
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
        
        if($k==9)
           {
             echo"<h6><b>Feedback:</b>$d</h6>";
        }
        if($k==10)
            break;
        
        
    }
    echo "<img src=$d width=290 height=290>";
   echo'</div>';
      
      ?>

 <form method="post">
   <input type="hidden" name="user_id" value="<?php echo $value['id']; ?>" />
   <input type="submit" value="Verified" name="Add" id="Add" style="color: blue;display: block"/>
      </form>

 <form method="post">
   <input type="hidden" name="delete_id" value="<?php echo $value['id']; ?>" />
        <input type="submit" value="Delete" name="Delete" style="color: red;display: block"/>
      </form>

  <?php
   echo'</div>';
   echo'</div>';

  
}

 echo'</div>';       