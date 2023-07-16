<?php
// Include the database connection
require_once 'db.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Attendance</title>
</head>
<body>
    <h1>Employee Attendance</h1>

    <h2>Mark Attendance</h2>
    <form action="atte.php" method="POST">
        <label for="employee_id">Employee ID:</label>
        <input type="text" id="employee_id" name="employee_id" required>
        
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="present">Present</option>
            <option value="absent">Absent</option>
        </select>
        
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        
        <button type="submit">Submit</button>
    </form>

    <h2>Search Attendance Records</h2>
    <form action="atte.php" method="GET">
        <label for="search_employee_id">Employee ID:</label>
        <input type="text" id="search_employee_id" name="employee_id" required>
        
        <button type="submit">Search</button>
    </form>
</body>
</html>
