<?php

session_start();
if (!isset($_SESSION['email']) )
 {
    header("Location: index.php");
    exit();
}
?>
<!  DOCTYPE  html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users Page</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body style="background: #fff;">
<div class="box"> 
    <h1>Welcome to the User Page<span><?= $_SESSION['name']; ?></span></h1>
    <p>This is a protected<span?> area for administrators</span> only.</p>
     <button onclick="window.location.href='logout.php'">Logout</button>
    </body>
    </html>
