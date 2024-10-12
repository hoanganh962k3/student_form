<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>

<h1>Enter Student Information</h1>

<form action="insert.php" method="POST">
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" required><br>

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>

    <button type="submit">Submit</button>
</form>

<br>

<!-- Button to View the List of Students -->
<form action="list.php" method="GET">
    <button type="submit">View Student List</button>
</form>

</body>
</html>
