<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<?php
$maxFileSize = 50 * 1024; // 50KB in bytes

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        $tmpName = $_FILES["image"]["tmp_name"];
        $size = $_FILES["image"]["size"];

        if ($size <= $maxFileSize) {
            $targetDir = "C:/xampp/htdocs/Assignment7/";
            $targetFile = $targetDir . basename($_FILES["image"]["name"]);

            if (move_uploaded_file($tmpName, $targetFile)) {
                echo "Image uploaded successfully.";
            } else {
                echo "Error uploading the image.";
            }
        } else {
            echo "Image size exceeds the limit of 50KB.";
        }
    } else {
        echo "Error uploading the image.";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <label for="image">Choose an image (max size: 50KB):</label>
    <input type="file" name="image" accept="image/*" required>
    <input type="submit" value="Upload">
</form>

</body>
</html>
