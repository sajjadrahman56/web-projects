
This part is under comment ( 3 - 10 ) lines another way of call 
<?php
    /*
    # include 'db.php';
    include 'functionsManual.php';
    require_once('db.php');
    $query = "SELECT * FROM `register-info` ";
    $result = mysqli_query($con,$query);
    */ 
?>

<?php

require_once('db.php');
require_once('functionsManual.php');

$result = display_data();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data fetch</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">
                            fetch data
                        </h2>
                    </div>
                    <!-- card detiales assign -->
                    <div class="card-body">
                        <table class="table table-border">
                            <tr class="bg-dark text-white">
                                <td>id</td>
                                <td>f-name</td>
                                <td>l-name</td>
                                <td>email</td>
                                <td>edit</td>
                                <td>delete</td>
                            </tr>
                            <tr>
                                <?php
                                 while($rows = mysqli_fetch_assoc($result))
                                 {
                              
                                 ?>
                                <td>
                                    <?php echo $rows['id']; ?>
                                </td>
                                <td>
                                    <?php echo $rows['f-name']; ?>
                                </td>
                                <td>
                                    <?php echo $rows['l-name']; ?>
                                </td>
                                <td>
                                    <?php echo $rows['email']; ?>
                                </td>
                                <td><a href="#" class="btn btn-primary">Edit</a></td>
                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                        }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>