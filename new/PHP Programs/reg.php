<!DOCTYPE html>
<html>
<head>
    <title>Student Details - Display</title>
</head>
<body>
    <h1>Student Details</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $regNo = $_POST["regNo"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $branch = $_POST["branch"];
        $year = $_POST["year"];
        $semester = $_POST["semester"];
        $mobile = $_POST["mobile"];
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Registration Number:</strong> $regNo</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Branch:</strong> $branch</p>";
        echo "<p><strong>Year:</strong> $year</p>";
        echo "<p><strong>Semester:</strong> $semester</p>";
        echo "<p><strong>Mobile Number:</strong> $mobile</p>";
    }
    ?>
</body>
</html>
