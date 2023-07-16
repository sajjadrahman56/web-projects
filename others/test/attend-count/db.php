<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "c53g";

 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get the attendance records for a given employee ID
function getAttendanceRecords($conn, $employeeId)
{
    $start = date("Y-m-d", strtotime("-20 days"));
    $end = date("Y-m-d");

    $stmt = $conn->prepare("SELECT * FROM attendance WHERE employee_id = ? AND date BETWEEN ? AND ?");
   
    $stmt->bind_param("iss", $employeeId, $start, $end);
   
    $stmt->execute();

    $result = $stmt->get_result();

    $attendanceRecords = array();

    while ($row = $result->fetch_assoc()) {
        $attendanceRecords[] = $row;
    }

    return $attendanceRecords;
}

 

 
 



?>
