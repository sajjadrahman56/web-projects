<?php
    include 'dr_config.php';
    session_start();

    $email ='';

    if(isset($_SESSION['l_email'])){

        $GLOBALS['email']=$_SESSION['l_email'];
    }

   
    $allData = mysqli_query($conn,"SELECT * FROM `dr-registration` WHERE `email`='$email' ");
    $rowData = mysqli_fetch_array($allData);



?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Update Form </title>
    <style>
        form {
            background: #fff;
            ;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="conatiner">
         
        <div class="mt-5 row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 text-secondary">
                    <h2 class="text-center">Update Form </h2>
                <form class="mt-3" action="dr_updateAction.php" method="post">

                    <div class="mt-2">
                        <input class='mx-5 text-center' type='text' 
                        value="<?php echo $rowData[1]?>"placeholder="first-name" name="fname" required>
                    </div>

                    <div class="mt-2">
                        <input class='mx-5 text-center' type='text' 
                        value="<?php echo $rowData[2]?>"placeholder="last-name" name="lname" required>
                    </div>

                    <div class="mt-2">
                        <input class='mx-5 text-center bg-success' type='number' 
                        value="<?php echo $rowData[3]?>"placeholder="phone number" name="phone" readonly>
                    </div>

                    <div class="mt-2">
                        <input class='mx-5 text-center bg-danger' type='text' 
                        value="<?php echo 'model :'.$rowData[4]?>"placeholder="car number" readonly>
                    </div>

                    <div class="mt-2  ">
                        <input class='mx-5 text-center bg-danger' type='text' 
                        value="<?php echo 'email : '.$rowData[5]?>"placeholder="email" readonly>
                    </div>
                        <p class="mx-5">back to home ? <a class='text-decoration-none text-dark' href="home.php">click</a></p>
                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary col-12">Send</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>


     

</body>

</html>