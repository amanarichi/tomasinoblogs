<?php
include("header.php");
include("LoginPageConnection.php");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    
    if ($_FILES["image"]["error"] === 4) {
        echo "<script> alert('Image does not exist'); </script>";
    } else {
        $fileName = basename($_FILES["image"]["name"]);
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
        $blog_by = $_SESSION["username"];

        $validImageExtension = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'tiff' ];
        $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (!in_array($imageExtension, $validImageExtension)) {
            echo "<script> alert('Invalid Image Extension');</script>";
        } else {
            $newImageName = uniqid() . '.' . $imageExtension;
            $uploadPath = 'Images/' . $newImageName;
            
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadPath)) {
                echo "Image uploaded successfully";
                $image = $uploadPath;

                $query = "INSERT INTO tb_upload (name, image, blog_by, approved) VALUES (?, ?, ?, 0)";
                $stmt = mysqli_prepare($connection, $query);
                mysqli_stmt_bind_param($stmt, "sss", $name, $newImageName, $blog_by);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);

                echo "<script> 
                alert('Successfully Added'); 
                document.location.href = 'Blogs_Data.php';
                </script>";
            } else {
                echo "Failed to Upload Image";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_Blogs.css">
    <link rel="stylesheet" href="style_Footer.css">
    <link rel="icon" type="image/x-icon" href="Images/tb_icon.png">
    <title>Blogs</title>
</head>

<body>

<form action="" method="post" autocomplete="off" enctype="multipart/form-data" class="form-container">
    <fieldset>
        <legend>Blog Post Information</legend>
        
        <label for="name">Caption:</label>
        <input type="text" name="name" id="name" placeholder="Enter caption" required value=""><br>

        <label for="image">Upload Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required> <br> <br>
    </fieldset>

    <button type="submit" name="submit">Post</button>

    <button type="button" onclick="window.location.href='Blogs_Data.php';">Go to Data</button>
</form>
        </div>

        
    <footer>
        @ All Rights Reserved TomasinoBlogs 2023
    </footer>


    </body>
</html>