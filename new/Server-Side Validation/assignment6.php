<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>

    <?php
    $name = $email = $password = $mobile = $qualification = $gender = $birthday = '';
    $nameErr = $emailErr = $passwordErr = $mobileErr = $qualificationErr = $genderErr = $birthdayErr = '';
    $successMessage = '';
    $qualificationOptions = array(
        "High School",
        "Associate's Degree",
        "Bachelor's Degree",
        "Master's Degree",
        "Doctorate Degree"
    );
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['name'])) {
            $nameErr = "Name is required.";
        } else {
            $name = htmlspecialchars($_POST['name']);
        }
        if (empty($_POST['email'])) {
            $emailErr = "Email is required.";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        } else {
            $email = htmlspecialchars($_POST['email']);
        }
        if (empty($_POST['password'])) {
            $passwordErr = "Password is required.";
        } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $_POST['password'])) {
            $passwordErr = "Password must have at least 1 uppercase letter, 1 lowercase letter, 1 number, and 1 special character.";
        } else {
            $password = htmlspecialchars($_POST['password']);
        }
        if (empty($_POST['mobile'])) {
            $mobileErr = "Mobile number is required.";
        } elseif (!preg_match('/^\d{10}$/', $_POST['mobile'])) {
            $mobileErr = "Invalid mobile number format.";
        } else {
            $mobile = htmlspecialchars($_POST['mobile']);
        }
        if (empty($_POST['qualification'])) {
            $qualificationErr = "Highest qualification is required.";
        } elseif (!in_array($_POST['qualification'], $qualificationOptions)) {
            $qualificationErr = "Invalid qualification option.";
        } else {
            $qualification = htmlspecialchars($_POST['qualification']);
        }
        if (empty($_POST['gender'])) {
            $genderErr = "Gender is required.";
        } else {
            $gender = htmlspecialchars($_POST['gender']);
        }
        if (empty($_POST['birthday'])) {
            $birthdayErr = "Birthday is required.";
        } else {
            $birthday = htmlspecialchars($_POST['birthday']);
        }
        if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($mobileErr) && empty($qualificationErr) && empty($genderErr) && empty($birthdayErr)) {
            $successMessage = "Registration Successful!";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span style="color: red;"><?php echo $nameErr; ?></span>
        <br><br>

        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $emailErr; ?></span>
        <br><br>

        Password: <input type="password" name="password" value="<?php echo $password; ?>">
        <span style="color: red;"><?php echo $passwordErr; ?></span>
        <br><br>

        Mobile Number: <input type="text" name="mobile" value="<?php echo $mobile; ?>">
        <span style="color: red;"><?php echo $mobileErr; ?></span>
        <br><br>

        Highest Qualification:
        <select name="qualification">
            <option value="">Select Qualification</option>
            <?php
            foreach ($qualificationOptions as $option) {
                echo "<option value=\"$option\"";
                if ($qualification === $option) {
                    echo " selected";
                }
                echo ">$option</option>";
            }
            ?>
        </select>
        <span style="color: red;"><?php echo $qualificationErr; ?></span>
        <br><br>

        Gender:
        <input type="radio" name="gender" value="male" <?php if ($gender === 'male') echo 'checked'; ?>> Male
        <input type="radio" name="gender" value="female" <?php if ($gender === 'female') echo 'checked'; ?>> Female
        <span style="color: red;"><?php echo $genderErr; ?></span>
        <br><br>

        Birthday: <input type="date" name="birthday" value="<?php echo $birthday; ?>">
        <span style="color: red;"><?php echo $birthdayErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (!empty($successMessage)) {
        echo "<h3>$successMessage</h3>";
        echo "<strong>Name:</strong> $name<br>";
        echo "<strong>Email:</strong> $email<br>";
        echo "<strong>Mobile Number:</strong> $mobile<br>";
        echo "<strong>Highest Qualification:</strong> $qualification<br>";
        echo "<strong>Gender:</strong> $gender<br>";
        echo "<strong>Birthday:</strong> $birthday<br>";
    }
    ?>
</body>
</html>
