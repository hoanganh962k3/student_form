<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password is empty
$dbname = "studentsDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT student_id, name FROM students";
$result = $conn->query($sql);

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

echo "<div style='text-align: center; margin-top: 20px;'>
        <form action='index.php'>
            <button type='submit'>Return to Form</button>
        </form>
      </div>";

$conn->close();
?>
