<?php
session_start();
include("dbconnect.php");
include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>
<div class="welcome">
    <div class="welcome-container">
        <?php
        if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];

           
            $sql = "SELECT Firstame, Lastname FROM sign WHERE username = '$username'";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $firstname = $row["Firstame"];
                $lastname = $row["Lastname"];
                echo "<h1><center>Welcome, $firstname $lastname!</center></h1>";
            } else {
                echo "<h1><center>Welcome!</center></h1>"; 
            }
        } else {
            header("Location: index.php");
            exit();
        }
        ?>
    </div>
</div>
</body>
</html>

<?php
$conn->close();
?>
