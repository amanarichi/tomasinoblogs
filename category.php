<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>TomasinoBlogs</title>
    <link rel="stylesheet" href="style_Categories.css">
    <link rel="icon" href="Images/tb_icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php
// create_cat.php 
include 'LoginPageConnection.php';
include 'header.php';

// first select the category based on $_GET['cat_id'] 
$catId = mysqli_real_escape_string($connection, $_GET['cat_id']);

$sql = "SELECT 
            cat_id, 
            cat_name
        FROM 
            categories 
        WHERE 
            cat_id = '$catId'";

$result = mysqli_query($connection, $sql);

if (!$result) {
    echo 'The category could not be displayed, please try again later.' . mysqli_error($connection);
} else {
    if (mysqli_num_rows($result) == 0) {
        echo 'This category does not exist.';
    } else {
        // display category data 
        $category = mysqli_fetch_assoc($result);
        echo '<h2><center>Topics in ' . $category['cat_name'] . ' Category</center></h2><br />';

        // do a query for the topics 
        $sql = "SELECT 
                    topic_id, 
                    topic_subject, 
                    topic_date, 
                    topic_cat 
                FROM 
                    topics 
                WHERE 
                    topic_cat = '$catId'
                AND
                    approved = '1'";
        
        $result = mysqli_query($connection, $sql);

        if (!$result) {
            echo 'The topics could not be displayed, please try again later.';
        } else {
            if (mysqli_num_rows($result) == 0) {
                echo '<center>There are no topics in this category yet.</center>';
            } else {
                // prepare the table 
                echo '<table border="1" class = "table_category"> 
                        <tr> 
                            <th>Topic</th> 
                            <th>Created at</th> 
                        </tr>';

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td class="leftpart">';
                    echo '<h3><a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><h3>';
                    echo '</td>';
                    echo '<td class="rightpart">';
                    echo date('d/m/Y H:i:s', strtotime($row['topic_date']));
                    echo '</td>';
                    echo '</tr>';
                }       
                echo '</table>';
            }
        }
    }
}

// Close the database connection
mysqli_close($connection);
?>

</body>
</html>