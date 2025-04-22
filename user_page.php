<?php

session_start();

@include 'config.php';

if(!isset($_SESSION['user_name'])){
   header('location:sign_in.php');
}

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
    <body>
        <div class="container">
            <h3>hi, <span>user</span></h3>
        </div>
    </body>
</html>

