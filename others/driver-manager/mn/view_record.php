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

  <style>
  .zoom-in {
    transition: font-size 0.4s;
  }

  .zoom-in:hover {
    font-size: 1.3em;
     background-color: white;
     text-decoration: none;
  }
</style>
</head>

<body>
  <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container">
      <div class="container bg-danger   text-white">
        <div class="container">
          <h1 class="text-center fw-bold">C A R transection INSERT.!!</h1>
          <div class=" m-2 p-5 container bg-dark text-white">
            <form action="data_get_send.php" method="POST" class=" ">
              <div class="mt-2 row">
                <label for="car_number" class="col-md-3 col-form-label">Car number:</label>
                <div class="col-md-9">
                  <input type="text" id="car_number" name="car_number" class="form-control" required>
                </div>
              </div>

              <div class="mt-2 row">
                <label for="status" class="col-md-3 col-form-label">Status:</label>
                <div class="col-md-9">
                  <select id="status" name="status" class="form-select" required>
                    <option class="bg-success" value="present">Available</option>
                    <option class="bg-danger" value="absent">Not Available</option>
                  </select>
                </div>
              </div>

              <div class="mt-2 row">
                <label for="amount" class="col-md-3 col-form-label">Amount:</label>
                <div class="col-md-9">
                  <input type="number" id="amount" name="amount" class="form-control" value="0">
                </div>
              </div>

              <div class="mt-2 row">
                <label for="date" class="col-md-3 col-form-label">Date:</label>
                <div class="col-md-9">
                  <input type="date" id="date" name="date" class="form-control" required>
                </div>
              </div>

              <div class="mt-5 text-center ">
                <button type="submit" class="col-12 btn btn-primary">S e n d</button>
              </div>
            </form>

          </div>
          <div>
            <div class="row">
              <div class="col text-start fst-italic">
                <p><a href="../index.html" class=" text-dark text-decoration-none zoom-in">home</a></p>
              </div>

              <div class="col text-center fst-italic">
                <p><a href="./view_findrecord.php" class=" text-dark text-decoration-none zoom-in">show result
                </a></p>
              </div>

              <div class="col text-end fst-italic">
                <p><a href="./view_page.php" class=" text-dark text-decoration-none zoom-in">view page</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


   

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>

</html>