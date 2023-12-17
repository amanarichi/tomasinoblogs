<?php

include("LoginPageConnection.php");

if (isset($_GET['post_id'])) {
    $id = $_GET['post_id'];

    $query = "DELETE FROM posts
            WHERE post_id = $id";
    mysqli_query($connection, $query);
}

echo $id;


header("Location: forum_admin.php");
exit;
?>