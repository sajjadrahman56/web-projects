<?php
// Include the database connection
require_once 'db.php';

// Handle form submission to mark attendance
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employeeId = $_POST["employee_id"];
    $status = $_POST["status"];
    $date = $_POST["date"];

    $stmt = $conn->prepare("INSERT INTO attendance (employee_id, status, date) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $employeeId, $status, $date);
    $stmt->execute();
    $stmt->close();
}

// Display the attendance records for a given employee ID
if (isset($_GET["employee_id"])) {
    $employeeId = $_GET["employee_id"];
    $attendanceRecords = getAttendanceRecords($conn, $employeeId);

    echo "Attendance records for Employee ID: $employeeId<br>";

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
