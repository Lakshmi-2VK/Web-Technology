<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="subject1">Subject 1:</label>
        <input type="number" name="subject1" id="subject1" required><br><br>

        <label for="subject2">Subject 2:</label>
        <input type="number" name="subject2" id="subject2" required><br><br>

        <label for="subject3">Subject 3:</label>
        <input type="number" name="subject3" id="subject3" required><br><br>

        <input type="submit" value="Calculate Grade">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $subject1 = $_POST["subject1"];
        $subject2 = $_POST["subject2"];
        $subject3 = $_POST["subject3"];
        $average = ($subject1 + $subject2 + $subject3) / 3;
        $grade='';
        if ($average >= 90) {
            $grade = 'S';
        } elseif ($average >= 80) {
            $grade = 'A';
        } elseif ($average >= 70) {
            $grade = 'B';
        } elseif ($average >= 60) {
            $grade = 'C';
        }
          elseif ($average >= 50) {
            $grade = 'A';
        } elseif ($average >= 40) {
            $grade = 'B';
        } elseif ($average >= 30) {
            $grade = 'C';
        } else {
            $grade = 'F';
        }
    }
        echo "<h4>Grade: $grade</h4>";
    ?>
</body>
</html>
