<?php
include("header.php");
include("LoginPageConnection.php");

$result = mysqli_query($connection, "SELECT * FROM tb_upload WHERE approved = 1 ORDER BY id DESC");

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_BlogsData1.css">
    <link rel="icon" type="image/x-icon" href="Images/tb_icon.png">
    <title>Data</title>
</head>
<body>

    <div class="admin-upload-links">
        <div class="nav-link">
            <a href="Blogs.php"> Upload Image</a>

            <?php
            if (@$_SESSION['user_level'] == 1) {
                echo '<div class="admin-button">
                        <a class="item" href="blogs_admin.php">Admin Panel</a>
                      </div>';
            }
        ?>
        </div>
    </div>

    <div class="image-container">
        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) :
            $imageURL = 'Images/' . $row["image"];
        ?>
            <div class="image-box">
                <img src="<?php echo $imageURL; ?>" alt="<?php echo $row['name']; ?>" title="<?php echo $row['name']; ?>">
                <p><?php echo $row["name"]; ?></p>
                <p><b>Posted by:</b> <?php echo $row["blog_by"]; ?></p>
            </div>
        <?php endwhile; ?>
    </div>

    <footer>
        @ All Rights Reserved TomasinoBlogs 2023
    </footer>
</body>
</html>
