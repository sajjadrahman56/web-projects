<?php
include 'dr_config.php';
session_start();

$email ='';
echo "Home Page";
if(isset($_SESSION['l_email'])){
    $GLOBALS['email']=$_SESSION['l_email'];
}
echo $email;

$ufname =$_POST['fname'];
$ulname = $_POST['lname'];

$upQ ="UPDATE `dr-registration` SET `first-name`='$ufname',`last-name`='$ulname' WHERE `email` ='$email'";


$name_pattern = "/[A-Za-z .]{3,20}/";
$phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";

    if(!preg_match($name_pattern, $ufname))
    {
        echo "<script>alert('Name only conatin latters')</script>";
        echo "<script>location.href = 'dr_update.php'</script>";
    }
    elseif(!preg_match($name_pattern, $ulname))
    {
        echo "<script>alert('Name only conatin latters')</script>";
        echo "<script>location.href = 'dr_update.php'</script>";
    }
    else
    {
        
        if(!mysqli_query($conn, $upQ))
        {
            die("Not Inserted...!!!");
        }
        else
        {
            echo "<script>alert('Data Inserted')</script>";
            echo "<script>location.href='dr_update.php'</script>";
        }
    }

