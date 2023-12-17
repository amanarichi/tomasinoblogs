<?php
require 'BlogsConnection.php';

if (isset($_POST['submit'])) {
    $fileName = $_FILES['image']['name'];
    $caption = $_POST['caption'];
    $targetDir = "img/"; // Directory where images will be stored
    $targetFile = $targetDir . basename($fileName);
    
    // Upload file to the server
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        // Insert image details into the database
        $stmt = $connection->prepare("INSERT INTO tb_upload (name, image, approval_status) VALUES (?, ?, 0)");
        $stmt->bind_param("ss", $caption, $fileName);
        
        if ($stmt->execute()) {
            echo "Image uploaded and details saved to the database.";
        } else {
            echo "Error: " . $connection->error;
        }
    } else {
        echo "Error uploading the image.";
    }
}
?>
