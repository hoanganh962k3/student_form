<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password is empty
$dbname = "studentsDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from students table
$sql = "SELECT student_id, name FROM students";
$result = $conn->query($sql);

// Display data in a table
echo "<h1>Student List</h1>";
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10' style='margin: auto;'>";
    echo "<tr><th>Student ID</th><th>Name</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['student_id'] . "</td><td>" . $row['name'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p style='text-align: center;'>No students found.</p>";
}

// Close the connection
$conn->close();
?>
