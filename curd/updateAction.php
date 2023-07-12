<?php

include 'config.php';

$id = $_POST['id'];

$name = $_POST['name'];
$price = $_POST['price'];
// $image = $_POST['image'];

$image = $_FILES['image'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$image_des = 'img/'.$imageName;

move_uploaded_file($imageLocation,$image_des);

$upQ = "UPDATE `product` SET `name`='$name',`price`='$price',`image`='$image_des' WHERE id='$id' ";


if(mysqli_query($conn,$upQ))
{
    echo "<script>alert('Data Updateed brooooooooo!!!!!!!!')</script>";
    echo "<script>location.href='index.php'</script>";
}