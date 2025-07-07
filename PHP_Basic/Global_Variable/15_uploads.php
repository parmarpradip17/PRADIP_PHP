
<?php
if (isset($_FILES['profilePic'])) {
    $filename = $_FILES['profilePic']['name'];
    $tmpname = $_FILES['profilePic']['tmp_name'];

    // Check if 'uploads' directory exists, if not, create it
    if (!is_dir('uploads')) {
        mkdir('uploads', 0755, true);
    }

    // Move the uploaded file
    if (move_uploaded_file($tmpname, 'uploads/' . $filename)) {
        echo "Uploaded: " . $filename;
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "No file uploaded.";
}
?>
