<?php
$uploadOk = 1;

if (isset($_POST["submit"]) && isset($_FILES["img_upload"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img_upload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image is actual image
    $check = getimagesize($_FILES["img_upload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    // Check file size (limit: 500KB)
    if ($_FILES["img_upload"]["size"] > 500000) {
        echo "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    // Allow only certain formats (optional but recommended)
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
    }

    // Try to upload file
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["img_upload"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File was not uploaded due to an error.";
    }
} else {
    echo "No file uploaded.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>

    <form action="17_File_Upload1.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="img_upload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

</body>

</html>