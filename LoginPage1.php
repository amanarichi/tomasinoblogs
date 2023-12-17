<?php
include("LoginPageConnection.php");

if (isset($_POST['submit'])) {
    $Username = $_POST['username'];
    $Pass = $_POST['password'];

    $sql = "SELECT * FROM tomasinoblogsdb WHERE Username = '$Username' AND Pass = '$Pass'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    session_start();
    if ($count == 1) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_level'] = $row['user_level'];
        $_SESSION['signed_in'] = true;
        $_SESSION['username'] = $Username;
        header("Location: Home.php");
    } else {
        echo '<script>
            window.location.href = "LoginPage.php";
            alert("Login Failed. Invalid Username or Password")
            </script>';
    }
}
?>
