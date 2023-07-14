
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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container pt-5">
    

    <?php
    // Include the database connection

    require_once 'mn_config.php';
    $car_model = $_POST["car_number"];
    $status = $_POST["status"];
    $amount = $_POST["amount"];
    $date = $_POST["date"];
    // Handle form submission to mark attendance
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $count_query = "SELECT COUNT(*) FROM `driver_information` WHERE car_model = ? AND date = ?";
      $stmt = $conn->prepare($count_query);
      $stmt->bind_param("ss", $car_model, $date);
      $stmt->execute();
      $stmt->bind_result($count);
      $stmt->fetch();
      $stmt->close();

      // echo "count = " . $count . "\t klkl" . "<br>";

      // echo "coutnt = " . $count . "\t klkl" . "<br>";

      if ($count == 0) {
        $stmt = $conn->prepare("INSERT INTO driver_information (car_model, amount, status, date) VALUES (?, ?, ?, ?)");

        $stmt->bind_param("iiss", $car_model, $amount, $status, $date);

        // Generate a unique ID for each row
        //$id = uniqid();
        $stmt->execute();
        $stmt->close();

        echo "<script>alert('data inserted') </script>";
        echo "<script>location.href='view_page.php' </script>";
      } else {
        // echo "its assigne and find duplicate".$count;

        echo "<script>alert('duplicated data can not insert') </script>";

        echo "<script>location.href='view_record.php' </script>";

        //echo "<script>location.href='manager_dashborad.html' </script>";

      }
    }

    // Close the database connection

    $conn->close();
    ?>
</body>

</html>