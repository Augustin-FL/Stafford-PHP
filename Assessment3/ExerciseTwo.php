<?php
if(isset($_COOKIE["previousNumber"])){
    if(!empty($_POST['number'])){
        switch($_POST['operation']){
            case '+': $_COOKIE['previousNumber'] += $_POST['number']; break;
            case '-': $_COOKIE['previousNumber'] -= $_POST['number'];break;
            case '*': $_COOKIE['previousNumber'] *= $_POST['number'];break;
            case '/': $_COOKIE['previousNumber'] /= $_POST['number'];break;
        }
    }
}
else{
    setcookie("previousNumber", 0, time()+3600);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IWP - Assessment Part 3 - Exercise Two</title>
    </head>

    <body>
        <form method="post" action="ExerciseTwo.php" id="calculator">
            <label for="number">Number: </label><input type="text" id="number" name="number"/>
        </form>
        <button type="submit" form="calculator" name="operation" value="+">+</button>
        <button type="submit" form="calculator" name="operation" value="-">-</button>
        <button type="submit" form="calculator" name="operation" value="*">*</button>
        <button type="submit" form="calculator" name="operation" value="/">/</button>
        <button type="submit" form="calculator" name="operation" value="=">=</button>
    </body>
    <p>
        <?php
echo 'Number: '.$_POST['number'].'<br/>';
echo 'Operation: '.$_POST['operation'].'<br/>';
echo 'Previous: '.$_COOKIE['previousNumber'].'<br/>';
        ?>    
    </p>
</html>
