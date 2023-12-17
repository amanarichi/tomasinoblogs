<?php
include("LoginPageConnection.php");
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_Forum_Admin.css">
    <link rel="icon" type="image/x-icon" href="Images/tb_icon.png">
    <title>Forums</title>
</head>
<body>
    <br><br><br><br>
    <?php
    // Display Topics
    $sql_topics = "SELECT 
                    topics.topic_id, 
                    topics.topic_subject, 
                    topics.topic_date, 
                    topics.topic_cat,
                    topics.topic_by,
                    tomasinoblogsdb.id,
                    tomasinoblogsdb.Username,
                    categories.cat_name AS category_name
                FROM
                    topics
                LEFT JOIN
                    tomasinoblogsdb
                ON
                    topics.topic_by = tomasinoblogsdb.id
                LEFT JOIN
                    categories
                ON
                    topics.topic_cat = categories.cat_id
                WHERE 
                    approved = '0'";
    $result_topics = mysqli_query($connection, $sql_topics);

    if (!$result_topics) {
        echo 'The topics could not be displayed, please try again later.';
    } else {
        if (mysqli_num_rows($result_topics) == 0) {
            echo '<center>There are no topics to be approved yet.</center><br/>';
        } else {
            // Display Topics Table
            echo '<h2>Topics to be approved</h2>';
            echo '<table border="1"> 
                    <tr> 
                        <th>Topic</th> 
                        <th>Category</th>
                        <th>Created by</th>
                        <th>Created on</th>
                        <th>Action</th>
                    </tr>';

            while ($row = mysqli_fetch_assoc($result_topics)) {
                echo '<tr>';
                echo '<td>';
                echo '<p>' . $row['topic_subject'] . '</p>';
                echo '</td>';
                echo '<td>';
                echo '<p>' . $row['category_name'] . '</p>'; 
                echo '</td>';
                echo '<td>';
                echo '<p>' . ($row['Username']) . '</p>';
                echo '</td>';
                echo '<td>';
                echo date('d-m-Y H:i:s', strtotime($row['topic_date']));
                echo '</td>';
                echo '<td>';
                echo '<a href="topic_approve.php?topic_id=' . $row['topic_id'] . '">Approve</a>';                   
                echo '<a href="topic_deny.php?topic_id=' . $row['topic_id'] . '">Deny</a>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
    }

    $sql_posts = "SELECT 
    posts.post_id, 
    posts.post_content, 
    posts.post_date, 
    posts.post_topic,
    posts.post_by,
    tomasinoblogsdb.id,
    tomasinoblogsdb.Username,
    categories.cat_name
FROM
    posts
LEFT JOIN
    tomasinoblogsdb
ON
    posts.post_by = tomasinoblogsdb.id
LEFT JOIN
    topics
ON
    posts.post_topic = topics.topic_id
LEFT JOIN
    categories
ON
    topics.topic_cat = categories.cat_id
WHERE 
    posts.approved = '0'";

$result_posts = mysqli_query($connection, $sql_posts);

if (!$result_posts) {
echo 'The posts could not be displayed, please try again later.';
} else {
if (mysqli_num_rows($result_posts) == 0) {
echo '<center>There are no posts to be approved yet.</center>';
} else {
// Display Posts Table
echo '<h2>Posts to be approved</h2>';
echo '<table border="1"> 
    <tr> 
        <th>Post</th>
        <th>Category</th>
        <th>Created by</th>
        <th>Created on</th>
        <th>Action</th>
    </tr>';

while ($row = mysqli_fetch_assoc($result_posts)) {
echo '<tr>';
echo '<td>';
echo '<p>' . $row['post_content'] . '</p>';
echo '</td>';
echo '<td>';
echo '<p>' . $row['cat_name'] . '</p>';
echo '</td>';
echo '<td>';
echo '<p>' . ($row['Username']) . '</p>';
echo '</td>';
echo '<td>';
echo date('d-m-Y H:i:s', strtotime($row['post_date']));
echo '</td>';
echo '<td>';
echo '<a href="post_approve.php?post_id=' . $row['post_id'] . '">Approve</a>';
echo '<a href="post_deny.php?post_id=' . $row['post_id'] . '">Deny</a>';                   
echo '</td>';
echo '</tr>';
}
echo '</table>';
}
}
?>

</body>
</html>