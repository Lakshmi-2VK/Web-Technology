<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>

<?php
if(isset($_COOKIE['visit_count'])) {
    $visitCount = $_COOKIE['visit_count'];
    $visitCount++;
} else {
    $visitCount = 1;
}
setcookie('visit_count', $visitCount, time() + 86400);

echo "<p>This is your visit number $visitCount to this page.</p>";
?>

</body>
</html>
