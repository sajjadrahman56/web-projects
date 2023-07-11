<?php
// Include the database connection
require_once 'db.php';

// Handle form submission to mark attendance
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   $count = "SELECT COUNT(*) FROM `driver_information` WHERE car_model=103 && date='2023-07-16'";
    if($count == 0)
    {
        $car_model = $_POST["car_number"];
        $status = $_POST["status"];
        $amount = $_POST["amount"];
        $date = $_POST["date"];
    
        $stmt = $conn->prepare("INSERT INTO driver_information (car_model, amount, status, date) VALUES (?, ?, ?, ?)");
        
        $stmt->bind_param("iiss",$car_model, $amount, $status, $date);
    
        // Generate a unique ID for each row
        //$id = uniqid();
        $stmt->execute();
        $stmt->close();
    }
    else
    {
        echo "its assigne and find duplicate".$count;
    }

    



}

// Display the attendance records for a given employee ID
if (isset($_GET["employee_id"])) {
    $car_number = $_GET["employee_id"];
    $attendanceRecords = getAttendanceRecords($conn, $car_number);

    echo "Attendance records for Employee ID: $car_number<br>";

    if (count($attendanceRecords) > 0) {
        foreach ($attendanceRecords as $record) {
            $date = $record["date"];
            $status = $record["status"];

            echo "Date: $date - Status: $status<br>";
        }
    } else {
        echo "No attendance records found for the specified employee ID.";
    }
}

// Close the database connection
$conn->close();
?>
