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
  <style>
    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 150px;
    }

    .center1 {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100px;
    }


    .custom-btn {
      padding: 1.5rem 3rem;
      font-size: 1.5rem;
      border-radius: 10%;
    }
  </style>
</head>

<body>
  <div class="container">

    <div class="mt-5 container center1 bg-dark text-white">
      <div class="row">
        <div class="col-12">
          <h3 class="text-center">
            Welcome to Home Page !!
          </h3>
        </div>
      </div>
    </div>

    <div class="container bg-secondary">
      <div class="container center bg-secondary text-dark">
        <div class="row">
          <div class="col-6 col-md-6 col-sm-6">
            <button class="m-1 btn btn-primary custom-btn">
              <a href="view_profile.php" class="text-decoration-none text-dark">VIEW<br>Profile</a>
            </button>
          </div>
          <div class="col-6 col-md-6 col-sm-6 ">
            <button class="m-1 btn btn-success custom-btn">coming<br>soon</button>
          </div>
        </div>

      </div>
      <div class="mt-3 container center bg-secondary text-dark ">

        <div class="row">
          <div class="col-6 col-md-6 col-sm-6">
            <button class="m-1 btn btn-success custom-btn">coming<br>soon</button>
          </div>
          <div class="col-6 col-md-6 col-sm-6">
            <button class="m-1 btn btn-danger custom-btn"><a class="text-decoration-none text-dark"
                href="dr_update.php">UPDATE<br>Profile</a></button>
          </div>
        </div>
      </div>

    </div>
    <div class=" container center1 text-dark">
      <div class="row">
        <div class="col-12">
          <button class="btn btn-primary btn-lg btn-block">
            <a class="text-decoration-none text-white" href="dr_logout.php">Log Out</a>
          </button>
        </div>
      </div>
    </div>
    
  </div>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>