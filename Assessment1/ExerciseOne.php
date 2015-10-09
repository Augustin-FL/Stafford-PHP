<?php
/* PHP BEGIN HERE */

$title = "Mr";
$name = "Philip Windridge";
$email = "p.c.windridge@staffs.ac.uk";
$address[0] = "The Ocatagon";
$address[1] = "Beaconside";
$address[2] = "Stafford";
$postcode = "ST18 0DG";
$telephone = "01785 353419";

/* HTML BEGIN HERE */
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IWP - Assessment Part 1 - Exercise One</title>
    </head>
    
    <body>
        
        <h1>PHP Assessment Exercises: Set 1</h1>
        <h2>Contact Details</h2>

        <p style="font-style:italic;">
            <?php
echo $title.' '.$name.' '.$email.' '.$address[0].' '.$address[1].' '.$address[2].' '.$postcode.' '.$telephone;
            ?>
        </p>

    </body>
</html>
