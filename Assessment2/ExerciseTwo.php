<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IWP - Assessment Part 2 - Exercise Two</title>
    </head>

    <body>
        <form action="ExerciseTwo.php" method="post">
            <label for="grade">Grade: </label><input id="name" name="grade" type="number" required>
            <label for="level">Level: </label>
            <select name="level" id="level">
                <option value="undergraduate">Undergraduate Modular Framework Awards</option>
                <option value="hnd">HND - Current Scheme</option>
                <option value="masters">Masters</option>
            </select>
            <input type="submit" value="submit">
        </form>
        <p>
            <?php
if(isset($_POST['grade'])){
    switch(htmlspecialchars($_POST['level'])){
        case 'undergraduate':
            $gradePoints = htmlspecialchars($_POST['grade']);
            if(htmlspecialchars($_POST['grade']) >= 70){
                echo 'Grade Points 13 - 15 First Class Honours';
            }
            else if((htmlspecialchars($_POST['grade']) >= 60) && (htmlspecialchars($_POST['grade']) <= 69)){
                echo 'Grade Points 10 - 12 Upper Second Class Honours';
            }
            else if((htmlspecialchars($_POST['grade']) >= 50) && (htmlspecialchars($_POST['grade']) <= 59)){
                echo 'Grade Points 7 - 9 Lower Second Class Honours';
            }
            else if((htmlspecialchars($_POST['grade']) >= 50) && (htmlspecialchars($_POST['grade']) <= 59)){
                echo 'Grade Points 4 - 6 Third Class Honours';
            }
            else {
                echo 'Grade Points 0 - 3 Fail';
            }
            break;

        case 'hnd':
            $gradePoints = htmlspecialchars($_POST['grade']);
            if(htmlspecialchars($_POST['grade']) >= 70){
                echo 'Distinction - grade points 13 - 15';
            }
            else if((htmlspecialchars($_POST['grade']) >= 53) && (htmlspecialchars($_POST['grade']) <= 69)){
                echo 'Merit - grade points 8 - 12';
            }
            else if((htmlspecialchars($_POST['grade']) >= 40) && (htmlspecialchars($_POST['grade']) <= 52)){
                echo 'Pass - grade points 4 - 7';
            }
            else {
                echo 'Fail - grade points 1 - 3';
            }
            break;

        case 'masters':
            $gradePoints = htmlspecialchars($_POST['grade']);
            if(htmlspecialchars($_POST['grade']) >= 70){
                echo 'Distinction - grade points 13 - 15';
            }
            else if((htmlspecialchars($_POST['grade']) >= 60) && (htmlspecialchars($_POST['grade']) <= 69)){
                echo 'Pass with Merit - grade points 10 - 12';
            }
            else if((htmlspecialchars($_POST['grade']) >= 50) && (htmlspecialchars($_POST['grade']) <= 59)){
                echo 'ass - grade points 7 -';
            }
            else {
                echo 'Failure - grade points 1 – 6';
            }
            break;
    }
}
            ?>
        </p>
    </body>
</html>
