<?php
if(isset($_POST['submit2']))
{
insertfeed();    
}

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback Form</title>
         <script>
          function abc()
          {
              var a=document.getElementById("n1").value;
            var b=document.getElementById("n2").value;
            var c =document.getElementById("n3").value;
             var d =document.getElementById("n4").value;
            if(a == "")
            {
                alert("Enter valid name");
                document.getElementById("n1").focus();
                document.getElementById("err1").innerHTML="<font color='red'>*</font>";
                
             return false;
            }
            if(b == "")
            {
                alert("Enter valid Email id");
                document.getElementById("n2").focus();
                document.getElementById("err2").innerHTML="<font color='red'>*</font>";
               
             return false;
            }
            
             if(c== "")
            {
                alert("Enter valid Phone No.");
                document.getElementById("n3").focus();
                document.getElementById("err3").innerHTML="<font color='red'>*</font>";
               
             return false;
            }
            
             if(d== "")
            {
                alert("Enter the feedback");
                document.getElementById("n4").focus();
                document.getElementById("err4").innerHTML="<font color='red'>*</font>";
               
             return false;
            }
            document.getElementById("err1").innerHTML="";
            document.getElementById("err2").innerHTML="";
            document.getElementById("err3").innerHTML="";
            
        }

        </script>
        <style>
            body
            {background-color:#E9E9E9;}
            
            form
            {text-align: center;
            }
			
			.forminbox
			{ width: 1200px; height:500px; padding-left:350px;}

			.requred
			{ color:#F60; font-size:25px; padding-left:350px;}
       		
	   </style>
    </head>
	
<body>
 <h3 style='text-align: center;color:#000099;'>“We all need people who give us feedback.Because that's how we improve.Help us serve you better by providing your valuable feedback” </h3>
<br><br>
<div class="requred">* required fields</div>
<div class="forminbox">         
	 <form class="form-horizontal" method="post">
	 <div class="form-group has-success">
    <label for="pname" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Name*</label>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
    <input type="text" class="form-control" name="n1" id="n1" placeholder="Enter name">
  <span id="err1"></span>
    </div>
  </div>
<div class="form-group has-success">
    <label for="email" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Email*</label>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
    <input type="email" class="form-control" name="n2" id="n2" placeholder="Enter email id">
<span id="err2"></span>
  </div>
  </div>
<div class="form-group has-success">
    <label for="contact" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Contact Number</label>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
    <input type="text" class="form-control" name="n3" id="n3" placeholder="Enter phone number">
 
  </div>
  </div>
                             
<div class="form-group has-success">
    <label for="tarea" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Your Feedback*</label>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
    <textarea class="form-control" id="n4" name="n4" rows= "10" placeholder="What do you want to say/suggest?" cols="40"></textarea>
    <span id="err3"></span>
    </div>
  </div>

<button type="submit" class="btn btn-primary" onclick="abc()" name="submit2" value="Submit" onclick="alert('Thanks For Submitting Your Valuable Feedback :-)')">Submit</button>
</form>
</div>
                      
		
		
		
		
		
		
        <div class="container-fluid">
                    
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn-primary">
          <h2 style="text-align: center">Contact Us</h2>
	<h2 style="text-align: center">Copyright @ OBeX</h2>
    <h3 style="text-align: center">Meet the developers</h3>
    <h4 style="text-align: center">Aishwarya , Ankita , Richa </h4>
    </div>
 </div>
        </div>
    </body>
</html>
