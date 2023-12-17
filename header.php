<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>TomasinoBlogs</title>
    <link rel="stylesheet" href="style_Headers.css">
    <link rel="icon" href="Images/tb_icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <ul class="menu">
            <?php 
            if (isset($_SESSION['username'])) {
            echo "<li><a> Hello ". $_SESSION['username'] . "!</a></li>";
            } else {
            echo "<li><a>You are not signed in!</li>";
            }
            ?>
            <li><a href='Home.php' class = "home"> Home </a></li>
            <li><a href='Forums.php' class = "forums"> Forums </a></li>
            <li><a href="Blogs_Data.php" class = "blogs"> Blogs </a></li>
            <li><a href="AboutUs.php" class = "aboutus"> About Us </a></li>
            <?php
            if (isset($_SESSION['username'])) {
            echo "<li class ='logout'><a href='logout.php'> Logout </a></li>";
            } else {
            echo "<li><a href='LoginPage.php' class ='login'> Login </a></li>";
            }
            ?>
        </ul>
    </header>
</body>
</html>
