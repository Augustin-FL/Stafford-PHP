<?php
/* PHP BEGIN HERE */

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
    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address[0] = $_POST['address0'];
    $address[1] = $_POST['address1'];
    $address[2] = $_POST['address2'];
    $postcode = $_POST['postcode'];
    $telephone = $_POST['telephone'];
}
/* HTML BEGIN HERE */
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IWP - Assessment Part 1 - Exercise Two</title>
    </head>

    <body>

        <h1>PHP Assessment Exercises: Set 1</h1>
        <h2>Contact Details</h2>

        <p style="font-style:italic;">
            <?php
echo $title.' '.$name.' '.$email.' '.$address[0].' '.$address[1].' '.$address[2].' '.$postcode.' '.$telephone;
            ?>
        </p>

        <h2>Details Amendment</h2>

        <fieldset>
            <legend>Update Details</legend>
            <form action="ExerciseTwo.php" method="post">
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

    </body>
</html>
