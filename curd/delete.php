<?php

include 'config.php';


$id = $_GET['id'];
echo "yes i am $id ";
$deleteQuery = "DELETE FROM `product` WHERE id=$id";

mysqli_query($conn,$deleteQuery);

header("location:index.php");