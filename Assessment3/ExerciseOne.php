<?php

for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++)    {
        if($j == 2 && $i == 2){
            $number = "free";
        } 
        else{
            do{
                switch($j){
                    case 0 : $number = rand (1, 15); break;
                    case 1 : $number = rand (16, 30); break;
                    case 2 : $number = rand (31, 45); break;
                    case 3 : $number = rand (46, 60); break;
                    case 4 : $number = rand (61, 75); break;
                }

                $cacheArray[$j] = $number;
                foreach($cacheArray as $v1){
                    $equal = ($cacheArray == $number) ? true : false;
                }

            }while($equal);
        }
        $bingo[$j][$i] = $number;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IWP - Assessment Part 3 - Exercise One</title>
    </head>

    <body>
        <table>
            <thead>
                <tr>
                    <th>B</th>
                    <th>I</th>
                    <th>N</th>
                    <th>G</th>
                    <th>O</th>
                </tr>
            </thead>
            <tbody align="center">
                <?php
for($i = 0; $i < 5; $i++){
    echo '<tr>';
    for($j = 0; $j < 5; $j++)    {
        echo '<td>'.$bingo[$j][$i].'</td>';
    }
    echo '</tr>';
}
                ?>
            </tbody>
        </table>
        <button><a href="?">Reset</a></button>
    </body>
</html>
