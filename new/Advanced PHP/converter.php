<?php
class InvalidNumberException extends Exception {
    public function errorMessage() {
        return "InvalidNumberException: Number must be a positive value.";
    }
}

function dollarsToRupees($dollars) {
    if ($dollars <= 0) {
        throw new InvalidNumberException();
    }
    $conversionRate = 75;
    $rupees = $dollars * $conversionRate;

    return $rupees;
}

try {
    if (isset($_POST['dollars'])) {
        $dollars = floatval($_POST['dollars']);
        $rupees = dollarsToRupees($dollars);
        echo "$dollars dollars is equal to $rupees rupees.";
    }
} catch (InvalidNumberException $e) {
    echo $e->errorMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dollars to Rupees Converter</title>
</head>
<body>
    <form method="post">
        <label for="dollars">Enter dollars:</label>
        <input type="number" name="dollars" step="0.01" required>
        <input type="submit" value="Convert">
    </form>
</body>
</html>
