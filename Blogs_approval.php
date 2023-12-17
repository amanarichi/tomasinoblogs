<?php
require 'Blogs_connection.php';

if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];

    if ($action == 'approve') {
        $updateQuery = "UPDATE tb_upload SET approved = 1 WHERE id = $id";
        mysqli_query($conn, $updateQuery);
    } elseif ($action == 'reject') {
        $deleteQuery = "DELETE FROM tb_upload WHERE id = $id";
        mysqli_query($conn, $deleteQuery);
    }
}

$unapprovedResult = mysqli_query($conn, "SELECT * FROM tb_upload WHERE approved = 0 ORDER BY id DESC");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Approval</title>
</head>

<body>
    <h2>Unapproved Entries</h2>
    <table border="1" cellspacing="0" cellpadding="10">
        
        <?php while ($row = mysqli_fetch_assoc($unapprovedResult)) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><img src="img/<?php echo $row['image']; ?>" width="200" title="<?php echo $row['image']; ?>"></td>
                <td><a href="Blogs_approval.php?action=approve&id=<?php echo $row['id']; ?>">Approve</a></td>
                <td><a href="Blogs_approval.php?action=reject&id=<?php echo $row['id']; ?>">Reject</a></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <?php
    mysqli_free_result($unapprovedResult);
    mysqli_close($conn);
    ?>
</body>
</html>