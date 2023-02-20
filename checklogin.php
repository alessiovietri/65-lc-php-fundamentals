<?php

    var_dump($_GET);
    var_dump($_POST);

    $loggedIn = false;

    if (
        isset($_POST['email'])
        &&
        isset($_POST['password'])
        &&
        $_POST['email'] == 'root'
        &&
        $_POST['password'] == 'root'
    ) {
        $loggedIn = true;
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Check login</title>
    </head>
    <body>
        
        <h1>
            Check login
        </h1>

        <?php
            if (!$loggedIn) {
        ?>
            <h2>
                NON SEI LOGGATO, BRUTTO ACHER!!1!
            </h2>
        <?php
            }
            else{
        ?>
                <h2>
                    Ciao root! Sei loggato
                </h2>
        <?php
            }
        ?>

    </body>
</html>