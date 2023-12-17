<?php
include("LoginPageConnection.php");
include("header.php");

if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];

    if ($action == 'approve') {
        $query = "UPDATE tb_upload SET approved = 1 WHERE id = ?";
    } elseif ($action == 'deny') {
        $query = "DELETE FROM tb_upload WHERE id = ?";
    }

    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

$result = mysqli_query($connection, "SELECT * FROM tb_upload WHERE approved = 0 ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Blogs Admin Panel</title>
    <link rel="stylesheet" href="style_Blogs_Admin.css">
    <link rel="icon" href="Images/tb_icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Caption</th>
            <th>Image</th>
            <th>Posted by</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) :
            $imageURL = 'Images/'. $row["image"];
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><img src="<?php echo $imageURL; ?>" alt="<?php echo $row['name']; ?>" title="<?php echo $row['name']; ?>"></td>
                <td><?php echo $row["blog_by"]; ?></td>
                <td>
                    <a href="blogs_admin.php?action=approve&id=<?php echo $row['id']; ?>">Approve</a>
                    <a href="blogs_admin.php?action=deny&id=<?php echo $row['id']; ?>">Deny</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>
