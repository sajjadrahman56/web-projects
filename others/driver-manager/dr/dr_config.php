<?php

$hostname = "localhost";
$username =  "root";
$password = "";
$dbname = "drivers";

$conn = mysqli_connect($hostname,$username,$password,$dbname);

 

if(!$conn)
{
    die("connection failed ".mysqli_connect_error());
}
else
{
   // echo "<script>alert('DB connected')</script>";
}

?>