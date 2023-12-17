<?php
include("LoginPageConnection.php");
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_Forum.css">
    <link rel="icon" type="image/x-icon" href="Images/tb_icon.png">
    <title>Forums</title>
</head>
<body>
<?php

$user_level = "NULL";

$sql = "SELECT cat_id, cat_name, cat_description FROM categories";
$result = mysqli_query($connection, $sql);

if (!$result) {
    echo 'The categories could not be displayed, please try again later.';
} else {
    if (mysqli_num_rows($result) == 0) {
        echo 'No categories defined yet.';
    } else {
        echo '<div class="table-container">';
        echo '<table border="1">
                <tr> 
                    <th>Category</th> 
                    <th>Last topic</th> 
                </tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td class="leftpart">';
            echo '<h3><a href="category.php?cat_id=' . $row['cat_id'] . '">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
            echo '</td>';
            echo '<td class="rightpart">';
            $topicsql = "SELECT
                            topic_id,
                            topic_subject,
                            topic_date,
                            topic_cat
                        FROM
                            topics
                        WHERE
                            topic_cat = " . $row['cat_id'] . "
                        AND
                            approved = '1'
                        ORDER BY
                            topic_date
                        DESC
                        LIMIT 1";

            $topicsresult = mysqli_query($connection, $topicsql);

            if (!$topicsresult) {
                echo 'Last topic could not be displayed.';
            } else {
                if (mysqli_num_rows($topicsresult) == 0) {
                    echo 'No Topics';
                } else {
                    while ($topicrow = mysqli_fetch_assoc($topicsresult)) {
                        echo '<a href="topic.php?id=' . $topicrow['topic_id'] . '">' . $topicrow['topic_subject'] . '</a> at ' . date('m-d-Y H:i:s', strtotime($topicrow['topic_date']));
                    }
                }
            }
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    }
}
?>

<div class="button-container">
    <?php
    if (@$_SESSION['user_level'] == 1) {
        echo '<button><a class="item" href="create_category.php"><center> Create a Category </center></a></button><br/>';
        echo '<button><a class="item" href="forum_admin.php"><center> Admin Panel </center></a></button><br/>';
    }
    ?>
    <button><a class="item" href="create_topic.php">Create a Topic </a></button>
</div>

<div class="footer-container">
    <footer>
        <p>@ All Rights Reserved TomasinoBlogs 2023</p>
    </footer>
</div>

</body>
</html>
