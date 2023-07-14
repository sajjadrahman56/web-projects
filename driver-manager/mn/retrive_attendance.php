
<?php
include 'mn_config.php';
session_start();

$number_of_present;
$number_of_missing;
$presnt_but_nopay;
$due;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Records</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .status-absent {
      background-color: #dc3545;
      /* Bootstrap's bg-danger color */
      color: #fff;
    }

    .status-present {
      background-color: #28a745;
      /* Bootstrap's bg-success color */
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <?php
    // Include the database connection


    $car_model = $_GET['car_number'];

    // Get the attendance records for the past 7 days for the specified car_model
    $attendanceRecords = getAttendanceRecords($conn, $car_model);

    echo "<h2 class='text-center bg-dark text-white'>History of Car Model: $car_model</h2>";
    echo "<br>";
    if (count($attendanceRecords) > 0) {
      echo '<table class="table text-white">
                <thead>
                  <tr>
                    <th>Car Model</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody>';

      foreach ($attendanceRecords as $record) {
        $date = $record["date"];
        $status = $record["status"];
        $amount = $record["amount"];

        $statusClass = ($status == 'absent') ? 'bg-danger' : 'bg-success';
        $amountZero = ($amount == 0) ? 'bg-danger' : 'bg-success';

        echo "<tr>
                  <td>$car_model</td>
                  <td>$date</td>
                  <td class=\"$statusClass text-white\">$status</td>
                  <td class=\"$amountZero text-white\">$amount</td>
                </tr>";
      }

      echo '</tbody>
              </table>';

      // Calculate the count of missing days (absent status)
      $absentCount = array_count_values(array_column($attendanceRecords, 'status'))['absent'];
      $presentCount = count($attendanceRecords) - $absentCount;

      $GLOBALS['$number_of_present'] = $presentCount;
      $GLOBALS['$number_of_missing'] = $absentCount;

      //echo 'yes i am supper global'.$presentCount."<br>";

      echo '
<div class=" mt-5 text-center ">
  <div class="container py-4">
    <div class="row">
      <div class="col-md-6 zoom-in">
        <div class="card bg-danger text-white">
          <div class="card-body">
            <h5 class="card-title text-dark">Number Missing Days</h5>
            <p class="card-text">' . $absentCount . '</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 zoom-in">
        <div class="card bg-success text-white">
          <div class="card-body">
            <h5 class="card-title">Total Present Days</h5>
            <p class="card-text">' . $presentCount . '</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>';


      // "present" and amount is 0
      $presentZeroCount = 0;

      foreach ($attendanceRecords as $record) {
        $status = $record["status"];
        $amount = $record["amount"];

        if ($status == 'present' && $amount == 0) {
          $presentZeroCount++;
        }
      }

      echo '<div class="row mt-2 text-center  ">
        <div class="col-md-6 zoom-in">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-danger">Present but Not Paid</h5>
              <p class="card-text">' . $presentZeroCount . '</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 zoom-in">
          <div class="card">
            <div class="card-body bg-danger text-white">
              <h5 class="card-title">Due Amount</h5>
              <p class="card-text">' . ($presentZeroCount * 10) . '</p>
            </div>
          </div>
        </div>
      </div>';

    } else {
      echo "<script>alert('No C A R model FOUND ..!!') </script>
        <script>location.href='view_findrecord.php' </script>";
    }

    // Function to get attendance records for the past 7 days for a given car_model
    function getAttendanceRecords($conn, $car_model)
    {
      $attendanceRecords = array();

      // Prepare and execute the query
      $stmt = $conn->prepare("SELECT date, status, amount FROM driver_information WHERE car_model = ? AND date >= CURDATE() - INTERVAL 7 DAY");
      $stmt->bind_param("i", $car_model);
      $stmt->execute();

      // Fetch the results
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) {
        $attendanceRecords[] = $row;
      }

      // Close the statement
      $stmt->close();

      return $attendanceRecords;
    }

    // Close the database connection
    $conn->close();
    ?>

<div class='mt-3 bg-success text-center'>
  <a href='update_due.php?car_model=<?php echo urlencode($car_model); ?>&due=<?php echo urlencode($presentZeroCount);?>' class="text-decoration-none">
    <button class="btn btn-danger">DUE PAY</button>
  </a>
</div>



    <div class="bg-info mt-5">
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
</body>

</html>