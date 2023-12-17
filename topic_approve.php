<?php

include("LoginPageConnection.php");

if (isset($_GET['topic_id'])) {
    $id = $_GET['topic_id'];

    $query = "UPDATE topics
            SET approved = '1' 
            WHERE topic_id = $id";
    mysqli_query($connection, $query);
}

echo $id;


header("Location: forum_admin.php");
exit;
?>