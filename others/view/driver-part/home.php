<?php
    session_start();
    $email ='';
    
    if(isset($_SESSION['l_email'])){

        $GLOBALS['email']=$_SESSION['l_email'];

        //echo "<h3> Welcome ".$_SESSION['l_email']. " to Home Page</h3>";
       // echo "<a href='dr_logout.php'><input type = 'button' value='logout' name='logout'></a>";
        
    }
    else{
        echo "<script>alert('Do not access from URL')</script>";
        echo "<script>location.href = 'dr/dr_log.php'</script>";
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .zoom-in {
            transition: transform 0.3s;
        }

        .zoom-in:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6"> <h3 class="text-center bg-white text-dark">
                Welcome to Home Page !!
            </h3></div>
            <div class="col-md-6"><div>
                <button class="mt-2 p-2 bg-white text-muted"><a class="text-decoration-none" href="dr_logout.php">Log Out</a></button>
            </div></div>
        </div>
        <div>
           
        </div>
        
    </div>
    <div class="container">

        <div class="p-2 m-3  row mx-5 mt-3">
            <div class="col-md-6 col-sm-6">
                <button class="m-1 p-4 btn btn-primary"><a href="view_profile.php"
                        class="text-decoration-none text-dark">V I E W <br>Profile</a></button>
            </div>
            <div class="col-md-6 col-sm-6">
                <button class=" m-1 p-4 btn btn-secondary">coming<br>soon</button>
            </div>
        </div>
        <div class="p-2 m-3 row mx-5">
            <div class="col-md-6 col-sm-6">
                <button class=" m-1 p-4 btn btn-secondary">coming<br>soon</button>
            </div>
            <div class="col-md-6 col-sm-6">
                <button class="m-1 p-4 btn btn-danger">UPDATE<br>Profile</button>
            </div>
        </div>
        <!-- Add more rows as needed -->
    </div>

 

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>