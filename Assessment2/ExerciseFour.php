<?php
session_start();
$nameNumber = (isset($_POST['names'])) ? htmlspecialchars($_POST['number']) : 3 ;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IWP - Assessment Part 2 - Exercise Four</title>
    </head>

    <body>
        <form method="post" action="ExerciseFour.php">

            <?php
echo '<label for="number">Number of String: </label> <input type="number" name="number" min="1" value="'.$nameNumber.'" required> <br/>';


for($i=1;$i<=$nameNumber;$i++){
    echo '<label for="txt'.$i.'">String n°'.$i.': </label> <input type="text" name="names[]" id="txt'.$i.'"/> <br/>';
}
            ?>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>

        <?php
if(isset($_POST['names'])){
    $names = $_POST['names'];
    
    echo '<h2>Original :</h2>';
    foreach ($names as $key => $val) {
        echo '<li>' .$val. '</li>';
    }

    echo '<h2>Ascending :</h2>';
    sort($names);
    foreach ($names as $key => $val) {
        echo '<li>' .$val. '</li>';
    }

    echo '<h2>Descending :</h2>';
    krsort($names);
    foreach ($names as $key => $val) {
        echo '<li>' .$val. '</li>';
    }
}
        ?>

    </body>
</html>
