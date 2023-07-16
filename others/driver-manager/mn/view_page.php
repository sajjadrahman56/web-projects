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
  <title>Button Page</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

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
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-family: 'Poppins', sans-serif;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="" alt="D M !" class="img-fluid">
      </a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-primary" href="view_record.php">Record Put</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="view_findrecord.php">Find Record</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mn_logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid" style="margin-top: 8%;">
  <div class="row">
    <div class="col-lg-12 col-sm-12">
      <div class="carousel" style="display: flex;justify-content: center;">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class=""></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1" class="active" aria-current="true"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item">
              <img src="../dir.jpeg" alt="Image 1" class="img-fluid">
            </div>
            <div class="carousel-item active">
              <img src="../man.jpeg" alt="Image 2" class="img-fluid">
            </div>
            <div class="carousel-item">
              <img src="../dir.jpeg" alt="Image 3" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="d-flex justify-content-center align-items-center">
    <div class="container">

      <div class="mt-5 container center1 bg-dark text-white">
        <div class="row">
          <div class="col-12">
            <h3 class="text-center animate__animated animate__jackInTheBox">
              Data View Part !!
            </h3>
          </div>
        </div>
      </div>

      <div class="container bg-secondary">
        <div class="container center bg-secondary text-dark">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-6 animate__animated animate__fadeInRight">
              <button class="m-1 btn btn-primary custom-btn">
                <a href="view_record.php" class="text-decoration-none text-dark">Record<br>Put</a>
              </button>
            </div>
            <div class="col-md-6 col-sm-6 col-6 animate__animated animate__fadeInLeftBig">
              <button class="m-1 btn btn-success custom-btn">
                <a href="view_findrecord.php " class="text-decoration-none text-dark">Find<br>Record</a>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class=" container center1 text-dark">
        <div class="row">
          <div class="col-12">
            <button class="btn btn-secondary btn-lg btn-block">
              <a class="text-decoration-none text-white" href="mn_logout.php">Log Out</a>
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="footer mt-auto py-3 bg-secondary text-muted">
    <div class="container text-center">
      <span class="text-muted">© 2023 sajjad rahman.</span>
      <br>
      <span class="text-dark">3100 Sylhet, Bangladesh | Phone: +88 01890 021646 | Email:
        sajjadrahman17.info@gmail.com</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

