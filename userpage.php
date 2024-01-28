<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>

    <link rel="stylesheet" href="adminuser.css">
    
</head>
<body>
    <div class="container">
    <div class="content">
        <h1><div id="welcome">Welcome </div><span><?php echo $_SESSION['user_name'] ?></span></h1>
        <p>this is an user page</p>
        <a href="categories.php" class="btncolor1">Get's Started</a>
        <a href="logout.php" class="btn">logout</a>
    </div>
</div>
</body>
</html>