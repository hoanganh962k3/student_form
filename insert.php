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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];

    $student_id = $conn->real_escape_string($student_id);
    $name = $conn->real_escape_string($name);

    $sql = "INSERT INTO students (student_id, name) VALUES ('$student_id', '$name')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green; text-align: center;'>New record created successfully</p>";
    } else {
        echo "<p style='color: red; text-align: center;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }

    $conn->close();
}

echo "<div style='text-align: center; margin-top: 20px;'>
        <form action='index.php'>
            <button type='submit'>Return to Form</button>
        </form>
      </div>";
?>
