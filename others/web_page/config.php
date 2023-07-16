<?php

$servername="localhost";
$username="root";
$password="";
$dbname="53_g";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!con)
{
    die("connection failed ".mysqli_connect());
}
else
{
    echo "<script>alert('DB connected')</script>";
}

