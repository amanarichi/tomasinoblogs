<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <link rel="icon" href="Images/tb_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style_CreateCategory.css">
</head>
<body>
<?php
// create_cat.php 
include 'LoginPageConnection.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<h2><center> Create a Category </center></h2>";
    echo "<form method='post' action=''>"; // Add form element with action attribute
    echo "<table>
            <tr>
                <td>Category name:</td>
                <td><input type='text' name='cat_name' /></td>
            </tr>
            <tr>
                <td>Category description:</td>
                <td><textarea name='cat_description'></textarea></td>
            </tr>
            <tr>
                <td colspan='2'><input type='submit' value='Add category' /></td>
            </tr>
        </table>";
    echo "</form>"; // Close the form element
} else {
    $cat_name = $_POST['cat_name'];
    $cat_description = $_POST['cat_description'];
    $sql = "INSERT INTO categories (cat_name, cat_description) VALUES (?, ?)";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, 'ss', $cat_name, $cat_description);
    $result = mysqli_stmt_execute($stmt);
    if (!$result) {
        echo 'Error: ' . mysqli_error($connection);
    } else {
        echo 'New category successfully added.';
    } 
    mysqli_stmt_close($stmt);
}
?>
</body>
</html>
