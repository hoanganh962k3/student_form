<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password is empty
$dbname = "studentsDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];

    // Sanitize inputs to avoid SQL injection
    $student_id = $conn->real_escape_string($student_id);
    $name = $conn->real_escape_string($name);

    // Prepare SQL statement to insert data into the students table
    $sql = "INSERT INTO students (student_id, name) VALUES ('$student_id', '$name')";

    // Execute query and check for errors
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green; text-align: center;'>New record created successfully</p>";
    } else {
        echo "<p style='color: red; text-align: center;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }

    // Close the connection
    $conn->close();
}
?>
