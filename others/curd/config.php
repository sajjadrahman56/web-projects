<?php

$hostname = "localhost";
$username =  "root";
$password = "";
$dbname = "c53g";

$conn = mysqli_connect("localhost","root","","c53g");

 

if(!$conn)
{
    die("connection failed ".mysqli_connect_error());
}
else
{
    echo "<script>alert('DB connected')</script>";
}

?>