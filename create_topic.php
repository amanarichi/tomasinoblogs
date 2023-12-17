<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomasino Forums</title>
    <link rel="icon" href="Images/tb_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style_create_topic.css">
</head>
<body>
    <?php
    include 'LoginPageConnection.php';
    include 'header.php';

    echo '<h2><center>Create a topic</center></h2>';

    if (@$_SESSION['signed_in'] == false) {
        echo 'Sorry, you have to be <a href="LoginPage.php">signed in</a> to create a topic.';
    } else {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            $sql = "SELECT cat_id, cat_name, cat_description FROM categories";
            $result = mysqli_query($connection, $sql);

            if (!$result) {
                echo 'Error while selecting from the database. Please try again later.';
            } else {
                if (mysqli_num_rows($result) == 0) {
                    if ($_SESSION['user_level'] == 1) {
                        echo 'You have not created categories yet.';
                    } else {
                        echo 'Before you can post a topic, you must wait for an admin to create some categories.';
                    }
                } else {
                    echo '<table>';
                    echo '<tr><th>Subject</th><th>Category</th><th>Content</th><th></th></tr>';
                    echo '<form method="post" action="">';
                    echo '<tr>';
                    echo '<td><input type="text" name="topic_subject" /></td>';
                    echo '<td><select name="topic_cat" />';
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
                    }

                    echo '</select></td>';
                    echo '<td><input type="text" name="post_content" /></td>';
                    echo '<td><input type="submit" value="Create topic" /></td>';
                    echo '</tr>';
                    echo '</form>';
                    echo '</table>';
                }
            }
        } else {
        mysqli_begin_transaction($connection);

        $topic_subject = mysqli_real_escape_string($connection, $_POST['topic_subject']);
        $topic_cat = mysqli_real_escape_string($connection, $_POST['topic_cat']);
        $topic_by = $_SESSION['user_id'];

        $check_user_query = "SELECT id FROM tomasinoblogsdb WHERE id = '$topic_by'";
        $check_user_result = mysqli_query($connection, $check_user_query);

        if (mysqli_num_rows($check_user_result) == 0) {
            echo 'Invalid user_id.';
        } else {
            $sql = "INSERT INTO topics(topic_subject, topic_date, topic_cat, topic_by) VALUES('$topic_subject', NOW(), '$topic_cat', '$topic_by')";
            $result = mysqli_query($connection, $sql);

            if (!$result) {
                echo 'An error occurred while inserting your data. Please try again later.' . mysqli_error($connection);

                $sql = "ROLLBACK;";
                mysqli_query($connection, $sql);
            } else {
                $topic_id = mysqli_insert_id($connection);
                $post_content = mysqli_real_escape_string($connection, $_POST['post_content']);
                $post_by = $_SESSION['user_id'];

                $sql = "INSERT INTO posts(post_content, post_date, post_topic, post_by) 
                        VALUES ('$post_content', NOW(), '$topic_id', '$post_by')";
                $result = mysqli_query($connection, $sql);

                if (!$result) {
                    echo 'An error occurred while inserting your post. Please try again later.' . mysqli_error($connection);

                    $sql = "ROLLBACK;";
                    mysqli_query($connection, $sql);
                } else {
                    $sql = "COMMIT;";
                    mysqli_query($connection, $sql);

                    echo '<center>You have successfully created your new topic. Please wait for your topic to be approved. Go back to the <a href=Forums.php>Forums Page</a></center>';
                }
            }
        }
    }
}
?>

<footer>
        @ All Rights Reserved TomasinoBlogs 2023
    </footer>
</body>
</html>
