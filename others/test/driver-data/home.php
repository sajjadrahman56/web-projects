
<?php
session_start();

if(isset($_SESSION['name']))
{
   echo 'welcome user'.$_SESSION['name'];
   echo "<script>location.href='home1.php'</script>";
}
else
{
    echo 'welcome user'.$_SESSION['name'];
    echo 'something is wrong';
}
   ?>


 


 
