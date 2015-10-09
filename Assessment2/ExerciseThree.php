<?php
session_start();

if((!isset($_SESSION['RandNumber'])) || (isset($_GET['restart']))){
    $_SESSION['RandNumber'] = rand(1, 100);
    $_SESSION['try'] = 0;
}

if(isset($_POST['number'])){
    $previous = htmlspecialchars($_POST['number']);
    $_SESSION['try']++;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IWP - Assessment Part 2 - Exercise Three</title>
        <style>
            a {text-decoration : none; color : black;}
        </style>
    </head>

    <body>
        <div id="form">
            <form method="post" action="ExerciseThree.php">
                <label id="number" name="number">Guest the number: </label><input type="number" name="number" min="1" max="100" <?php if(isset($previous)){ echo 'placeholder="'.$previous.'"'; } ?> required autofocus>
                <input type="submit" value="Submit">
                <button><a href="ExerciseThree.php?restart">Restart</a></button>
            </form>
        </div>
        <p>

            <?php

if(isset($previous)){
    echo 'You have tried : '.$_SESSION['try'].' time(s) <br/>';

    if($previous != $_SESSION['RandNumber']){
        echo ($previous > $_SESSION['RandNumber']) ? 'less' : 'more';
    }
    else{
        echo 'You win ! It\'s was '.$previous.' !';

    }
}

            ?>
        </p>
    </body>
</html>
