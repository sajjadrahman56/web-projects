<?php
include 'config.php';
session_start();

$r_name = $_POST['name'];
$r_email = $_POST['email'];

echo "I am $r_name";

$result = mysqli_query($conn ,"SELECT * FROM `info` WHERE name='$r_name' and email = '$r_email' ");

if (mysqli_num_rows($result)) {
     $_SESSION['name'] = $r_name;
        echo "<script>location.href='home.php'</script>"; 
} else {
        echo "<script>alert('no match name and password')</script>";
}
?>