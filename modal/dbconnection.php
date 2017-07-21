<?php
       const host = "localhost";
        const username="root";
        const password="";
        const dbname="buyandsell";

        function getConnection()
        {
            $con=new mysqli(host,username,password,dbname) or die(mysqli_error($con));
            return $con;
        }
      

?>
