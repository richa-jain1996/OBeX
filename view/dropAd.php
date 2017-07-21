<?php
if(isset($_POST['adSubmit']))
{
insertValues();    
}

?>



<head>	
	<style>
            body
            {background-color:#E9E9E9;}
            
            form
            {text-align: center;
            }
			
			.dropAdbox
			{ width: 1200px; height:680px; padding-left:350px;}
	</style>
</head>	
	
	
	<script>
            function pass_val()
            {
                var a=document.getElementById("UserPass").value;
                var b=document.getElementById("ReUserPass").value;
                if(a==b)
                {
                    document.getElementById("repass_status").innerHTML="";
                }
                else
                {
                    document.getElementById("repass_status").innerHTML="<p style='color:red'>Password does not match!</p>";
    document.getElementById("ReUserPass").value="";
    document.getElementById("repass_status").focus();
    return false ;
                }
                
            }
			
	function price_val()
{
var vall=document.getElementById("pricevalue").value;
if ((vall.length<=5 )&& (/^[1-9].*$/.test(vall))||vall=="") 
{
     document.getElementById("price_err").innerHTML="";
    }
    else
    {
    document.getElementById("price_err").innerHTML="<p style='color:red'>Invalid price</p>";
    document.getElementById("pricevalue").value="";
    document.getElementById("price_err").focus();
    return false ;
    }

                
       

 
}
function phone_val()
{
var val=document.getElementById("phonevalue").value;
if ((/^\d{10}$/.test(val))&& (/^[1-9].*$/.test(val))||val=="") {
 document.getElementById("phone_err").innerHTML="";
} else {
    //alert("Invalid number");
    document.getElementById("phone_err").innerHTML="<p style='color:red'>Invalid number</p>";
    document.getElementById("phonevalue").value="";
    document.getElementById("phone_err").focus();
    return false ;
}
}




/*
function checkemail()
    {
		
	   var email=document.getElementById( "UserEmail" ).value;
	   
	   if(email)
	   {
	       $.ajax({
			   type: 'post',
			   url: 'chk_email.php',
			   data: {
			   user_email:email,
			   },
			   success: function (response) {
                          
			   $( '#email_status' ).html(response);
		       if(response=="OK")	
               {
                  return true;	
               }
               else
               {
				 document.getElementById('UserEmail').value="";
                  return false;	
				  
               }
             }
		   });
	    }
	    else
	    {
		   $( '#email_status' ).html("");
		   return false;
	    }
	
	}
        */
</script>
<div class="dropAdbox">
             <form name="regfrm" method="post"  enctype="multipart/form-data">
                 	<div class="form-group col-md-offset-1 col-md-10"><br><br><br>
			Book Name<b style="color:red">*</b>:			
            <input type="text" class="form-control" name="book_name" placeholder="Book Title" required>
            </div>
			
                 	<div class="form-group col-md-offset-1 col-md-10">
			Category<b style="color:red">*</b>:
          <!-- <input type="text" class="form-control" name="category" placeholder="Category" required> -->
             <select name="category">
                 <option value="1st year books">1st year books</option>
                 <option value="IT semester 3 books">IT semester 3 books</option>
                 <option value="IT semester 4 books">IT semester 4 books</option>
                 <option value="IT semester 5 books">IT semester 5 books</option>
                 <option value="IT semester 6 books">IT semester 6 books</option>
                 <option value="IT semester 7 books">IT semester 7 books</option>
                 <option value="IT semester 8 books">IT semester 8 books</option>
                 <option value="CSE semester 3 books">CSE semester 3 books</option>
                 <option value="CSE semester 4 books">CSE semester 4 books</option>
                 <option value="CSE semester 5 books">CSE semester 5 books</option>
                 <option value="CSE semester 6 books">CSE semester 6 books</option>
                 <option value="CSE semester 7 books">CSE semester 7 books</option>
                 <option value="CSE semester 8 books">CSE semester 8 books</option>
                 <option value="MAE semester 3 books">MAE semester 3 books</option>
                 <option value="MAE semester 4 books">MAE semester 4 books</option>
                 <option value="MAE semester 5 books">MAE semester 5 books</option>
                 <option value="MAE semester 6 books">MAE semester 6 books</option>
                 <option value="MAE semester 7 books">MAE semester 7 books</option>
                 <option value="MAE semester 8 books">MAE semester 8 books</option>
                 <option value="ECE semester 3 books">ECE semester 3 books</option>
                 <option value="ECE semester 4 books">ECE semester 4 books</option>
                 <option value="ECE semester 5 books">ECE semester 5 books</option>
                 <option value="ECE semester 6 books">ECE semester 6 books</option>
                 <option value="ECE semester 7 books">ECE semester 7 books</option>
                 <option value="ECE semester 8 books">ECE semester 8 books</option>
                 <option value="MCA books">MCA books</option>
                 <option value="Architecture books">Architecture books</option>
                 <option value="M.Tech books">M.Tech books</option>
				 <option value="Miscellaneous books">Miscellaneous</option>
                 
           
</select>
            </div>
			
               
			
			<div class="form-group col-md-offset-1 col-md-10">
                            Price<b style="color:red">*</b>:
            <input type="number" id="pricevalue" class="form-control" name="amount" placeholder="Expected price(example:600 or 350)" onblur="price_val()" required>
       
                 <div id="price_err"></div>
           </div>


		   <div class="form-group col-md-offset-1 col-md-10">
			Full Name<b style="color:red">*</b>:
            <input type="text" class="form-control" name="name" placeholder="Your full Name" required>
            </div>
                 	
					<div class="form-group col-md-offset-1 col-md-10">
			Contact No. :
          <input type="number" id="phonevalue" class="form-control" name="number" placeholder="Contact No." onblur="phone_val()">
                 <div id="phone_err"></div>	
           </div>
		   
            <div class="form-group col-md-offset-1 col-md-10">
             Email<b style="color:red">*</b>:
            <input type="email" class="form-control" name="email" placeholder="Email ID" id="UserEmail" required>
            <span id="email_status"></span>
            </div>
                 <div class="form-group col-md-offset-1 col-md-10">
             Password<b style="color:red">*</b>:
             <input type="password" class="form-control" name="password" placeholder="Choose Password(maximum 100 characters )" id="UserPass" required>
            
            </div>
                  <div class="form-group col-md-offset-1 col-md-10">
             Re-enter Password<b style="color:red">*</b>:
             <input type="password" class="form-control" name="repassword" placeholder="Re-enter Password" id="ReUserPass" onblur="pass_val()" required>
            <span id="repass_status"></span>
            </div>
			<div class="form-group col-md-offset-1 col-md-10">
			Your Feedback<b style="color:red">*</b>:
                            <textarea class="form-control" name="feedback" placeholder="Your valuable feedback here"  style="height: 80px; width: 100%; resize: none; overflow-y: hidden;"
									cols="80" rows="1" required></textarea>
            </div>
                 <div class="form-group col-md-offset-1 col-md-10">
                     Upload Image<b style="color:red">*</b>:
                     <input type="file" name="imageToUpload" id="imageToUpload" required>
                 <span id="helpBlock" class="help-block">Please try to reduce the size of your image if you are not able to select it.</span>
                 </div>
                 <input type="submit" class="btn btn-success col-md-offset-1" name="adSubmit" value="Submit" />            
			</form>
</div>		
	


<br>
<br>
<br>
<br>
<br>
<br>
<!---------footer----------
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn-primary">
          <h2 style="text-align: center">Contact Us</h2>
	<h2 style="text-align: center">Copyright @ OBeX</h2>
    <h3 style="text-align: center">Meet the developers</h3>
    <h4 style="text-align: center">Aishwarya , Ankita , Richa </h4>
    </div>
</div>
<!------------------------------>	