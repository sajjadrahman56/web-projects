<?php
include 'mn_config.php';

 
$car_model = $_GET['car_model'];
$presentCount = $_GET['due'];

 $upQ = "UPDATE `driver_information`
 SET `amount` = 10
 WHERE `status` = 'present' AND `amount` = 0";

if($presentCount != 0)
{
    if(!mysqli_query($conn, $upQ))
        {
            die("DB MISSING...!!!");
            echo "<script>location.href='view_page.php'</script>";
        }
        else
        {
            echo "<script>alert('DUE PAID . AMOUNT UPDATED..!!')</script>";
            echo "<script>location.href='view_findrecord.php'</script>";
      
        }

}
else
{
    echo "<script>alert('NO DUE PENDING ..!!') </script>
    <script>location.href='view_findrecord.php' </script>";
}