<?php

include 'dr_config.php';
session_start();    
$email = $_POST['l_email'];
$pass = $_POST['l_pass'];

$result = mysqli_query($conn,"SELECT * FROM `dr-registration` WHERE email='$email' AND password='$pass'");

if(mysqli_num_rows($result)){
    $_SESSION['l_email'] = $email;
    echo "<script>location.href='home.php'</script>";
}
else{
    echo "<script>alert('Username and Password is not matching !!')</script>";
    echo "<script>location.href='index.php'</script>";
}

?>