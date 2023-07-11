<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Records</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .status-absent {
      background-color: #dc3545; /* Bootstrap's bg-danger color */
      color: #fff;
    }

    .status-present {
      background-color: #28a745; /* Bootstrap's bg-success color */
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <?php
      // Include the database connection
      require_once 'db.php';

      $car_model = $_GET['car_number'];

      // Get the attendance records for the past 7 days for the specified car_model
      $attendanceRecords = getAttendanceRecords($conn, $car_model);

      echo "<h2>Attendance records for Car Model: $car_model</h2>";

      if (count($attendanceRecords) > 0) {
        echo '<table class="table">
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
                  <td class=\"$statusClass\">$status</td>
                  <td class=\"$amountZero\">$amount</td>
                </tr>";
        }

        echo '</tbody>
              </table>';

        // Calculate the count of missing days (absent status)
        $absentCount = array_count_values(array_column($attendanceRecords, 'status'))['absent'];
        $presentCount = count($attendanceRecords) - $absentCount;

        echo '<div class="row mt-4">
                <div class="col-md-6">
                  <strong>Number of Missing Days:</strong> ' . $absentCount . '
                </div>
                <div class="col-md-6">
                  <strong>Number of Present Days:</strong> ' . $presentCount . '
                </div>
              </div>';

        // Calculate the total number of records with status "present" and amount as zero
        $presentZeroCount = 0;

        foreach ($attendanceRecords as $record) {
            $status = $record["status"];
            $amount = $record["amount"];

            if ($status == 'present' && $amount == 0) {
                $presentZeroCount++;
            }
        }

        echo '<div class="row mt-4">
                <div class="col-md-12">
                  <strong>Total Number of Records with Status "Present" and Amount Zero:</strong> ' . $presentZeroCount . '
                </div>
              </div>';
      } else {
        echo "No attendance records found for the specified car_model.";
      }

      // Function to get attendance records for the past 7 days for a given car_model
      function getAttendanceRecords($conn, $car_model) {
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
  </div>
</body>
</html>
