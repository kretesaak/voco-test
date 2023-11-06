<?php
session_start();
 
// Check if the user is logged in, if not then redirect them to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: register.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/favicon.ico"/>
    <title>Tere tulemast!</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="wrapper">
        <h1 class="welcome-heading">Tere tulemast, <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b>!</h1>
        <a class="btn logout" href="logout.php">Logi välja</a>
    </div>
</body>
</html>