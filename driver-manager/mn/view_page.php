<?php
    session_start();
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
            Data View Part !!
          </h3>
        </div>
      </div>
    </div>

    <div class="container bg-secondary">
      <div class="container center bg-secondary text-dark">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <button class="m-1 btn btn-primary custom-btn">
              <a href="view_record.php" class="text-decoration-none text-dark">Record<br>Put</a>
            </button>
          </div>
          <div class="col-md-6 col-sm-6">
            <button class="m-1 btn btn-success custom-btn">
                <a href="view_findrecord.php" class="text-decoration-none text-dark">Find<br>Record</a>
              </button>
          </div>
        </div>
      </div>
    </div>


    <div class=" container center1 text-dark">
      <div class="row">
        <div class="col-12">
          <button class="btn btn-primary btn-lg btn-block">
            <a class="text-decoration-none text-white" href="mn_logout.php">Log Out</a>
          </button>
        </div>
      </div>
    </div>
    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>