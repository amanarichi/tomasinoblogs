<?php
    include("LoginPageConnection.php");

    if(isset($_POST['submit'])){
        $Username = $_POST['emailuser'];
        $Pass = $_POST['password'];

        $sql = "SELECT * FROM TomasinoBlogsDB WHERE Username = '$Username' and Pass = '$Pass'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("Location: LoginPage2.php");
        }
        else{
            echo '<script>
                window.location.href = "LoginPage.php";
                alert("Login Failed. Invalid Username or Password")
                </script>';
        }
    }
?>
test123