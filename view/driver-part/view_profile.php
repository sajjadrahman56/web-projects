<?php
    session_start();
    include 'dr_config.php';
 
    $email ='';
    if(isset($_SESSION['l_email'])){

        $GLOBALS['email']=$_SESSION['l_email'];
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Registration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>

<body>

    <body class="">
        <div class="container">

          
            <?php
                  
                    $allData = mysqli_query($conn,"SELECT * FROM `dr-registration` WHERE `email`='$email' ");
                    $rowData = mysqli_fetch_array($allData);

                    echo "
                    <div> 
                        <h3 class='mt-3 text-center'>$rowData[1]'s  <pre>  I N F O R M A T I O N</pre></h3>
                    </div>
                    <div class='row'>
                        <div class='col-md-6 col-sm-6 '>
                            <table class='table table-dark table-hover text-center'>
                                
                                <br><tr><td>First Name</td> </tr>
                                <br><tr> <td>Last Name</td></tr>
                                <br><tr> <td>Phone</td></tr>
                                <br><tr> <td>Car-model</td></tr>
                                <br><tr> <td>Email</td></tr>   
                            </table>
                        </div>
                            <div class='col-md-6 col-sm-6 '>
                                <table class='table table-dark table-hover text-center'>

                                    <br><tr> <td>$rowData[1]</td></tr>
                                    <br><tr><td>$rowData[2]</td></tr>
                                    <br><tr><td>$rowData[3]</td></tr>
                                    <br><tr><td>$rowData[4]</td></tr>
                                    <br><tr><td>$rowData[5]</td></tr>
                                </table>
                            </div>

                            <div div class='container d-flex justify-content-center align-items-center'>
                                <button class='btn btn-danger  mx-2'>
                                    <p class='display-2'> <a class='text-decoration-none text-dark' href='dr_update.php'>UPDATE</a> </p>
                                </button>
                            </div>
                    </div>
                    ";              
        ?>

        </div>
    </body>
</body>

</html>