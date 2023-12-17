<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>TomasinoBlogs</title>
    <link rel="stylesheet" href="style_Reply.css">
    <link rel="icon" href="Images/tb_icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

 

<?php
//create_cat.php 
include 'LoginPageConnection.php';
include 'header.php';
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    //someone is calling the file directly, which we don't want 
    echo 'This file cannot be called directly.';
}
else
{
	//check for sign in status 
	if(!$_SESSION['signed_in'])
	{
		echo '<center>You must be signed in to post a reply.</center>';
	}
	else
	{
		//a real user posted a real reply 
		$sql = "INSERT INTO 
posts(post_content, 
post_date, 
post_topic, 
post_by) 
VALUES (?, NOW(), ?, ?)";
		$stmt = mysqli_prepare($connection, $sql);
		mysqli_stmt_bind_param($stmt, "sii", $_POST['reply-content'], $_GET['id'], $_SESSION['user_id']);
		mysqli_stmt_execute($stmt);
		if(mysqli_stmt_errno($stmt))
		{
			echo 'Your reply has not been saved, please try again later.';
		}
		else
		{
			echo '<center>Your reply has been saved and is up for approval, check out <a href="topic.php?id=' . htmlentities($_GET['id']) . '">the topic</a></center>.';
		}
	}
}
?>

    <footer>
        @ All Rights Reserved TomasinoBlogs 2023
    </footer>

</body>
</html>