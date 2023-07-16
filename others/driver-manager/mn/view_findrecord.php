<?php
 
session_start();
include 'mn_config.php';
 
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
   
  header('Location: login.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-4VPsOUdI8CYUvxRql7/6z7tcwXH9vKo8XYLTcaJr6rqd/2Krnb4M2VteDgOmmqTTjuvV23h/19JK75eLfqkzWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container">

            <div class="container bg-danger mt-5">
                <div class="container">
                    <h1 class="text-center animated-text">HISTORY</h1>
                    <h4 class="text-center ">of the Car !!</h4>

                    <div class="container  text-white justify-content-center">
                        <form action="retrive_attendance.php" method="GET">

                            <div class="mt-3 text-center d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-5">CAR MODEL</div>
                                    <div class="col-5">
                                        <input type="number" id="search_car_number" name="car_number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-center ">
                                <button type="submit" class="btn btn-primary col-5">
                                    Search
                                </button>
                                <br>
                            </div>
                        </form>
                    </div>
                    <h6 class="mt-3">only car_number|model allow.!</h6>
                </div>
            </div>

            <div class="bg-info">
                <div class="row justify-content-center">
                    <div class="col text-start fst-italic">
                        <p><a href="../index.html" class=" text-dark text-decoration-none zoom-in">home</a></p>
                    </div>

                    <div class="col text-center fst-italic">
                        <p><a href="./view_record.php" class=" text-dark text-decoration-none zoom-in">insert record
                            </a></p>
                    </div>

                    <div class="col text-end fst-italic">
                        <p><a href="./view_page.php" class=" text-dark text-decoration-none zoom-in">view page</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style>
        .zoom-in {
            transition: font-size 0.5s;
        }

        .zoom-in:hover {
            font-size: 1.4em;
            background-color: white;
            text-decoration: none;
        }
    </style>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>

</html>