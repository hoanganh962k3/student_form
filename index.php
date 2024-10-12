<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS -->
</head>
<body>

<h1>Enter Student Information</h1>

<form action="insert.php" method="POST">
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" required><br>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
