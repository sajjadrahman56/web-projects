<?php

$host="localhost";
$username="root";
$password="";
$db_name="c53g";

# $con = mysqli_connect("localhost","root","","c53g");

$con = mysqli_connect($host,$username,$password,$db_name);

if(!$con)
{
    echo "error exixt baba";
}
else
{
   # echo "<script>alert('DB connected 232 !!')</script>";
}

?>