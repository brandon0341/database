<?php
include("dbconnect.php");

if(isset($_POST['submit'])){
    $Username = $_POST['user'];
    $Password = $_POST['pass'];

    $sql = "SELECT * FROM sign where username = '$Username' and password = '$Password'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1)
    {
        session_start();
        $_SESSION['username'] = $Username;
        header("Location:welcome.php");
    }
    else{
        echo '<script>
        window.location.href = "index.php";
        alert("Login Failed. Invalid username or password!!!");
        </script>';
    }

}
?>