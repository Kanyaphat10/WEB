<?php
session_start();

@include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin page</title>

        <!-- custom css file link -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body class="admin-page">
        <div class="container">
            <div class="content">
                <h1>WELCOME</h1>
                <p class="des">Greetings Lady and Gentleman to World of Movie</p>
                <a href="sign_in.php" class="btn">Sign In</a>
                <p class="don">Don’t have an account? <a href="sign_up.php" class="btn-bold">Sign Up</a></p>
            </div>
        </div>
    </body>
</html>