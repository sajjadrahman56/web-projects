<?php
include 'mn_config.php';
session_start();

$r_name = $_POST['l_name'];
$r_pass = $_POST['l_pass'];

echo "I am  in the $r_name";

if(($r_name =='admin') && ($r_pass=='admin1'))
{
    $_SESSION['logged_in'] = true;
    echo "<script>location.href='view_page.php'</script>";
    
} else {
        echo "<script>alert('no match name and password')</script>";
        echo "<script>location.href='log_in.php'</script>";
}
?>