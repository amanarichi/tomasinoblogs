<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomasino Forums</title>
    <link rel="icon" href="Images/tb_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="ForumsTwo.css">
</head>

<body>
    <header>
        <ul class="menu">
            <li><a href='#'>Home</a></li>
            <li><a href='Forums.html'>Forums</a></li>
            <li>
                <a href="#">Blogs</a>
                <div class="dropdown">
                    <a href="#">UST Spot</a>
                    <a href="#">Famous Food</a>
                </div>
            </li>

            <li><a href="#">About us</a></li>
        </ul>
    </header>

    <div class = "MessageContainer">
        <h1 class = "forum-title"> Forums </h1>

        <div class = "messageList">
            <?php
            $messages = file_exists('messages.txt') ? file('messages.txt', FILE_IGNORE_NEW_LINES) : [];

            foreach ($messages as $message) {
                echo '<div class="message">' . htmlspecialchars($message) . '</div>';
            }
            ?>
        </div>

        <form id="messageForm" method="post" action="ForumsPost.php">
        <label for="message">Post Here!</label>
        <textarea id="message" name="message" placeholder="Write your post" rows="4" cols="50"></textarea>
        <br>
        <a href="ForumsTwo.php" onclick="document.getElementById('messageForm').submit()" class="post-link"><button>Post Message</button></a>
</form>
    </div>
</body>
</html>