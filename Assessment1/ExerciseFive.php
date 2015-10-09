<?php
/* PHP BEGIN HERE */

// FORM UPDATER
if(empty($_POST['title'])){
    $title = "Mr";
    $name = "Philip Windridge";
    $email = "p.c.windridge@staffs.ac.uk";
    $address[0] = "The Ocatagon";
    $address[1] = "Beaconside";
    $address[2] = "Stafford";
    $postcode = "ST18 0DG";
    $telephone = "01785 353419";
}
else{
    $title = htmlspecialchars($_POST['title']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address[0] = htmlspecialchars($_POST['address0']);
    $address[1] = htmlspecialchars($_POST['address1']);
    $address[2] = htmlspecialchars($_POST['address2']);
    $postcode = htmlspecialchars($_POST['postcode']);
    $telephone = htmlspecialchars($_POST['telephone']);
}

// PERSON IN CHARGE
date_default_timezone_set('UTC');
$personInCharge = array('Nobody', 'Russell Campion', 'Fiona Knight', 'Philip Windridge', 'Fiona Knight', 'Russell Campion', 'Nobody');

// AVAILABLE MODULES
$moduleNames = array('Web Design and Development', 'Introduction to Web Programming', 'Introduction to Web Development', 'Introduction to Software Development', 'Object Oriented and Event Driven Programming', 'Hardware, Networks and Servers', 'Maths For Interactive Computing', 'System Modelling', 'Introduction to Design Concepts for Computing', 'Introduction to Digital Media');

/* HTML BEGIN HERE */
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IWP - Assessment Part 1 - Exercise Five</title>
        <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <style>
            #contact{
                float : right;
                width : 40%;
            }
            #details{
                float : left;
                width : 40%;
            }
            #details li{
                margin-bottom : 200px;
            }
        </style>
    </head>

    <body>

        <h1>PHP Assessment Exercises: Set 1</h1>

        <!-- CONTACT DETAILS -->
        <div id="contact">
            <h2>Contact Details</h2>

            <p style="font-style:italic;">
                <?php
echo $title.' '.$name.' '.$email.' '.$address[0].' '.$address[1].' '.$address[2].' '.$postcode.' '.$telephone;
                ?>
            </p>
        </div>

        <!-- DETAILS AMENDMENT -->
        <div id="details">
            <h2>Details Amendment</h2>

            <fieldset>
                <legend>Update Details</legend>
                <form action="ExerciseFive.php" method="post">
                    <?php echo '
                    <input type="text" name="title" value="'.$title.'" >
                    <input type="text" name="name" value="'.$name.'" >
                    <input type="text" name="email" value="'.$email.'" >
                    <input type="text" name="address0" value="'.$address[0].'" ><br/>
                    <input type="text" name="address1" value="'.$address[1].'" >
                    <input type="text" name="address2" value="'.$address[2].'" >
                    <input type="text" name="postcode" value="'.$postcode.'" >
                    <input type="text" name="telephone" value="'.$telephone.'" ><br/>
                     ';   ?>
                    <input type="submit" value="Update">
                </form>
            </fieldset>
        </div>

        <div style="clear : both;"></div>

        <!-- MESSAGE OF THE DAY -->
        <h2>Message of the Day</h2>
        <p>
            <?php
echo 'Today is ' .date("l"). ' and the person in charge is ';
switch(date("l")){
    case 'Sunday' : echo $personInCharge[0]; break;
    case 'Monday' : echo $personInCharge[1]; break;
    case 'Tuesday' : echo $personInCharge[2]; break;
    case 'Wednesday' : echo $personInCharge[3]; break;
    case 'Thursday' : echo $personInCharge[4]; break;
    case 'Friday' : echo $personInCharge[5]; break;
    case 'Saturday' : echo $personInCharge[6]; break;
}
echo '!';
            ?>
        </p>

        <!-- AVAILABLE MODULES -->
        <h2>The following modules are available at Level 4</h2>
        <ul>
            <?php 
sort($moduleNames);
foreach ($moduleNames as $key => $val) {
    echo '<li>' .$val. '</li>';
}
            ?>
        </ul>

    </body>
</html>
