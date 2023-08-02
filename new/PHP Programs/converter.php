<!DOCTYPE html>
<html>
<head>
    <title>USD to INR Converter</title>
</head>
<body>
    <h1>USD to INR Converter</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="usdAmount">Enter amount in USD:</label>
        <input type="number" name="usdAmount" id="usdAmount" required><br><br>

        <input type="submit" value="Convert to INR">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usdAmount = $_POST["usdAmount"];
        $conversionRate = 82.00;
        $inrAmount = $usdAmount * $conversionRate;
        $formattedINRAmount = number_format($inrAmount, 2);
        echo "<h2>INR Amount: $formattedINRAmount</h2>";
    }
    ?>
</body>
</html>
