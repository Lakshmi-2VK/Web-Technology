<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>

<?php
session_start();
if(isset($_SESSION['username'])) {
    echo "<p>Welcome, {$_SESSION['username']}! You are already logged in.</p>";
    echo "<p><a href='session_logout.php'>Logout</a></p>";
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $validUsername = 'user';
        $validPassword = 'password';

        if ($username == $validUsername && $password == $validPassword) {
            $_SESSION['username'] = $username;
            echo "<p>Login successful! Welcome, $username.</p>";
            echo "<p><a href='session_logout.php'>Logout</a></p>";
        } else {
            echo "<p>Invalid username or password. Please try again.</p>";
        }
    } else {
        echo "
        <form method='post' action=''>
            <label for='username'>Username:</label>
            <input type='text' name='username' required><br>
            <label for='password'>Password:</label>
            <input type='password' name='password' required><br>
            <input type='submit' value='Login'>
        </form>
        ";
    }
}
?>

</body>
</html>
