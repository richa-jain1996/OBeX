<?php
function validate_data($data,$c)
{

  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($c,$data);
  return $data;    

}
function admindelete()
{
    $con=getConnection();

     $sql3="DELETE FROM newad WHERE id=".$_REQUEST['delete_id'].";";
            $result3=$con->query($sql3);
            
     $sql4="DELETE FROM verified WHERE id=".$_REQUEST['delete_id'].";";
            $result4=$con->query($sql4);
            echo '<script> location.replace("index.php?p=adminview"); </script>';
}
  
function insertfeed()
{
      $con=  getConnection();
    $query="insert into feedback(name, email, contact, reviews) values(?,?,?,?)";
    $stmt=$con->prepare($query);
   
    $stmt->bind_param("ssss",$name,$email,$contact,$reviews);
    $name= $_REQUEST['n1'];
    $email=$_REQUEST['n2'];
    $contact=$_REQUEST['n3'];
    $reviews=$_REQUEST['n4'];
     $stmt->execute() or die(mysqli_error($con));
 
}
function insertVerify()
{
   
    $con=  getConnection();
    $q="insert into verified select * from newad WHERE id=".$_REQUEST['user_id'].";";
     $result3=$con->query($q);
            echo '<script> location.replace("index.php?p=adminview"); </script>';
     
}
function insertValues()
{	
   $con=  getConnection();
   extract($_POST);
 


//------------------------------------image upload-------------------------------------
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imageToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<center>Sorry, file already exists.</center>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["imageToUpload"]["size"] > 500000) {
    echo "<center>Sorry, your file is too large.Compress the image and then try again.</center>";
    $uploadOk = 0;
}
// Allow certain file formats

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $uploadOk==1) {
    echo "<center>Sorry, only JPG, JPEG & PNG  files are allowed.</center>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<center>Your file was not uploaded.</center>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
        echo "<center>Your form has been submitted successfully!</center>";
		

	$query="INSERT INTO `newad`(`book`, `category`, `amount`, `name`, `number`, `email`, `password`, `feedback`,`image`) 
	VALUES ('".$book_name."','".$category."','".$amount."','".$name."','".$number."','".$email."','".$password."','".$feedback."','".$target_file."')";
	mysqli_query($con,$query);
    } else {
        echo "<center>Sorry, there was an error uploading your file.</center>";
    }
}
//---------------------------------------------------image in folder done------------------

      
}


function displayVerified()
{ 	
  $con=  getConnection();
    $q="select * from verified";
	$stmt=$con->prepare($q);
    $stmt->bind_result($id,$book,$category,$amount,$name,$number,$email,$password,$feedback,$image);
    $stmt->execute() or die(mysqli_error($con));
    
 
 $c=0;
 while($stmt->fetch())
{
     $a[$c]['id']=$id;
        $a[$c]['book']=$book;
        $a[$c]['category']=$category;
      //  $arr[$c]['addetails']=$addetails;
        $a[$c]['amount']=$amount;
        $a[$c]['name']=$name;
        $a[$c]['number']=$number;
        $a[$c]['email']=$email;
        $a[$c]['password']=$password;
        $a[$c]['feedback']=$feedback;
        $a[$c]['image']=$image;
        
        
        ++$c;
}
 
    return @$a;
}
function UserSpecific()
{
    $con=  getConnection();
    $q="SELECT * FROM verified WHERE email = '" . $_SESSION['email'] . "'";
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
 

     
     
    return $arr; 
}
function display()
{
  $con=  getConnection();
    $q="select * from newad";
    $stmt=$con->prepare($q);
    $stmt->bind_result($id,$book,$category,$amount,$name,$number,$email,$password,$feedback,$image);
    $stmt->execute() or die(mysqli_error($con));
    
 
 $c=0;
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
 

     
     
    return $arr;
}
?>