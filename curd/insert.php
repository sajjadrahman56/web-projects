<?php

include 'config.php';

$name = $_POST['name'];
$price = $_POST['price'];
$image = $_FILES['image'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$image_des = 'img/'.$imageName;

move_uploaded_file($imageLocation,$image_des);
 
 


$insert_que ="INSERT INTO `product`(`name`, `price`, `image`) VALUES ('$name','$price','$image_des')";

if(mysqli_query($conn,$insert_que))
{
    echo "<script>alert('baba inserted')</script>";
    echo "<script>location.href='index.php'</script>";
}


?>